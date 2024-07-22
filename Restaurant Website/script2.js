// should be undefined
var x;
console.log(x);

if (x == undefined) 
{
  console.log("x is undefined");
}
//var a="5";
var a;
function test (a)
{
console.log(a/5);
}
test(a);

x = 5;
if (x == undefined) {
  console.log("x is undefined");
}
else {
  console.log("x has been defined");
}
