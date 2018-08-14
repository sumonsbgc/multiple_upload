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


// $search_string = "";
// $url = "https://www.w3schools.com";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);

// curl_setopt($ch, CURLOPT_SSL_VERIFYSTATUS, true);
// curl_setopt($ch, CURLOPT_HTTPGET, false);
// curl_setopt($ch, CURLOPT_HTTPPOST, false);

// curl_setopt($ch, CURLOPT_POSTFIELDS, true);
// curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
// curl_setopt($ch, CURLOPT_UPLOAD, true);

// $result = curl_exec($ch);

// echo $result;