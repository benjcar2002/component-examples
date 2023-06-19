<!-- Placed in header.php -->
<?php get_template_part( 'template-parts/off-search' ); ?>

<!-- off-search.php -->

<div class="off-search">
	<div class="off-search-content">
		<p class="visuallyhidden">
			<a href="#main">Skip the search section, go to main content</a>
		</p>
		<?php get_template_part( 'searchform' ); ?>
	</div>
</div>

<!-- searchform.php -->

<?php

$searchform_unique_id = wp_unique_id( 'search-form-' );

$searchform_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

?>
<form class="searchform" role="search" <?php echo $searchform_aria_label; ?> method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="searchform--label" for="<?php echo esc_attr( $searchform_unique_id ); ?>"><?php _e( 'Search the website...', 'blueocto-2022' ); ?></label>
    <div class="searchform--wrap">
        <input class="searchform--input" type="search" id="<?php echo esc_attr( $searchform_unique_id ); ?>" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search the website" onkeyup="buttonUp();" />
        <input class="searchform--submit" type="submit" value="Search" />
     </div>
</form>