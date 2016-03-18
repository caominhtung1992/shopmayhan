//Siêu Deeds
jQuery(function($) {
	/** Refresh captcha **/

	$('.refresh-captcha').click(function(){
		var elem = $(this);
		if(elem.hasClass('disabled'))
			return false;

		$.ajax({
            url: $('#captcha-ajax-url').val(),
            type: "get",
            dataType: "json",
            beforeSend: function() {
            	elem.addClass('disabled');
            },
            success: function(res){
				elem.removeClass('disabled');
				elem.prev().attr('src', '/images/captcha/'+res.captcha+'.png');
				$('#captcha-field').val(res.captcha);
            }
        });

		return false;
	});
	
	$(".slider-container .wrap-slide").carouFredSel({
		scroll		: {
			fx			: "crossfade"
		},
		auto: {
			timeoutDuration: 4000,
			duration: 1000
		},
		items		: {
			visible		: 1,
			width		: 940
		},
		pagination  : ".slider-paging"
	});

    $(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers: {
			overlay: {
			  locked: false
			}
		}
	});
});