<?php
system('clear');
//start claim
while (true) {
$login = "https://firefaucet.win/start";

$ua = array (
"user-agent: Mozilla/5.0 (Linux; Android 10; M2006C3MG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.101 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"referer: https://firefaucet.win/",
"accept-encoding: gzip, deflate, br",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: __cfduid=ddec65aab2b5dea6097c0fdb835cf3eed1615042251",
"cookie: session=2e97bca6-42c1-4c8d-b804-e98c230dc238.HVIXAjkaUYo5gtuuTcbg0FsLq6c",
"cookie: _ga=GA1.2.1681416505.1615042378",
"cookie: _gid=GA1.2.1167955904.1615042378",
"cookie: bitmedia_fid=eyJmaWQiOiI4ZmNhYjRmMGFiODU3MTgwYTU1ZmU0NDBkODhjZDMyMSIsImZpZG5vdWEiOiIwOTBiNDk1MjQ3MTRjODRiZjNlY2E1NTFiMjZlMzY1OCJ9",
"cookie: _gat_gtag_UA_113361696_1=1"
);

$data = "csrf_token=IjM3MjkyOTQzZmZhZmZlMjlhZGE3NjA5MWI2YTE0NTNkY2U1ZDQxZTQi.YEObNA.DxQeVeVU5PzUmtMZIlkvah2KQDE&coins=doge";

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $login); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt"); 
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt"); 
$result = curl_exec($ch); 


for($x=60; $x>=0; $x--){
echo "\r                                      \r";
echo "\033[31;1m Silahkan Tunggu $x Detik";
sleep(1);
echo "\r                                      \r";
}

$log = "https://firefaucet.win/payout";
$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $log); 
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
$pay = curl_exec($ch); 

echo "\n";
echo "\033[32;1mKlaim Sukses  || Cek web secara berkala";
echo "\n";
echo "\033[33;1m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠";
echo "\n";
};










