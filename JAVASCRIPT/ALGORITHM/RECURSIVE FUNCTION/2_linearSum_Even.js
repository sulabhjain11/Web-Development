// Find the sum of even numbers from 0 to the number given by the user.
/* You must be careful because decrementation is taking place.
   Since, you are decrementing by 1, there will be no problem with the base condition.
   If the decrementing by a number more than 1, there may be a problem.*/
function Sum(num){
  if(num===0){//base condition
     return num;
  }
  else if(num%2===1){
     return Sum(num-1);
  }
  return num + Sum(num-1);
}
console.log(Sum(6));
