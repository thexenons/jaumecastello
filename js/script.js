$(function(){
    $('header .mobile-menu').on('click',function(){
        if ($('header #mobile-menu').hasClass('active'))
        {
            $('header #mobile-menu').removeClass('active')
        }
        else
        {
            $('header #mobile-menu').addClass('active')
        }
    })
})