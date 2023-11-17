/*
let x=10;
let x=20;
console.log(x);

let x=10;
let x=20;
console.log(x);

let x=10;
let x=20;
console.log(x);

variable can be defined and declared again
*/
var x=10;
var x="Hello There!!";
//x=12343.543
console.log(x);

var x1=10;
 var x1=100; // You can redefine var, but not redefine and initiaise it at the same time
//x1=12343.543
console.log(x1);

let y=10;
//let y="Hello There!!"; //------------you cannot redefine let, but can redefine var
y=12343.543;
console.log(y);

/*
let x2=10;
let x2; // You cannot redefine let.
//x1=12343.543
console.log(x2);
*/

/*
const z=10;
z="Hello There!!";
z=12343.543
console.log(z);
*/

// var, and let variables can be re-assigned
// If u try to reassign a const variable, it will not give any output, and will give an error.
//----------difference between var and let in BLOCKscope----------------
for(var i=0;i<=4;i++){
       console.log(i);
}
console.log(i);

for(var i=0;i<=4;i++){
       console.log(i);
}
console.log(i); // This i is from the var i as var is accessible outside the block

for(let j=0;j<=4;j++){
       console.log(j);
}
console.log(j); // let is not accessible outside a block


// When u define a var variable, Javascript give storage to the variable and initialise undefined to it. Such variables can be called.
// When u define a let variable, Javascript give storage to the variable but will not initialise anything to it.Therefore, such variable will not be called.
