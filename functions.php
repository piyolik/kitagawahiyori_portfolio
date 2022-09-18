<!--========STEP1-5 ページごとに、ページタイトルを正しく表示させる ========-->


<!-- ① 関数「piyofolio_theme_setup()」を定義する （ ページタイトル機能を有効化させる）-->
<?php function piyofolio_theme_setup()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'piyofolio_theme_setup');
?>


<!-- ② 関数「piyofolio_theme_setup()」を「after_setup_theme」のタイミングに実行させる -->