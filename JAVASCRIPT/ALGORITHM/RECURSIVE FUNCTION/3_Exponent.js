function Power(num,expo){
  if(expo===1){
    return num;
  }
  return num*Power(num,expo-1);
}
console.log(Power(3,3));
