<?php

$botToken = "209848654:AAGkvCOZ2DARAav_25W-gpNzGWQtluxjU_Q";
$webSite = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($webSite."/getupdates");

$updateArray = json_decode($update,true);

print_r($update);



?>