// If u have defined and initialised a varible, globally, you will not be able to use it inside a function
var globalvariable="This is a global variable.";
function abc(){
    var localvariable="This is a local variable.";
    console.log(globalvariable);
    console.log(localvariable);
}
abc();
// If you call abc in the first line, the function will be called before globalvariable is defined======OUTPUT:undefined  and This is a local variable.
