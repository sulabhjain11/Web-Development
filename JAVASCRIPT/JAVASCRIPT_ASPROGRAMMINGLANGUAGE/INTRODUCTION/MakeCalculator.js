// making a simple calculator
var num1=5;
var num2=0;
var result;
var operator='/';
switch(operator){
       case '+': result=num1+num2;
                     console.log(result);
                     break;
       case '-': result=num1-num2;
                     console.log(result);
                     break;
       case '*': result=num1*num2;
                     console.log(result);
                     break;
       case '/': if(num2==0) console.log("error");
                    else {result=num1/num2;console.log(result);}
                    break;
       default:console.log("Enter a valid input");
                   break;
}
