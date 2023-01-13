<?php
    require_once(__DIR__.'\TryConnection.php');
    function getTotalDonationAmount()
    {
        $conn = TryConnection("localhost","root","","dbprogetto");
        if(!$conn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT SUM(importo) AS I FROM donazioni";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0)
        {
            return $row["I"];
        }
        else
        {
            return "0";
        }
        mysqli_close($conn);
    }
?>