<?php

include 'cnx.php';
$rqt = $cnx->prepare("INSERT INTO apel values(" . 0 . ",' " . $_GET["valeur"] . "',CURRENT_TIME, '".$_GET["types"]."')");
$rqt->execute();
?>