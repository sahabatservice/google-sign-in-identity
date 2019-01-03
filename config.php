<?php
session_start();
require ("vendor/autoload.php");

$redirect_uri       = "<Your REDIRECT URI>";
$client_id          = "<Your Client ID>";
$client_secret      = "<Your Client SECRET>";
$google_client      = new Google_Client();

//your client id
$google_client->setClientId($client_id);
//your client secret
$google_client->setClientSecret($client_secret);
//your Redirect URI
$google_client->setRedirectUri($redirect_uri);
//scope
$google_client->setScopes("email");
$google_client->setScopes("profile");

?>
