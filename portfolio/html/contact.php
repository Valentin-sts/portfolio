<?php
$ini = parse_ini_file('config.ini');
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['mail']), FILTER_VALIDATE_EMAIL);
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['form']));
    $captchaResponse = $_POST['g-recaptcha-response'];

    if (empty($nom) || empty($email) || empty($objet) || empty($message)) {
        $errorMessage = "Tous les champs sont obligatoires.";
    } elseif (!$email) {
        $errorMessage = "Adresse e-mail invalide.";
    } else {
        $secretKey = "0xfaC03eB6C69F953b9e16AaF521927e169E697C47";
        $recaptchaURL = "https://www.google.com/recaptcha/api/siteverify";
        $recaptchaData = [
            'secret' => $secretKey,
            'response' => $captchaResponse
        ];
        $recaptchaOptions = ['http' => ['method' => 'POST', 'content' => http_build_query($recaptchaData)]];

        $context = stream_context_create($recaptchaOptions);
        $verify = file_get_contents($recaptchaURL, false, $context);
        $captchaSuccess = json_decode($verify);

        if (!$captchaSuccess->success) {
            $errorMessage = "reCAPTCHA invalide. Veuillez réessayer.";
        } else {
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $ini['log'];
                $mail->Password = $ini['mdp'];
                $mail->SMTPSecure = 'tls'; 
                $mail->Port = 587;

                $mail->setFrom($email, $nom);
                $mail->addAddress('valentin.vautier@sts-sio-caen.info');

                $mail->isHTML(true);
                $mail->Subject = $objet;
                $mail->Body = nl2br($message) . "<br>Mail de l'expéditeur : " . $email;

                $mail->send();
                $successMessage = "Votre message a bien été envoyé !";
            } catch (Exception $e) {
                $errorMessage = "L'envoi a échoué. Erreur : " . $mail->ErrorInfo;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>VAUTIER Valentin | Portfolio</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container">
    <div class="right-side">
        <div class="container-form">
            <h2>Formulaire de contact</h2>
            <?php if ($successMessage): ?>
                <p style="color: green;"><?php echo $successMessage; ?></p>
            <?php elseif ($errorMessage): ?>
                <p style="color: red;"><?php echo $errorMessage; ?></p>
            <?php endif; ?>

            <form action="contact.php" method="post">
                <label for="nom">Nom</label>
                <input class="champ2" type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>

                <label for="mail">Adresse Mail</label>
                <input class="champ2" type="email" name="mail" id="mail" placeholder="Entrez votre email" required>

                <label for="objet">Objet du mail</label>
                <input class="champ2" type="text" name="objet" id="objet" placeholder="Entrez l'objet" required>

                <label for="form">Contenu du mail</label>
                <textarea rows="8" cols="81" name="form" id="form" placeholder="Entrez le contenu de votre mail" required></textarea>

                <div class="g-recaptcha" data-sitekey="6e345172-8105-40e7-b4b9-b51ea01f03ff"></div>

                <input class="champ" type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</div>
</body>
</html>

