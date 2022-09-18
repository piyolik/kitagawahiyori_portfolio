<!--========STEP1-3 header.php を作り込む ========-->

<!DOCTYPE html>

<!-- ①　サイトの言語属性を出力する -->
<html <?php language_attributes(); ?>>



<head>
    <!-- ②　文字コードを出力する -->
    <meta charset="<?php bloginfo('charset') ?>">

    <!-- ③　キャッチフレーズを出力する -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5ff51e8ec9f0470690204792e90393a3" charset="utf-8"></script>

    <!-- ⑥　head終了タグ直前に記述 -->
    <?php wp_head(); ?>
</head>

<!-- ⑤　bodytタグのクラスを動的に出力する -->

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <!-- ⑦　bodyの開始タグ直後に記述 -->
    <header class="HeaderPC pc">
        <div class="HeaderPC__Inner inner">

            <h1 class="HeaderPC__title">
                <div class="HeaderPC__title__title-copy">
                    <p>キタガワ ヒヨリ</p>
                    <div class="HeaderPC__title__logo">
                        <a class="" href="<?php echo esc_url(home_url()); ?>">
                            <!-- ④　ロゴのリンクと代替コードを書き換える -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hiyori-round.gif" alt="<?php bloginfo('name'); ?>">

                        </a>
                    </div>
                </div>

                <p>【 広告クリエイター志望 】</p>


            </h1>



            <nav>
                <ul class="HeaderPC__nav nav">

                    <!-- ② Nav-item を変更 ----- -->
                    <li class="HeaderPC__nav-item"><a href="#"><span>TOP</span></a></li>
                    <li class="HeaderPC__nav-item"><a href="#"><span>ABOUT</span></a></li>
                    <li class="HeaderPC__nav-item"><a href="<?php echo get_page_link(9); ?>"><span>WORKS</span></a>
                        <ul class="HeaderPC__Work-nav">
                            <li>
                                <div class="bar"></div><a href="<?php echo get_post_type_archive_link('logo'); ?>"><span>ロゴ・名刺</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="<?php echo get_post_type_archive_link('flyer'); ?>"><span>ポスター・フライヤー</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="#"><span>イラスト・パッケージ・</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="#"><span>バナー</span></a>
                            </li>

                            <li>
                                <div class="bar"></div><a href="#"><span>Web</span></a>
                            </li>

                            <li>
                                <div class="bar"></div><a href="#"><span>アプリUI</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="#"><span>Others</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="HeaderPC__nav-item"><a href="#"><span>CONTACT</span></a>
                        <ul class="HeaderPC__Contact-nav">

                            <li>
                                <div></div><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_Email.svg" alt=""></a>
                            </li>
                            <li>
                                <div></div><a href="https://www.instagram.com/piyo_folio/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram.svg" alt=""></a>
                            </li>
                        </ul>
                    </li>

                    <!-- --------------------- -->

                </ul>
            </nav>

        </div>

    </header>

    <header class="SPHeader sp">
        <div class="SPHeader__Inner">

            <!-- ハンバーガーメニュー -->
            <aside class="SPHeader__openbtn openbtn">

                <!-- 画像を挿入してハンバーガーメニューを表示 -->
                <div class="humbarger">

                    <!-- <p>MENU</p> -->
                    <!-- 画像を使用する場合は class に opacity0 を追加する -->
                    <span class="first opacity0"></span><span class="second opacity0"></span><span class="third opacity0"></span>
                </div>


            </aside>

            <nav id="g-nav">
                <div id="g-nav-list">
                    <!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                    <ul class="SPHeader__nav nav">

                        <!-- ② Nav-item を変更 ----- -->
                        <li class="SPHeader__nav-item"><a href="#"><span>TOP</span></a></li>
                        <li class="SPHeader__nav-item"><a href="#"><span>ABOUT</span></a></li>
                        <li class="SPHeader__nav-item"><a href="#"><span>WORKS</span></a>
                            <ul class="SPHeader__Work-nav">
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="<?php echo get_post_type_archive_link('logo'); ?>"><span>ロゴ・名刺</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="<?php echo get_post_type_archive_link('flyer'); ?>"><span>ポスター・フライヤー</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="#"><span>イラスト・パッケージ</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="#"><span>バナー</span></a>
                                </li>

                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="#"><span>Web</span></a>
                                </li>

                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="#"><span>アプリUI</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="#"><span>Others</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="SPHeader__nav-item"><a href="#"><span>CONTACT</span></a>
                            <ul class="SPHeader__Contact-nav">

                                <li class="SPHeader__Contact-nav-item">
                                    <div></div><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_Email.svg" alt=""></a>
                                </li>
                                <li class="SPHeader__Contact-nav-item">
                                    <div></div><a href="https://www.instagram.com/piyo_folio/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram.svg" alt=""></a>
                                </li>
                            </ul>
                        </li>

                        <!-- --------------------- -->

                    </ul>
                </div>
            </nav>
        </div>


    </header>