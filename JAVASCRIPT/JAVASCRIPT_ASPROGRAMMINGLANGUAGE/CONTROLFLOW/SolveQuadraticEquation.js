var a=1,b=-3,c=10;
var D,root1,root2;
D=b*b - 4*a*c;
if(D>0){
     root1=(-b + Math.sqrt(D))/(2*a);
     root2=(-b - Math.sqrt(D))/(2*a);
     console.log("The roots are:"+root1+" "+root2);
}
else if(D<0){
    root1 = (-b / (2 * a)).toFixed(2);
    root2 = (Math.sqrt(-D) / (2 * a)).toFixed(2);

 // result
 console.log(
 `The roots of quadratic equation are ${root1} + ${root2}i and ${root1} - ${root2}i`
);
}

else{
     console.log("The roots are: "+(-b/(2*a))+" "+(-b/(2*a)));
}
