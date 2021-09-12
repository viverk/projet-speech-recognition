<?php

$typeApel = $_GET["types"];  //
if ($typeApel == 1) {
//ini_set('display_errors', 1);
    ini_set('SMTP', 'smtp.free.fr');
    error_reporting(E_ALL);
    $from = "viverkange@live.fr";
    $to = "viverkange@live.fr";
    $subject = "signalement d'une explosion";
    $message = "une explosion a été signalé !!";
    $headers = "De :" . $from;
    mail($to, $subject, $message, $headers);
    //echo "L'email a été envoyé.";
} else if ($typeApel == 2) {
    ini_set('SMTP', 'smtp.free.fr');
    error_reporting(E_ALL);
    $from = "viverkange@live.fr";
    $to = "viverkange@live.fr";
    $subject = "signalement d'un coup de feu";
    $message = "un coup de feu a été signalé !!";
    $headers = "De :" . $from;
    mail($to, $subject, $message, $headers);
} else if ($typeApel == 3) {
    ini_set('SMTP', 'smtp.free.fr');
    error_reporting(E_ALL);
    $from = "viverkange@live.fr";
    $to = "viverkange@live.fr";
    $subject = "signalement d'un bruit suspect non identifié";
    $message = "Des bruits suspects on été signalé !!";
    $headers = "De :" . $from;
    mail($to, $subject, $message, $headers);
} else if ($typeApel == 4) {
    ini_set('SMTP', 'smtp.free.fr');
    error_reporting(E_ALL);
    $from = "viverkange@live.fr";
    $to = "viverkange@live.fr";
    $subject = "signalement d'un cri inquiétant";
    $message = "des cris inquiétants on été signalé !!";
    $headers = "De :" . $from;
    mail($to, $subject, $message, $headers);
}
?>