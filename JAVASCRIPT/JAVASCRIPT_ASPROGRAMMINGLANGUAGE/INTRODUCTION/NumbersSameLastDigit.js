// check whether the last digit of three numbers is same or not
var a=[18638,656,68]
var i,b,c=0;
b=a[0]%10;
for(i=1;i<=2;i++){
       if((a[i]%10)!=b) {c=1;break;}
}
if(c==1)console.log("different last three digits");
else console.log("same last digits");
