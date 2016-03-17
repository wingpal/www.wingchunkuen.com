

<?php


include '../database/pdo_connect.php';

$user = $_POST['username'];
$password = $_POST['password'];
$errmsg_arr = array();
$errflag = false;


if($user == '') {
$errmsg_arr[] = 'You must enter your Username';
$errflag = true;
}
if($password == '') {
$errmsg_arr[] = 'You must enter your Password';
$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM users WHERE a_username= :hjhjhjh AND a_password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: ../admin/welcome_page.php");
}
else{
$errmsg_arr[] = 'Username and Password are not found';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: ../login.php");
exit();
}
?>