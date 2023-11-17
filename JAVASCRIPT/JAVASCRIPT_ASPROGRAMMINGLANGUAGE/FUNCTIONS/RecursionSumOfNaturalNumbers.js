// find the sum of first 5 natural numbers 5+4+3+2+1.
function sum(num){
       if(num>=1){
             return num+sum(num-1);
       }
       else return num;
}
var num=5;
var result=sum(num);
console.log(result);
