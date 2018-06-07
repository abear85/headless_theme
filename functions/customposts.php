<?php
	function my_custom_post_services() {
        $labels = array(
        'name'               => _x( 'Services', 'post type general name' ),
        'singular_name'      => _x( 'Services', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'home' ),
        'add_new_item'       => __( 'Add New Services' ),
        'edit_item'          => __( 'Edit Service' ),
        'new_item'           => __( 'New Service' ),
        'all_items'          => __( 'All Service' ),
        'view_item'          => __( 'View Service' ),
        'search_items'       => __( 'Search services' ),
        'not_found'          => __( 'No services found' ),
        'not_found_in_trash' => __( 'No services found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Services'
        );

        $args = array(
                        'labels'        => $labels,
                        'description'   => 'Holds services',
                        'public'        => true,
                        'menu_position' => 4,
                        'supports'      => array( 'title', 'excerpt','custom-fields'),
                        'has_archive'   => true,
                        'show_in_rest'	=> true,
                        'menu_icon' => 'dashicons-admin-customizer'
        );
        register_post_type( 'Services', $args );     
    }

    add_action( 'init', 'my_custom_post_services' );

    //meta boxes
    add_filter('rwmb_meta_boxes', 'register_meta_boxes');

function register_meta_boxes( $meta_boxes ) {
    //Secondary Image for Featured
    $meta_boxes[] = array(
	    'id' => 'individualServices',
	    'title' => __( 'Package Includes', 'rwmb' ),
	    'pages' => array('services'),
	    'context' => 'after_editor',
	    'autosave' => true,
	    //List of fields
	    'fields' => array (
	      //IMAGE field
	      array(
	        'name' => 'Package Includes',
	        'id' => 'packageIncludes',
	        'type' => 'text_list',
	        'clone' => true,
	        'options' => array(
	        	'List of services offered' => 'Service',
	        	'Not Included' => 'Optional Text',
	        	'$10 add-on' => 'Opptional Cost'
	        )
	      )                           
	    )                   
	);

	$meta_boxes[] = array(
		'id' => 'servicePrice',
	    'title' => __( 'Service Price', 'rwmb' ),
	    'pages' => array('services'),
	    'context' => 'side',
	    'priority' => 'high',
	    'autosave' => true,
	    //List of fields
	    'fields' => array (
	      //IMAGE field
	      array(
	        'id' => 'packagePrice',
	        'type' => 'text',
	      )                           
	    )                         
	);
	return $meta_boxes;

}   
?>