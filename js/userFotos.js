$(document).ready(function(){

      $.ajax({
        url: 'php/userFotos.php',
        method: "POST",
        dataType: "json",
        success: function(res){

          if(res == "0"){
            alert("erro no login!!");
          }else{
              var i;
              if (res.length==2) {
                i=0;
              }else {
                i=1;
              }
//alert("id-> "+res[0].idAlbum +" <--> " +res[0].tamanho);

            $("#albunsFotosUser").append("<h3>"+res[0].Anome+"</h3><p>"+res[0].Adescricao+"<br><br></p><div id='myCarousel"+res[0].idAlbum+"' class='carousel slide' data-ride='carousel'>");
           
            $("#myCarousel"+res[0].idAlbum+"").append("<ol id='liFotos' class='carousel-indicators'></ol>");
                for(var i = 0; i < res[0].tamanho; i++)
                {
                  if(i==0){
                      $("#liFotos").append("<li data-target='#myCarousel"+res[0].idAlbum+"' data-slide-to='"+i+"' class='active'></li>");
                  }else {
                      $("#liFotos").append("<li data-target='#myCarousel"+res[0].idAlbum+"' data-slide-to='"+i+"'></li>");
                  }


                }

              $("#myCarousel"+res[0].idAlbum+"").append("<div class='carousel-inner' id='todasImage"+res[0].idAlbum+"' role='listbox'></div>");
              $("#myCarousel"+res[0].idAlbum+"").append("<a class='left carousel-control' href='#myCarousel"+res[0].idAlbum+"' role='button' data-slide='prev'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span><span class='sr-only'>Previous</span></a>");
              $("#myCarousel"+res[0].idAlbum+"").append("<a class='right carousel-control' href='#myCarousel"+res[0].idAlbum+"' role='button' data-slide='next'><span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span><span class='sr-only'>Next</span></a></div>");
              $("#addAlbuns").append("<option value='"+res[0].idAlbum+"'>"+res[0].Anome+"</option>");
            for (var i=1 ; i < res.length; i++) {

              if (res[i-1].idAlbum != res[i].idAlbum) {
                $("#albunsFotosUser").append("<h3>"+res[i].Anome+"</h3><p>"+res[i].Adescricao+"<br><br><div id='myCarousel"+res[i].idAlbum+"' class='carousel slide' data-ride='carousel'>");
                $("#myCarousel"+res[i].idAlbum+"").append("<ol id='liFotos"+res[i].idAlbum+"' class='carousel-indicators'></ol>");
                for(var j = 0; j < res[i].tamanho; j++)
                {
                  if(j==0){
                      $("#liFotos"+res[i].idAlbum+"").append("<li data-target='#myCarousel"+res[i].idAlbum+"' data-slide-to='"+i+"' class='active'></li>");
                  }else {
                      $("#liFotos"+res[i].idAlbum+"").append("<li data-target='#myCarousel"+res[i].idAlbum+"' data-slide-to='"+i+"'></li>");
                  }
                }
                $("#myCarousel"+res[i].idAlbum+"").append("<div class='carousel-inner' id='todasImage"+res[i].idAlbum+"' role='listbox'></div>");
                $("#myCarousel"+res[i].idAlbum+"").append("<a class='left carousel-control' href='#myCarousel"+res[i].idAlbum+"' role='button' data-slide='prev'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span><span class='sr-only'>Previous</span></a>");
                $("#myCarousel"+res[i].idAlbum+"").append("<a class='right carousel-control' href='#myCarousel"+res[i].idAlbum+"' role='button' data-slide='next'><span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span><span class='sr-only'>Next</span></a></div>");
                $("#addAlbuns").append("<option value='"+res[i].idAlbum+"'>"+res[i].Anome+"</option>");
              }
            }


            //- - - --  -
            var aux = 1;
            var aauuxx =0;
            for (var i = 0; i < res.length; i++) {
            //  console.log(res[i].foto);

              if (i==0 || aux==0 || aauuxx!=res[i].idAlbum) {
                aux=1;
                aauuxx = res[i].idAlbum;

                $("#todasImage"+res[i].idAlbum+"").append("<div class='item active'> <img class='imgAlbum' src='fotos/"+res[i].foto+"' alt='"+res[i].nome+"'><div class='carousel-caption'><h3>"+res[i].nome+"</h3><p>"+res[i].descricao+"</p></div></div>");
              } else {

                $("#todasImage"+res[i].idAlbum+"").append("<div class='item'> <img class='imgAlbum' src='fotos/"+res[i].foto+"' alt='"+res[i].nome+"'><div class='carousel-caption'><h3>"+res[i].nome+"</h3><p>"+res[i].descricao+"</p></div></div>");
                  if (i < res.length-1) {
                    if (res[i].idAlbum != res[i+1].idAlbum) {
                      aux=0;
                    }
                  }
              }
            }
        }
        }
      });

      $("#foto").on('change', function(e) {
        //***nao actualiza!****
        //e.preventDefault();

        var fich = this.files[0];
        var album = $("#addAlbuns").val();

        var formData = new FormData();

        formData.append("fileToUpload", fich);
        formData.append("Album",album);
        //newForm.append('idAlbum', album);

      //  var file_name=$("#fileToUpload").val();
        $.ajax({
            type:"POST",
            url: './php/uploadAlbum.php',
            datatype:'script',
            cache:false,
            contentType:false,
            processData:false,
            data:formData,
            success:function(){
            location.reload();
            alert("sucesso!!");
            },
            error:function(){
              alert("erro!!");
            }
            });

      });


      $('#btnAlbum').click(function(){
        var albumName = document.getElementById("nameAlbum").value;
        alert(albumName);
        $.ajax({
            type:"POST",
            url: './php/newAlbum.php',
            datatype:'script',
            data:{albumName: albumName},
            success:function(msm){
            location.reload();
            alert(msm);
            },
            error:function(){
              alert("erro!!");
            }
            });
      });
        
      

});
