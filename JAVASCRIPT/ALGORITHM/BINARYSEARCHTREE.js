function Node(value){
  this.value = value;
  this.left = null;
  this.right = null;
}
// console.log(new Node(5));
// console.log(new Node(55));
class BinarySearchTree{
  constructor(){
    this.root = null;
    console.log("You are present inside the constructor:",this);
  }
  // console.log(this);======this will give error
 a(){
   console.log("You are present inside the regular function inside the class:",this);
 }
}
console.log(new BinarySearchTree());
console.log(new BinarySearchTree());
