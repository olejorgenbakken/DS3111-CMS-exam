<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

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
				<p>Her er en oversikt over alle <?php echo get_post_meta($post->ID, 'page_name', true); ?> vi tilbyr.</p>
			</section>
		</header>
		<section class="content">
			<?php the_content() ?>
		</section>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php
get_footer();
