<?php get_header(); ?>

<main class="Top">
    <!-- worklist テンプレートを読み込み -->
    <?php get_template_part('title'); ?>　
    <section class="Slider">
        <ul class="slider Slider__Inner">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <li class="slider-item slider-item01 Slider__item">
                        <a href="<?php the_permalink(); ?>">
                            <p><?php the_title(); ?></p>
                            <div class="Slider__item__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <p><?php the_post_thumbnail('post-thumbnail'); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>

                    </li>
                <?php endwhile; ?>
            <?php endif; ?>




        </ul>
    </section>
</main>

<?php get_footer(); ?>