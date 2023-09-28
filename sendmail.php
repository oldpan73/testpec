<?php
require 'vendor/autoload.php'; // Carica la libreria PHPMailer


$host          = isset($_POST["host"]) ? $_POST["host"] : '';  
$username      = isset($_POST["username"]) ? $_POST["username"] : '';  
$password      = isset($_POST["password"]) ? $_POST["password"] : ''; 
$nome          = isset($_POST["nome"]) ? $_POST["nome"] : ''; 
$destinatario  = isset($_POST["destinatario"]) ? $_POST["destinatario"] : '';  
$oggetto       = isset($_POST["oggetto"]) ? $_POST["oggetto"] : ''; 
$testo         = isset($_POST["testo"]) ? $_POST["testo"] : ''; 
$porta         = isset($_POST["porta"]) ? $_POST["porta"] : '';

// configurazione base
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = $host ; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = $porta; 
// dati utente
$mail->Username = $username; 
$mail->Password = $password; 

// Mittente e destinatario
$mail->setFrom($username, $nome);
$mail->addAddress($destinatario, 'Destinatario');

// Oggetto e corpo del messaggio
$mail->Subject = $oggetto;
$mail->Body = $testo;

// Invia la mail PEC
if ($mail->send()) {
    echo 'Mail PEC inviata con successo';
} else {
    echo 'Errore nell\'invio della mail PEC: ' . $mail->ErrorInfo;
}
?>
