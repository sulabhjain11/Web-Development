// If the two objects have the same property, the property of the first will be overwritten.
var a={name:"Sulabh Jain",number:9460554883,arr:[54,63]};
var b={name:"Chinu",age:22};
var mergedObject=Object.assign(a,b);
console.log(mergedObject);
console.log(a); // a will be changed aswell to the new object
console.log(b);
