<?php  
	
	session_start();

	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;

	$apiKey = "API_KEY";
	$apiSecret = "API_KEY";
	$accessToken = "API_KEY";
	$accessSecret = "API_KEY";

	$connection = new TwitterOAuth($apiKey, $apiSecret, $accessToken, $accessSecret);
	
	$content = $connection->get("account/verify_credentials");
	$userTimeline = $connection->get("statuses/user_timeline");

	$userTimelineTrunct = $connection ->get("statuses/user_timeline", array("count" => 2));

	$CoolHuntTimelineTrunct = $connection ->get("statuses/user_timeline", array("screen_name" => coolhunting, "count" => 2));

	print_r($CoolHuntTimelineTrunct);

?>