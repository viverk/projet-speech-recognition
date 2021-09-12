<?php

//ini_set('display_errors', 1);
ini_set('SMTP', 'smtp.free.fr');
error_reporting(E_ALL);
$from = "viverkange@live.fr";
$to = "viverkange@live.fr";
$subject = "Essai de PHP Mail";
$message = "PHP Mail fonctionne parfaitement";
$headers = "De :" . $from;
mail($to, $subject, $message, $headers);
echo "L'email a été envoyé.";
?>