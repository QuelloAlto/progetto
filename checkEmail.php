<?php
    $db = "dbprogetto";
    $server = "localhost";
    $user = "root";
    $pass = "";
    $conn = mysqli_connect($server, $user, $pass, $db);
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = $_REQUEST["email"];
    $sql = "SELECT * FROM utenti WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        echo "Email già in uso.";
    }
    else
    {
        echo "";
    }
    mysqli_close($conn);
?>