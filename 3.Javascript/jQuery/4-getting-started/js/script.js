$(document).ready(function(){
  
    $('button').click(function(){

      if($(this).hasClass('dimensions-button')){  // 'this' is the selector 
        var width = $('.play-area').outerWidth(true); //.width() extracts padding, margins, border...so must use outerWidth()
        var height = $('.play-area').outerHeight(true);  
        $('.play-area').html('dimensions: ' + width + ' x ' + height);
        console.log(width + ' x ' + height);
      }

      

      if($(this).hasClass('html-button')){  // 'this' is the selector 
        console.log('play area html', $('.play-area').html()) ;
      }

      if($(this).hasClass('css-button')){  // 'this' is the selector 
        console.log('play area html', $('.play-area').html()) ;
      }

      if($(this).hasClass('css-button')) {
        var newName = $(this).data('newName');
        $('.play-area').removeClass('groovy boring').addClass(newName);

        console.log(newName);
      }

      if($(this).is('.link-button')) {
        var newUrl = $(this).data('url');
        console.log($('a').attr('target'));
        console.log(newUrl);
        $('a').attr('href', newUrl);
      }


      // console.log('clicked ' + event.target);
    });

})


