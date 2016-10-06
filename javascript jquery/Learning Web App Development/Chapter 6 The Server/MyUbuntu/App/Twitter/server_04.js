var express = require("express"), 
	http = require("http"),
	tweetCounts = require("./tweet_counter_04.js"),
	app = express();

// set up a static file directory to use for default routing 
// also see the note below about Windows 
app.use(express.static(__dirname + "/client"));

// Create our Express-powered HTTP server 
http.createServer(app).listen(3000);

// set up our routes
app.get("/", function (req, res) { 
	res.send("Hello World!");
});

app.get("/counts.json", function (req, res) {
	res.json(tweetCounts);
});