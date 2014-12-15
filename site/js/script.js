jQuery(document).ready(function() {
    
    $('ul.menumain li.parent').hover(
        function() {
            $(this).addClass("active");
            $(this).find('> ul').stop(false, true).animate({height:'show'},600);
            //$(this).find('> ul ul').stop(false, true).fadeOut(600);
        },
        function() {
            $(this).removeClass("active");        
            $(this).find('ul').stop(false, true).animate({height:'hide'},600);;
        }
    );
    
    $('ul li:last-child').addClass('lastItem');
    $('ul li:first-child').addClass('firstItem');
    
/*ScrollToTop button*/
    $(function() {
        $(window).scroll(function() {
            if($(this).scrollTop() != 0) {
                $('.rt-block.totop').fadeIn();  
            } else {
                $('.rt-block.totop').fadeOut();
            }
        });
    });
    
/*Avoid input bg in Chrome*/
    if ($.browser.webkit) {
        $('input').attr('autocomplete', 'off');
    }
    
/*Zoom Icon. Portfolio page*/
    $('a.modal').hover(function(){
        $(this).find('span.zoom-icon').animate({opacity: 1, top: '50%'}, 200);
    },function(){
        $(this).find('span.zoom-icon').animate({opacity: 1, top: '-50%'}, 100);
    })

});

var MSIE = false;

jQuery(window).load(function() {
    MSIE = ($.browser.msie) && ($.browser.version <= 8);
      
    if (MSIE){        
      $('div#maximenuCK li.level0>a.maximenuCK').css({'marginLeft':0}).find('>span').css({'left':'-0px'}).parent().css({width: 198, left:0}).find('>span>span').css({'left':'400px'}).show();
      $('div#maximenuCK li.level0>span.separator').css({'marginLeft':0}).find('>span').css({'left':'-0px'}).parent().css({width: 198, left:0}).find('>span>span').css({'left':'400px'}).show();
    }
    
    var _this =  $('div#maximenuCK ul.maximenuCK > li.level0 > a.maximenuCK');
    if ($(_this).parent().hasClass('active')){
            $(_this).parent().stop(true).animate({'paddingLeft': '10px', 'paddingRight': '10px'});
            $(_this).find('>span').css({'left':'-0px'}).stop(true).animate({'left':'0px'}, 400, 'easeOutBack');
            $(_this).find('>span>span').css({'left':'400px'}).stop(true,true).delay(100).animate({'left':'0px'}, 400, 'easeOutExpo');
              
            if (!MSIE){
                $(_this).stop().animate({opacity: 1}, 300, 'easeOutExpo');
            } else {
                $(_this).stop().show();
            }
        }
    var sep =  $('div#maximenuCK ul.maximenuCK > li.level0 > span.separator');
    if ($(sep).parent().hasClass('active')){
            $(sep).parent().stop(true).animate({'paddingLeft': '10px', 'paddingRight': '10px'});
            $(sep).find('>span').css({'left':'-0px'}).stop(true).animate({'left':'0px'}, 400, 'easeOutBack');
            $(sep).find('>span>span').css({'left':'400px'}).stop(true,true).delay(100).animate({'left':'0px'}, 400, 'easeOutExpo');
              
            if (!MSIE){
                $(sep).stop().animate({opacity: 1}, 300, 'easeOutExpo');
            } else {
                $(sep).stop().show();
            }
        }
    
    $('div#maximenuCK ul.maximenuCK > li.level0 > a.maximenuCK').hover(function(){
        if (!$(this).parent().hasClass('active')){
            $(this).parent().stop(true).animate({'paddingLeft': '10px', 'paddingRight': '10px'});
            $(this).find('>span').css({'left':'-0px'}).stop(true).animate({'left':'0px'}, 400, 'easeOutBack');
            $(this).find('>span>span').css({'left':'400px'}).stop(true,true).delay(100).animate({'left':'0px'}, 400, 'easeOutExpo');
              
            if (!MSIE){
                $(this).stop().animate({opacity: 1}, 300, 'easeOutExpo');
            } else {
                $(this).stop().show();
            }
        }
    },function(){
        if (!$(this).parent().hasClass('active')){
            $(this).parent().stop(true).animate({'paddingLeft': '0px', 'paddingRight': '0px', left:0});
            $(this).find('>span').stop(true).animate({'left':'-0px'}, 300, 'easeInBack');
            $(this).find('>span>span').stop(true,true).animate({'left':'400px'},300, 'easeInBack');
            
            if (!MSIE){
              $(this).stop().animate({opacity: 1}, 600, 'easeOutExpo');
            } else {
            }
        }
    }).trigger('mouseout')    
    
     $('div#maximenuCK ul.maximenuCK > li.level0 > span.separator').hover(function(){
        $(this).parent().stop(true).animate({'paddingLeft': '10px', 'paddingRight': '10px'});
        $(this).find('>span').css({'left':'-0px'}).stop(true).animate({'left':'0px'}, 400, 'easeOutBack');
        $(this).find('>span>span').css({'left':'400px'}).stop(true,true).delay(100).animate({'left':'0px'}, 400, 'easeOutExpo');
          
        if (!MSIE){
            $(this).stop().animate({opacity: 1}, 300, 'easeOutExpo');
        } else {
            $(this).stop().show();
        }
    },function(){
        if (!$(this).parent().hasClass('active')){
            $(this).parent().stop(true).animate({'paddingLeft': '0px', 'paddingRight': '0px', left:0});
            $(this).find('>span').stop(true).animate({'left':'-0px'}, 300, 'easeInBack');
            $(this).find('>span>span').stop(true,true).animate({'left':'400px'},300, 'easeInBack');
            
            if (!MSIE){
              $(this).stop().animate({opacity: 1}, 600, 'easeOutExpo');
            } else {
            }
        }
    }).trigger('mouseout')
});