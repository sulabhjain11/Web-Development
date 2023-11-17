var a=111,i,c=0;
for(i=2;i<=a;i++){
      if(a%i==0){
        c++;
        if(c>=2) break;
      }
}
if(c==1) console.log(a+" is a prime number");
else console.log(a+" is not a prime number");
