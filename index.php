<?php
require_once 'config.php';
$auth_url = $google_client->createAuthUrl();
?>
<a href='<?php echo $auth_url; ?>'><button>Login Via Google </button></a><hr>
<?php
if(isset($_SESSION)){
  echo 'Google Account ID : '.$_SESSION['google_id']."<br>";
  echo 'Google Account Name : '.$_SESSION['name']."<br>";
  echo 'Google Account Picture : '.$_SESSION['picture']."<br>";
  echo 'Google Account Given Name : '.$_SESSION['given_name']."<br>";
  echo 'Google Account Family Name : '.$_SESSION['family_name']."<br>";
  echo 'Google Account Locale : '.$_SESSION['locale']."<br>";
}
?>
