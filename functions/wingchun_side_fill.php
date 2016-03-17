<?php
include "database/pdo_connect.php";

$istorijat            = $conn->query('SELECT * FROM articles WHERE a_id = "1"');
$sistem               = $conn->query('SELECT * FROM articles WHERE a_id = "2"');
$principi             = $conn->query('SELECT * FROM articles WHERE a_id = "3"');
$biografije           = $conn->query('SELECT * FROM articles WHERE a_id = "4"');

$istorijatf           = $istorijat->fetch();
$sistemf              = $sistem->fetch();
$principif            = $principi->fetch();
$biografijef          = $biografije->fetch();



?>