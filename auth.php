<?php
require_once 'config.php';
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

if(isset($code)) {
    try {
        $token = $google_client->fetchAccessTokenWithAuthCode($code);
        //print_r($token);
        $google_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $payload = $google_client->verifyIdToken();

    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $payload = null;
}
 

if(isset($payload)){
  $_SESSION['name']         = $payload['name'];
  $_SESSION['picture']      = $payload['picture'];
  $_SESSION['given_name']   = $payload['given_name'];
  $_SESSION['family_name']  = $payload['family_name'];
  $_SESSION['locale']       = $payload['locale'];
  echo "<script>location.href='http://localhost:8000';</script>";
}
?>
