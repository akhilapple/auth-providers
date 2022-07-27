<?php
 

// GitHub API configuration 
define('CLIENT_ID', '2bbd08d236715fa71d6e'); 
define('CLIENT_SECRET', '1c52c5296ebba9e19854fb1d67ae828561925455'); 
define('REDIRECT_URL', "http://localhost/PHP/Auth-Providers/github/"); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Github client library 
require_once './github/Github_OAuth_Client.php'; 
 
// Initialize Github OAuth client class 
$gitClient = new Github_OAuth_Client(array( 
    'client_id' => CLIENT_ID, 
    'client_secret' => CLIENT_SECRET, 
    'redirect_uri' => REDIRECT_URL 
)); 
 
// Try to get the access token 
if(isset($_SESSION['access_token'])){ 
    $accessToken = $_SESSION['access_token']; 
}

?>