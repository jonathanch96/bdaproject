$(document).ready(function(){
	 var width = 17.5;
	
		$('.product-carousel-item').hover(function(){
			$(this).find(".caption").stop().animate({'margin-top':'-74.5%'},{duration:2000,easing:'easeOutBounce'});
		},function(){
			$(this).find(".caption").stop().animate({'margin-top':'-174.5%'},{duration:2000,easing:'easeOutBack'});
		});
	
	 var $sliderContainer = $("#product-carousel-container");
	 var slide= $(".product-carousel-item");
	 var interval;
	
	 var animationSpeed = 1000;
	 var currentSlide = 1;
	 var pause = 6000;
	 function startSlider(){
	 	interval = setInterval(function(){
	 		$sliderContainer.animate({'margin-left':'-='+width+"%"},animationSpeed,function(){
	 			if(++currentSlide === slide.length-5){
	 				currentSlide=1;
	 				$sliderContainer.css('margin-left',0);
	 			}

	 		});
	 	},pause);
	 }
	 function pauseSlider(){
	 	clearInterval(interval);
	 }
	 $sliderContainer
		.on('mouseenter',pauseSlider)
		.on('mouseleave',startSlider);
	startSlider();

});