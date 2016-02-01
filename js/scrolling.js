jQuery.noConflict();
(function($) {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
})(jQuery);


var jq=jQuery.noConflict();
(function ($){
    {
        $('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
		});
    }
	})(jQuery);

  // Scrollspy: Highlights the navigation menu items while scrolling.
var jq=jQuery.noConflict();
(function ($){
    {  
$('body').scrollspy({
    target: '.navbar-fixed-top'
})
 }
  })(jQuery);

jQuery.noConflict();
(function( $ ) {
  $(function() {
          $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(550); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
     });
})(jQuery);

