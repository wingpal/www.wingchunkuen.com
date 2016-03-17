<?php
include '../database/pdo_connect.php';

//isti query ne moze da prodje kroz dve while petlje

$query  = $conn->query('SELECT * FROM pictures WHERE pi_album = "seminar2012"');

$query1 = $conn->query('SELECT * FROM pictures WHERE pi_album = "seminar2012"');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Galerija 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css/main_body_style.css" type="text/css" />
</head>
<body style="padding-top: 50px">
<div id="gallery">
    <ul id="navigation">
        <?php
        while($r = $query->fetch()){
            echo "<li><a href=" . $r['pi_hrefthum'] . "><img src=" . $r{'pi_thum'} ."></a></li>";
        }
        ?>

    </ul>
    <div id="full-picture">
        <?php while($r = $query1->fetch()){
        echo "<div><a name=" . $r['pi_hreffull'] . "></a><img src=" . $r['pi_full'] . " /></div>";
        }
        ?>
    </div>
    </div>

<br>
<div><a href="../media_galleries.php" style="color: darkorange">Povratak na glavnu stranu</a> </div>

</div>
</div>
</body>
</html>