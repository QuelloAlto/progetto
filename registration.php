<?php 
    session_start();
    $title = 'Registrazione'; 
    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); //require perchè verrà ricaricato dopo
    require_once(__DIR__.'\TryConnection.php'); 

	function validate_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

    function displayError($error)
    {
        echo '<p class="error">There was an error with your registration.<br> Reason: ' . $error . '<br> Please try again.</p>';
    }

?>
<script src="js/validateForm.js"></script>
<body>
    <?php if(!isset($_SESSION["logged"]) || !$_SESSION["logged"]){
        if(isset($_POST['submit']))
        {
            $firstname = validate_input($_POST['firstname']);
            $lastname = validate_input($_POST['lastname']);
            $email = validate_input($_POST['email']);
            $pass = $_POST['pass'];
            $confirmPass = $_POST['confirm'];
            //CONTROLLARE EMAIL CON CHIAMATA FETCH ON CHANGE FORM
            if($pass != $confirmPass)
            {
                displayError("Passwords don't match.");
                exit();
            }
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $conn = TryConnection("localhost","root","","dbprogetto");
            $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$firstname', '$lastname', '$email', '$pass')";
            if(mysqli_query($conn, $sql))
            {
                $_SESSION["email"] = $email;
                $_SESSION["firstname"] = $firstname;
                $_SESSION["lastname"] = $lastname;
                $_SESSION["logged"] = true;
                echo '<p class="success">Registrazione avvenuta con successo.</p><br>';
                echo '<p class="success">Sarai riportato automaticamente al tuo profilo a breve.</p>';
                echo '<script>redirect_page("profile.php");</script>';
            }
            else {
                displayError("Email già in uso."); //Controllare chiamata istantanea nel form
                die("Error: " . $sql . "<br>" . mysqli_error($conn)); //Se la query fallisce vuol dire che l'email esiste già
            }
        } else {
    ?>
    <h1>Grazie per l'interessamento!</h1><br>
    <div class="inputForm">
        <p>Per favore inserisci i tuoi dati per prendere parte all'emozionante mondo di Beyond Space!</p><br>
        <form action="registration.php" method="post">
                <label>Nome:</label><br>
                <input type="text" name="firstname" id="firstname" oninput="activateSubmit()"><br><br>
                <label>Cognome:</label><br>
                <input type="text" name="lastname" id="surname" oninput="activateSubmit()"><br><br>
                <label>Email:</label><br>
                <input type="email" name="email" onfocusout="checkEmail(this.value)" oninput="activateSubmit()" id="email"><br><span id="emailError"></span><br> 
                <label>Password:</label><br>
                <input type="password" name="pass" onfocusout="checkPassword(this.value)" oninput="activateSubmit()" id="pass"><br><span id="passwordError"></span><br>
                <label>Conferma Password:</label><br>
                <input type="password" name="confirm" id="confirm" oninput="activateSubmit()"><br><br>
                <input type="submit" name="submit" value="Submit" id="submit" disabled><br>
        </form>
    </div>
    <?php }} else {
        echo '<script>window.location.href = "profile.php";</script>';
    } ?>
</body>