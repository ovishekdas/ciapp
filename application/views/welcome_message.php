<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
		<div class="login-page">
		  <div class="form">
			
			<form class="login-form" method="post" action="<?php echo site_url(); ?>">
			  <input type="text" placeholder="username" name="username" required/>
			  <input type="password" placeholder="password" name="password" required/>
			  <button type="submit" value="submit" name="loginSubmit">login</button>
			  <p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
		  </div>
		</div>
    </div>
  </body>
</html>
