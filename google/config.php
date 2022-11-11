<?php
@session_start();
require_once 'vendor/autoload.php';

// init configuration
$clientID = '740116945854-q4k86ceck5vcs2tfidt3fjaht8ldc2h6.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/Fshort/token_verification.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
?>