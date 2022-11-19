<?php get_header(); ?>
    <?php get_template_part('template-parts/sidebar/index'); ?>

    <section class="content">
        <?php  if(have_posts()):?>
            <?php while (have_posts()) : the_post()?>
                <div class="recentPosts__header cards">
                    <h2 class="posts__title"><?php single_post_title(); ?></h2>
                </div>
                <article class="post cards">
                    <?php echo the_content();?>
                </article>
            <?php endwhile;?>
            <a href="<?php echo get_home_url(); ?>" class="post__link"><- Voltar</a>
        <?php endif;?>
    </section>
<?php get_footer(); ?>