function Factorial(num){
  if(num===1){
    return num; // This may either return to the outside console or to the inner return
  }
  return num * Factorial(num-1);
}
console.log(Factorial(4));
