$(document).ready(function(){
  
  $('.accordion li .title').click(function(){
    $(this).siblings().slideToggle(250, 'linear');
    $(this).find('span').html('-');
    // same as:
    // $(this).children().html('-');  since span is child of title

    var isOpen = $(this).parents('li').data('isOpen');
    $(this).parents('li').data('isOpen', !isOpen);
    

    console.log('isOpen', isOpen);

    if(isOpen){
      $(this).children().html('+');
    }
    else{
      $(this).children().html('-');
    }

    

    $(this).parent().siblings().find('.content').slideUp(250);
    $(this).parent().siblings().find('.title span').html('+');

    $(this).parent().siblings().data('isOpen', false)
  });

});



