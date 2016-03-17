<?php
// pocetak sesije
session_start();

// unsetovanje svih varijabli
session_unset();

// unistavanje sesije
session_destroy();
?>
<html>
<head>
    <title>Logged Out</title>
</head>

<body>
<h1>You are now logged out.</h1>
</body>
</html>