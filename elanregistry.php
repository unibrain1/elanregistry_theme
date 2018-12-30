<?php
/*
	Project:  Lotus Elan Registry

	Purpose:  Creating the custom fields for the Elan Regisry.  Uses Meta Box WP plugin - 

	File:  $HeadURL$

	Author: $Author$

	Last Change Date: $LastChangedDate$

 
	Revision: $Rev$

*/
	
//  Meta Box

function input_car( $meta_boxes ) {
	$prefix = 'car-';

	$meta_boxes[] = array(
		'id' => 'car',
		'title' => esc_html__( 'Car', 'registry_car' ),
		'post_types' => array('post', 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'year',
				'name' => esc_html__( 'Year', 'registry_car' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select an Item', 'registry_car' ),
				'options' => array(
					1963 => '1963',
					1964 => '1964',
				),
			),
			array(
				'id' => $prefix . 'model',
				'name' => esc_html__( 'Model', 'registry_car' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select an Item', 'registry_car' ),
				'options' => array(
					'S2' => 'S2',
					'S3' => 'S3',
					'S4' => 'S4',
				),
			),
			array(
				'id' => $prefix . 'picture',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Picture', 'registry_car' ),
				'max_file_uploads' => '4',
			),
			array(
				'id' => $prefix . 'purchase_date',
				'type' => 'date',
				'name' => esc_html__( 'Purchase Date', 'registry_car' ),
				'js_options' => array(),
			),
			array(
				'id' => $prefix . 'description',
				'type' => 'text',
				'name' => esc_html__( 'Description', 'registry_car' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'input_car' );
// End Meta Box
?>
