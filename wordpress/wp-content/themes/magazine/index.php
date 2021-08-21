<?php get_header(); ?>
<main class="homepage">
	<?php 
   // Show only the latest cover story
   $latestCoverStory = new WP_Query( array(
     'post_type' => 'coverstory',
      'posts_per_page' => 1,
   )); 
?>
	
	<?php
	if ( $latestCoverStory->have_posts() ) : ?>
	<?php while ( $latestCoverStory->have_posts() ) : $latestCoverStory->the_post(); ?>

<!-- If the plugin is active, get the latest cover story -->
	<?php if(is_plugin_active("cover-story/cover-story.php") && get_post_type($post) == "coverstory") : ?>

	<article class="cover-story" id="cover-story-<?php the_ID() ?>">

		<a href="<?php echo get_permalink($post, $leavename); ?>">
			<figure class="image">
				<?php the_post_thumbnail($size, $attr); ?>
			</figure>

			<section class="cover-story-info">
				<h2><?php the_title()?></h2>
				<h3>Skrevet av <span><?php the_author_meta('display_name')?></span></h3>
			</section>
		</a>
	</article>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>

	
	<!-- The normal loop -->
	<?php 	
	if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php if(get_post_type($post) != "coverstory") : ?>

	<article class="post" id="post-<?php the_ID() ?>">

		<a href="<?php echo get_permalink($post, $leavename) ?>">
			<div class="image">
				<?php the_post_thumbnail() ?> 
			</div>

			<h2><?php the_title()?></h2>
		</a>
	</article>
	<?php endif; ?>
	<?php endwhile; ?>

	<!-- Get sections of most popular by category -->
	<?php endif; ?>
	<?php

$args = array(
	'post_type' => 'post,coverstory',
	'range' => 'last30days',
	'cat' => (string)get_cat_ID('facebook'),
	'limit' => 3,
	'freshness' => 1,
	'thumbnail_width' => 800,
	'thumbnail_height' => 800,
	'wpp_start' => '<section id="facebook" class="related-posts"><header><h2>Mest lest om Facebook</h2></header>',
	'wpp_end' => '</section>',
	'post_html' => '<article class="post"><a href="{url}"><div class="image">{thumb_img}</div><h3>{text_title}</h3></a></article>',
);

wpp_get_mostpopular($args);
?>

<?php

$args = array(
	'post_type' => 'post,coverstory',
	'range' => 'last30days',
	'cat' => (string)get_cat_ID('sikkerhet'),
	'limit' => 3,
	'freshness' => 1,
	'thumbnail_width' => 800,
	'thumbnail_height' => 800,
	'wpp_start' => '<section id="sikkerhet" class="related-posts"><header><h2>Mest leste sikkerhetssaker</h2></header>',
	'wpp_end' => '</section>',
	'post_html' => '<article class="post"><a href="{url}"><div class="image">{thumb_img}</div><h3>{text_title}</h3></a></article>',
);

wpp_get_mostpopular($args);
?>
</main>
<?php get_footer() ?>