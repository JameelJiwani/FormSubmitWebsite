<?php
// Start the session
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/baseStyle.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
        <script>
            function showHint(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "studentFind.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body style="background-color: #1f8dd6;">
        <h2><?php echo "Welcome $username"; ?></h2>
        <form style="text-align: center;" class="form-inline">
                <input style="width: 80%;" type="text" onkeyup="showHint(this.value)" class="form-control" placeholder="Text input">
            </div>
            <div id="txtHint"></div>
        </form>
    </body>
</html>