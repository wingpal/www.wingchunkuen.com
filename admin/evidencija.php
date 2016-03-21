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
$query = $conn->query('SELECT * FROM student_list')
?>





<!doctype html>

<html lang="en">
<link rel="stylesheet" href="../css/main_body_style.css" type="text/css">

<head>
    <meta charset="utf-8">
    <title>Wing Chun Kuen Admin Page</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../css/main_body_style.css" type="text/css">

    <script>
        function onDelete(){
            var result = confirm('Da li ste sigurni da zelite da obrisete korisnika?');
            if (result === true) {
                return true;
            } else {
                return false;
            }
        }
    </script>




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
        </div><br>
        <div id="admin_mainwindow">
            <div>

                <div id="dodaj_ucenika"><form action="evidencija_add.php">
                     <button type="submit">Dodaj novog clana</button>
                </form></div>

                <div id="obrisi_ucenika"><form action="../functions/form.php?action=deletestudent" method="post">
                    Broj clana koji zelite da obrisete : <input type="text" name="id" required style="height: 15px; width: 15px"><br><br>
                    <input type="submit" name="delete" value="Obrisi" onclick="onDelete()">
                </form></div>

                <div id="apdejtuj_ucenika"><form action="evidencija_change.php" method="post">
                        Izmeni podatke pod rednim brojem: <input type="text" name="update_num" required style="height: 15px; width: 15px"><br><br>
                        <input type="submit" name="delete" value="Izmeni">
                    </form>
                </div>

           </div>


           <?php echo '<table style="width:100%" border="1px" >';
                echo '<tr>';
                    echo '<td>Broj</td>';
                    echo '<td>Ime</td>';
                    echo '<td>Prezime</td>';
                    echo '<td>Adresa</td>';
                    echo '<td>Email</td>';
                    echo '<td>Telefon</td>';
                    echo '<td>Rang</td>';
                    echo '<td>Placeno do</td>';
                    echo  '</tr>';
                while($r = $query->fetch()) {
                echo "<tr><td>";
                        echo $r['s_id'];
                        echo "</td><td>";
                        echo $r['s_name'];
                        echo "</td><td>";
                        echo $r['s_surname'];
                        echo "</td><td>";
                        echo $r['s_address'];
                        echo "</td><td>";
                        echo $r['s_email'];
                        echo "</td><td>";
                        echo $r['s_telefon'];
                        echo "</td><td>";
                        echo $r['ranks_r_id'];
                        echo "</td><td>";
                        echo $r['s_payment_till'];
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

