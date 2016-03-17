<?php

include '../database/pdo_connect.php';

$vrednost = (int)$_POST['update_num'];


$query = $conn->prepare("SELECT * FROM student_list WHERE s_id = $vrednost");
$query->execute();
$result = $query->fetch();

return $result;

header('Location: evidencija_change.php ')


?>