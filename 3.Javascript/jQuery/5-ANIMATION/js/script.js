$(document).ready(function(){

  // COMMENT OUT ALL OPTIONS BUT ONE AT TIME TO SEE HOW THEY WORK

//////////////////////////////////////////////////

//   // OPTION 1: USING CSS CLASSES (ADD/REMOVE CLASS METHOD)
//   // need to turn on transition on .box li in CSS 

//       $('.box1 li').click(function(){
//         $(this).toggleClass('open'); 
//         $(this).siblings().removeClass('open');
//       });

// //////////////////////////////////////////////////

//   // OPTION 2: FADE IN/OUT METHOD
      
//       $('button').click(function(){
//           $('.box1 li').fadeIn(200);
//       });

//       // this fade out makes it go to display: none;
//       $('.box1 li').click(function(){
//           $(this).fadeOut(500);
//       });

// //////////////////////////////////////////////////


//   // Option 3: Slide Toggle

//       $('button').click(function(){ // CLICK animate btn to bring back
//           $('.box1 li').slideToggle(300);
//       });

//       // this fade out makes it go to display: none;
//       $('.box1 li').click(function(){
//           $(this).slideToggle(500);
//       });

  //////////////////////////////////////////////////

  // Option 4: Use ANIMATE Height

    $('button').click(function() {
        $('.box1 li:first').slideToggle(500);
    });

    $('.box1 li').click(function() {    // animate needs to work with object
        $(this).animate({
          'height': 100
        }, 1000, function(){ // function to listen for when it's done
          $(this).appendTo('.box2');
        });  // linear, easeInOut need plugin ? 
    });




  });








