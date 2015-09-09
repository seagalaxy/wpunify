<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage wpunify
 * @since wpunify 0.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
