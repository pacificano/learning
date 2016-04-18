<?php  
	
	session_start();

	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;

	$apiKey = "API_KEY";
	$apiSecret = "API_KEY";
	$accessToken = "API_KEY";
	$accessSecret = "API_KEY";

	$connection = new TwitterOAuth($apiKey, $apiSecret, $accessToken, $accessSecret);
	
	$response = $connection->get("statuses/home_timeline", array("count" => 50));

	echo '<p style="font-size: 90%;">';

		foreach ($response as $tweet) {

			$favorites = $tweet->favorite_count;

			if ($favorites >= 1) {

				$embed = $connection->get("statuses/oembed", array("id" => $tweet->id));
				
				echo $embed->html;

			}

		}

	echo '</p>';

?>