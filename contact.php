<?php include("include/header.php") ?>


<body>

<div id = "Container">

    <!-- Top menu -->
    <?php include ("include/main_top_menu_bar.php")?>


    <!-- Menu sa strane i fiksni logo -->
    <div id = "SideBar">
        <?php include ("include/side_logo.php")?>
        <div id = "LeftMenu"></div>
    </div>


    <!-- Glavni deo -->
    <div id = "MainBody">
            <div id="picinfo">
                <div id="picinfo1"></div>
                <div id="picinfo2">
                    <div id="picinfo21"><img src="pictures/me.jpg" alt="HTML5 Icon" width="160" height="160" border="1px"> </div>
                    <div id="picinfo22" style="font-size: large">
                        <p>Si Fu Radoslav Curcic</p>
                        <p>wingchunns@gmail.com</p>
                        <p>063/117-9806</p>
                    </div>

                </div>
                    <div id="picinfo3"></div>
            </div>
            <div id="gmaps_and_contact">

                <div id="gmaps"><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:570px;'><div id='gmap_canvas' style='height:250px;width:570px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.embedmap.net/' style="color: darkorange">.</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a32465b3e32c0b5c4797c2744fb8734127b1e59b'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(45.25878765360881,19.849258690212988),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(45.25878765360881,19.849258690212988)});infowindow = new google.maps.InfoWindow({content:'<strong>Wing Chun klub Kuen</strong><br>Kosovska 4<br> Novi Sad<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>


                <div id="contactform">
                    Kontaktirajte nas:

                    <form class="form" method="post" action="functions/form.php?action=contact">


                            <input type="text" name="name" id="name" placeholder="Petar Petrovic" />
                            <label for="name" style="font-size: smaller">Ime i prezime</label> <br/>
                            <input type="text" name="email" id="email" placeholder="mail@example.com" />
                            <label for="email" style="font-size: smaller">E-mail</label>

                            <textarea name="text" placeholder="Vas komentar"/> </textarea>

                            <input type="submit" value="Posalji" />

                    </form>


                </div>
            </div>
    </div>



    <!-- Footer -->
    <?php include ("include/footer.php") ?>

</div>
</body>


</html>