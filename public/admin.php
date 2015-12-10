<?php
// Start the session
session_start();
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
        <title style="color: white;">This is a title</title>
        <h1 style="color: white;">This is a title</h1>
        <h2 style="color: white;">Enter your credentials</h2>
        <?php
        if(isset($_POST['login'])) {

            $_SESSION["username"] = $_POST['username'];
            $_SESSION["password"] = $_POST['password'];

            $servername = getenv('IP');
            $username = $_SESSION["username"];
            $password = $_SESSION["password"];
            $database = "c9";
            $dbport = 3306;

            // Connecting, selecting database
            $link = @mysql_connect($servername, $username, $password);
            if (!$link) {
                echo "Incorrect Username or Password";
            } else {
                header("Location: home.php");
                die();
            }
        }
        ?>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <input class="form-control" name="username" type="text" placeholder="Username">
          </div>
          <div class="form-group">
            <input class="form-control" name="password" type="password" placeholder="password">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </body>
</html>