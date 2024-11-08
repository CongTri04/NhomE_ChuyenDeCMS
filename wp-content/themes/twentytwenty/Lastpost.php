<!-- Bootstrap and jQuery links -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Timeline Container -->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4 style="font-size: 24px;">Latest News</h4> <!-- Tăng kích thước tiêu đề -->
            <ul class="timeline">
                <li>
                    <a target="_blank" href="https://www.totoprayogo.com/#" class="news-title">New Web Design</a>
                    <a href="#" class="float-right news-date">21 March, 2014</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                </li>
                <li>
                    <a href="#" class="news-title">21 000 Job Seekers</a>
                    <a href="#" class="float-right news-date">4 March, 2014</a>
                    <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                </li>
                <li>
                    <a href="#" class="news-title">Awesome Employers</a>
                    <a href="#" class="float-right news-date">1 April, 2014</a>
                    <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
        padding-left: 0;
    }
    ul.timeline:before {
        content: '';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 39px; /* Tăng khoảng cách thanh dọc */
        width: 3px; /* Tăng độ dày của thanh dọc */
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 30px 0; /* Tăng khoảng cách giữa các mục */
        padding-left: 80px; /* Đẩy nội dung sang phải */
        position: relative;
        font-size: 20px; /* Tăng kích thước chữ */
    }
    ul.timeline > li:before {
        content: '';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 31px; /* Điều chỉnh vị trí chấm tròn */
        width: 20px; /* Tăng kích thước chấm tròn */
        height: 20px; /* Tăng kích thước chấm tròn */
        z-index: 400;
    }
    .news-title {
        color: #007bff;
        font-weight: normal;
        text-transform: lowercase;
        font-size: 22px; /* Tăng kích thước tiêu đề */
    }
    .news-date {
        color: #007bff;
        text-transform: lowercase;
        font-size: 18px; /* Tăng kích thước ngày tháng */
    }
    p {
        font-size: 18px; /* Tăng kích thước văn bản */
    }
</style>
