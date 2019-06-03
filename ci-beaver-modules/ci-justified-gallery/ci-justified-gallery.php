<?php

class CIJustifiedGallery extends FLBuilderModule {

	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Justified Gallery', 'ci-beaver-modules' ),
				'description'     => __( 'What it says on the tin!', 'ci-beaver-modules' ),
				'group'           => __( 'CSSIgniter Modules', 'ci-beaver-modules' ),
				'category'        => __( 'Image Modules', 'ci-beaver-modules' ),
				'dir'             => CI_MODULES_DIR . 'ci-justified-gallery/',
				'url'             => CI_MODULES_URL . 'ci-justified-gallery/',
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
			'title'    => __( 'Options', 'ci-beaver-modules' ),
			'sections' => array(
				'gallery_options' => array(
					'fields' => array(
						'gallery_images'  => array(
							'type'  => 'multiple-photos',
							'label' => __( 'Gallery Images', 'ci-beaver-modules' ),
						),
						'image_size'      => array(
							'type'    => 'photo-sizes',
							'label'   => __( 'Image Size', 'ci-beaver-modules' ),
							'default' => 'medium',
						),
						'link_to'         => array(
							'type'    => 'select',
							'label'   => __( 'Image Links To', 'ci-beaver-modules' ),
							'default' => 'file',
							'options' => array(
								'file'       => __( 'Media File', 'ci-beaver-modules' ),
								'attachment' => __( 'Attachment Page', 'ci-beaver-modules' ),
								'none'       => __( 'None', 'ci-beaver-modules' ),
							),
							'toggle'  => array(
								'file' => array(
									'fields' => array( 'lightbox' ),
								),
							),
						),
						'lightbox'        => array(
							'type'    => 'select',
							'label'   => __( 'Lightbox', 'ci-beaver-modules' ),
							'default' => 'yes',
							'options' => array(
								'yes' => __( 'Yes', 'ci-beaver-modules' ),
								'no'  => __( 'No', 'ci-beaver-modules' ),
							),
						),
						'row_height'      => array(
							'type'    => 'unit',
							'label'   => __( 'Row Height', 'ci-beaver-modules' ),
							'default' => 120,
							'slider'  => array(
								'min'  => 50,
								'max'  => 600,
								'step' => 10,
							),
						),
						'gallery_margins' => array(
							'type'    => 'unit',
							'label'   => __( 'Gallery Margins', 'ci-beaver-modules' ),
							'default' => 1,
							'slider'  => array(
								'min'  => 0,
								'max'  => 50,
								'step' => 1,
							),
						),
						'last_row'        => array(
							'type'    => 'select',
							'label'   => __( 'Last Row', 'ci-beaver-modules' ),
							'default' => 'nojustify',
							'options' => array(
								'nojustify' => __( 'No Justify', 'ci-beaver-modules' ),
								'justify'   => __( 'Justify', 'ci-beaver-modules' ),
								'hide'      => __( 'Hide', 'ci-beaver-modules' ),
								'left'      => __( 'Left', 'ci-beaver-modules' ),
								'right'     => __( 'Right', 'ci-beaver-modules' ),
							),
						),
						'randomize'       => array(
							'type'    => 'select',
							'label'   => __( 'Randomize Images', 'ci-beaver-modules' ),
							'default' => 'no',
							'options' => array(
								'yes' => __( 'Yes', 'ci-beaver-modules' ),
								'no'  => __( 'No', 'ci-beaver-modules' ),
							),
						),
					),
				),
			),
		),
	)
);
