<?php
//YOU MPESA API KEYS
$consumerKey = "iebKPvSQGzfxPU2lmHAZCE6dXG63Ixd2TtMUlADzNqjhTEcu"; //Fill with your app Consumer Key
$consumerSecret = "Qiq9PGJ94pGlT5XSvjwMULVJCfAlIjtCZxAT678rlmLPKw1JqDJr9cSTVx6qscCz"; //Fill with your app Consumer Secret
//ACCESS TOKEN URL
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);


