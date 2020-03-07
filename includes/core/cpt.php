<?php
	// custom post types

	// products cpt
	add_action( 'init', 'products_add', 0 ); 
	function products_add() {

	    $labels = array(
	        'name'                  => _x( 'Project', 'Post Type General Name', 'text_domain' ),
	        'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
	        'menu_name'             => __( 'Projects', 'text_domain' ),
	        'name_admin_bar'        => __( 'Project', 'text_domain' ),
	        'archives'              => __( 'Item Archives', 'text_domain' ),
	        'attributes'            => __( 'Item Attributes', 'text_domain' ),
	        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	        'all_items'             => __( 'All Projects', 'text_domain' ),
	        'add_new_item'          => __( 'Add New Project', 'text_domain' ),
	        'add_new'               => __( 'Add New Project', 'text_domain' ),
	        'new_item'              => __( 'New Item', 'text_domain' ),
	        'edit_item'             => __( 'Edit Item', 'text_domain' ),
	        'update_item'           => __( 'Update Item', 'text_domain' ),
	        'view_item'             => __( 'View Item', 'text_domain' ),
	        'view_items'            => __( 'View Items', 'text_domain' ),
	        'search_items'          => __( 'Search Item', 'text_domain' ),
	        'not_found'             => __( 'Not found', 'text_domain' ),
	        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	        'featured_image'        => __( 'Featured Image', 'text_domain' ),
	        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	        'items_list'            => __( 'Items list', 'text_domain' ),
	        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	    );
	    $args = array(
	        'label'                 => __( 'Project', 'text_domain' ),
	        'description'           => __( 'Project section', 'text_domain' ),
	        'labels'                => $labels,
	        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'author', 'excerpt' ),
	        // 'taxonomies'            => array( 'category' ),
	        'hierarchical'          => false,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'menu_position'         => 20,
	        'menu_icon'             => 'dashicons-portfolio',
	        'show_in_admin_bar'     => true,
	        'show_in_nav_menus'     => true,
	        'can_export'            => true,
	        'has_archive'           => true,
	        'exclude_from_search'   => false,
	        'publicly_queryable'    => true,
	        'capability_type'       => 'page',
	    );
	    register_post_type( 'project', $args );

	}

	// team members cpt
	add_action( 'init', 'team_members_add', 0 );
	function team_members_add() {

	    $labels = array(
	        'name'                  => _x( 'Team Member', 'Post Type General Name', 'text_domain' ),
	        'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
	        'menu_name'             => __( 'Team Members', 'text_domain' ),
	        'name_admin_bar'        => __( 'Team Member', 'text_domain' ),
	        'archives'              => __( 'Item Archives', 'text_domain' ),
	        'attributes'            => __( 'Item Attributes', 'text_domain' ),
	        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	        'all_items'             => __( 'All Team Members', 'text_domain' ),
	        'add_new_item'          => __( 'Add New Team Member', 'text_domain' ),
	        'add_new'               => __( 'Add New Team Member', 'text_domain' ),
	        'new_item'              => __( 'New Item', 'text_domain' ),
	        'edit_item'             => __( 'Edit Item', 'text_domain' ),
	        'update_item'           => __( 'Update Item', 'text_domain' ),
	        'view_item'             => __( 'View Item', 'text_domain' ),
	        'view_items'            => __( 'View Items', 'text_domain' ),
	        'search_items'          => __( 'Search Item', 'text_domain' ),
	        'not_found'             => __( 'Not found', 'text_domain' ),
	        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	        'featured_image'        => __( 'Featured Image', 'text_domain' ),
	        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	        'items_list'            => __( 'Items list', 'text_domain' ),
	        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	    );
	    $args = array(
	        'label'                 => __( 'Team Member', 'text_domain' ),
	        'description'           => __( 'Team Member section', 'text_domain' ),
	        'labels'                => $labels,
	        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'author', 'excerpt' ),
	        // 'taxonomies'            => array( 'category' ),
	        'hierarchical'          => false,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'menu_position'         => 20,
	        'menu_icon'             => 'dashicons-groups',
	        'show_in_admin_bar'     => true,
	        'show_in_nav_menus'     => true,
	        'can_export'            => true,
	        'has_archive'           => true,
	        'exclude_from_search'   => false,
	        'publicly_queryable'    => true,
	        'capability_type'       => 'page',
	    );
	    register_post_type( 'team-member', $args );

	}

	// reviews cpt
	add_action( 'init', 'reviews_add', 0 );
	function reviews_add() {

	    $labels = array(
	        'name'                  => _x( 'Review', 'Post Type General Name', 'text_domain' ),
	        'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'text_domain' ),
	        'menu_name'             => __( 'Reviews', 'text_domain' ),
	        'name_admin_bar'        => __( 'Review', 'text_domain' ),
	        'archives'              => __( 'Item Archives', 'text_domain' ),
	        'attributes'            => __( 'Item Attributes', 'text_domain' ),
	        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	        'all_items'             => __( 'All Reviews', 'text_domain' ),
	        'add_new_item'          => __( 'Add New Review', 'text_domain' ),
	        'add_new'               => __( 'Add New Review', 'text_domain' ),
	        'new_item'              => __( 'New Item', 'text_domain' ),
	        'edit_item'             => __( 'Edit Item', 'text_domain' ),
	        'update_item'           => __( 'Update Item', 'text_domain' ),
	        'view_item'             => __( 'View Item', 'text_domain' ),
	        'view_items'            => __( 'View Items', 'text_domain' ),
	        'search_items'          => __( 'Search Item', 'text_domain' ),
	        'not_found'             => __( 'Not found', 'text_domain' ),
	        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	        'featured_image'        => __( 'Featured Image', 'text_domain' ),
	        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	        'items_list'            => __( 'Items list', 'text_domain' ),
	        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	    );
	    $args = array(
	        'label'                 => __( 'Review', 'text_domain' ),
	        'description'           => __( 'Review section', 'text_domain' ),
	        'labels'                => $labels,
	        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'author', 'excerpt' ),
	        // 'taxonomies'            => array( 'category' ),
	        'hierarchical'          => false,
	        'public'                => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'menu_position'         => 20,
	        'menu_icon'             => 'dashicons-clipboard',
	        'show_in_admin_bar'     => true,
	        'show_in_nav_menus'     => true,
	        'can_export'            => true,
	        'has_archive'           => true,
	        'exclude_from_search'   => false,
	        'publicly_queryable'    => true,
	        'capability_type'       => 'page',
	    );
	    register_post_type( 'review', $args );

	}

?>