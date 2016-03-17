<?php
include '../database/pdo_connect.php';



if(isset($_POST['submit'])){
    $errMsg = '';

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == '')
        $errMsg .= 'Morate uneti username<br>';

    if($password == '')
        $errMsg .= 'Morate uneti password<br>';


    if($errMsg == ''){
        $podaci= $conn->prepare('SELECT a_id,a_username,a_password FROM users WHERE a_username = :username');
        $podaci->bindParam(':username', $username);
        $podaci->execute();
        $podaci = $podaci->fetch(PDO::FETCH_ASSOC);
        if(count($podaci) > 0 && password_verify($password, $podaci['a_password'])){
            $_SESSION['username'] = $podaci['username'];
            header('location:admin/evidencija.php');
            exit;
        }else{
            $errMsg .= 'Nisu pronadjeni podaci o korisniku<br>';
        }
    }
}
?>