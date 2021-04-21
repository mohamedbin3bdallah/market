<meta charset="utf-8"/>
<title>المدير</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link rel="icon" href="logo.png" type="image/png">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/background.css">

<?php if($lang_file == 'ar') { ?>
<style>
@import url("http://fonts.googleapis.com/earlyaccess/droidarabickufi.css");
body { font-family: 'Droid Arabic Kufi', sans-serif; }
</style>
<?php } else { ?>
<style>
body { font-family: 'Righteous', cursive; }
</style>
<?php } ?>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<?php if($lang_file == 'ar') { ?>
<script type="text/javascript" src="js/registerar.js"></script>
<?php } else { ?>
<script type="text/javascript" src="js/registeren.js"></script>
<?php } ?>

<script language="JavaScript">
$(document).ready(function(){
    $('#wrongaccount').show(function(){
        $('#wrongaccount').append('<br><h4 style="color:red;text-align:center;"><?php language('wronglogin');?></h4>');
	});
});
$(document).ready(function(){
    $('#notactive').show(function(){
        $('#notactive').append('<br><h2 style="color:red;text-align:center;">Please, Activate Your Account</h2>');
	});
});
$(document).ready(function(){
    $('#changeusername').show(function(){
        $('#changeusername').append('<br><h2 style="color:red;text-align:center;">اسم المستخدم غير متاح</h2>');
	});
});
$(document).ready(function(){
    $('#changeemail').show(function(){
        $('#changeemail').append('<br><h2 style="color:red;text-align:center;">Please, Change the Email</h2>');
	});
});
$(document).ready(function(){
    $('#wrongreg').show(function(){
        $('#wrongreg').append('<br><h2 style="color:red;text-align:center;">Invalid Email !!!</h2>');
	});
});
$(document).ready(function(){
    $('#succreg').show(function(){
        $('#succreg').append('<br><h4 style="color:green;text-align:center;"><?php language('succreg');?></h4>');
	});
});
</script>