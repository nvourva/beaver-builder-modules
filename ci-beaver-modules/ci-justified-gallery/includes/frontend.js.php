(function($) {
	var gallery   = $('#<?php echo $id; ?>');
	var rowHeight = '<?php echo $settings->row_height; ?>';
	var margins   = '<?php echo $settings->gallery_margins; ?>';
	var lastRow   = '<?php echo $settings->last_row; ?>';
	var randomize = 'yes' === '<?php echo $settings->randomize; ?>' ? true : false;
	gallery.justifiedGallery({
		rowHeight: rowHeight,
		margins: margins,
		border: 0,
		lastRow: lastRow,
		randomize: randomize,
	});
})( jQuery );
