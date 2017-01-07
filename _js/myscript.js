// document.getElementById("changeMe").innerHTML += "<b>Test</b>";
// document.getElementById("changeMe").style.color = myColor();

var hex = [0,1,2,3,4,5,6,7,8,9,"A","B","C","D","E","F"];

function randomHex(max, min)
{
  return hex[parseInt((Math.random() * (max - min + 1)), 10) + min];
}

function changeText()
{
  var text = document.getElementById("myText").value
  document.getElementById("changeMe").innerHTML = text;
}

function myColor() {
  var r1 = randomHex(15,0);
  var r2 = randomHex(15,0);
  var r3 = randomHex(15,0);
  var r4 = randomHex(15,0);
  var r5 = randomHex(15,0);
  var r6 = randomHex(15,0);
  document.getElementById("changeMe").style.color = "#" + r1 + r2 + r3 + r4 + r5 + r6;
}
