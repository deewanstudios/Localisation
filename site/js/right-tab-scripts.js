jQuery(document).ready(function($) {
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
    $('.apartment_styles div.k2ItemsBlock ul').css({width:(($(this).find('.apartment_styles div.k2ItemsBlock ul>li').length-1)*240)-39})
    $('.apartment_styles div.k2ItemsBlock ul li.itemIsFeatured').append('<span class="new"></span>')
    function centered_menu(){
        $('.wrapper').css({minHeight:'100%'})
        if($('html').height()>$('.wrapper').height()){
                $('.wrapper').css({minHeight:$('html').height()})
        }
            
    }
    $('div.smile a').hover(function(){$(this).find('img').stop().animate({top:-5},200)},function(){$(this).find('img').stop().animate({top:0},200)})
    $('#rt-sidebar-a').prepend('<div class="tabs_container"></div>')
    $('#rt-sidebar-a').prepend('<ul class="tabs_nav"></ul>')
    $('.tabs').each(function(n){
        $(this).find('>div').appendTo('.tabs_container')
        $(this).find('>.moduleTabTitle').appendTo('.tabs_nav').wrap('<li></li>')
    })
    $('.tabs .moduleTabTitle').remove()
    $('.tabs').parents('.rt-block').parent().remove()
    $('.tabs_nav li').eq(0).addClass('selected')
    $('.tabs_container>div').hide().eq(0).show()
    $('.tabs_nav a').click(function(){
        if(!$(this).parent().hasClass('selected')){
        $('.tabs_nav li').removeClass('selected')
        $(this).parent().addClass('selected')
        $('.tabs_container>div').hide()
        $($(this).attr('href')).fadeIn(800)
        }
        return false
    })
    
    centered_menu()
    $(window).resize(function(){
        centered_menu()
    })
    
/*Zoom Icon. Portfolio page*/
    $('#port a.modal').hover(function(){
        $(this).find('img').stop(true, true).animate({opacity:.14}).next().stop(true, true).animate({bottom: '50%'}).next().stop(true, true).animate({top:'50%'});
    },function(){
        $(this).find('img').stop(true, true).animate({opacity:1}).next().stop(true, true).animate({bottom:'100%'}).next().stop(true, true).animate({top:'100%'});
    })

});