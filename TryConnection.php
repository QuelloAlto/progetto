<?php
function TryConnection($servername, $username, $password, $dbname)
	{
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
            displayError("Connessione fallita al database. Riprova più tardi.");
            die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			return $conn;
		}
	}
?>