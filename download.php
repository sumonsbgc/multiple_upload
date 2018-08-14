<?php

$url = 'http://intaconex.com/bitcoinuni/wp-content/uploads/2018/07/900bw.png';
$curl_init = curl_init();

$dir = "upload/";

// $imageName = basename($url);
// $save_location = $dir.$imageName;
// $fo = fopen($save_location, 'wb');
// curl_setopt($curl_init, CURLOPT_FILE, $fo);
// curl_setopt($curl_init, CURLOPT_HEADER, 0);
// curl_exec($curl_init);

// fclose($fo);


curl_setopt($curl_init, CURLOPT_URL, 'https://www.pinterest.com');
curl_setopt($curl_init, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl_init);

echo $result;







curl_close($curl_init);
