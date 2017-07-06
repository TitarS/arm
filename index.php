<?php
$cs = curl_init();
  $opt = array(CURLOPT_URL => 'http://mdvd.com.ua/appliances/kitchens-sink/?page=53',
         CURLOPT_COOKIE => '',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_HEADER => 0,
         CURLOPT_COOKIESESSION => true,
         CURLOPT_COOKIEFILE => $_SERVER['DOCUMENT_ROOT'].'/cookie.txt',
         CURLOPT_REFERER => null,
         CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36",
         CURLOPT_TIMEOUT => 10,
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_FOLLOWLOCATION => 1,
        );
  curl_setopt_array($cs, $opt);
  $out = curl_exec($cs);
  echo $out;
  curl_close($cs);
?>

