$(document).ready(function(){
  var availableTags = [
     "Todos",
     "Ruby",
     "Scala",
     "Scheme"
   ];
   $( "#tags" ).autocomplete({source: availableTags, appendTo: '#menu-container'});
var resultadoPedido;
var idFotoPartilha;
  $.ajax({
    url: 'php/userFotos.php',
    method: "POST",
    dataType: "json",
    success: function(res){
      if(res == "0"){
        alert("erro no login!!");
      }else{

        resultadoPedido = res;

        $(res).each(function (i,el){

  $("#fotoslistadas").append("<a href='#' id='"+i+"' title='"+el.nome+"' data-content='Some content' class='abrirModal'><img src='fotos/"+el.foto+"' width='100%' height='100%'/></a>");

        });

        $("#divImg").append("<img src='fotos/"+res[0].foto+"' width='100%' height='100%' />");
      }
    }
  });
  $.ajax({
    url: 'php/users.php',
    method: "POST",
    dataType: "json",
    success: function(res){
      //alert(res[0].nome);

    }
  });

      $(document).on('click', '.abrirModal', function () {
        var id = $(this).attr('id');
        idFotoPartilha=resultadoPedido[id].idFoto;
        var url = $(this).find("img").attr("src");
        $("#myModal img").attr("src", url);
        $("#myModalLabel").html(resultadoPedido[id].nome);
        $("#desc").html(resultadoPedido[id].descricao);
        $("#myModal").modal("show");

      });
      $(document).on('click', '#btnPartilha', function () {


            $.ajax({
              url: 'php/partilhaFoto.php',
              method: "POST",
              dataType: "json",
              data: {idFoto: idFotoPartilha, tipo: "false"},
              success: function(res){
                if (res==1) {
                  $("#modSocJs").html("<div class='alert alert-success text-center'><h3>Success!</h3></div>");
                  $("#myModalSoc").modal("show");
                } else {
                  $("#modSocJs").html("<div class='alert alert-info text-center'><strong>Info:</strong> Foto ja partilhada!</div>");
                  $("#myModalSoc").modal("show");

                }

              }
            });

      });
      $(document).on('click', '#btnElimina', function () {
        $.ajax({
          url: 'php/partilhaFoto.php',
          method: "POST",
          dataType: "json",
          data: {idFoto: idFotoPartilha, tipo: "true"},
          success: function(res){
            if (res==1) {
              $("#modSocJs").html("<div class='alert alert-success text-center'><h3>Success!</h3></div>");
              $("#myModalSoc").modal("show");
                location.reload();
            } else {
              $("#modSocJs").html("<div class='alert alert-danger text-center'><strong>Erro!!</strong></div>");
              $("#myModalSoc").modal("show");
            }

          }
          });
      });
});
