$(document).ready(function(){
  // $('p') // selector in jQuery; $ is shortcut for jQuery
    $('p:first').css('color', 'royalblue');

    $('p:last').css('color', '#FA92FF');

    // can pick first, last, odd, & even elements
    // can also do elements greater than  $('p:gt(0)')

    $('p:gt(2)').css('font-size', '20pt'); // selects 'p' elements at greater index than two in the array

    $('p').eq(2).css('font-size', '60px'); // get emlement in position 2

    $('p:contains("live in")').css('color', 'white'); // selects 'p' elements with the string 'live in'

    $('li:first').css('font-size', '60px');
    //same as:
    $('li').first().css('font-size', '60px');

    $('li').not('.chess').css('text-decoration', 'underline');


    $('li, ul').css('color', 'forestgreen');

    $('.living').css('background-color', 'orange');

    $('div').css('background-color', '#D3FFCD');

    $('body').css('background-color', 'rgb(255, 215, 138)');

});