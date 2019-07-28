<?php

$first_name = $_POST['nameInput'];
$lastName = $_POST['lastnameInput'];
$emailInput = $_POST['emailInput'];
$phoneInput = $_POST['telInput'];
$psInput = $_POST['psInput'];

$to = "juliana.lara@lunaymiel.co";
$subject = "Contacto info";
$txt = "¡Hola! Mi nombre es ".$first_name." ".$lastName." me puedes contactar en ".$emailInput." o llamar al  ".$phoneInput."\n\n P.S.:".$psInput;
$headers = "From: desde lunaymiel.co" . "\r\n" .
"CC: creativograficotav@gmail.com";

mail($to,$subject,$txt,$headers);


function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
alert("Tu mensaje se envió con éxito");

header("Location: http://lunaymiel.co");


?>