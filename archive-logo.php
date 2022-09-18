<!-- Template Name: WORKS  -->
<?php get_header(); ?>


<main class="Works">
    <?php if (is_post_type_archive('logo')) : ?>

        <section class="WorksList">
            <h2>
                ロゴ・名刺
            </h2>
            <div class="WorksList__inner">
                <ul class="WorksList__list">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>


                            <li class="WorksList__item">
                                <a href="<?php the_permalink(); ?>">

                                    <div class="WorkList__img">
                                        <!-- 以下はループ内でアイキャッチ画像が設定されている場合に p 要素で囲んでアイキャッチ画像をサムネイルサイズ（'thumbnail'）で出力する -->
                                        <?php if (has_post_thumbnail()) : ?>
                                            <p><?php the_post_thumbnail('post-thumbnail'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <p class="WorkList__title"><?php the_title(); ?>
                                    </p>
                                </a>

                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </div>

        </section>


    <?php endif; ?>

</main>

<!-- Slickのライブラリ -->
<?php get_footer(); ?>