const abc={movie_name:"Mr. Fantastic Fox",
                  movie_budget:1000000000,
                  genre:["fantasy","action","sci-fi"],
                  greet:function(){console.log("Hello there!!");},
                  cast:{actor:"Shahrukh Khan", actress:"Kriti Sanon",no:3,genre:"Genre"}
};
console.log(abc);
console.log(abc.movie_name);
console.log(abc.movie_budget);
console.log(abc.genre[1]);
abc.greet();
console.log(abc.cast.actor);
console.log(abc.cast.genre);
const key = abc.hasOwnProperty("cast");//cast.actor?
console.log(key);
if(key){
  console.log("The property is present in the object");
}
else console.log("The property is not present in the object");
