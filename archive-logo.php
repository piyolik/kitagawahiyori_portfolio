<?php get_header(); ?>


<main class="Works">
    <?php if (is_post_type_archive('logo')) : ?>

        <section class="WorksList">
            <h2>
                ロゴ・名刺
            </h2>

            <!-- worklist テンプレートを読み込み -->
            <?php get_template_part('worklist'); ?>　

        </section>


    <?php endif; ?>

</main>

<!-- Slickのライブラリ -->
<?php get_footer(); ?>