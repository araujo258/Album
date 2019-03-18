$(document).ready(function(){
  $("#imgChange").on('click', imagFunction);
});

function perfilFunction() {
 
    $.ajax({
      url: 'php/perfil.php',
      method: "POST",
      contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
      success: function(nome){
        console.log(nome);
        var array = nome.split(",");
        var nome = array[0].split(" ");
        $("#nomePerfil").text("Nome: "+array[0]);
        $("#nomeComp").text(array[0]);
        $("#user").text("Username: "+array[1]);
        $("#email").text("Email: "+array[2]);
        $("#e-mail").text(array[2]);
        $("#tele").text("Numero: "+array[3]);
        $("#imagemPerfil").attr("src","imagem/"+array[5]);
      }
    });

}

function imagFunction(){
  var newForm = new FormData($("#form")[0]);
  var file_name=$("#fileToUpload").val();
  $.ajax({
      type:"POST",
      url: './php/upload.php',
      datatype:'script',
      cache:false,
      contentType:false,
      processData:false,
      data:newForm,
      success:function(){
      //------------
      alert("foi um sucesso!");
     // location.refresh();
      },
      error:function(){
      //----------
      }
      });
}
