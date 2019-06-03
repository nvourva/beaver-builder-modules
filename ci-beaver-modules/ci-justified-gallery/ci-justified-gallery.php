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
	}
}

FLBuilder::register_module(
	'CIJustifiedGallery',
	array(
		'options' => array(
			'title'    => __( 'Options', 'fl-builder' ),
			'sections' => array(
				'gallery_options' => array(
					'fields' => array(
						'gallery_images'  => array(
							'type'  => 'multiple-photos',
							'label' => __( 'Gallery Images', 'fl-builder' ),
						),
						'image_size'      => array(
							'type'    => 'photo-sizes',
							'label'   => __( 'Image Size', 'fl-builder' ),
							'default' => 'medium',
						),
						'link_to'         => array(
							'type'    => 'select',
							'label'   => __( 'Image Links To', 'fl-builder' ),
							'default' => 'file',
							'options' => array(
								'file'       => __( 'Media File', 'fl-builder' ),
								'attachment' => __( 'Attachment Page', 'fl-builder' ),
								'none'       => __( 'None', 'fl-builder' ),
							),
							'toggle'  => array(
								'file' => array(
									'fields' => array( 'lightbox' ),
								),
							),
						),
						'lightbox'        => array(
							'type'    => 'select',
							'label'   => __( 'Lightbox', 'fl-builder' ),
							'default' => 'yes',
							'options' => array(
								'yes' => __( 'Yes', 'fl-builder' ),
								'no'  => __( 'No', 'fl-builder' ),
							),
						),
						'row_height'      => array(
							'type'    => 'unit',
							'label'   => __( 'Row Height', 'fl-builder' ),
							'default' => 120,
							'slider'  => array(
								'min'  => 50,
								'max'  => 600,
								'step' => 10,
							),
						),
						'gallery_margins' => array(
							'type'    => 'unit',
							'label'   => __( 'Gallery Margins', 'fl-builder' ),
							'default' => 1,
							'slider'  => array(
								'min'  => 0,
								'max'  => 50,
								'step' => 1,
							),
						),
						'last_row'        => array(
							'type'    => 'select',
							'label'   => __( 'Last Row', 'fl-builder' ),
							'default' => 'nojustify',
							'options' => array(
								'nojustify' => __( 'No Justify', 'fl-builder' ),
								'justify'   => __( 'Justify', 'fl-builder' ),
								'hide'      => __( 'Hide', 'fl-builder' ),
								'left'      => __( 'Left', 'fl-builder' ),
								'right'     => __( 'Right', 'fl-builder' ),
							),
						),
						'randomize'       => array(
							'type'    => 'select',
							'label'   => __( 'Randomize Images', 'fl-builder' ),
							'default' => 'no',
							'options' => array(
								'yes' => __( 'Yes', 'fl-builder' ),
								'no'  => __( 'No', 'fl-builder' ),
							),
						),
					),
				),
			),
		),
	)
);
