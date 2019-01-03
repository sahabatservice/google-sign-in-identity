# google-sign-in-identity
Google Plus API deprecated On March 7, 2019

## Requirements ##
* [PHP 5.4.0 or higher](http://www.php.net/)

## Developer Documentation ##
http://developers.google.com/api-client-library/php

## Installation ##

You can use **Composer** or simply **Download the Release**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require google/apiclient:"^2.0"
```

Finally, be sure to include the autoloader:

```php
require_once '/path/to/your-project/vendor/autoload.php';
```

```php
<?php
session_start();
require_once "vendor/autoload.php";

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
```
