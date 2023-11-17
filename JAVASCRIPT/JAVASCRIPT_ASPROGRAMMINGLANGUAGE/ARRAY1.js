// Arrays are objects
let A=[];
console.log(A.length);
//  Here, u have not initialised  some indices and than have initialised later ones,the ones that u have not initialised will be holes and initialised as undefined.
A[3]="delhi";
console.log(A[0]);
console.log(A);

console.log(typeof(A));  // array is an object

//
let B = new Array(100,200,300); // An array is created with 3 elements 100,200,300
console.log(B);
let C = new Array(69);// An array is created with 69 elements and all initially defined as undefined
console.log(C);

//
let D = [100,200,300]; // An array is created with 3 elements 100,200,300
console.log(D);
let E = [69]; // An array is created with 1 element as 69
console.log(E);
console.log(E.length);

// An array in javascript can contain elements of different datatypes
let F = ["Sulabh Jain",60,6468656.516,"Thakurganj","65"];
console.log(F);

// You can add an object to an array
let cars = [
  {
    "color": "purple",
    "type": "minivan",
    "registration": new Date('2017-01-03'),
    "capacity": 7
  },
  {
    "color": "red",
    "type": "station wagon",
    "registration": new Date('2018-03-03'),
    "capacity": 5
  }];
