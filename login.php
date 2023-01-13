<?php 
    session_start();
    $title = 'Login'; 

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); //require perchè verrà ricaricato dopo
    require_once(__DIR__.'\TryConnection.php'); 


    function displayError($error)
    {
        echo '<p class="error">Problema con il login.<br> Motivo: ' . $error . '<br> <a href="login.php">Per favore riprova.</a></p>';
    }

?>
<script src="js/validateForm.js"></script>
<body>
    <?php if(isset($_SESSION["logged"]) || $_SESSION["logged"]){
        echo '<script>window.location.href = "profile.php";</script>';
    } else if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conn = TryConnection("localhost","root","","dbprogetto");
        $sql = "SELECT * FROM utenti WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($pass, $row['Password']))
            {
                $_SESSION["email"] = $email;
                $_SESSION["firstname"] = $row['Nome'];
                $_SESSION["lastname"] = $row['Cognome'];
                $_SESSION["logged"] = true;
                echo '<p class="success">Login avvenuto con successo.</p><br>';
                echo '<p class="success"><a href="profile.php">Clicca qui per andare al tuo profilo.</a></p>';
            }
            else {
                displayError("Password errata.");
            }
        }
        else {
            displayError("Email non trovata.");
        }
    } else {
    ?>
    <h1>Inserisci i tuoi dati per accedere.</h1><br>
    <div class="inputForm">
    <span id="Error"></span><br>
        <form action="login.php" method="post">
                <label>Email:</label><br>
                <input type="text" name="email" id="email"><br>
                <label>Password:</label><br>
                <input type="password" name="pass" id="pass"><br><br>
                <input type="submit" name="submit" value="Submit" id="submit"><br>
        </form>
    </div>
    <?php } ?>
</body>