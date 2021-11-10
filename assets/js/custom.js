jQuery(document).ready(function ($) {

  // Custom modal
	$('.modal-toggle').on('click', function(e) {
	  e.preventDefault();
	  
	  var this_data_modal = $(this).data('modal');
  	$('body').addClass('open-modal');
	  $('.modal#' + this_data_modal).addClass('is-visible');
	});

	$('[data-close="close"]').on('click', function(e) {
		e.preventDefault();
		$('body').removeClass('open-modal');
	  $(this).closest('.modal').removeClass('is-visible');
	});
	// end

  
});


