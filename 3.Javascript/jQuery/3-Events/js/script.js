$(document).ready(function(){
//can shorten to:
// $(function(){

// })

    $('button').on('click', function(){
    }); 

    //same as: 

    $('button').click(function(){
    });    

/////////////////////////////////////////


    $('form button').click(function(event){        // click event
        event.preventDefault();
        $('.play-area').html('New Text');
    });   

    $('form').mouseenter(function (event){      // mouseenter event
        event.preventDefault();
        $('.play-area').html('mouse in form field');
    }); 

    $('form').mouseleave(function (event){       // mouseleave event
        event.preventDefault();
        $('.play-area').html('mouse has left the form field');
    });   

    $('button').first().click(function(event){      // select FIRST
        event.preventDefault();
        $('body').css('background-color', 'orange');
    }); 

    $('button').eq(1).dblclick(function(event){    // select second btn in array[1]  & DOUBLE CLICK
        event.preventDefault();
        $('body').css('background-color', 'pink');
    }); 

    $('body').keydown(function(event){
        console.log(event);
        if (event.keyCode == 13){       // keycode for 'ENTER' = 13
            $('.play-area').html('keydown: '+ event.keyCode + ' (Enter pressed)');
        } 
        console.log('keydown: '+ event.keyCode);
    });

});










// can also write:
var doSomething = function(event){
    event.preventDefault();
    console.log('do something else...');
}