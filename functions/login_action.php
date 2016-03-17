<?php

/*** pocetak sesije ***/
session_start();

/*** da li je ulogovan? ***/
if(isset( $_SESSION['a_id'] ))
{
    $message = 'Users is already logged in';
}
/*** da li su postovani? ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
/*** user duzina? ***/
elseif (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** pass duzina? ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** user alfa numeric? ***/
elseif (ctype_alnum($_POST['username']) != true)
{
    $message = "Username must be alpha numeric";
}
/*** pass alfa numeric ***/
elseif (ctype_alnum($_POST['password']) != true)
{

    $message = "Password must be alpha numeric";
}
else
{
    /*** ako je sve ok konekcija sa bazom ***/
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);




    $mysql_hostname = 'localhost';

    $mysql_username = 'root';

    $mysql_password = 'root';


    $mysql_dbname = 'kuendb';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("SELECT a_id, a_username, a_password FROM users
                    WHERE a_username = :username AND a_password = :password");

        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);

        $stmt->execute();

        $id = $stmt->fetchColumn();

        if($id == false)
        {
            $message = 'Login Failed';
        }

        else
        {

            $_SESSION['a_id'] = $id;

            header('Location: ../admin/welcome_page.php');
        }


    }
    catch(Exception $e)
    {
        $message = 'We are unable to process your request."';
    }
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>
