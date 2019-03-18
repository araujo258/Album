$(document).ready(function(){
	// Options for Message
	//----------------------------------------------
  var options = {
	  'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
	  'btn-success': '<i class="fa fa-check"></i>',
	  'btn-error': '<i class="fa fa-remove"></i>',
	  'msg-success': 'All Good! Redirecting...',
	  'msg-error': 'Wrong login credentials!',
	  'useAJAX': true,
  };

  $("#registo-form").validate({
  	rules: {
      name: "required",
      email: "required",
      username: "required",
      password: "required",
      confirm: "required",
    },
  	errorClass: "form-invalid"
  });

	// Form Submission
  $("#registo-button").on('click', function() {
      var name = $("#name").val();
      var email = $("#email").val();
      var username = $("#username").val();
      var password = $("#password").val();
      var confirm = $("#confirm").val();
      var telem = $("#telem").val();
      if (password!=confirm) {
        alert("PW diferentes!")
      } else {
          $.ajax({
            url: 'php/registo.php',
            method: "POST",
            data: {name: name, email: email, username: username, password: password, telem: telem},
            success: function(res){
                                console.log(res);

              if(res == "2") {
                alert("user ja existe");
              } else {
                if(res == "1"){
                    window.location.href = "index.html";
                }else{
                  alert("erro no login!!");
                }
              }
            }

          });
      }
  });
});
