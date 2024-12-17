<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VAUTIER Valentin | Portfolio</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Rajdhani&family=Teko&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="left-side">
        <div class="nav">
            <i class="fa-solid fa-bars"></i>
            <ul>
                <li>
                    <i class="fa-solid fa-house-user"></i>
                    <a href="../index.html">Accueil</a>
                </li>
                <li>
                    <i class="fa-solid fa-user-circle"></i>
                    <a href="../about.html">A propos de moi</a>
                </li>
                <li>
                    <i class="fa-solid fa-images"></i>
                    <a href="portfolio.html">Portfolio</a>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="right-side">
        <div class="container-form">
            <h2>Formulaire de contact</h2>
            <form action="contact.php" method="post">
                <p>Nom</p>
                <input class="champ2" type="text" name="nom" placeholder="Entrez votre nom">
                <p>Adresse Mail</p>
                <input class="champ2" type="email" name="mail" placeholder="Entrez l'email ">
                <p>Objet du mail</p>
                <input class="champ2" type="text" name="objet" placeholder="Entrez l'objet ">
                <p>Contenu du mail</p>
                <textarea rows="8" cols="81" name="form" placeholder="Entrez le contenu de votre mail"></textarea>
                <br>
                <div class="g-recaptcha" data-sitekey="6LfwGpIUAAAAAB_BNNxwXpr7MunyPbG2izN6WOLE"></div>
                <input class="champ" type="submit" value="Envoyez">
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://kit.fontawesome.com/f7632788f8.js" crossorigin="anonymous"></script>
</html>

<?php
$ini = parse_ini_file('config.ini');
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if( !empty($_POST)){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
//Server settings
$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $ini['log'];             // SMTP username
$mail->Password = $ini['mdp'];                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
$mail->Port = 465;                                    // TCP port to connect to

//Recipients
$mail->setFrom($_POST['mail']);          //This is the email your form sends From
$mail->addAddress('kilianlevasseur5@gmail.com'); // Add a recipient address
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $_POST['objet'];
$mail->Body    = $_POST['form']."<br>"." mail de l'expéditeur : ".$_POST['mail'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo '<div><h2>Votre message à bien été envoyé</h2></div>';
} catch (Exception $e) {
    echo 'Votre message à pas pu être envoyé.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
}
?>
