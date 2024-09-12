<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '905622728282-ps1b6pgu22c0de8cjv8n6r57vskchosv.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'https://sites.google.com/view/won-own-technologies/profile');

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(GOOGLE_CLIENT_ID);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');
$google_client->addScope('profile');

//start session on web page
session_start();
?>
