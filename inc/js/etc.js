(function($) {

	$(".oxsn_scroll_to_link").click(function() {

		var $paired_id = $(this).data('paired');
		$('html, body').animate({scrollTop: $('.oxsn_scroll_to_content[data-paired="' + $paired_id + '"]').offset().top}, 500);

	});

})(jQuery);