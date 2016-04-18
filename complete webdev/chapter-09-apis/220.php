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

	$DrakeMentions = $connection->get("statuses/mentions_timeline", array("screen_name" => coolhunting, "count" => 10));
	// mentions only work for the authenticated user. ie. i cant find drake's mentions.

	// echo json_encode($userTimelineTrunct);

	// print_r($CoolHuntTimelineTrunct);

	echo '<p style="font-size: 90%;">';

		foreach ($CoolHuntTimelineTrunct as $tweet) {

			echo $tweet->text;

			echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;favourited: ";

			echo $tweet->favorite_count;

			echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;count: ";

			// foreach ($tweet as $userInfo) {
			// 	echo $userInfo->favourites_count;
			// }

			// ^^ this works. but can just do below instead

			echo $tweet->user->favourites_count;

			echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;url: ";

			echo $tweet->user->url;

			echo "<br />";

		}

	echo '</p>';

	echo '<p style="font-size: 100%;">';

		foreach ($DrakeMentions as $tweet) {

			echo $tweet->text."<br />";

		}

	echo '</p>';

?>