<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>get info</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">


  </head>
  <body>
    <h1>お問い合わせ内容</h1>
    <?php
    mb_language("English");
    mb_internal_encoding("UTF-8");

    $to = 'mtakunao@icloud.com';
    $title = $_POST['title'];
    $message = $_POST['message'];
    $headers = "From: mtakunao@icloud.com";
     if (mb_send_mail($to, $title, $message, $headers))
     {
       echo "Successfully sent";
     }
     else{
       echo "Uhhhhhn try again";
     }

     ?>
  </body>
</html>
