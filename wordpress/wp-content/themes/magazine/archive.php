<?php
/* 
Template Name: Archives
*/
get_header(); ?>



<main>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php $theCategory = has_category($category, $post);
		$thePost = get_the_ID();
	?>
	<article class="post cover-story">
		<header class="intro">
			<figure class="image">
				<?php the_post_thumbnail($size, $attr) ?>
			</figure>
			<section class="info">
				<h2><?php the_title()?></h2>
			</section>
		</header>
		<?php
# makeshift function for showing all posts since the loop doesn't work.
$args = array(
	'post_type' => 'post, coverstory',
	'range' => 'all',
    'limit' => '100',
    'stats_author' => 1,
	'freshness' => 1,
	'thumbnail_width' => 800,
	'thumbnail_height' => 800,
	'wpp_start' => '<section class="homepage">',
	'wpp_end' => '</section>',
	'post_html' => '<article class="post"><a href="{url}"><figure class="image">{thumb_img}</figure><section class="cover-story-info"><h2>{text_title}</h2><h3>Skrevet av {author}</h3></section></a></article>',
);

wpp_get_mostpopular($args);
?>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
