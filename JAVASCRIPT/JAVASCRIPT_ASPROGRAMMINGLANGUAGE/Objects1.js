console.log("Hello"=="Hello");
console.log(new String("Hello")==new String("Hello"));


// define String using three ways
var a="Hello";
console.log(a);
console.log(typeof(a));
var b=String("Hello");
console.log(b);
console.log(typeof(b));
var c=new String("Hello");
console.log(c);
console.log(typeof(c));


// Javascript has to main categories: Primitive and Object.
/*
var s="test";
Here, "s" is primitive.
Here, "s" does not have any methods, like charAt,index,etc.
"s" is just a pointer to some memory location.
So,how does s.charAt(2) work?
                "s" is not an instance of string.
                When u call a method on a varible,and that variable hold any PRIMITIVE TYPE(Number,String,Boolean), Javascript will do three steps:
                             Create an object of the corresponding type.
                             Call a specific method on the instance.
                             Delete the instance immediately.
              Ex. let language="Javascript";
                    let str=language.substring(2);

                    // behind scenerio done by Javascript
                    let language="Javascript";
                    let tmp=new String(language);//converting primitive varible to corresponding object.
                    let str=imp.substring(2);
                    tmp=null;
*/
// You can create objects in threeways in Javascript:using a new operator, object literal, and a constructor function.
var myObject2 = new Object(); //using the new operator
console.log(typeof(myObject2));//object

var myObject3 = {};//using the object literal ({})
console.log(typeof (myObject3));//object

//using the constructor function
function MyUnknownObject(property1, property2) {

    this.property1 = property1;
    this.property2 = property2;

}

var myObject4 = new MyUnknownObject("JavaSript", 23);
console.log(typeof (myObject4));//object
//https://www.c-sharpcorner.com/article/javascript-primitive-reference-types/


let s = new String('JavaScript');
console.log(s);
/*
When you create an object of a reference type using the new operator, the object will stay in the memory until it goes out of scope.
The following variable s will stay on the heap until it goes out of the scope:

let s = 'JavaScript';
s.language = 'ECMAScript';
console.log(s.language); // undefined
In this example, we attempted to access the language property of the s variable and received a value of undefined instead of 'ECMAScript':

console.log(s.language); // undefined
Code language: JavaScript (javascript)
The reason is that the following code creates a String object and assigns a value to the language property.

s.language = 'ECMAScript';
Code language: JavaScript (javascript)
However, the String object with the language property only exists during the execution of this line of code.

It’s not recommended to explicitly create primitive wrapper objects like the following:

let n = new Number(10);
let s = new String('JS');
let b = new Boolean(false);
*/
//https://javascript.info/reference-type
//https://stackoverflow.com/questions/17256182/what-is-the-difference-between-string-primitives-and-string-objects-in-javascrip
