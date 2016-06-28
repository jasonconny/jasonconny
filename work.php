<?php
/**
 * Template Name: Work
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	
	<h3>Artitsts</h3>
	<ul class="gallery" id="12">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 12, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Comedians</h3>
	<ul class="gallery" id="11">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 11, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Monochromes</h3>
	<ul class="gallery" id="8">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 8, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Sleeve Withdrawn After Plane Crash in Which Band Members Were Killed&hellip; Spooky</h3>
	<ul class="gallery" id="7">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 7, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Other Figurative Work</h3>
	<ul class="gallery" id="17">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => '17,18', 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Sound</h3>
	<ul class="gallery" id="10">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 10, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Man, It Just Don't Seem Like Losing These Two Fine Cats Affected You People At All</h3>
	<ul class="gallery" id="5">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 5, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>
	
	<h3>Miscellany</h3>
	<ul class="gallery" id="14">
		<?php 
		global $post;
		$tmp_post = $post;
		$args = array('numberposts' => -1, 'category' => 14, 'orderby' => 'post_date');
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo "data-imgLarge=\"$image_url[0]\"";
				?>

				<?php $image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'full', true);
					echo "data-imgFull=\"$image_url[0]\"";
				?>

				<?php
					//exclude the "_*" custom fields and "enclosure" when displaying in loop
					if ( $keys = get_post_custom_keys() ) {
						foreach ( (array) $keys as $key ) {
						$keyt = trim($key);
						if ( '_' == $keyt{0} || 'enclosure' == $keyt )
						continue;
						$values = array_map('trim', get_post_custom_values($key));
						$value = implode($values,', ');
						echo apply_filters('the_meta_key', "
						data-$key=\"$value\" ", $key, $value);
						}
					}
				?>

				><?php the_post_thumbnail( 'medium' ); ?></a></li>
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</ul>

	<?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>