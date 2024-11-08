<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id( 'search-form-' );

$twentytwenty_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $twentytwenty_aria_label ) && ! empty( $args['label'] ) ) {
	$twentytwenty_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>
<form role="search" <?php echo $twentytwenty_aria_label; ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-index">
        <i class="fas fa-search"></i>
        <label for="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="screen-reader-text">
            <?php
            /* translators: Hidden accessibility text. */
            _e( 'Search for:', 'twentytwenty' );
            ?>
        </label>
        <input type="search" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">
            <?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>
        </button>
    </div>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .search-index {
        display: flex;
        align-items: center;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        width: 700px;
        margin: 50px auto;
		padding-top: 20px;	    	
    }
    .search-index i {
        font-size: 20px;
        margin-right: 10px;
        color: #333;
    }
    .search-index input {
        border: none;
        outline: none;
        flex-grow: 1;
        font-size: 16px;
        color: #333;
    }
    .search-index button {
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }
    .search-index button:hover {
        background-color: #218838;
    }
</style>

