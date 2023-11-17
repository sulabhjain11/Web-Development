var a=Math.random(); // Gives random number between 0 and 1
console.log(a);
var highestnumber=7;
var lowestnumber=3;
// exclusive to the boundary
a=Math.random()*(highestnumber-lowestnumber)+lowestnumber;
console.log(a);
a=Math.floor(a);
console.log(a);
