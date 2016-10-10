var ntwitter = require("ntwitter"),
	redis = require("redis"),
	credentials = require("./credentials.json"),
	redisClient,
	twitter,
	counts = {};

twitter = ntwitter(credentials);

client = redis.createClient();

client.mget(["awesome", "cool"], function (err, awesomeCount) {
	if (err !== null) {
		console.log("ERROR: " + err);
		return
	}

	counts.awesome = parseInt(awesomeCount,10) || 0;
	counts.cool = parseInt(awesomeCount,10) || 0;

	twitter.stream(
		"statuses/filter", 
		{ "track": ["awesome", "cool", "rad", "gnarly", "groovy"] },
		function(stream){
			stream.on("data", function(tweet){
				if (tweet.text.indexOf("awesome") >= -1) {
					client.incr("awesome");
					counts.awesome = counts.awesome + 1;
				}
			});
		}
	);

});




setInterval(function(){
	console.log("awesome: " + counts.awesome);
	console.log("cool: " + counts.cool);
}, 3000);

module.exports = counts;