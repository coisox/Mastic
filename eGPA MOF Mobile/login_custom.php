<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="loginmobile_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="loginmobile_files/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="loginmobile_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">MOF eGPA</h2>
        <label for="inputEmail" class="sr-only">ID Pengguna</label>
        <input id="userID" name="userID" class="form-control" placeholder="ID Pengguna" required="" autofocus="" type="text">
        <label for="inputPassword" class="sr-only">Kata Laluan</label>
        <input id="userPassword" name="userPassword" class="form-control" placeholder="Kata Laluan" required="" type="password">
        
        <div class="checkbox">
          <label>
          	<input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        <!--<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log Masuk</button>-->
        <input class="btn btn-lg btn-primary btn-block login-bttn animated" name="login" type="submit" value="Log Masuk">
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="loginmobile_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>