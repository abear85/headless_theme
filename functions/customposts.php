<?php
	//add_theme_support( 'post-thumbnails' );
	
	

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
	
	function my_custom_rssl_players() {
        $labels = array(
        'name'               => _x( 'Players', 'post type general name' ),
        'singular_name'      => _x( 'Players', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'home' ),
        'add_new_item'       => __( 'Add New Players' ),
        'edit_item'          => __( 'Edit Player' ),
        'new_item'           => __( 'New Player' ),
        'all_items'          => __( 'All Player' ),
        'view_item'          => __( 'View Player' ),
        'search_items'       => __( 'Search Players' ),
        'not_found'          => __( 'No Players found' ),
        'not_found_in_trash' => __( 'No Players found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Players'
        );

        $args = array(
			'labels'        => $labels,
			'description'   => 'Holds Players',
			'public'        => true,
			'menu_position' => 4,
			'supports'      => array( 'title','custom-fields','thumbnail'),
			'has_archive'   => true,
			'show_in_rest'	=> true,
			'menu_icon' => 'dashicons-businessman'
        );
        register_post_type( 'Players', $args );     
    }

	add_action( 'init', 'my_custom_rssl_players' );

	function best_albums() {
        $labels = array(
        'name'               => _x( 'Albums', 'post type general name' ),
        'singular_name'      => _x( 'Albums', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'home' ),
        'add_new_item'       => __( 'Add New Albums' ),
        'edit_item'          => __( 'Edit Album' ),
        'new_item'           => __( 'New Album' ),
        'all_items'          => __( 'All Albums' ),
        'view_item'          => __( 'View Album' ),
        'search_items'       => __( 'Search Albums' ),
        'not_found'          => __( 'No Albums found' ),
        'not_found_in_trash' => __( 'No Albums found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Best Albums'
        );

        $args = array(
			'labels'        => $labels,
			'description'   => 'Holds Albums',
			'public'        => true,
			'menu_position' => 4,
			'supports'      => array( 'title','custom-fields','thumbnail','excerpt'),
			'has_archive'   => true,
			'show_in_rest'	=> true,
			'taxonomies'    => array( 'category' ),
			'menu_icon' => 'dashicons-format-audio'
        );
        register_post_type( 'Albums', $args );     
    }

	add_action( 'init', 'best_albums' );

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
				// array(
				// 	'name' => 'Keepers',
				// 	'id' => 'keeperDetails',
				// 	'type' => 'text_list',
				// 	'clone' => true,
				// 	'options' => array(
				// 		'FirstName LastName' => 'Player Name',
				// 		'TeamName' => 'Player Team',
				// 		'Forever/1/2/3' => 'Contract Status'
				// 	)
				// )                           
			)                   
		);

		$meta_boxes[] = array(
			'id' => 'playerDetails',
			'title' => __( 'Player Details', 'rwmb' ),
			'pages' => array('players'),
			'context' => 'after_editor',
			'autosave' => true,
			//List of fields
			'fields' => array (
				//IMAGE field
				array(
					'name'	=>	'Contract Length',
					'id'	=>	'contractLength',
					'type'	=>	'select',
					'options'	=> array(
						'forever'	=> 'Forever',
						'1'			=> '1',
						'2'			=> '2',
						'3'			=> '3'
					),
					'placeholder'	=> 'Length of contract'
				),
				array(
					'name'	=>	'NHL Team',
					'id'	=>	'nhlTeam',
					'type'	=>	'select',
					'options'	=> array(
						'anaheim-ducks'	=> 'Anaheim Ducks',
						'arizona-coyotes'	=> 'Arizona Coyotes',
						'boston-bruins'	=> 'Boston Bruins',
						'buffalo-sabres'	=> 'Buffalo Sabres',
						'calgary-flames'	=> 'Calgary Flames',
						'carolina-hurricanes'	=> 'Carolina Hurricanes',
						'chicago-blackhawks'	=> 'Chicago Blackhawks',
						'colorado-avalanche'	=> 'Colorado Avalanche',
						'columbus-blue-jackets'	=> 'Columbus Blue Jackets',
						'dallas-stars'	=> 'Dallas Stars',
						'detroit-red-wings'	=> 'Detroit Red Wings',
						'edmonton-oilers'	=> 'Edmonton Oilers',
						'florida-panthers'	=> 'Florida Panthers',
						'los-angeles-kings'	=> 'Los Angeles Kings',
						'minnesota-wild'	=> 'Minnesota Wild',
						'montreal-canadiens'	=> 'Montreal Canadiens',
						'nashville-predators'	=> 'Nashville Predators',
						'new-jersey-devils'	=> 'New Jersey Devils',
						'new-york-islanders'	=> 'New York Islanders',
						'new-york-rangers'	=> 'New York Rangers',
						'ottawa-senators'	=> 'Ottawa Senators',
						'philadelphia-flyers'	=> 'Philadelphia Flyers',
						'pittsburgh-penguins'	=> 'Pittsburgh Penguins',
						'st.-louis-blues'	=> 'St. Louis Blues',
						'san-jose-sharks'	=> 'San Jose Sharks',
						'tampa-bay-lightning'	=> 'Tampa Bay Lightning',
						'toronto-maple-leafs'	=> 'Toronto Maple Leafs',
						'vancouver-canucks'	=> 'Vancouver Canucks',
						'vegas-golden-knights'	=> 'Vegas Golden Knights',
						'washington-capitals'	=> 'Washington Capitals',
						'winnipeg-jets'	=> 'Winnipeg Jets'
					),
					'placeholder'	=> 'NHL Team'
				),    
				array(
					'name'	=> 'Player Photo',
					'id'	=> 'playerPhoto',
					'type'	=> 'image_advanced',
					'force_delete'	=> false,
					'max_file_uploads'	=> 1,
					'image_size'       => 'thumbnail'
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
				'name' => 'Third Place',
				'id' => 'thirdPlace',
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

		$meta_boxes[] = array(
			'id' => 'albumDetails',
			'title' => __( 'Album Details', 'rwmb' ),
			'pages' => array('albums'),
			'context' => 'after_editor',
			'autosave' => true,
			//List of fields
			'fields' => array (
				//IMAGE field
				array(
					'name' => 'Artist',
					'id' => 'artist',
					'type' => 'text',
					'desc'=> 'Artist Name'
				),
				array(
					'name' => 'Rank',
					'id' => 'rank',
					'type' => 'number',
					'min'	=> '1',
					'max'	=> '100'
				),
				array(
					'name' => 'Genre',
					'id' => 'genre',
					'type' => 'text',
					'desc'	=> '100% optional'
				),
				array(
					'name' => 'YouTube Embed',
					'id' => 'youtube',
					'type' => 'text',
					'desc'=> 'https://www.youtube.com/watch?v=<strong>a68xzw-onNM</strong> OR https://youtu.be/<strong>a68xzw-onNM</strong>'
				),   
				array(
					'name'	=> 'Album Art',
					'id'	=> 'albumArt',
					'type'	=> 'image_advanced',
					'force_delete'	=> false,
					'max_file_uploads'	=> 1,
					'image_size'       => 'thumbnail'
				),
				array(
					'name'	=> 'Artist Image',
					'id'	=> 'artistImg',
					'type'	=> 'image_advanced',
					'force_delete'	=> false,
					'max_file_uploads'	=> 1,
					'image_size'       => 'thumbnail'
				),
				array(
					'name' => 'Essential Tracks',
					'id' => 'essentialTracks',
					'type' => 'text_list',
					'clone' => true,
					'options' => array(
						'Today' => 'Track Title',
						'http://youtu.be/embed' => 'YouTube Link'
					)
				)                         
			)                   
		);


		return $meta_boxes;

	} 
	
	//post to post
	add_action( 'mb_relationships_init', function() {
		MB_Relationships_API::register( array(
			'id'   => 'players_to_teams',
			'from' => 'players',
			'to'   => 'teams',
		) );
	} );
?>
