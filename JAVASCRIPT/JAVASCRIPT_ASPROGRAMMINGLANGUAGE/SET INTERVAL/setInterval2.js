//  very wrong
var i=1;

function abc(){
  i++;
  console.log(i);
  setInterval(abc,2000);
}
abc();
