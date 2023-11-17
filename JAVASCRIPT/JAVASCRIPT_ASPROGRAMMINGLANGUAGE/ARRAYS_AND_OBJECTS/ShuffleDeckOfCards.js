//shuffle the deck of cards
var cards=[];
const suits=["Spades","Diamonds","Clubs","Hearts"];
const values=["Ace","2","3","4","5","6","7","8","9","10","Jack","Queen","King"];
for (var i = 0; i < suits.length; i++) {
         for (var j = 0; j < values.length; j++) {
                   var a={suit:suits[i],value:values[j]};
                   cards.push(a);
         }
}
console.log(cards);
// shuffling the deck of cards
for (var i = cards.length-1; i >0; i--) {
      var j=Math.floor(Math.random()*i);
      var temp=cards[i];
      cards[i]=cards[j];
      cards[j]=temp;
}
console.log("The first five cards are: ");
for(var i=0;i<=4;i++){
      console.log(cards[i].suit+" "+cards[i].value);
}
