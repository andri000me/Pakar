<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Regis Form</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Registrasi Sistem Pakar Preeklampsia</h1>
      <?php echo form_open('ctrRegis/register', array('enctype'=>'multipart/form-data', 'class'=>'login100-form validate-form p-l-55 p-r-55 p-t-178'));?>
      <form method="post" action="index.html">
        <p><input type="text" name="nama" value="" placeholder="Name"></p>
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <!-- <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p> -->
        <p class="submit"><input type="submit" name="submit" value="Sign Up"></p>
        <p>Already have an account? <a href="<?php echo site_url()?>/ctrLogin">Log in now</a></p>
        <!-- <p>Back to home? <a href="<?php echo site_url()?>/welcome">Home</a></p> -->
      </form>
    </div>
  </section>
</body>
</html>
