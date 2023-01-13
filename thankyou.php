<?php 
    session_start();
    $title = 'Thank You'; 

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); //require perchè verrà ricaricato dopo

?>
<body>
    <p class="success">Grazie per la donazione. <a href="crowdfunding.php">Torna alla pagina di crowdfunding</a></p>
</body>