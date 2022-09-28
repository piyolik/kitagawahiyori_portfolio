<!--　Template Name: POST  -->


<?php get_header(); ?>

<main class="Work">

    <!-- この中でループをおこなう -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <!-- 画像があれば画像を表示させたい -->

            <section class="Work-img">

                <?php
                $imagefiled = get_field('imagefiled');
                if ($imagefiled) {
                ?>
                    <div class="Work-img__img">
                        <img src="<?php echo $imagefiled ?>" />
                    </div>
                <?php } ?>

                <?php
                $imagefiled_2 = get_field('imagefiled_2');
                if ($imagefiled_2) {
                ?>
                    <div class="Work-img__img">
                        <img src="<?php echo $imagefiled_2 ?>" />
                    </div>
                <?php } ?>

                <?php
                $imagefiled_3 = get_field('imagefiled_3');
                if ($imagefiled_3) {
                ?>
                    <div class="Work-img__img">
                        <img src="<?php echo $imagefiled_3 ?>" />
                    </div>
                <?php } ?>

                <?php if (get_field('movie_url')) : ?>
                    <div class="Work-img__movie">
                        <?php echo $embed_code = wp_oembed_get(get_field('movie_url')); ?>
                    </div>
                <?php endif; ?>


            </section>



            <section class=" Work-detail">

                <!-- 作品タイトルを表示させる -->

                <div class="Work-detail__title">
                    <h2><?php the_title(); ?></h2>
                </div>



                <!-- 作品詳細① -->
                <?php if (get_field('デザイン課題')) : ?>
                    <div class="Work-detail__item">

                        <!-- 小見出し -->
                        <div class="Work-detail__heading">
                            <div class="Work-detail__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_fire.svg" alt="">
                            </div>
                            <h3>デザイン課題</h3>
                        </div>

                        <!-- 詳細本文 -->
                        <div class="Work-detail__detail">
                            <div class="Work-detail__detail-wrap">
                                <?php the_field('デザイン課題'); ?>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>


                <!-- 作品詳細② -->
                <?php if (get_field('情報整理')) : ?>
                    <div class="Work-detail__item">

                        <!-- 小見出し -->
                        <div class="Work-detail__heading">
                            <div class="Work-detail__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_concept.svg" alt="">
                            </div>
                            <h3>情報整理</h3>
                        </div>

                        <!-- 詳細本文 -->
                        <div class="Work-detail__detail">
                            <div class="Work-detail__detail-wrap">
                                <?php the_field('情報整理'); ?>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>

                <?php if (get_field('着眼点')) : ?>
                    <div class="Work-detail__item">
                        <div class="Work-detail__heading">
                            <div class="Work-detail__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_settting.svg" alt="">
                            </div>
                            <h3>着眼点</h3>
                        </div>
                        <div class="Work-detail__detail">
                            <div class="Work-detail__detail-wrap">
                                <?php the_field('着眼点'); ?>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if (get_field('デザインコンセプト')) : ?>
                    <div class="Work-detail__item">
                        <div class="Work-detail__heading">
                            <div class="Work-detail__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_star.svg" alt="">
                            </div>
                            <h3>デザインコンセプト</h3>
                        </div>
                        <div class="Work-detail__detail">
                            <div class="Work-detail__detail-wrap design-concept">
                                <?php the_field('デザインコンセプト'); ?>
                                <div class="Work-detail__more">
                                    <div class="Work-detail__more-btn bounce">
                                        <a href="<?php the_field('link'); ?>"><span>MORE</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </section>

    <?php endwhile;
    endif; ?>



</main>

<?php get_footer(); ?>