<?php
// Start the session
session_start();
if(isset($_POST['login'])) {

  $_SESSION["username"] = $_POST['username'];
  $_SESSION["password"] = $_POST['password'];

  $servername = getenv('IP');
  $username = $_SESSION["username"];
  $password = $_SESSION["password"];
  $database = "companyDB";
  $dbport = 3306;

  // Connecting, selecting database
  $link = @mysql_connect($servername, $username, $password);
  if (!$link) {
    echo "<h2 style='color: white;'>Incorrect Username or Password</h2>";
  } else {
    header("Location: list.php");
    die();
  }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/baseStyle.css">
        <link rel="stylesheet" href="/assets/css/normalize.css">
    </head>
    <body style="background-color: #1f8dd6;">
      <div class="adminContainer">
        <h2 style="color: white;">Enter your credentials</h2>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <input class="form-control" name="username" type="text" placeholder="Username">
          </div>
          <div class="form-group">
            <input class="form-control" name="password" type="password" placeholder="password">
          </div>
          <button type="submit" name="login" class="btn btn-default">Submit</button>
        </form>
      </div>
    </body>
</html>