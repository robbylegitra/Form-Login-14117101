<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '400202037909-kcpfrcngdglr1g5pbtc9sh5940vpmlgv.apps.googleusercontent.com'; //Google client ID
$clientSecret = 's0abypB37IrvcveGQ1zx-I3x'; //Google client secret
$redirectURL = 'http://127.0.0.1/14117101_Login/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
