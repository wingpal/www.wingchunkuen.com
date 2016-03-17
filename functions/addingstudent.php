<?php
include '../database/pdo_connect.php';
try {
    if (isset($_POST['submit-form'])) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $rank = $_POST['rank'];
        $paytill = $_POST['paytill'];
        $query = $conn->prepare("INSERT INTO student_list (s_name, s_surname, s_address, s_email, s_telefon, ranks_r_id, s_payment_till) VALUES (:ime, :prezime, :address, :email, :telefon, :rank, :paytill)");
        $result = $query->execute(array(
            ":ime" => $ime,
            ":prezime" => $prezime,
            ":address" => $address,
            ":email" => $email,
            ":telefon" => $telefon,
            ":rank" => $rank,
            ":paytill" => $paytill
        ));
    }
} catch (Exception $err) {
        die ($err);
    }




    header('Location: ../admin/evidencija_add.php');

?>