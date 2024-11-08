<div class="post-navigation  " >
        <?php if (get_previous_post()) : ?>
            <div class="nav-item">
                <div class="nav-date">
                    <div class="nav-day-month">
                        <div class="nav-day"><?php echo get_the_date('d', get_previous_post()); ?></div>
                        <div class="line"></div>
                        <div class="nav-month"><?php echo get_the_date('m', get_previous_post()); ?></div>
                    </div>
                    <div class="nav-year"><?php echo get_the_date('y', get_previous_post()); ?></div>
                </div>
                <div class="post-title">
                    <?php previous_post_link('%link', '%title'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_next_post()) : ?>
            <div class="nav-item">
                <div class="nav-date">
                    <div class="nav-day-month">
                        <div class="nav-day"><?php echo get_the_date('d', get_next_post()); ?></div>
                        <div class="line"></div>
                        <div class="nav-month"><?php echo get_the_date('m', get_next_post()); ?></div>
                    </div>
                    <div class="nav-year"><?php echo get_the_date('y', get_next_post()); ?></div>
                </div>
                <div class="post-title">
                    <?php next_post_link('%link', '%title'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</article>
<style>


    /* prev-next */
    .nav-date {
        color: black;
        font-size: 14px;
        text-align: center;
        display: flex;
        align-items: center;
    }

    .nav-date .nav-day-month {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 5px;
        font-size: 16px;
        font-weight: bold;
    }

    .nav-day-month .nav-day,
    .nav-day-month .nav-month {
        margin: 0;
    }

    .nav-day-month .line {
        width: 20px;
        height: 1px;
        background-color: black;
        margin: 2px 0;
    }

    .nav-date .nav-year {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
        display: flex;
        align-items: center;
    }

    /* Navigation Styling */
    .post-navigation {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 50px;
        font-size: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: auto;
    }

    .nav-item {
        display: flex;
        align-items: center;
        color: #333;
        padding: 20px;
    }

    .nav-item .nav-date {
        font-size: 11px;
        color: #000;
        margin-right: 50px;
    }

    /* Điều chỉnh màu tiêu đề prev và next */
    .nav-item .post-title {
        font-size: 17px;
        font-weight: bold;
		

    }

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">