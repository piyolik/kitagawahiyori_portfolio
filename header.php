<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/theme.css">
    
    <!-- font のソースコードを挿入-->

    <title>TOP</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <!-- モリサワフォント -->
    <script type="text/javascript"
        src="//typesquare.com/3/tsst/script/ja/typesquare.js?5ff51e8ec9f0470690204792e90393a3" charset="utf-8"></script>

</head>

<body>
    <header class="HeaderPC pc">
        <div class="HeaderPC__Inner inner">



            <h1 class="HeaderPC__title">
                <div class="HeaderPC__title__title-copy">
                    <p>キタガワ ヒヨリ</p>
                    <div class="HeaderPC__title__logo">
                        <a class="" href="#">
                            <!-- ① ロゴ写真を変更 ----- -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hiyori.GIF" alt="sand the fruit and...">

                        </a>
                    </div>
                </div>

                <p>【 広告クリエイター志望 】</p>


            </h1>



            <nav>
                <ul class="HeaderPC__nav nav">

                    <!-- ② Nav-item を変更 ----- -->
                    <li class="HeaderPC__nav-item"><a href="./index.html"><span>TOP</span></a></li>
                    <li class="HeaderPC__nav-item"><a href="./about.html"><span>ABOUT</span></a></li>
                    <li class="HeaderPC__nav-item"><a href="#"><span>WORKS</span></a>
                        <ul class="HeaderPC__Work-nav">
                            <li>
                                <div class="bar"></div><a href="./2-logo.html"><span>ロゴ・名刺</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="./2-flyer.html"><span>フライヤー・ポスター</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="./2-illustration.html"><span>イラスト・パッケージ・</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="./2-banner.html"><span>バナー</span></a>
                            </li>

                            <li>
                                <div class="bar"></div><a href="./2-Web.html"><span>Web</span></a>
                            </li>

                            <li>
                                <div class="bar"></div><a href="./2-UI.html"><span>アプリUI</span></a>
                            </li>
                            <li>
                                <div class="bar"></div><a href="./2-Others.html"><span>Others</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="HeaderPC__nav-item"><a href="#"><span>CONTACT</span></a>
                        <ul class="HeaderPC__Contact-nav">

                            <li>
                                <div></div><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_Email.svg" alt=""></a>
                            </li>
                            <li>
                                <div></div><a href="https://www.instagram.com/piyo_folio/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram.svg"
                                        alt=""></a>
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
                    <span class="first opacity0"></span><span class="second opacity0"></span><span
                        class="third opacity0"></span>
                </div>


            </aside>

            <nav id="g-nav">
                <div id="g-nav-list">
                    <!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                    <ul class="SPHeader__nav nav">

                        <!-- ② Nav-item を変更 ----- -->
                        <li class="SPHeader__nav-item"><a href="./index.html"><span>TOP</span></a></li>
                        <li class="SPHeader__nav-item"><a href="./about.html"><span>ABOUT</span></a></li>
                        <li class="SPHeader__nav-item"><a href="#"><span>WORKS</span></a>
                            <ul class="SPHeader__Work-nav">
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-logo.html"><span>ロゴ・名刺</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-flyer.html"><span>フライヤー・ポスター</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-illustration.html"><span>イラスト・パッケージ</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-banner.html"><span>バナー</span></a>
                                </li>

                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-Web.html"><span>Web</span></a>
                                </li>

                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="./2-UI.html"><span>アプリUI</span></a>
                                </li>
                                <li class="SPHeader__Work-nav-item">
                                    <div class="bar"></div><a href="/2-Others.html"><span>Others</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="SPHeader__nav-item"><a href="#"><span>CONTACT</span></a>
                            <ul class="SPHeader__Contact-nav">

                                <li class="SPHeader__Contact-nav-item">
                                    <div></div><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_Email.svg" alt=""></a>
                                </li>
                                <li class="SPHeader__Contact-nav-item">
                                    <div></div><a href="https://www.instagram.com/piyo_folio/"><img
                                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram.svg" alt=""></a>
                                </li>
                            </ul>
                        </li>

                        <!-- --------------------- -->

                    </ul>
                </div>
            </nav>
        </div>


    </header>