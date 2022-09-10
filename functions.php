<!--========STEP1-5 ページごとに、ページタイトルを正しく表示させる ========-->


<!-- ① 　関数「piyofolio_theme_setup()」を定義する （ ページタイトル機能を有効化させる　）-->
<?php function piyofolio_theme_setup(){
    add_theme_support( 'title-tag' );
}


// ② 　関数「piyofolio_theme_setup()」を「after_setup_theme」のタイミングに実行させる
add_action('after_setup_theme','piyofolio_theme_setup');




// ③ 　テーマ独自のJavaScript・CSSファイルを読み込む
function piyofolio_enqueue_scripts() {
  // jQuery を読み込み
  wp_enqueue_script( 
    'jquery'
  );
 
  // プラグイン「slick」のjsをよみこみ
  wp_enqueue_script( 
    'slick', 
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' 
  );
   // 独自のjsをよみこみ
  wp_enqueue_script( 
    'piyofolio-theme-common', 
    get_template_directory_uri() . '/assets/js/index.js' 
  );
}

// ④ 　関数「piyofolio_enqueue_scripts()」を「wp_enqueue_scripts」のタイミングに実行させる
add_action( 'wp_enqueue_scripts', 'piyofolio_enqueue_scripts' );