<!Doctype Html>
<?php
  
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit'])){
   
    $email=  san_info($_POST['email']);


    if (empty($email)){

         $msg = "Input field is empty";    
      } 

      if (!isset($msg)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo  "Invalid email";
        }
    }

      if (!isset($msg)) {

        require_once('db_signer.php');  

            $sql= "SELECT email FROM signer WHERE email = ?";   
            
            $stmt = $coneh->prepare($sql);

            $stmt->execute([$email]);

            $y= $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0 ) {
           //the above code checksif entry i.e email is matches the one in the  login database,
           // if true/yes, send a resend password token to the user email using code below.
      
          
// Comment out the above line if not using Composer
require("PHPMailerMaster\src\Exception.php");
require("PHPMailerMaster\src\PHPMailer.php");
require("PHPMailerMaster\src\SMTP.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

            define ("Guser", "jollydosky@gmail.com");
            define ("Gpw", "chidiebere2");

try {
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
 // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPKeepAlive = true;
$mail->SMTPSecure = "ssl";  // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Mailer = "smtp";
$mail->Port       = 465;  // or 587

$mail->Username = Guser;
$mail->Password = Gpw;
$mail->SetFrom('jollydosky@gmail.com', "developer form read");
$mail->Subject = "checking ";
$mail->Body = " roland and i  is testing this stuff";
$r=$mail->AddAddress($email);


 if(!$mail->Send()) {
    $msg  =  "Mailer Error: " . $mail->ErrorInfo;
 } else {
   echo "Message has been sent";
 }
      
            }  
            
            catch (phpmailerException $e) {
                echo "falling error msg".  $e->errorMessage(); //Pretty error messages from PHPMailer
          } catch (Exception $e) {
                echo "falling error msg". $e->getMessage(); //Boring error messages from anything else!
          }
      
      } 
      
      else  {

      $msg = "this email does not exit ";
     
    }
} 

} else {

    echo "chai chai thiss is not good at all";
}

// a function that sanitizes input from user to avoid db exploitation. example 
// email input. check top for where named function is being used
function san_info($info) {
         $info = trim($info);
         $info = stripslashes($info);
         $info =  htmlspecialchars($info);
         return $info;
}

?>

<html >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge ">
    <title>Bmedicals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../../../Water4Every1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="loighpt.css"> -->
    <script src="main.js"></script>
</head>

 
<body style="background-color:#c9e8f6;">

<div class="container" style="margin-top:140px;">
    <div class=" d-flex flex-row  justify-content-center align-content-center"  >
        
        <div  class="col-md-6  col-md-offset-3"  >
            <div class="card">
                <div class="card-header">
                Reset Password
                </div>
                <div class="card-body">
                    <form method="POST" action="forgotpassword.php" >
                    <?php
                            if (isset($msg)){
                                echo "<label class='text-danger'> $msg </label>";
                            }
                    ?>
                        <div class="form-group">
                            Email: <input class="form-control" type="email" name="email" placeholder="enter email....">
                        </div>
                       <a href="forgotpassword.php"> <button style="" class="btn btn-block" type="submit" name="submit"> Submit  </button> </a>
                    </form>
            </div>
            
        </div>
    </div>
</div>



 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
</body>
</html>