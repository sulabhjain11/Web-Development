// If u have defined a varible, globally, and initialised it inside a function, you will only be able to use it inside that function
let globalvariable="This is a global variable";
function abc(){
    let localvariable="This is a local variable.";
    console.log(globalvariable);
    console.log(localvariable);
}
abc();
console.log(globalvariable);
console.log(localvariable);
// If u have defined a variable inside a function,you will be able to access the variable only inside that function
// If u have defined a function globally,even if u have initialised it in a function,it remains a global variable
