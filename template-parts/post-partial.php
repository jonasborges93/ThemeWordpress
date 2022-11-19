<?php
    $posts = array('posts_per_page' => 6);
    $post_content = new WP_Query($posts);

    // echo '<pre>'; print_r($post_content);echo '</pre>';
?>
<?php if($post_content): ?>
<div class="posts">
    <div class="recentPosts__header cards">
        <h2 class="posts__title">Últimos Posts</h2>
    </div>
    <?php while ($post_content-> have_posts()) : $post_content->the_post(); ?>
    <article class="post cards">
        <a href="<?php echo get_permalink(); ?>" class="post__link">
            <?php if (the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail(); ?>" alt="<?php the_title();?>" class="post__image">
            <?php endif;?>
            <div class="post__content">
                <h3 class="post__title"><?php the_title();?></h3>
                <p class="post__date"><?php echo get_the_date();?></p>
                <?php the_excerpt();?>
            </div>
        </a>
    </article>
    <?php endwhile;?>
</div>
<?php endif;?>
