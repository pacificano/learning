<?php  

	session_start();

	// include("twitteroauth/autoload.php");
	// include("twitteroauth/src/TwitterOAuth.php");

	// Official Way
	require "twitteroauth/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;

	// API Requests
	// $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
	// $content = $connection->get("account/verify_credentials");

	$apikey = "API_KEY";
	$apisecret = "API_KEY";
	$accesstoken = "API_KEY";
	$accesssecret = "API_KEY";

	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);

	// print_r($connection);
	// check we're actually connecting

	$tweets = $connection->get("statuses/home_timeline", array("count" => 25, "exclude_replies" => true));

	print_r($tweets);
	
?>