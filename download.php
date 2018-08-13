<?php

$curl_init = curl_init();

curl_setopt($curl_init, CURLOPT_URL, 'https://www.amazon.com');
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
// curl_setopt($ch, CURLOPT_HEADER, true);
// curl_setopt($ch, CURLOPT_HTTPGET, false);
// curl_setopt($ch, CURLOPT_HTTPPOST, false);

// curl_setopt($ch, CURLOPT_POSTFIELDS, true);
// curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
// curl_setopt($ch, CURLOPT_UPLOAD, true);

// $result = curl_exec($ch);

// echo $result;