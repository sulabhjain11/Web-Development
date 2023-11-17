const a=5;
{
  const a=60;
  console.log(a);
}
console.log(a);
// const cannot be redefined or reinitiaised in the SAME LEVEL
//a=59;
//console.log(a);

const arr=['hello','there','hi'];
console.log(arr);
arr[2]='ooo';
arr[3]='ooo';
console.log(arr);
