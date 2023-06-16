<?php
/*
MSG 91 Service to Send Email 
*/
if(isset($_POST['phone'])){
$message=$_POST['message'];
$phone=$_POST['phone'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms?campaign=&response=&afterminutes=&schtime=&unicode=&flash=&message=&encrypt=&authkey=&mobiles=&route=&sender=&country=91",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{ \"sender\": \"KEONIC\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"$message\", \"to\": [ \"$phone\" ] } ] }",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => array(
    "authkey: 186843AaiqXTfRqgE5b6ba8ab",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo "Message Sent";
  }
}