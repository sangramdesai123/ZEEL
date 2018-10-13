<!--for making aymens follow hese youtube video :https://www.youtube.com/watch?v=qsK2CIxr_SU-->


<?php
session_start(); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:XXXXXXXXXXXXXXXXXXX",
                  "X-Auth-Token:XXXXXXXXXXXXXXXXXXX"));
$name=$_SESSION['u_name'];
$tel=$_SESSION['u_phone'];
$pay=$_GET['btn'];
$payload = Array(
    'purpose' => 'Cloths',
    'amount' => $pay,
    'phone' => $tel,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost/sangram/ZEEL/success.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$json_decode =json_decode($response,true);
$long_yrl =$json_decode['payment_request']['longurl'];
echo $long_yrl;
//print_r($json_decode);
header('Location:'.$long_yrl);
?>