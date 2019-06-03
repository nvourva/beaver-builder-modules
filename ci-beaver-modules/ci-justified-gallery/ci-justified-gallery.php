<?php

class CIJustifiedGallery extends FLBuilderModule {

	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Justified Gallery', 'fl-builder' ),
				'description'     => __( 'What it says on the tin!', 'fl-builder' ),
				'group'           => __( 'CSSIgniter Modules', 'fl-builder' ),
				'category'        => __( 'Image Modules', 'fl-builder' ),
				'dir'             => MY_MODULES_DIR . 'ci-justified-gallery/',
				'url'             => MY_MODULES_URL . 'ci-justified-gallery/',
				'icon'            => 'button.svg',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'         => true, // Defaults to true and can be omitted.
				'partial_refresh' => false, // Defaults to false and can be omitted.
			)
		);

		$this->add_css( 'justified-gallery', $this->url . 'css/justifiedGallery.min.css' );
		$this->add_js( 'justified-gallery', $this->url . 'js/jquery.justifiedGallery.min.js', array( 'jquery' ), '3.6.3', true );
		// $this->add_js( 'ci-justified-gallery', $this->url . 'js/ci-justified-gallery.js', array( 'justified-gallery' ), '1.0.0', true );
	}
}

FLBuilder::register_module(
	'CIJustifiedGallery',
	array(
		'options' => array(
			'title'    => __( 'Options', 'fl-builder' ),
			'sections' => array(
				'my-section-1' => array(
					'fields' => array(
						'gallery_images'       => array(
							'type'  => 'multiple-photos',
							'label' => __( 'Gallery Images', 'fl-builder' ),
						),
						'image_size' => array(
							'type'    => 'photo-sizes',
							'label'   => __( 'Image Size', 'fl-builder' ),
							'default' => 'medium',
						),
					),
				),
			),
		),
	)
);
