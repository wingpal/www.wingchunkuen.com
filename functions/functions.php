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

/**
 * Take all data from contact form and enter it to database.
 *
 * @param array $data
 *   $_POST array.
 */
function kuen_contact_us($data){
  $conn = kuen_dbconnect();

  function check_input($data1)
  {
    $data1 = trim($data1);
    $data1 = stripslashes($data1);
    $data1 = htmlspecialchars($data1);

    return $data1;
  }




  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($data['name'])) {
      $name  = check_input($data['name']);
      $email = check_input($data['email']);
      $text  = check_input($data['text']);
      $query = $conn->prepare("INSERT INTO comments (vc_name_surname, vc_email, vc_comment) VALUES (:name, :email, :text)");
      $result = $query->execute(array(
        ":name" => $name,
        ":email" => $email,
        ":text" => $text

      ));

      header('Location: ../contact.php');
    }
  }
}

/**
 * Deleting student from database.
 *
 * @param array $data
 *   $_POST id from hidden imput.
 */
function kuen_delete_student($data){
  $conn = kuen_dbconnect();

  $id = $data['id'];

  $query = "DELETE FROM student_list WHERE s_id = :id";
  $result = $conn->prepare($query);
  $fordelete= $result->execute(array(":id"=>$id));

  if($fordelete)
  {
    header('Location: ../admin/evidencija.php');
  }else{
    echo 'ERROR Data Not Deleted';
  }

}

/**
 * Update students information.
 *
 * @param array $data
 *   $_POST array.
 */
function kuen_updatestudent ($data) {
  $conn = kuen_dbconnect();

  $ime = $data['ime'];
  $prezime = $data['prezime'];
  $address = $data['address'];
  $email = $data['email'];
  $telefon = $data['telefon'];
  $rank = $data['rank'];
  $paytill = $$data['paytill'];
  $id = (int)$data['korisnik_id'];


  if (isset($data['submit'])) {

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
}










function kuen_login($data) {


  /*** pocetak sesije ***/
  session_start();

  /*** da li je ulogovan? ***/
  if (isset($_SESSION['a_id'])) {
    $message = 'Users is already logged in';
  }
  /*** da li su postovani? ***/
  if (!isset($data['username'], $data['password'])) {
    $message = 'Please enter a valid username and password';
  } /*** user duzina? ***/
  elseif (strlen($data['username']) > 20 || strlen($data['username']) < 4) {
    $message = 'Incorrect Length for Username';
  } /*** pass duzina? ***/
  elseif (strlen($data['password']) > 20 || strlen($data['password']) < 4) {
    $message = 'Incorrect Length for Password';
  } /*** user alfa numeric? ***/
  elseif (ctype_alnum($data['username']) != true) {
    $message = "Username must be alpha numeric";
  } /*** pass alfa numeric ***/
  elseif (ctype_alnum($data['password']) != true) {

    $message = "Password must be alpha numeric";
  } else {
    /*** ako je sve ok konekcija sa bazom ***/
    $username = filter_var($data['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($data['password'], FILTER_SANITIZE_STRING);


    $mysql_hostname = 'localhost';

    $mysql_username = 'root';

    $mysql_password = 'root';


    $mysql_dbname = 'kuendb';

    try {
      $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $dbh->prepare("SELECT a_id, a_username, a_password FROM users
                    WHERE a_username = :username AND a_password = :password");

      $stmt->bindParam(':username', $username, PDO::PARAM_STR);
      $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);

      $stmt->execute();

      $id = $stmt->fetchColumn();

      if ($id == false) {
        $message = 'Login Failed';
      } else {

        $_SESSION['a_id'] = $id;

        header('Location: ../admin/welcome_page.php');
      }


    } catch (Exception $e) {
      $message = 'We are unable to process your request."';
    }
  }
echo '<html>';
echo '<head>';
echo '<title>Login</title>';
echo '</head>';
echo '<body>';
echo '<p>' . $message;
echo '</body>';
echo '</html>';


}



