<?php


   include "../database/pdo_connect.php";



    if (isset($_POST['textarea'])) {
        echo "dsdsd";
        $text = ($_POST['textarea']);

        $query = $conn->prepare("INSERT INTO articles (a_textarea) VALUES (:text)");
        $result = $query->execute(array(
            ":text" => $text));
     }
    header('Location: ../admin/article_add.php');

?>