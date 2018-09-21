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
	
	function my_custom_rssl_teams() {
        $labels = array(
        'name'               => _x( 'Teams', 'post type general name' ),
        'singular_name'      => _x( 'Teams', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'home' ),
        'add_new_item'       => __( 'Add New Teams' ),
        'edit_item'          => __( 'Edit Team' ),
        'new_item'           => __( 'New Team' ),
        'all_items'          => __( 'All Team' ),
        'view_item'          => __( 'View Team' ),
        'search_items'       => __( 'Search Teams' ),
        'not_found'          => __( 'No Teams found' ),
        'not_found_in_trash' => __( 'No Teams found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Teams'
        );

        $args = array(
                        'labels'        => $labels,
                        'description'   => 'Holds Teams',
                        'public'        => true,
                        'menu_position' => 5,
                        'supports'      => array( 'title','custom-fields'),
                        'has_archive'   => true,
                        'show_in_rest'	=> true,
                        'menu_icon' => 'dashicons-groups'
        );
        register_post_type( 'Teams', $args );     
    }

	add_action( 'init', 'my_custom_rssl_teams' );
	
	function my_custom_rssl_seasons() {
        $labels = array(
        'name'               => _x( 'Seasons', 'post type general name' ),
        'singular_name'      => _x( 'Seasons', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'home' ),
        'add_new_item'       => __( 'Add New Seasons' ),
        'edit_item'          => __( 'Edit Seasons' ),
        'new_item'           => __( 'New Seasons' ),
        'all_items'          => __( 'All Seasons' ),
        'view_item'          => __( 'View Seasons' ),
        'search_items'       => __( 'Search Seasons' ),
        'not_found'          => __( 'No Seasons found' ),
        'not_found_in_trash' => __( 'No Seasons found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Seasons'
        );

        $args = array(
                        'labels'        => $labels,
                        'description'   => 'Holds Seasons',
                        'public'        => true,
                        'menu_position' => 6,
                        'supports'      => array( 'title','custom-fields'),
                        'has_archive'   => true,
                        'show_in_rest'	=> true,
                        'menu_icon' => 'dashicons-list-view'
        );
        register_post_type( 'Seasons', $args );     
    }

    add_action( 'init', 'my_custom_rssl_seasons' );

    //meta boxes
    add_filter('rwmb_meta_boxes', 'register_meta_boxes');

	function register_meta_boxes( $meta_boxes ) {
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

		$meta_boxes[] = array(
			'id' => 'individualTeam',
			'title' => __( 'Team', 'rwmb' ),
			'pages' => array('teams'),
			'context' => 'after_editor',
			'autosave' => true,
			//List of fields
			'fields' => array (
			//IMAGE field
			array(
				'name' => 'GM/Owner Name',
				'id' => 'owner',
				'type' => 'text',
			),
			array(
				'name' => 'Keepers',
				'id' => 'keeperDetails',
				'type' => 'text_list',
				'clone' => true,
				'options' => array(
					'FirstName LastName' => 'Player Name',
					'TeamName' => 'Player Team',
					'Forever/1/2/3' => 'Contract Status'
				)
			)                           
			)                   
		);

		$meta_boxes[] = array(
			'id' => 'individualSeason',
			'title' => __( 'Season', 'rwmb' ),
			'pages' => array('seasons'),
			'context' => 'after_editor',
			'autosave' => true,
			//List of fields
			'fields' => array (
			//IMAGE field
			array(
				'name' => 'Year',
				'id' => 'year',
				'type' => 'text',
			),
			array(
				'name' => 'Winner',
				'id' => 'winner',
				'type' => 'text',
			),
			array(
				'name' => 'Runner Up',
				'id' => 'runnerUp',
				'type' => 'text',
			),
			array(
				'name' => 'Regular Season Standings',
				'id' => 'standings',
				'type' => 'text_list',
				'clone' => true,
				'options' => array(
					'1-8' => 'Order',
					'TeamName' => 'Team'
				)
			)                           
			)                   
		);


		return $meta_boxes;

	}   
?>