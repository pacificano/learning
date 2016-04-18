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

	$userTimelineTrunct = $connection->get("statuses/user_timeline", array("count" => 2));

	$CoolHuntTimelineTrunct = $connection->get("statuses/user_timeline", array("screen_name" => coolhunting, "count" => 10));

	$PacTimelineTrunct = $connection->get("statuses/user_timeline", array("screen_name" => pacificano_au, "count" => 10));

	$userMentions = $connection->get("statuses/mentions_timeline", array("count" => 10));

	$testPost = $connection->post("statuses/update", array("status" => "Hello world"));

	echo '<p style="font-size: 90%;">';

		foreach ($userTimelineTrunct as $tweet) {

			echo $tweet->text."<br />";

		}

	echo '</p>';

?>