console.log("hi");


function sayHi() {
  alert("hi");
}


function colorChange() {
  var element = document.getElementById('element');
  element.style.background = '#ff00aa';
}

function changePic() {
  var image = document.getElementById('kitty');

  if ( image.src == 'file:///Users/cat/Desktop/FEWD%20app/img/kitty2.jpg' ) {
    // debugger;

    image.src = 'img/kittens.jpg';
  } else {
    // debugger;
    image.src = 'img/kitty2.jpg';
  } 
} 


// var customer = {};
// var person = {};


// var customer1 = {
//   name: "Sarah",
//   gender: "female"
// };

// var customer2 = {
//   name: "Louis",
//   gender: "male",
//   children: [child1, child2, child3]
// };


// if ( customer1.name == "Sarah" ) {
//   console.log("Hi ", person.name);
// } else {
//   console.log("Wrong!");
// }


// var arr = ["cat","dog","bug","bird"];


// var activeCustomers = [customer1, customer2];


// console.log( activeCustomers[1] );


