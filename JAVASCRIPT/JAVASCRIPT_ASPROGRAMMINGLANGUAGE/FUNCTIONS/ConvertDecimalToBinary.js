// https://developer.mozilla.org/en-US/docs/web/javascript/reference/global_objects/object/tostring

// Solution 1====USING tostring
// convert base 10 numbers to other base numbers

/*
[1, 2, 3, 4, 5].toString() // "1,2,3,4,5"
[1, 2, 3, 4, 5].join() // "1,2,3,4,5"

[1, 2, 3, 4, 5].join(" ") // "1 2 3 4 5"
[1, 2, 3, 4, 5].join("-") // "1-2-3-4-5"
*/
var a=50;
console.log(a.toString(2));
console.log(a.toString(8));
console.log(a.toString(10));
console.log(a.toString(16));
var a=[1,2,3,4];
console.log(a.join(""));
var a=[1,2,3,4];
console.log(a.join());
var a=[1,2,3,4];
console.log(a.join("-"));
var a=[1,2,3,4]
console.log(a.toString());
var a=[1,2,3,4]
console.log(a.join(" "));


// Solution 2
function convertDecimalToBinary(num){
        var r;
        var bin=[];
        var c=0;
        while(num>=1){
             r=num%2;
             bin[c]=r;
             num=Math.floor(num/2);
             c++;
     }
     var str=bin.join("");
     console.log(str);
}
var num=50;
convertDecimalToBinary(num);
//console.log(result);
