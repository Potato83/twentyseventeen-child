<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php

$title_image = get_field('title_image');


?>

<style>
	.front-title-image{
		background: url(<?php echo $title_image['url']; ?>) no-repeat;		
		height: 200px;
		padding: 20px;
		margin-bottom: 10px;
	}
</style>

<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="title-con">';
	endif;
	?>	
			<?php
			if($title_image) :
				echo '<div class="front-title-image">';
			endif;
			?>
			
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php
			if($title_image) :
				echo '</div>';
			endif;
			?>
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>

	<?php
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
	echo '</div>';
	endif;
	?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
