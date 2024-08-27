<?php
require_once('config.php');
require_once ('mailer/vendor/autoload.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 function send(){
    global $connect;
    $user_id=$_SESSION['user']['id'];
    $email=$_SESSION['user']['email']; 
     $name=$_SESSION['user']['name'];
    $codeArr=[];

    while(count($codeArr) <5){
    $codeGen=rand(0,9);
    array_push($codeArr,$codeGen);
    }
    $code=implode('',$codeArr);

    $insert="INSERT INTO codes(user_id,code) VALUES('$user_id','$code')";
   
    if(mysqli_query($connect,$insert)){

 

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;
$mail->Debugoutput = 'error_log';  // Send debug output to PHP error log


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'okoloemeka37@gmail.com';                     //SMTP username
    $mail->Password   = "inbx xcmc zuaq jete";                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Instead of PHPMailer::ENCRYPTION_STARTTLS
    $mail->Port = 465; // Instead of 587
                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
    
    //Recipients
    $mail->setFrom('okoloemeka37@gmail.com', 'Mailer');
    $mail->addAddress($email,$name);     //Add a recipient

    $mail->addReplyTo('okoloemeka37@gmail.com', 'Aruku');
 


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "zyler_verify";

    $template=file_get_contents("temp.php");

    $template=str_replace("[code]",$code,$template);
    $template=str_replace("[name]",$_SESSION['user']['name'],$template);
    $template=str_replace("[email]",$_SESSION['user']['email'],$template);

    $mail->Body    = $template;
   

    $mail->send();
   header('location:user.php');
}
 }
 send();