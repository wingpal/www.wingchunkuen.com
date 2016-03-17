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
$query = $conn->query('SELECT * FROM comments');
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
                    </div>
                    <div id="logout" style="padding-top: 50px">
                        <form method="post" name="logout">
                            <a href="../functions/logout.php"><input type='button' name="logout" value="Logout"></a>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="admin_mainwindow"><br> Komentari poslati preko kontakt forme<br><br>

            <?php echo '<table style="width:100%" border="1px" >';
            echo '<tr>';
            echo '<td>Ime i prezime</td>';
            echo '<td>Email</td>';
            echo '<td>Komentar</td>';

            echo  '</tr>';
            while($r = $query->fetch()) {
                echo "<tr><td>";
                echo $r['vc_name_surname'];
                echo "</td><td>";
                echo $r['vc_email'];
                echo "</td><td>";
                echo $r['vc_comment'];
                echo "</td></tr>";
                echo "</td></tr>";}
            echo '</table>';
            ?>
        </div>



    </div>
    <div id = "admin_footer"><img src="../pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

