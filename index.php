<?php get_header(); ?>

<main class="Top">
    <section class="Title">
        <div class="Title__Inner">

            <div class="Title__copy">
                <p>ほしいものが、ほしい、その先で。<br>
                    誰かが本当に「ほしい」と思う、<br>
                    わくわくする、そういうデザインがやりたいです。</p>
            </div>
            <div class="Title__top">
                <div class="Title__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_logo.png" alt="">
                </div>
                <div class="Title__theme sp">
                    <p>キタガワ ヒヨリ</p>
                    <p>【 広告クリエイター志望 】</p>
                </div>

            </div>


        </div>



    </section>
    <section class="Slider">
        <ul class="slider Slider__Inner">
            <li class="slider-item slider-item01 Slider__item">
                <a href="<?php echo get_page_link(21); ?>">
                    <p>【 ロゴ 】無人古着販売店「MUKOHAN」</p>
                    <div class="Slider__item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/1-sp-mukohan.png" alt="">
                    </div>
                </a>

            </li>
            <li class="slider-item slider-item03 Slider__item">
                <a href="./works/3-mukohan.html">
                    <p>【 PV 】東京オリンピックのプロモーションビデオ</p>
                    <div class="Slider__item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/1-sp-nippon-min.png" alt="">
                    </div>
                </a>

            </li>
            <li class="slider-item slider-item02 Slider__item">
                <a href="./works/3-mukohan.html">
                    <p>【 ポスター 】天王寺動物園の園内マップ兼広告ツール</p>
                    <div class="Slider__item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/1-sp-Flamingo-min.png" alt="">
                    </div>
                </a>

            </li>
            <li class="slider-item slider-item03 Slider__item">
                <a href="./works/3-mukohan.html">
                    <p>【 アプリUI 】マイノリティのための架空のSNS『Fakesity』</p>
                    <div class="Slider__item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/2-sp-fakesity_app1-min.png" alt="">
                    </div>
                </a>

            </li>

            <li class="slider-item slider-item03 Slider__item">
                <a href="./works/3-mukohan.html">
                    <p>【 SNSバナー 】25歳〜30歳女性をターゲットにした架空の広告バナー</p>
                    <div class="Slider__item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/1-sp-FancelBanner.png" alt="">
                    </div>
                </a>

            </li>


        </ul>
    </section>



</main>

<?php get_footer(); ?>