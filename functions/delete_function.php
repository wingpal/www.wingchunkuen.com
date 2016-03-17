<?php
include '../database/pdo_connect.php';

$id = $_POST['id'];

$query = "DELETE FROM student_list WHERE s_id = :id";
$result = $conn->prepare($query);
$fordelete= $result->execute(array(":id"=>$id));

if($fordelete)
{
    header('Location: ../admin/evidencija.php');
}else{
    echo 'ERROR Data Not Deleted';
}



?>
