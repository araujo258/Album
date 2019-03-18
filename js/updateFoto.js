  $(document).ready(function(){
  $("#addImag").on('click', imagFunction);

  modelAddImag();
});

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
      location.refresh();
      },
      error:function(){
      }
      });
}

function modelAddImag(){

    $.ajax({
      url: './php/userFotos.php',
      dataType:'json',
      success:function(data){
        var html = " ";
        $.each(data, function(index, value){
            html += "<option value="+value.nomeAlbum+ ">  </option>";
        });
        $("#albuns").append(html);
        console.log(data);
      },
      error:function(){
        alert("erro");
      }

  });

}
