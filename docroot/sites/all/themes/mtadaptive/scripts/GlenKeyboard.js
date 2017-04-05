(function ($) {
  $(document).ready(function(){
  	
$('a')  
 .each(function(){ // loop through all matched elements
   $(this).removeAttr("tabindex");  
}); 
    });
})(jQuery);