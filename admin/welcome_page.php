<?php


/*** pocetak sesije ***/
session_start();

if($_SESSION['a_id'] == '')
{
    header('Location: ../functions/off_access.php');
}


?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wing Chun Kuen Admin Page</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../css/main_body_style.css" type="text/css">



</head>
<body>
<div id ="admin_container">
    <div id = "admin_header"><br>Wing Chun Kung Fu klub Kuen - Administrator Side</div>
    <div id = "admin_main_all">
        <div id="admin_all_left">
            <div id="admin_all_left_top"><img src="../pictures/side_logo.png" width="200" height="210" alt="Logo" style="padding-top: 30px"></div>
            <div id="admin_all_left_menu">
                <div id = "LeftMenu" style="padding-top: 0px" align="center">
                    <div id='cssmenu'>
                        <ul>
                            <li class='active has-sub'><a href='evidencija.php'><span>Evidencija</span></a></li>
                            <li class='active has-sub'><a href='comments.php'><span>Komentari</span></a></li>
                            <li class='active has-sub'><a href='picadd.php'><span>Dodaj sliku</span></a></li>
                            <li class='active has-sub'><a href='textadd.php'><span>Dodaj clanak</span></a></li>
                        </ul>
                        <div id="logout" style="padding-top: 50px">
                            <form method="post" name="logout">
                                <a href="../functions/logout.php"><input type='button' name="logout" value="Logout"></a>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div id="admin_mainwindow">
            <h1>Dobrodosli!</h1>
            <h3>Odaberite stavku iz levog menija.</h3>
        </div>



    </div>
    <div id = "admin_footer"><img src="../pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

