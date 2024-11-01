<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

    <?php
    $archive_title = '';
    $archive_subtitle = '';

    if (is_search()) {
        global $wp_query;

        $archive_title = sprintf(
            '%1$s %2$s',
            '<span class="color-accent">' . __('Search:', 'twentytwenty') . '</span>',
            '&ldquo;' . get_search_query() . '&rdquo;'
        );

        if ($wp_query->found_posts) {
            $archive_subtitle = sprintf(
                _n(
                    'We found %s result for your search.',
                    'We found %s results for your search.',
                    $wp_query->found_posts,
                    'twentytwenty'
                ),
                number_format_i18n($wp_query->found_posts)
            );
        } else {
            $archive_subtitle = __('We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty');
        }
    } elseif (is_archive() && !have_posts()) {
        $archive_title = __('Nothing Found', 'twentytwenty');
    } elseif (!is_home()) {
        $archive_title = get_the_archive_title();
        $archive_subtitle = get_the_archive_description();
    }

    if ($archive_title || $archive_subtitle) {
        ?>
        <header class="archive-header has-text-align-center header-footer-group">
            <div class="archive-header-inner section-inner medium">
                <?php if ($archive_title) { ?>
                    <h1 class="archive-title"><?php echo wp_kses_post($archive_title); ?></h1>
                <?php } ?>
                <?php if ($archive_subtitle) { ?>
                    <div class="archive-subtitle section-inner thin max-percentage intro-text">
                        <?php echo wp_kses_post(wpautop($archive_subtitle)); ?>
                    </div>
                <?php } ?>
            </div>
        </header>
        <?php
    }

    if (have_posts()) {
        echo '<div class="news-container">';
        while (have_posts()) {
            the_post();
            ?>
            <div class="news-item">
                <div class="news-date">
                    <div class="day"><?php echo get_the_date('d'); ?></div>
                    <div class="month"><?php echo strtoupper(get_the_date('F')); ?></div>
                </div>
                <div class="news-content">
                    <a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?></h2></a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '[...]'); ?></p>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    } elseif (is_search()) {
        ?>
        <div class="no-search-results-form section-inner thin">
            <?php
            get_search_form(array('aria_label' => __('search again', 'twentytwenty')));
            ?>
        </div>
        <?php
    }
    ?>

    <?php get_template_part('template-parts/pagination'); ?>

</main><!-- #site-content -->

<?php get_footer(); ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    .news-container {
        width: 30%;
        margin: 20px auto;
    }
    .news-item {
        background-color: #fff;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        display: flex;
        padding: 20px;
    }
    .news-date {
        width: 80px;
        text-align: center;
        border-right: 1px solid #ddd;
        padding-right: 20px;
        margin-right: 20px;
    }
    .news-date .day {
        font-size: 36px;
        font-weight: bold;
        color: #333;
    }
    .news-date .month {
        font-size: 14px;
        color: #999;
    }
    .news-content {
        flex: 1;
	
    }
    .news-content a{
       
		color: blue;
        margin: 0 0 10px;
		text-decoration: none;
    }

	.news-content h2{
       font-size: 18px;
	   color: blue;
	   margin: 0 0 10px;
   }

    .news-content p {
        font-size: 14px;
        color: #666;
        margin: 0;
    }
</style>
