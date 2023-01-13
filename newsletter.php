<?php 
    session_start();
    $title = 'Newsletters'; 
    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); 
    require_once(__DIR__.'\TryConnection.php');
    require_once(__DIR__.'\updateDonations.php');
?>
<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"])
    {
        echo '<h2>Per la newsletters verrà usata la tua email.<br>
                Se vuoi cambiarla puoi farlo nel campo qui sotto</h2>';
        
    }
    else{
        echo '<h2>Inserisci la tua e-mail qui sotto</h2>';   
    }
?>

<?php

if (isset($_POST['submit']) and isset($_POST['email'])) {
if ($_POST['email'] != "") 
{  
   $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); 
 
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{  
                $result = "The mail you entered is not a valid email address.";
		} 
		else
		{
		$conn=TryConnection('localhost','root','','newsletters');
		$sql = 'INSERT INTO subscribers (email, date_subbed) VALUES ("'.$email.'", NOW())';
		$sql1 = 'SELECT email FROM subscribers WHERE email = "'.$email.'"';
            echo "ciao";
			if (mysqli_num_rows(mysqli_query($conn, $sql1)) > 0)
			{
			$result = "Sei già registrato alla newsletter con questa email.";
			}
			else
			{
			if (mysqli_query ($conn, $sql)) 
			{
			$result = "Email registrata. Grazie per l'interessamento!";
			}
			}
} 
}
else 
{  
    $result = 'Per favore inserisci una mail.'; 
}
}
?>

<form class='inputForm' action="newsletter.php" method="post">
    <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"]){ ?>
        <div class="stuff">Email <br><input value=<?php echo $_SESSION["email"] ?> type="text" name="email"><br><br>
    <?php } else { ?>
    <div class="stuff">Email <br><input type="text" name="email"><br><br>
    <?php } ?>
    <button type="submit" name="submit" >Submit</button></div>
    <?php if ($result) {echo $result ; }  ?>
</form>

