<?php
session_start();

?>
<?php include "functions/errchacker.php";?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wing Chun Kuen Admin Page</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/main_body_style.css" type="text/css">



</head>
<body>
<div id ="admin_container">
        <div id = "admin_header"><br>Wing Chun Kung Fu klub Kuen - Administrator Side</div>
        <div id = "admin_main">
            <div id = "admin_main_left"></div>
            <div id = "admin_main_center">
                <div id="admin_main_center_up"><img src="pictures/cist_logo.png" width="240" height="250"></div >
                <div id="admin_main_center_login">
                    Ulogujte se:
                    <br/>
                    <br/>
                    <form method="post" name="login" action="functions/login_action.php">
                        <input type="text" placeholder="username" name="username"/><br>
                        <input type="password" placeholder="password" name="password"/><br>
                        <input type="submit" name = "submit" "value="Login"/>
                    </form>



                </div >
            </div>
            <div id = "admin_main_right"></div>




        </div>
        <div id = "admin_footer"><img src="pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

