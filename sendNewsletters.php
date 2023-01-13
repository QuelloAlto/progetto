

<?php
    session_start();
    $title = 'Newsletters'; 
    require_once(__DIR__.'\head.php');
    require_once(__DIR__.'\navbar.php'); 
    require_once(__DIR__.'\TryConnection.php');
    
?>

<body>
    <form class='inputForm' action="sendNewsletters.php" method="post">
        <label for="subject">Subject</label>
        <div class="stuff">
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
        </div>
        <label for="template">Email Template</label>
        <div class="stuff">
            <textarea id="template" name="template" placeholder="Message" required></textarea>
        </div>
        <input id="submit" type="submit" name="submit" value="Send">
    </form>
</body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\PHPMailer\src\Exception.php';

require 'C:\PHPMailer\src\PHPMailer.php';

require 'C:\PHPMailer\src\SMTP.php';
$email = new PHPMailer(TRUE);


if(isset($_POST['submit']))
{
    try{   
        $mail = new PHPMailer (true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        // Dati personali
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "465";
        $mail->Username = "beyondspacesaw@gmail.com";
        $mail->Password = "tmlvbucktvddrgpf";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        
        echo "oo";

        $mail->isHTML(true);

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->setFrom('beyondspacesaw@gmail.com', '');

        $conn=TryConnection('localhost','root','','newsletters');
        $sql= 'SELECT email FROM subscribers';
        $query=mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($query))
        {
                //mail($row["email"],"\r".$_POST['subject'],$_POST['template']);
                
                $mail->addAddress($row["email"]);
                $mail->Subject = $_POST['subject'];
                $mail->Body = $_POST['template'];
                $mail->AltBody = $_POST['template'];
                $mail->send();
            
            
        }
    }catch (Exception $e) {
        echo "Mailer Error: ".$mail->ErrorInfo;
    }
}
?>
