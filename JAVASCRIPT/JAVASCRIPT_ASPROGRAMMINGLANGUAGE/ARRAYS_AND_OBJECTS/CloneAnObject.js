var a={name:"Sulabh Jain",number:9460554883,arr:[54,63]};
var b=a; //Here,a and b will start pointing at the same object.
console.log(a);
console.log(b);
a.name="Chinu";
console.log(a);
console.log(b);

// Method-2
var p={name:"Sulabh Jain",number:9460554883,arr:[54,63]};
var q=Object.assign({},p);
console.log(p);
console.log(q);
q.name="Chinu";
console.log(p);
console.log(q);

//Method-3 .........JSON.parse() only works with Number and String object literal. It does not work with an object literal with function or symbol properties.
var x={name:"Sulabh Jain",number:9460554883,arr:[54,63]};
var y=JSON.parse(JSON.stringify(x));
console.log(x);
console.log(y);
y.name="Chinu";
console.log(x);
console.log(y);
