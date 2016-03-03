function getRandom(lower, upper) {
	var random = Math.floor(Math.random() * (upper - lower + 1)) + lower;
	return random;
}


console.log(getRandomNumber(1, 6));
console.log(getRandomNumber(1, 100));
console.log(getRandomNumber(200, 500));
console.log(getRandomNumber(50, 100));


function getArea(width, length) {
	var area = width * length;
	return area + " " + unit;
}

console.log(getArea(10, 20, 'sq ft'));
