<?php

$curl_init = curl_init();

curl_setopt($curl_init, CURLOPT_URL, 'https://www.amazon.com');
curl_setopt($curl_init, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl_init);

echo $result;







curl_close($curl_init);
