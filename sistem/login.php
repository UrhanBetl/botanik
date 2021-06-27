<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Konak Botanik</title>

    <!-- Vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../css/slim.css">
	<style>
		body{
			 background: url(bg.jpg) no-repeat center center fixed; 
 			 -webkit-background-size: cover;
 			 -moz-background-size: cover;
 			 -o-background-size: cover;
  			background-size: cover;
		}
		.signin-box{
			background-color:#fffffff0!important;
		}
		input{
			background-color:#ffffff7a!important;
		}
	</style>
  </head>
  <body>
<div class="container">
	<?php 
      	if (isset($_GET['hata'])) {
      		echo '<div class="alert alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Hata!</strong> Hatalı kullanıcı adı ya da şifre.
          </div>';
      	}
      	if (isset($_GET['onay'])) {
      		echo '<div class="alert alert-success mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Giriş Başarılı!</strong> Lütfen bekleyin yönlendiriliyorsunuz.
          </div>';
           echo '   <script>
    setTimeout(function(){   
        window.location="index.php";
        //1 saniye sonra yönlenecek
        }, 1000);
  </script>';
      	}

      	 ?>
</div>
    <div class="signin-wrapper">

      <div class="signin-box">
      	
        <h2 class="slim-logo"><a href="login.php">Konak<span> Botanik</span></a></h2>
        <h2 class="signin-title-primary">Tekrar Hoşgeldin!</h2>
        <h3 class="signin-title-secondary">Devam etmek için giriş yap.</h3>

        <form action="func.php" method="POST">
     	<div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input type="password" class="form-control" name="password" placeholder="Şifre">
        </div><!-- form-group -->
        <input type="submit" name="giris" class="btn btn-primary btn-block btn-signin" value="Giriş Yap">
        </form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <script src="../js/slim.js"></script>

  </body>
</html>
