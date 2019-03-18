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

	// Login Form
	//----------------------------------------------
	// Validation
  $("#login-form").validate({
  	rules: {
      lg_username: "required",
  	  lg_password: "required",
    },
  	errorClass: "form-invalid"
  });

	// Form Submission
  $("#login-form").on('submit', function(e) {
    e.preventDefault();
      var username = $("#lg_username").val();
      var password = $("#lg_password").val();
      var tipoLogin = 1;
      $.ajax({
        url: 'php/login.php',
        method: "POST",
        contentType: "application/x-www-form-urlencoded;charset=ISO-8859-15",
        data: {username: username, password: password, tipoLogin : tipoLogin},
        success: function(res){
          console.log(res);
          if(res == "0"){

            alert("erro no login!!");
          }

          if(res == "1"){
              window.location.href = "perfil.php";
            }
          }
      });
  });
  
});
