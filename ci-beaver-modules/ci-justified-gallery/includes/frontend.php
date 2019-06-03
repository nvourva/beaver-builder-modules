<?php

$image_ids = $settings->gallery_images;

?>

<div id="<?php echo esc_attr( $id ); ?>" class="justified-gallery">
	<?php foreach ( $image_ids as $image_id ) : ?>
		<?php
			$img      = wp_get_attachment_image_src( $image_id, $settings->image_size );
			$img_full = wp_get_attachment_url( $image_id );
			$att_link = get_attachment_link( $image_id );
			// $link     = $settings['gallery_link'];
			// $link_to  = $link === 'file' ? $img_full : $att_link;
		?>
		<div>
			<img src="<?php echo esc_url( $img['0'] ); ?>" alt="<?php echo esc_attr( wp_get_attachment_caption( $image_id ) ); ?>">
		</div>
	<?php endforeach; ?>
</div>