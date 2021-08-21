<?php
/**
 * Plugin Name: Cover story
 * Description: Makes it possible to define a cover story for your magazine.
 * Version: 1.0
 * Author: Ole Jørgen Bakken
 */


add_action( 'init', 'codex_cover_story_init' );

wp_enqueue_style("cover-story", plugin_dir_url('___FILE___') . "cover-story/cover-story.css");

/* Add cover stories to home page list */
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'coverstory' ) );
    return $query;
}

function codex_cover_story_init() {
	$labels = array(
		'name'               => _x( 'Cover Stories', 'cover story', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Cover Story', 'cover story', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Cover Stories', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Cover Stories', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Cover Story', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Cover Story', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Cover Story', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Cover Story', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Cover Story', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Cover Stories', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Cover Stories', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Cover stories:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Cover Stories Found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Cover Stories Found In Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cover-story' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'cover story', $args );
}
?>