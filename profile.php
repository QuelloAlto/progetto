<?php 
    session_start();
    $title = 'Profilo'; 

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); 
    require_once(__DIR__.'\TryConnection.php'); 

    function CalculateTier($import)
    {
        if($import > 50000)
            return 8;
        else if($import > 10000)
            return 7;
        else if($import > 5000)
            return 6;
        else if($import > 1000)
            return 5;
        else if($import > 500)
            return 4;
        else if($import > 100)
            return 3;
        else if($import > 50)
            return 2;
        else if($import > 10)
            return 1;
        else
            return 0;
    }
?>
<body>
    <?php if (!isset($_SESSION["logged"]) || !$_SESSION["logged"]) {
        echo '<script> window.location.href = "registration.php"; </script>';
    } else {
        
        echo '<h1>Il Tuo Profilo</h1>';
        echo '<h2>Nome: ' . $_SESSION["firstname"] . '</h2>';
        echo '<h2>Cognome: ' . $_SESSION["lastname"] . '</h2>';
        echo '<h2>Email: ' . $_SESSION["email"] . '</h2>';
        $sql = TryConnection("localhost","root","","dbprogetto");
        $query = "SELECT SUM(importo) FROM donazioni WHERE email = '" . $_SESSION["email"] . "'";
        $import = mysqli_query($sql, $query);
        if($import)
        {
            $import = mysqli_fetch_array($import);
            $import = $import[0];
            if($import == NULL)
            {
                $import = 0;
            }
        }
        else
        {
            $import = 0;
        }
        echo '<h2>Importo donato: ' . $import . '€</h2>';
        echo '<h2>Tier: ' . CalculateTier($import) . '</h2>';
        //CONTROLLARE PERCHE' VIENE TIER 0 INVECE CHE 1
        echo '<h2>Se vuoi modificare i tuoi dati, <a href="editProfile.php">clicca qui</a>.</h2>';
        echo '<h2>Se vuoi modificare la tua password, <a href="editPassword.php">clicca qui</a>.</h2>';
        echo '<h2>Se vuoi cancellare il tuo account, <a href="deleteAccount.php">clicca qui</a>.</h2>';
        echo '<h2>Se vuoi tornare alla home, <a href="index.php">clicca qui</a>.</h2>';
    }
    ?>
</body>