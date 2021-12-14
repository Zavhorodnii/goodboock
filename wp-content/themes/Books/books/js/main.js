'use strict'

// scroller Top
let $btnTop = $(".btn-top");
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 200){
		$btnTop.fadeIn();
	}else{
		$btnTop.fadeOut();
	}
});

$btnTop.on("click", function(){
	$("body,html").animate({scrollTop:0}, 900)
});

let $header = $(".header");
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 2){
		$header.addClass('active');
	}
	else{
		$header.removeClass('active');
	}
});


//footer 

let heightFooter = $('.fixed-footer').css('height');
$('.body__wrapper').css('margin-bottom', heightFooter);


// burger

$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});



$(document).ready(function() {
	$('.popup-link').magnificPopup();
});