<?php
// g-recaptcha-response
$gRecaptchaRes = $_POST['g-recaptcha-response'];
var_dump($gRecaptchaRes);

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"secret\"\r\n\r\n6LfRNA4UAAAAAKsfPYv3KxlgDyCYaETrRScHiGT6\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"response\"\r\n\r\n{$gRecaptchaRes}\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
    "postman-token: dd9b871d-73f2-5512-2274-c2a6fd5fcb32"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $resObj = json_decode($response, true);
  var_dump($resObj);
  var_dump($response);
  die;
}