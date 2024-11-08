<article class="post-detail" id="post-<?php the_ID(); ?>">

    <div class="row">
        <div class="col-md-10 col-xs-9">
            <header class="post-header">
                <h1 class="post-title"><?php the_title(); ?></h1>
            </header>
        </div>
        <div class="col-md-2 col-xs-3">
            <div class="circle">
                <div class="news-date">
                    <div class="day-month">
                        <div class="day"><?php echo get_the_date('d'); ?></div>
                        <div class="separator"></div>
                        <div class="month"><?php echo get_the_date('m'); ?></div>
                    </div>
                    <div class="year"><?php echo get_the_date('y'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>

    <div class="underline mt-3"></div>

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
        </div>
    <?php endif; ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>
<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: whitesmoke;
        margin: 0;
        padding: 0;
    }

    /* Post Detail Styling */
    .post-detail {
        width: 45%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    /* Circle Date Styling */
    .circle {
        width: 80px;
        height: 80px;
        background-color: #f1c40f;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .news-date {
        color: black;
        font-size: 14px;
        text-align: center;
        display: flex;
        align-items: center;
    }

    .news-date .day-month {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 5px;
        font-size: 16px;
        font-weight: bold;
    }

    .day-month .day,
    .day-month .month {
        margin: 0;
    }

    .day-month .separator {
        width: 20px;
        height: 1px;
        background-color: black;
        margin: 2px 0;
    }

    .news-date .year {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
        display: flex;
        align-items: center;
        height: 100%;
    }



    /* Responsive adjustments */
    @media (max-width: 768px) {
        .circle {
            width: 80px;
            height: 80px;
        }

        .date .day,
        .date .month {
            font-size: 16px;
        }

        .date .year {
            font-size: 12px;
            top: 25px;
            right: 15px;
        }
    }

    /* Other styling for the post content */
    .post-header {
        margin-bottom: 20px;
    }

    .post-title {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 2.1em;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    .post-content {
        font-size: 15px;
        line-height: 1.6;
        color: #333;
        margin-top: 30px;
    }

    .post-navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .post-navigation .nav-previous,
    .post-navigation .nav-next {
        font-size: 1em;
        color: #007acc;
    }

    .underline {
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
        position: relative;
    }

    .underline:before {
        content: "";
        position: absolute;
        top: 0;
        left: 50px;
        border-width: 12px 12px 0;
        border-style: solid;
        border-color: #cecece transparent;
        display: block;
        width: 0;
    }

    .underline::after {
        content: "";
        position: absolute;
        top: 0;
        left: 51px;
        border-width: 11px 11px 0;
        border-style: solid;
        border-color: #f5f5f5 transparent;
        display: block;
        width: 0;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">