var candidates = [[1,0],[2,0],[3,0],[4,0],[5,0],[0]];
var voters = [1,2,3,5,6,9,4,78,3,1,3,6,2];
for(var i=0;i<=voters.length-1;i++){
  if(voters[i]<=5){
    candidates[voters[i]-1][1]++;
  }
  else{
    candidates[5][0]++;
  }
}
console.log(candidates);
