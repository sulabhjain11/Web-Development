console.log(this);
let fruit = {
  apple: 10,
  guava: 20,
  mango: "Not present",
  name: function(name1){
    console.log("You have chosen"+name1+"whose quantity is:"+this[name1]);
  }
};
console.log(fruit.name("mango"));
