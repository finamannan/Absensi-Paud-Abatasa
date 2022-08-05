<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login</title>


    <link href="./lib/bootstrap.min.css" rel="stylesheet">

    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <link href="./lib/signin.css" rel="stylesheet">


    <script src="./lib/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">
      <form class="form-signin" method="post" action="model/proses.php">
        <h2 class="form-signin-heading">Please sign in</h2>

        <?php 
            if (isset($_GET['log'])) {
                if ($_GET['log']==2) {
                    echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                }
            }
         ?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="">
    
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign-in">
      </form>

    </div>


  
    <script src="./lib/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
