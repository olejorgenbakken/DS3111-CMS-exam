<?php get_header(); ?>
<main class="homepage">
<h2>No content found, but you might enjoy these stories</h2>
<?php

$args = array(
	'post_type' => 'post,coverstory',
	'range' => 'last30days',
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