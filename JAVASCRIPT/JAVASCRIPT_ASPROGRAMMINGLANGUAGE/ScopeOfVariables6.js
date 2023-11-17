// Here, a variable is declared twice. Once in the globalscope and once in the localscope.
// If the print is present in the globalscope,global variable of the same name will be printed.
// If the print is present in the localscope,local variable of the same name will be printed.
// First, javascript will search for the variable in the currentscope,if the variable is not present, it will search for it in the globalscope.
let globalvariable="This is a global variable";
function abc(){
       let globalvariable="This is a local variable";
       console.log(globalvariable);
}
abc();
console.log(globalvariable);
