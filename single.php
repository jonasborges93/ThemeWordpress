<?php get_header(); ?>
<div class="layout">
    <main class="container">
        <aside class="sidebar">
            <?php get_template_part('template-parts/person-partial');?>
            <?php get_template_part('template-parts/technologies-partial');?>
            <?php get_template_part('template-parts/experiencies-partial');?>
            <?php get_template_part('template-parts/educations-partial');?>
        </aside>

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
            <?php endif;?>
        </section>
        
    </main>
</div>
<?php get_footer(); ?>