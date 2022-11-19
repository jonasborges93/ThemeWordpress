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
            <?php get_template_part('template-parts/project-partial'); ?>
            <?php get_template_part('template-parts/post-partial'); ?>    
        </section>
    </main>
</div>
<?php get_footer(); ?>
