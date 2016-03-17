
<?php include"include/header.php" ?>




<body>

<div id = "Container">

    <!-- Top menu -->
    <?php include ("include/main_top_menu_bar.php")?>


    <!-- Menu sa strane i fiksni logo -->
    <div id = "SideBar">

        <?php include ("include/side_logo.php")?>


        <div id = "LeftMenu">
            <div id='cssmenu'>
                <ul>
                    <li class='active has-sub'> <a href="media_galleries.php">Slike</a></li>
                    <li class='active has-sub'> <a href="media_video.php">Video</a></li>

                </ul>
            </div>
        </div>


    </div>


    <!-- Glavni deo -->
    <div id = "MainBody">

        <div id = "pictures_thumbnails">
            <div id="thumbpicture"><a href="galleries/media_galleries_open1.php"><img src="pictures/galerija1/1_resize.JPG"></a><br>Seminar 2012.</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open2.php"><img src="pictures/galerija2/IMAG1455_resize_resize.jpg"></a><br>Trening 2013.</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open3.php"><img src="pictures/galerija3/tn_DSC_1654_resize_resize.JPG"></a><br>SLT seminar</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open4.php"><img src="pictures/galerija4/IMAG1563_resize_resize.jpg"></a><br>Trening 2012.</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open5.php"><img src="pictures/galerija5/P1160837_resize_resize.JPG"></a><br>Long pole 2012</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open6.php"><img src="pictures/galerija6/3a.jpg"></a><br>Philipp Bayer 2013.</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open7.php"><img src="pictures/galerija7/5a.jpg"></a><br>Philipp Bayer</div>
            <div id="thumbpicture"><a href="galleries/media_galleries_open8.php"><img src="pictures/galerija8/DSC_9876_resize_resize.jpg"></a><br>Fruska Gora 2013</div>

        </div>

    </div>



    <!-- Footer -->
    <?php include ("include/footer.php") ?>


</body>


</html>