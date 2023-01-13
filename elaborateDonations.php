<?php
    require_once(__DIR__.'\TryConnection.php');

    session_start();
    if(!isset($_SESSION["email"]) || isset($_POST['anon']))
    {
        $email = "anonimo";
    }else
    {
        $email = $_SESSION["email"];
    }
    $donation = $_POST['donationInput'];

    $conn = TryConnection("localhost","root","","dbprogetto");
    $sql = "INSERT INTO donazioni (email, importo, data) VALUES ('".$email."', '".$donation."', NOW())";
    if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href = "thankyou.php"</script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>