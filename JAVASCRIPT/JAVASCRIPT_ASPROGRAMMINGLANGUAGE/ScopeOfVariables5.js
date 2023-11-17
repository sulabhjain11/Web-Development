// You will get the output in other javascript compilers
// OUTPUT: This is a global variable
//                   This is a local variable
// Since the variable localLet is not defined inside the function, the compiler will first search the local scope of the variable,it will than search the global scope of the variable. If the variable is not defined globally, it will be given a global scope
// Even if the variable

let globalLet = "This is a global variable";

function fun() {
localLet = "This is a local variable";
}

fun();

console.log(localLet); // This is a local variable
