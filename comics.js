;(function( window, $ ){
  "use strict";    
  var JPP = window.JPP = ( typeof window.JPP !== "undefined" ) ? window.JPP : {};
  ( JPP.common = function(){
	  return{
	    _init : function(){
		    $( document ).ready(function(){
        $(".alignnone").each(function(index,el){
		      var $el = $(el);
          $el.removeAttr("height").css("max-width", $el.width()).attr("width", "100%")});
		    });
     /*   $( "#wrap" ).on('movestart', function(e) {
          if ((e.distX > e.distY && e.distX < -e.distY) ||
              (e.distX < e.distY && e.distX > -e.distY)) {
            e.preventDefault();
          }
        });
       $( "#wrap" ).on("swipeleft",function(){
          if ($( "[rel=next]" ).length) {
            window.location.href = $( "[rel=next]" ).attr("href");  
          }
          
        });
        $( "#wrap" ).on("swiperight",function(){
          if ($( "[rel=prev]" ).length) {
            window.location.href = $( "[rel=prev]" ).attr("href");
          }
        });
               var $div = $("<div/>").text("hint: you can navigate through posts by swiping left and right").css({"position":"absolute", "top":"200px", "width" : "300px", "text-align" : "center", "padding" :"5px","background" : "#fff", "opacity" : "0"});
    $("body").append($div);
    $($div).animate({"opacity" : "1", "left":"40%"}, 5000, function(){ $($div).animate({"opacity" : "0", "left":"100%"}, 2000, function(){ }) });*/
      }
	  }
  }())._init();
}(window, jQuery));