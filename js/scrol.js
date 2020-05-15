 $(window).scroll(function(){ 
               var $el = $('nav'); 
               var isPositionFixed = ($el.css('position') == 'fixed');
           if ($(this).scrollTop() > 100 && !isPositionFixed){ 
               $('nav').css({'position': 'fixed', 'top': '0px'}); 
           }
           if ($(this).scrollTop() < 100 && isPositionFixed)
            {
                $('nav').css({'position': 'static', 'top': '0px'}); 
            } 
            });