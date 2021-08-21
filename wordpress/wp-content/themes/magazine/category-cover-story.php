<?php get_header(); ?>
<main>
	<article class="post cover-story">
		<header class="intro">
			<figure class="image">
				<img src="https://media.wired.com/photos/5a3ae66b41e00716c855d0de/16:9/w_2400,c_limit/kindleoasis-FA.jpg" alt="Langlesingssaker">
			</figure>
			<section class="info">
				<h2>Langlesing</h2>
			</section>
		</header>
		<?php
# the category page has the same issue as the archive page, and has been made in a makeshift way.
$args = array(
	'post_type' => 'coverstory',
	'range' => 'all',
    'limit' => '100',
    'stats_author' => 1,
	'freshness' => 1,
	'thumbnail_width' => 800,
	'thumbnail_height' => 800,
	'wpp_start' => '<section class="homepage">',
	'wpp_end' => '</section>',
	'post_html' => '<article class="cover-story"><a href="{url}"><figure class="image">{thumb_img}</figure><section class="cover-story-info"><h2>{text_title}</h2><h3>Skrevet av {author}</h3></section></a></article>',
);

wpp_get_mostpopular($args);
?>
	</article>
</main>
<?php get_footer(); ?>