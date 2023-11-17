// Find the sum of all values from 0 to the given number.

// CONDITIONS:
             /*The program should terminate as soon as the value becomes 0.
               The number entered should not be negative*/
let sum=0;
function Sum(number){
  if(number===0){ // This if will check for the base condition, after which this function will terminate.
    // here, if the number given by the user is negative, this program will run forever
    return 0;
  }
  return number + Sum(number-1);
}
console.log(Sum(1));//sum();
