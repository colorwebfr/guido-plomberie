

$(document).ready(function () 
{
   $('.btnBurgerMenu').click(function() {
        $('nav.menuHeader').css('left', '0');
        $('.btnBurgerMenu').toggleClass('burger_open');
        if($('.btnBurgerMenu').hasClass('burger_open'))
        {
            $('nav.menuHeader').css('left', '0px');
            $('span.buger1').attr('style', 'transform: rotate(135deg);top: 10px;');
            $('span.buger2').attr('style', 'transform: rotate(135deg);top: 10px;');
            $('span.buger3').attr('style', 'transform: rotate(45deg);top: 10px;');
        }
        else
        {
            $('nav.menuHeader').css('left', '-100%');
            $('span.buger1').attr('style', 'transform: rotate(90deg);top: 0;');
            $('span.buger2').attr('style', 'transform: rotate(90deg);top: 13px;');
            $('span.buger3').attr('style', 'transform: rotate(90deg);top: 25px;');
        }
   });
});