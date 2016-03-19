<?php
include "../database/pdo_connect.php";

/*** pocetak sesije ***/
session_start();


if($_SESSION['a_id'] == '')
{
    header('Location: ../functions/off_access.php');
}


?>



<?php

include '../functions/update_function.php';

$vrednost = (int)$_POST['update_num']; //da bi iscitao iz baze mora se kastovati u int


$query = $conn->prepare("SELECT * FROM student_list WHERE s_id = $vrednost");
$query->execute();
$result = $query->fetch();
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
                            <li class='active has-sub'><a href='upload_form.php'><span>Dodaj sliku</span></a></li>
                            <li class='active has-sub'><a href='article_add.php'><span>Dodaj clanak</span></a></li>
                        </ul>
                    </div>
                    <div id="logout" style="padding-top: 50px">
                        <form method="post" name="logout">
                            <a href="../functions/logout.php"><input type='button' name="logout" value="Logout"></a>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="admin_mainwindow" >
            <br>
            <h3 align="center">Izmena podataka clana: </h3>


            <form method="post" action="../functions/update_izvrsna.php" align="right" style="padding-top: 70px; margin: auto; position: absolute; right: 450px;" >

                Ime:
                <input type="text" name="ime" value="<?php echo $result['s_name']?>"><br>

                Prezime:
                <input type="text" name="prezime" value="<?php echo $result["s_surname"]?>"><br>

                Adresa:
                <input type="text" name="address" value="<?php echo $result["s_address"]?>"><br>

                E-mail:
                <input type="text" name="email" value="<?php echo $result["s_email"]?>"><br>

                Telefon:
                <input type="text" name="telefon" value="<?php echo $result["s_telefon"]?>"><br>

                Rang:
                <input type="text" name="rank" value="<?php echo $result["ranks_r_id"]?>"><br>

                Placeno do:
                <input type="text" name="paytill" value="<?php echo $result["s_payment_till"]?>"><br>
                <br>
                <input type="submit" name="submit" value="Izmeni" >

                <input type="hidden" name="korisnik_id" value="<?php echo $vrednost ?>">
            </form>
        </div>



    </div>
    <div id = "admin_footer"><img src="../pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

