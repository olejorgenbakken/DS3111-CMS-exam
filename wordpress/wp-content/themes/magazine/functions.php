<?php

# Gets the main style used in this theme
function magasin_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'magasin_scripts' );

function wpb_custom_new_menu() {
	register_nav_menu('global-menu',__( 'global-menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

# Support for additional features
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );

# excerpt length defined
function tn_custom_excerpt_length( $length ) {
    return 20;
    }
    add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

# archive pagination... doesn't work.
function custom_posts_per_page( $query ) {

  if ( $query->is_archive('project') ) {
      set_query_var('posts_per_page', 1);
  }
  }
  add_action( 'pre_get_posts', 'custom_posts_per_page' );

#opengraph function
function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = get_the_post_thumbnail_url($post, $size);
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_the_excerpt($post);
        }
        ?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src; ?>"/>
 
<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);