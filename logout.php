<?php
        session_start();
        session_destroy();
        $title = 'Logout'; 
        require_once(__DIR__.'\head.php');
        require_once(__DIR__.'\navbar.php');
?>
<body>
    <h1>Logout effettuato con successo.</h1>
    <h2>Se vuoi tornare alla home, clicca <a href="index.php">qui</a>.<h2>
</body>