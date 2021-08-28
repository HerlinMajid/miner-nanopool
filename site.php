<?php

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

echo $green2."
_______________________________
|                             |
|        XMR Nanopool         | \n";
echo "|_____________________________|

Getting data of mining... \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/balance/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-account balance
 
 ".$blue.$res." \n";
//sleep(0.5);

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/avghashrate/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-average hashrate
 
 ".$blue.$res." \n";
//sleep(0.5);

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/hashratechart/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-chart data
 
 ".$blue.$res." \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/accountexist/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-check miner account
 
 ".$blue.$res." \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/hashrate/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-current hashrate
 
 ".$blue.$res." \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/user/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-general info
 
 ".$blue.$res." \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/history/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-hashrate history
 
 ".$blue.$res." \n";

$ua = array(
"Mozilla/5.0 (Linux; Android 10; Nokia 6.1 Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.nanopool.org/v1/xmr/balance_hashrate/49wjKutc7m2Z7xATDtGRKJi6oNA9pLdTk1CiivyELqE5RCaq4sDR8GcPm1LMywaV5AVF9A3Rz6WAW599QSoLZdNt8RHbnT9");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);q
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
echo $lblue."__________________________________________________
📈Miner-hashrate and balance
 
 ".$blue.$res." \n";








//$json = json_decode($res);
//$lg = $json->status;
//$lg1 = $json->data;
//echo $putih2." Status: ".$green2.$lg."\n";
//echo $putih2." Data: ".$green2.$lg1."\n";

?>
