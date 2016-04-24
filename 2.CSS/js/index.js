console.log("hi");


function sayHi() {
  alert("hi");
}


function colorChange() {
  var element = document.getElementById('element');
  element.style.background = '#ff00aa';
}

function changePic() {
  var image = document.getElementById('pic1');

  if ( image.src == '/img/img2.gif'){

    image.src = '/img/img2.gif';
  } else {
    // debugger;
    image.src = '/img/img1.gif';
  } 
} 