<?php include "database/pdo_connect.php"?>
<?php $query = $conn->query('SELECT * FROM video') ?>




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


    <!-- Glavni deo-->

    <div id = "MainBody">

        <div id = "Videothumbnails" >
            <?php
            while ($r = $query->fetch()) {
                echo '<div id="thumbpicture"><iframe width="180" height="180" src="'
                    .$r['v_video_link']
                    .'" frameborder="0" allowfullscreen></iframe></div>';
            }
            ?>
        </div>

    </div>



    <!-- Footer -->
    <?php include ("include/footer.php") ?>


</body>


</html>