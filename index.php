<?php

$token = "246470400:AAElj-KNd6S9mTyo6wesYzyU8OrquBHQKRA";

$url  = "https://api.telegram.org/bot".$token;

$update = file_get_contents($url."/getupdates");
$result = json_decode($update, TRUE);
$id = $result["result"][0]["message"]["chat"]["id"];
print_r("up = ".$update);
print_r("res=".$result);
print_r("/n");
print_r("id = ".$id);
//echo curl_version();
//////////ВАЖНО /////
//$fuck = file_get_contents('https://evilinsult.com/generate_insult.php?lang=en');
//echo $update;
//$update = file_get_contents($url."/sendmessage?chat_id=".$id."5&text=$fuck");
