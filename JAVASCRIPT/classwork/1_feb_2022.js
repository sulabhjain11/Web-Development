var cusNum = 255644;
var dataUsage = 301; // in MB
var cost=0;
if(dataUsage<=240){
  cost=35;
}
else if(dataUsage>=241 && dataUsage<=1000){
  if(dataUsage<=300) cost=140;
  else cost = 140+(dataUsage-300)*0.3;
}
else if(dataUsage>=1001 && dataUsage<=2000) {
  if(dataUsage<=1600) cost=240;
  else cost = 240+(dataUsage-1600)*0.5;
}
else {
  if(dataUsage<=2900) cost=790;
  else cost = 790+(dataUsage-2900)*0.3
}
console.log(cost);
