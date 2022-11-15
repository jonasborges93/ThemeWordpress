<?php 
$cpt_technologies = array(
    'post_type' => 'Technologies',
);

$content_technologies = new WP_Query($cpt_technologies);
?>

<?php if($content_technologies->have_posts()):?>
<div class="sidebar__technologies cards">
    <h2 class="sidebar__title">Tecnologias</h2>
    <ul class="technologies__list">
    <?php while ($content_technologies->have_posts()) : $content_technologies->the_post();?>
        <li class="technologies__item">
            <?php echo the_title();?>
        </li>
        <?php endwhile;?>
    </ul>
</div>
<?php endif;?>