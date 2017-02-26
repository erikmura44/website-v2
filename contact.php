<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['comment'];
    $from = 'From: muracreatives.com';
    $to = 'erikmura44@gmail.com';
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n comment";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
           <meta name="description" content="">
           <meta name="author" content="">
           <title>Mura Creatives</title>


           <style>
              html {
                 background-color: #dbdbdb;
              }
              p {
                 font-size: 1.5em;
                 margin-top: 20px;
                 background-color: #dbdbdb;
                 text-align: center;
              }
           </style>
        </head>
        <body>
        <div class="col-md-6 col-md-offset-3">
           <p>Thank you for contacting me. I will get back to you as soon as possible<p>
           <p><a href="/">Please click here to return to my site</a></p>
        </div>
        </body>
        </html>';
    } else {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
           <meta name="description" content="">
           <meta name="author" content="">
           <title>Mura Creatives</title>


           <style>
              html {
                 background-color: #dbdbdb;
              }
              p {
                 font-size: 1.5em;
                 margin-top: 20px;
                 background-color: #dbdbdb;
                 text-align: center;
              }
           </style>
        </head>
        <body>
        <div class="col-md-6 col-md-offset-3">
           <p>Sorry, there was an error sending your message. Plaese return and try again!<p>
           <p><a href="/">Please click here to return to my site</a></p>
        </div>
        </body>
        </html>';
    }
}
?>
