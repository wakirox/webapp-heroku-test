<?php

$botToken = "209848654:AAGkvCOZ2DARAav_25W-gpNzGWQtluxjU_Q";
$webSite = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update,true);

$chatID = $updateArray["message"]["chat"]["id"];

$textToSend = "Ciao";
file_get_contents($webSite."/sendmessage?chat_id=".$chatID."&text=".$textToSend);



?>