// What if we want to access the global variable instead of local one here. Well, the window object comes to our rescue. All the global variables are attached to window object and thus we can access the global variable name as shown in example below.

// Historically, JavaScript had a global object with different names in different environments. In the web browsers, the global object is window or frames.The Web Workers API, however, doesn’t have the window object because it has no browsing context. Therefore, the Web Workers API uses self as a global object.Node.js, on the other hand, uses the global keyword to reference the global object.If you write JavaScript code that needs to access the global object, you have to use different syntaxes like window, frames, self, or global.To standardize this, ES2020 introduced the globalThis that is available across environments.

var globalLet = "This is a global variable";
function fun() {
      globalLet = "This is a local variable"; //if u put var and define globalLet,its value will change globally aswell
      console.log(globalLet);
      //console.log(window.globalLet); // This is a global variable
}
fun();
console.log(globalLet);
