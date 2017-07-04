// $(function(){
//
//     $('a[href^="#"]').click(function(e){
//         var target = $(this).attr('href');
//         var strip = target.slice(1);
//         var anchor = $("a[name='" + strip +"']");
//
//         e.preventDefault();
//
//         $('html , body').animate({
//
//             scrollTop: anchor.offset().top
//
//         }, 'slow');
//     });
// });

$('a[href^="#"]').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 50)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
});