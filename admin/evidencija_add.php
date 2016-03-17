<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wing Chun Kuen Admin Page</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../css/main_body_style.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-confirm.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery-confirm.js"></script>
</head>
<body>
<div id ="admin_container">
    <div id = "admin_header"><br>Wing Chun Kung Fu klub Kuen - Administrator Side</div>
    <div id = "admin_main_all">
        <div id="admin_all_left">
            <div id="admin_all_left_top"><img src="../pictures/side_logo.png" width="200" height="210" alt="Logo" style="padding-top: 30px"></div>
            <div id="admin_all_left_menu">
                <div id = "LeftMenu" style="padding-top: 70px" align="center">
                    <div id='cssmenu'>
                        <ul>
                            <li class='active has-sub'><a href='evidencija.php'><span>Evidencija</span></a></li>
                            <li class='active has-sub'><a href='comments.php'><span>Komentari</span></a></li>
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

        <div id="admin_mainwindow" >
            <br>
            <h3 align="center">Dodavanje novog clana</h3>
            <form id="EvidencijaForm" method="post" action="../functions/addingstudent.php" align="right" style="padding-top: 70px; margin: auto; position: absolute; right: 450px;" >

                Ime:
                <input type="text" name="ime" ><br>

                Prezime:
                <input type="text" name="prezime"><br>

                Adresa:
                <input type="text" name="address"><br>

                E-mail:
                <input type="text" name="email"><br>
                Telefon:
                <input type="text" name="telefon"><br>

                Rang:
                <input type="text" name="rank"><br>

                Placeno do:
                <input type="text" name="paytill"><br>
                <br>
                <!-- ID je postavljen da bi se lakse pronasao, a type mora biti button da ne bi automatski postovao formu -->
                <input id="FormSubmit" type="button" value="Dodaj" />
                <script type="text/javascript">
                    $('#FormSubmit').confirm({
                        title: 'Upozorenje!',
                        content: '- potvrdite unos clana -',
                        confirm: function () {
                            if ($('[name=ime]').val().trim() === ''
                                || $('[name=prezime]').val().trim() === ''
                                || $('[name=address]').val().trim() === ''
                                || $('[name=telefon]').val().trim() === ''
                                || $('[name=email]').val().trim() === ''
                                || $('[name=rank]').val().trim() === ''
                                || $('[name=paytill]').val().trim() === '') {
                                    alert('Sva polja moraju biti popunjena!');
                            } else if (isNaN(Number($('[name=rank]').val()))) {
                                alert('Rank mora da bude numericka vrednost!');
                            } else {
                                // sve sem ove linije je validacija
                                $("#EvidencijaForm").submit();
                            }
                        },
                        cancel: function(){
                            //$('[name=ime]').val('Hello world!');
                        }
                    });
                </script>
                <input type="hidden" name="submit-form" value="submitted"/>     <!-- Ne sme postojati element sa name=submit jer mesa sa submit funkcijom  -->

            </form>









        </div>



    </div>
    <div id = "admin_footer"><img src="../pictures/side_logo.png" width="60" height="60" id="img1" style="padding-top: 5px"></div>

</div>


</body>

</html>

