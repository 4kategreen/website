// make an .even() function
// this was in a comment on jquery.com
	(function($) {
  $.fn.even = function() {
   var jQ = $();
   jQ.context = this.context;
   jQ.selector = this.selector;
   for (var i = j = 0, l = this.length; i < l; i += 2, j++)
   jQ[j] = this[i];
   return jQ;
  };
 })(jQuery);