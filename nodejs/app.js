var profile = require("./profile.js");
var topic = process.argv.slice(2,3);
var users = process.argv.slice(3);

users.forEach(function(username) {
	profile.get(username, topic);
});