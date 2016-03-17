<?php include"include/header.php" ?>

<?php include "functions/wingchun_side_fill.php" ?>


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
                    <li class='active has-sub'>
                        <a href="javascript:ReplaceContentInContainer('Article', '<?php echo '
                            <img src=&quot;pictures/istorija.jpg&quot;>
                            <h1 style=&quot;float:right;&quot;>' . $istorijatf['a_article_name'] . '</h1>'.
                            '<br/>' . '<p align= &quot;left&quot;>' . $istorijatf['a_article_text'] .
                            '</p>' ?>')">Istorijat</a></li>

                    <li class='active has-sub'> <a href="javascript:ReplaceContentInContainer('Article', '<?php echo
                            '<img src=&quot;pictures/sistem.jpg&quot;>
                            <h1 style=&quot;float:right;&quot;>' . $sistemf['a_article_name'] . '</h1>'.
                            '<br/>' . '<p align= &quot;left&quot;>' . $sistemf['a_article_text'] .
                            '</p>' ?>')">Sistem</a></li>

                    <li class='active has-sub'> <a href="javascript:ReplaceContentInContainer('Article', '<?php echo
                            '<img src=&quot;pictures/princip.png&quot;><h1
                            style=&quot;float:right;&quot;>' . $principif['a_article_name'] . '</h1>'.
                            '<br/>' . '<p align= &quot;left&quot;>' . $principif['a_article_text'] .
                            '</p>' ?>')">Principi</a></li>

                    <li class='active has-sub'> <a href="javascript:ReplaceContentInContainer('Article','<?php echo
                            '<h1 >'. $biografijef['a_article_name']. '</h1>' .
                            '<br/>' . '<p>' . $biografijef['a_article_text'] . '</p>'
                            ?>')">Biografije</a></li>
                </ul>
            </div>
        </div>


    </div>


    <!-- Glavni deo -->
    <div id = "MainBody">

        <div id = "Article" ><h2 >Odaberite kategoriju sa Vase leve strane</h2>
            <img src="pictures/ip-man-wall.jpg" >
        </div>

    </div>



    <!-- Footer -->
    <?php include ("include/footer.php") ?>


</body>


</html>