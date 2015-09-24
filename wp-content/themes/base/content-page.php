<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div> 
		<ul>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('This is the first list item', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('This is the second list item', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('This is the third list item', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('Andreas pryl', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('Peter ändrade lista', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('A newly added string', 'base'); ?></a></li>
			<li><a href="<?php _e('http://google.com', 'base'); ?>"><?php _e('This is the fourth list item', 'base'); ?></a></li>
		</ul>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
