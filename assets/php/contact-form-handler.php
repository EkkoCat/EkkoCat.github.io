<?php
if(isset($_POST['submit'])){
    $name=$_POST['demo-name'];
    $mail_from= $_POST['demo-email'];
    $message= $_POST['demo-message'];

    $mailto="ajdin02@outlook.com";

    $email_subject= "New Form Submission";

    $email_body= "User Name: $name.\n".
                    "User Email: $mail_from.\n".   
                        "User Message: $message.\n";

    
    $headers= "From: $mail_from \r\n";
    $headers .="Reply-To: $mail_from \r\n";
    mail($mailto,$email_subject,$email_body,$headers);
    header("Location: index.html?mailsend");
}
    ?>