<!-- Template Name: WORKS  -->
<?php get_header(); ?>


<main class="Works">
    <?php if (is_singular('logo')) : ?>
        <h1>
            ロゴ・名刺
        </h1>
        <section class="WorksList">
            <div class="WorksList__inner">
                <ul class="WorksList__list">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <li class="WorksList__item">
                                <a href="<?php the_permalink(); ?>">

                                    <div class="WorkList__img">
                                        <img src="img/1-sp-mukohan.png" alt="">
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