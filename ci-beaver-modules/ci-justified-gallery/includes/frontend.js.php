(function($) {
	var gallery   = $('#<?php echo $id; ?>');
	// var rowHeight = gallery.data('row-height');
	// var margins   = gallery.data('margins');
	// var border    = gallery.data('border');
	// var lastRow   = gallery.data('last-row');
	// var randomize = gallery.data('randomize');
	// var selector  = gallery.data('selector');
	// gallery.removeClass('hide-gallery');
	gallery.justifiedGallery({
		// rowHeight: rowHeight,
		// margins: margins,
		// border: 0,
		// lastRow: lastRow,
		// randomize: randomize,
		// selector: selector,
	});
})( jQuery );
