<?php


/*** pocetak sesije ***/
session_start();


if($_SESSION['a_id'] == '')
{
    header('Location: ../functions/off_access.php');
}

?>



<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wing Chun Kuen Admin Page</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../css/main_body_style.css" type="text/css">



</head>
<body>
<div id ="admin_container">
    <div id = "admin_header"><br>Wing Chun Kung Fu klub Kuen - Administrator Side</div>

    <div id = "admin_main_all">

        <div id="admin_all_left">
            <div id="admin_all_left_top"><img src="../pictures/side_logo.png" width="200" height="210" alt="Logo" style="padding-top: 30px"></div>
            <div id="admin_all_left_menu">
                <div id = "LeftMenu" style="padding-top: 0px" align="center">
                    <div id='cssmenu'>
                        <ul>
                            <li class='active has-sub'><a href='evidencija.php'><span>Evidencija</span></a></li>
                            <li class='active has-sub'><a href='comments.php'><span>Komentari</span></a></li>
                            <li class='active has-sub'><a href='upload_form.php'><span>Dodaj sliku</span></a></li>
                            <li class='active has-sub'><a href='textadd.php'><span>Dodaj clanak</span></a></li>
                        </ul>
                    </div>
                    <div id="logout" style="padding-top: 50px">
                        <form method="post" name="logout">
                            <a href="../functions/logout.php"><input type='button' name="logout" value="Logout"></a>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="admin_mainwindow">
            <?php
            if(isset($_FILES['image'])){
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size =$_FILES['image']['size'];
                $file_tmp =$_FILES['image']['tmp_name'];
                $file_type=$_FILES['image']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

                $expensions= array("jpeg","jpg","png");

                if(in_array($file_ext,$expensions)=== false){
                    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }

                if($file_size > 2097152){
                    $errors[]='File size must be excately 2 MB';
                }

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"imagesuploaded/".$file_name);
                    echo "Success";
                }else{
                    print_r($errors);
                }
            }
            ?>
            <html>
            <body>

            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" />
                <input type="submit"/>
            </form>

            </body>
            </html>
        </div>



    </div>
    <div id = "admin_footer"><img src="../pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

