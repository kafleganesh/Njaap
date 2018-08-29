$( document ).ready(function() {
  // main banner slider
  $('.main-slider').bxSlider({
		mode: 'fade'
	});

  // login
  $(".login-icon").click(function(){			
			$(".user-login").toggleClass("form-show");
		});

  //gallery lightbox
  $('.fancybox').fancybox();

   // equail height
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.color-height');
  //equalheight('.work-box');
});


$(window).resize(function(){
   equalheight('.color-height');
 // equalheight('.main article');
});

});