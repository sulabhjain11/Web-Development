// [[],[],[],[]] ===== nested loop has to be created.
// Enter the number of rows that you wish to create
let arr = [];
let arr1;
let sum=0;
let row = 10; // ==== therefore, 5 inner arrays
for(let i=0;i<=row-1;i++){
  arr1 = [];
  for(let j=0;j<=i;j++){
     if(i==0) arr1.push(1);
     else if(i==1) arr1.push(1);
     else{
        if(j==0 || j==i){
          arr1.push(1)
        }
        else{
          sum = arr[i-1][j-1]+arr[i-1][j];
          arr1.push(sum);
        }
     }
  }
  arr.push(arr1);
}
console.log(arr);
