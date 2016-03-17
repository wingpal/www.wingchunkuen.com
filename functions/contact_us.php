<?php
include '../database/pdo_connect.php';

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}




if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST['name'])) {
    $name  = check_input($_POST['name']);
    $email = check_input($_POST['email']);
    $text  = check_input($_POST['text']);
    $query = $conn->prepare("INSERT INTO comments (vc_name_surname, vc_email, vc_comment) VALUES (:name, :email, :text)");
    $result = $query->execute(array(
        ":name" => $name,
        ":email" => $email,
        ":text" => $text

    ));

    header('Location: ../contact.php');
}
}