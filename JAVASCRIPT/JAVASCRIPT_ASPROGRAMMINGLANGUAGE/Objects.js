//https://www.hackerrank.com/challenges/js10-objects/topics/javascript-objects
//https://www.hackerrank.com/challenges/js10-class/topics/javascript-classes

// You can store object inside an object
// You can store array inside and object
let x = new String();        // Declares x as a String object
let y = new Number();        // Declares y as a Number object
let z = new Boolean();       // Declares z as a Boolean object


const cars={name:"Toyota",color:"red",seater:5}; // cars is an object, which is a special form of variable.
console.log(cars);
console.log(cars.name);
console.log(cars["name"]);

// this keyword refers to the object it refers to
var person={
     firstname:"Sulabh",
     middlename:"Kumar",
     lastname:"Jain",
     reg_no:"19BCE1384",
     age:22,
     //this.rename:firstname,
     contactno:9460554883,
     fullname:function(){
          return this.firstname + " " + this.middlename +" " + this.lastname; //this or person
     }
};
console.log(person.firstname); //  this will not work here
//console.log(this.rename);
console.log(person["middlename"]);
console.log(person.lastname);
console.log(person.fullname());
console.log(person.firstname+" "+person.middlename+" "+person.lastname);
