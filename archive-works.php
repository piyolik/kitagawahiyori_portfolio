<?php get_header(); ?>


<main class="Works">
    <?php if (have_posts()) : ?>

        <section class="WorksList">
            <h2>
                Works
            </h2>

            <!-- worklist テンプレートを読み込み -->
            <?php get_template_part('worklist'); ?>　

        </section>


    <?php endif; ?>

</main>

<!-- Slickのライブラリ -->
<?php get_footer(); ?>