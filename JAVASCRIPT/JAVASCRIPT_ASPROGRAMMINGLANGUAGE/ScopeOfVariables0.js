var iAmGlobal = "some val"; //Global variable declaration

//Any place in other part of code

function doSomething()
{
    //iAmGlobal = "changed value";
    console.log(iAmGlobal); //I am accessible here too !!
}
doSomething();
