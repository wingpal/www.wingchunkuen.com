<?php
include '../database/pdo_connect.php';


            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
            $rank = $_POST['rank'];
            $paytill = $_POST['paytill'];
            $id = (int)$_POST['korisnik_id'];



if (isset($_POST['submit'])) {

    $query = $conn->prepare("UPDATE student_list
 SET
 s_name = '$ime',
 s_surname = '$prezime',
 s_address= '$address',
 s_email = '$email',
 s_telefon = '$telefon',
 ranks_r_id = $rank,
 s_payment_till = '$paytill'
 WHERE s_id = $id ");

    $query->execute();
        }
    header('Location: ../admin/evidencija.php');

/*
 * valja
 UPDATE student_list
 SET s_name = 'asasasas',
 s_surname = 'asasasas',
 s_address= 'asasasas',
 s_email = 'asasasas',
 s_telefon = 'asasasas',
 ranks_r_id = 'asasasas',
 s_payment_till ='asasasas'
 WHERE s_id = 81
  */




header('Location: ../admin/evidencija.php');
?>
