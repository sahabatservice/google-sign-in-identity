<?php
require_once 'config.php';
$auth_url = $google_client->createAuthUrl();
?>
<a href='<?php echo $auth_url; ?>'><button>Login Via Google </button></a><hr>
<?php
if(isset($_SESSION)){
  echo $_SESSION['name']."<br>";
  echo $_SESSION['picture']."<br>";
  echo $_SESSION['given_name']."<br>";
  echo $_SESSION['family_name']."<br>";
  echo $_SESSION['locale']."<br>";
}
?>
