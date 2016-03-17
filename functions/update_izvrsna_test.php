<?php
include '../database/pdo_connect.php';


// ovako proveravaj da li je forma submitovana, posto neko moze u konzoli da izmeni vrednost submit dugmeta, ovo je sigurica
if ($_POST) {

    // todo: validacija ti fali, ali to verovatno znas, neko je mogao da unese neke javascript komande u polja itd
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $rank = $_POST['rank'];
    $paytill = $_POST['paytill'];

    // todo: uradi upit za tog korisnika za kog se radi update, select upit gde ces se uveriti da user uopste postoji, tek ako postoji radis update

    $studentExists = true;

    if ($studentExists) {
        $query = $conn->prepare("
			UPDATE student_list
			SET
				s_name = $ime,
				s_surname = $prezime,
				s_address= $address,
 				s_email = $email,
 				s_telefon = $telefon,
 				ranks_r_id = $rank,
 				s_payment_till = $paytill
 			WHERE s_id = 81 ");
        //todo: ovaj id ti je hardkodiran i moras ga uzeti iz forme, to pretpostavljam isto da znas :)

        // todo: mozes da uradis try/catch i da uhvatis gresku ako se slucajno pojavi
        $query->execute();
        header('Location: ../admin/evidencija.php');
    }
}




?>
