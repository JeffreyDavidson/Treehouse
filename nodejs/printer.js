//Print out message
function printMessage(username, badgeCount, points, topic) {
	var message = username + " has " + badgeCount + " total badge(s) and " + points + " points in in the topic of " + topic;
	console.log(message);
}

//Print out error messages
function printError(error) {
	console.error(error.message);
}

module.exports.printMessage = printMessage;
module.exports.printError = printError;