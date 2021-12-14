'use strict'

// scroller Top
let $btnTop = jQuery(".btn-top");
jQuery(window).on("scroll", function(){
	if (jQuery(window).scrollTop() >= 200){
		$btnTop.fadeIn();
	}else{
		$btnTop.fadeOut();
	}
});

$btnTop.on("click", function(){
	jQuery("body,html").animate({scrollTop:0}, 900)
});

let $header = jQuery(".header");
jQuery(window).on("scroll", function(){
	if (jQuery(window).scrollTop() >= 2){
		$header.addClass('active');
	}
	else{
		$header.removeClass('active');
	}
});


//footer 

let heightFooter = jQuery('.fixed-footer').css('height');
jQuery('.body__wrapper').css('margin-bottom', heightFooter);


// burger

jQuery(document).ready(function($) {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});



jQuery(document).ready(function($) {
	$('.popup-link').magnificPopup();
});

jQuery(function ($) {
	$('.js_send_form').submit(function (event) {
		event.preventDefault();

		let formData = new FormData();
		let $form = $(this)

		let $name = $form.find('.js_name');
		let $mail = $form.find('.js_mail');
		let $message = $form.find('.js_message');
		let $checkbox = $form.find('.js_checkbox');
		// console.log($checkbox);
		if (!$checkbox.is(":checked")){
			console.log('error');
			$checkbox.addClass('error');
			return;
		}

		formData.append('action', 'js_send_mess');
		formData.append('name', $name.val().trim());
		formData.append('mail', $mail.val().trim());
		formData.append('message', $message.val());

		$.ajax({
			url: window.ajax,
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			dataType: 'json',
			success: function (data) {
				if(data.result)
					alert('Сообщение отправлено');
				else
					alert('Ошибка')
			}
		})
	})
})