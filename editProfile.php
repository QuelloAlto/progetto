<?php 
    session_start();
    $title = 'Modifica Profilo'; 

    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); 
    require_once(__DIR__.'\TryConnection.php'); 

	function validate_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<body>
    <?php if (!isset($_SESSION["logged"]) || !$_SESSION["logged"]) {
        echo '<script>window.location.href = "registration.php";</script>';
    } else if(isset($_POST['submit'])) {
            validate_input($_POST['firstname']);
            validate_input($_POST['lastname']);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            
            $conn = TryConnection("localhost","root","","dbprogetto");
            $sql = "UPDATE utenti SET nome = '$firstname', cognome = '$lastname', email = '$email' WHERE email = '".$_SESSION["email"]."'";
            $sql2 = "UPDATE donazioni SET email = '$email' WHERE email = '".$_SESSION["email"]."'";
            
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["email"] = $email;

            if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
                echo "<p class='success'>Dati modificati con successo!</p>";
                echo "<p class='success'>Se vuoi tornare al tuo profilo, <a href='profile.php'>clicca qui</a>.</p>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
            mysqli_close($conn);
    } else { ?>
        <h1>Modifica i tuoi dati</h1>
        <div class="inputForm"> 
            <form action="editProfile.php" method="post">
                <label for="firstname">Nome</label><br>
                <input type="text" id="firstname" name="firstname" value="<?php echo $_SESSION["firstname"] ?>" required><br><br>
                <label for="lastname">Cognome</label><br>
                <input type="text" id="lastname" name="lastname" value="<?php echo $_SESSION["lastname"] ?>" required><br><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"] ?>" required><br><br>
                <input type="submit" name="submit" value="Modifica">
            </form>
        </div>
    <?php } ?>
    }