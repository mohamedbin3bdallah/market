$(document).ready(function(){
 $("#country").change(function(){
    var val = $(this).val();
  $.ajax({
    type:'POST',
    //data:dataString,
	data: {	
	'country': val,
	},
    url:'ajaxs/showtowns.php',
	success: function (response) { document.getElementById("town").innerHTML = response; }
  });
});
});

$(document).ready(function(){
 $("#country").change(function(){
    var val = $(this).val();
  $.ajax({
    type:'POST',
    //data:dataString,
	data: {	
	'country': val,
	},
    url:'ajaxs/showcities.php',
	success: function (response) { document.getElementById("city").innerHTML = response; }
  });
});
});

	$(document).ready(function(){
      $("#username").keyup(function(){
      var val = $(this).val();
	  $("#username-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/username-validation.php',
         data: {
            'username':val
         },
         success: function (response) {
            //document.getElementById("username-validation").innerHTML = response;
			if(response == '0')
			{
				$("#username").css("background-color", "#F5A9A9");
				$("#username-validation").css("color", "red");
				$("#username-validation").html('Enter Username');
				$("#username-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#username").css("background-color", "#F5A9A9");
				$("#username-validation").css("color", "red");
				$("#username-validation").html('Username must be characters');
				$("#username-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#username").css("background-color", "#F5A9A9");
				$("#username-validation").css("color", "red");
				$("#username-validation").html('Username must be 5 characters or more');
				$("#username-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#username").css("background-color", "#F5A9A9");
				$("#username-validation").css("color", "red");
				$("#username-validation").html('Username must be equal or less than 250 characters');
				$("#username-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '4')
			{
				$("#username").css("background-color", "#F5A9A9");
				$("#username-validation").css("color", "red");
				$("#username-validation").html('Username is not available');
				$("#username-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#username").css("background-color", "#81F781");
				$("#username-validation").css("color", "green");
				$("#username-validation").html('Username is available');
				$("#username-hidden").val('1');
				if($("#family-hidden").val() == '1' && $("#password-hidden").val() == '1' && $("#cmfpassword-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#family").keyup(function(){
      var val = $(this).val();
	  $("#family-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/family-validation.php',
         data: {
            'family':val
         },
         success: function (response) {
            //document.getElementById("family-validation").innerHTML = response;
			if(response == '0')
			{
				$("#family").css("background-color", "#F5A9A9");
				$("#family-validation").css("color", "red");
				$("#family-validation").html('Enter Family');
				$("#family-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#family").css("background-color", "#F5A9A9");
				$("#family-validation").css("color", "red");
				$("#family-validation").html('Family must be characters');
				$("#family-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#family").css("background-color", "#F5A9A9");
				$("#family-validation").css("color", "red");
				$("#family-validation").html('Family must be 5 characters or more');
				$("#family-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#family").css("background-color", "#F5A9A9");
				$("#family-validation").css("color", "red");
				$("#family-validation").html('Family must be 250 characters or less');
				$("#family-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '4')
			{
				$("#family").css("background-color", "#F5A9A9");
				$("#family-validation").css("color", "red");
				$("#family-validation").html('الاسم غير متاح');
				$("#family-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '5')
			{
				$("#family").css("background-color", "#81F781");
				$("#family-validation").css("color", "green");
				$("#family-validation").html('Family is available');
				$("#family-hidden").val('1');
				if($("#username-hidden").val() == '1' && $("#password-hidden").val() == '1' && $("#cmfpassword-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#password").keyup(function(){
      var val1 = $(this).val();
	  var val2 = $("#cmfpassword").val();
	  $("#password-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/password-validation.php',
         data: {
            'password':val1,
			'cmfpassword':val2,
         },
         success: function (response) {
            //document.getElementById("password-validation").innerHTML = response;
			if(response == '0')
			{
				$("#password").css("background-color", "#F5A9A9");
				$("#password-validation").css("color", "red");
				$("#password-validation").html('Enter Password');
				$("#password-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '1')
			{
				$("#password").css("background-color", "#F5A9A9");
				$("#password-validation").css("color", "red");
				$("#password-validation").html('اسم الموقع يجب ان يكون بالحروف الصغيرة باللغة الانجليزية وبدون مسافات');
				$("#password-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '2')
			{
				$("#password").css("background-color", "#F5A9A9");
				$("#password-validation").css("color", "red");
				$("#password-validation").html('Family must be 8 characters or more');
				$("#password-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#password").css("background-color", "#F5A9A9");
				$("#password-validation").css("color", "red");
				$("#password-validation").html('Family must be 250 characters or less');
				$("#password-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '4')
			{
				$("#password").css("background-color", "#F5A9A9");
				$("#password-validation").css("color", "red");
				$("#password-validation").html('The 2 password are not equals');
				$("#password-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#password").css("background-color", "#81F781");
				$("#password-validation").css("color", "green");
				$("#password-validation").html('Password is available');
				$("#password-hidden").val('1');
				if($("#username-hidden").val() == '1' && $("#family-hidden").val() == '1' && $("#cmfpassword-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#cmfpassword").keyup(function(){
      var val1 = $(this).val();
	  var val2 = $("#password").val();
	  $("#cmfpassword-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/cmfpassword-validation.php',
         data: {
            'cmfpassword':val1,
			'password':val2,
         },
         success: function (response) {
            //document.getElementById("cmfpassword-validation").innerHTML = response;
			if(response == '0')
			{
				$("#cmfpassword").css("background-color", "#F5A9A9");
				$("#cmfpassword-validation").css("color", "red");
				$("#cmfpassword-validation").html('Enter Password comfirmation');
				$("#cmfpassword-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '1')
			{
				$("#cmfpassword").css("background-color", "#F5A9A9");
				$("#cmfpassword-validation").css("color", "red");
				$("#cmfpassword-validation").html('اسم الموقع يجب ان يكون بالحروف الصغيرة باللغة الانجليزية وبدون مسافات');
				$("#cmfpassword-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#cmfpassword").css("background-color", "#F5A9A9");
				$("#cmfpassword-validation").css("color", "red");
				$("#cmfpassword-validation").html('عدد حروف كلمة المرور يجب ان تكون 8 احرف فما فوق');
				$("#cmfpassword-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#cmfpassword").css("background-color", "#F5A9A9");
				$("#cmfpassword-validation").css("color", "red");
				$("#cmfpassword-validation").html('يجب ان يكون عدد الحروف اقل من 250');
				$("#cmfpassword-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '4')
			{
				$("#cmfpassword").css("background-color", "#F5A9A9");
				$("#cmfpassword-validation").css("color", "red");
				$("#cmfpassword-validation").html('The 2 password are not equals');
				$("#cmfpassword-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#cmfpassword").css("background-color", "#81F781");
				$("#cmfpassword-validation").css("color", "green");
				$("#cmfpassword-validation").html('Password comfirmation is available');
				$("#cmfpassword-hidden").val('1');
				if($("#username-hidden").val() == '1' && $("#family-hidden").val() == '1' && $("#password-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#myusername").keyup(function(){
      var val = $(this).val();
	  $("#myusername-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/myusername-validation.php',
         data: {
            'myusername':val
         },
         success: function (response) {
            //document.getElementById("myusername-validation").innerHTML = response;
			if(response == '0')
			{
				$("#myusername").css("background-color", "#F5A9A9");
				$("#myusername-validation").css("color", "red");
				$("#myusername-validation").html('Enter Username');
				$("#myusername-hidden").val('0');
				$("#loginsubmit").attr('disabled', 'true');
			}			
			else if(response == '5')
			{
				$("#myusername").css("background-color", "#81F781");
				$("#myusername-validation").css("color", "green");
				$("#myusername-validation").html('Username is available');
				$("#myusername-hidden").val('1');
				if($("#passw0rd-hidden").val() == '1') $("#loginsubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#passw0rd").keyup(function(){
      var val = $(this).val();
	  $("#passw0rd-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/passw0rd-validation.php',
         data: {
            'passw0rd':val,
         },
         success: function (response) {
            //document.getElementById("passw0rd-validation").innerHTML = response;
			if(response == '0')
			{
				$("#passw0rd").css("background-color", "#F5A9A9");
				$("#passw0rd-validation").css("color", "red");
				$("#passw0rd-validation").html('Enter Password');
				$("#passw0rd-hidden").val('0');
				$("#loginsubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#passw0rd").css("background-color", "#81F781");
				$("#passw0rd-validation").css("color", "green");
				$("#passw0rd-validation").html('Password is available');
				$("#passw0rd-hidden").val('1');
				if($("#myusername-hidden").val() == '1') $("#loginsubmit").removeAttr("disabled");
			}
         }
      });
      });
	});