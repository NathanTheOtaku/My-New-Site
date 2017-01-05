// var number=2;
// var name="Nathan";
// var number2=2;
// var numberPlus=number+number2;
//
// for(i=0; i<10; i++)
// {
//   alert(i);
//   if(i === 10)
//   {
//     i = 0;
//   }
// }
//
// while(number > 1 && number < 25)
// {
//   number++;
//   alert(number);
// }

// var generatedString = "";
// for (var i = 1; i <= 3; i++)
// {
//     for (var j = 1; j <= 5; j++)
//     {
//         if (i == 1)
//         {
//             if (j == 3)
//             {
//                 generatedString += "O";
//             }
//             else
//             {
//                 generatedString += "X";
//             }
//         }
//         if (i == 2)
//         {
//             if (j >= 2 && j <= 4)
//             {
//                 generatedString += "O";
//             }
//             else
//             {
//                 generatedString += "X";
//             }
//         }
//         if (i == 3)
//         {
//             generatedString += "O";
//         }
//     }
//     generatedString += "\n";
// }
// alert(generatedString);

// function multiplyNumber(x,y) {
//   return x*y;
// }
// alert(multiplyNumber(2,2));
// alert(multiplyNumber(2,8));

// //This is an Object
// var car = {
//   type: "Lexus",
//   model: "ES300",
//   color: "Silver",
//   myAd: function(){
//     return "Type: " + this.type + "\nModel: " + this.model + "\nColor: " + this.color;
//   }
// };
//alert(car.myAd());


// function nameAge(name,age) {
//   if(name=="Spencer"){
//     return "He's my teacher\nAGE:"+age;
//   }
//   else {
//     return name+"\nAGE:"+age;
//   }
// }
//
// function getRandomAbritrary(min,max){
//   Math.random() * (max - min) + min;
// }
//
//
// alert(nameAge("Spencer",24));
// alert(nameAge("Nathan",Math.floor(Math.random());

// var myArray = ["word","next","other","okay","alright",newWord("fine")];
//
// function newWord(word) {
//   return word;
// }
// for (var i = 0; i < myArray.length; i++) {
//   alert(myArray[i]);
// }


//2D Array
// chart = [
//   [1, 2],
//   [3, 4],
//   [5, 6]
// ];
//
// alert(chart[2][0]);

document.getElementById("changeMe").innerHTML += "<b>Test</b>";
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
