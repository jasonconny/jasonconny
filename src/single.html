<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
	get_template_part('single', 'header'); 
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="post-info">
						<h2><?php the_title(); ?></h2>
						
						<?php
						//exclude the "_*" custom fields and "enclosure" when displaying in loop
						if ( $keys = get_post_custom_keys() ) {
						echo "<ul class='post-meta'>\n";
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						<li><span class='post-meta-key'>$key:</span> $value</li>
						\n", $key, $value);
						}
						echo "</ul>\n";
						}
						?>
						
					</div><!-- .post-info -->
					
					<div class="post-content">
						<?php the_content(); ?>
					</div><!-- /.post-content -->
					
				</article><!-- #post-## -->
								
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
