<?php

/**
 * Database connection.
 *
 * @return object
 *   Database connection object.
 */
function kuen_dbconnect() {

// configuration
  $dbhost = "localhost";
  $dbname = "kuendb";
  $dbuser = "root";
  $dbpass = "root";

// database connection
  try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (PDOException $e) {
    echo "Konekcija ne radi: " . $e->getMessage();
  }


}

/**
 * Add new student.
 *
 * @param array $data
 *   $_POST array.
 */
function kuen_addingstudent($data) {
  $conn = kuen_dbconnect();

    if (isset($data['submit-form'])) {
      $ime = $data['ime'];
      $prezime = $data['prezime'];
      $address = $data['address'];
      $email = $data['email'];
      $telefon = $data['telefon'];
      $rank = $data['rank'];
      $paytill = $data['paytill'];
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
      header('Location: ../admin/evidencija_add.php');
    }



}

/**
 * Take text from textarea and write it to database.
 *
 * @param array $data
 *   $_POST array.
 */
function kuen_textareaadd($data){
  $conn = kuen_dbconnect();
  if (isset($data['textarea'])) {
    echo "dsdsd";
    $text = ($data['textarea']);

    $query = $conn->prepare("INSERT INTO articles (a_textarea) VALUES (:text)");
    $result = $query->execute(array(
      ":text" => $text));
    header('Location: ../admin/article_add.php');
  }


}


