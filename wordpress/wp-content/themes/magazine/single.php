<?php get_header() ?>
<?php wp_enqueue_style( 'post', get_stylesheet_directory_uri() . '/styles/post.css' ); ?>
<main>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php $theCategory = has_category($category, $post);
		$thePost = get_the_ID();
	?>
	<article class="post default-post">
		<header class="intro">
			<figure class="image">
				<?php the_post_thumbnail($size, $attr) ?>
			</figure>
			<section class="info">
			<h2><?php the_title()?></h2>
				<p>Skrevet av
					<span class="writer">
						<a
							href="mailto:<?php echo get_the_author_meta( 'user_email' ); ?>"><?php echo the_author_meta( 'display_name' ); ?></a>
					</span>
				</p>
				<p>Publisert
					<span class="date">
						<?php echo the_date($echo) ?> kl. <?php the_time($d) ?>
					</span>
				</p>
			</section>
		</header>
		<section class="content">
			<?php the_content() ?>
			<?php if(get_the_time($d, $post) < get_the_modified_time($d, $post)) : ?>
		<section class="info">
			<section class="date">
				<p>Sist endret
					<span class="date">
						<?php echo the_modified_date($echo) ?> kl. <?php the_time($d) ?>
					</span>
				</p>
			</section>
		</section>
		<?php endif; ?>
		</section>
		<?php if (is_plugin_active('wordpress-popular-posts/wordpress-popular-posts.php')): ?>
		<?php
#get related posts. Does not work if there are no related posts (no posts in same category).
$args = array(
	'post_type' => 'post,coverstory',
	'range' => 'last30days',
	'cat' => the_category_ID($echo),
	'pid' => get_the_ID(),
	'limit' => 3,
	'freshness' => 1,
	'thumbnail_width' => 800,
	'thumbnail_height' => 800,
	'wpp_start' => '<section class="related-posts"><header><h2>Relaterte saker</h2></header>',
	'wpp_end' => '</section>',
	'post_html' => '<article class="post"><a href="{url}"><div class="image">{thumb_img}</div><h3>{text_title}</h3></a></article>',
);

wpp_get_mostpopular($args);
?>
	<?php endif; ?>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer() ?>