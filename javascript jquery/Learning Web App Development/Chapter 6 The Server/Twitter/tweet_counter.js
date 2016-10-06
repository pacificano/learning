var ntwitter = require("ntwitter"),
	credentials = require("./credentials.json"),
	twitter,
	counts = {};

counts.awesome = 0;
// counts.cool = 0;
// counts.rad = 0;
// counts.gnarly = 0;
// counts.groovy = 0;

twitter = ntwitter(credentials);

twitter.stream(
	"statuses/filter", 
	{ "track": ["awesome", "cool", "rad", "gnarly", "groovy"] },
	function(stream){
		stream.on("data", function(tweet){
			if (tweet.text.indexOf("awesome") > -1) {
				counts.awesome = counts.awesome + 1;
			}
		});
	}
);


setInterval(function(){
	console.log("awesome: " + counts.awesome);
}, 3000);

module.exports = counts;