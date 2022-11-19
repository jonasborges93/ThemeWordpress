<?php 
$cpt = array(
    'post_type' => 'experiences',
);

$content = new WP_Query($cpt);
?>

<?php if($content->have_posts()):?>
<div class="sidebar__experiences cards">
    <h2 class="sidebar__title">Experiências</h2>
    <ul class="experiences__list">
    <?php while ($content->have_posts()) : $content->the_post();?>
        <li class="experiences__item">
            <h3 class="experiences__title"><?php echo the_title();?></h3>
            <p class="experiences__situation"><?php echo the_field('experience_situation');?></p>
            <p class="experiences__organization"><?php echo the_field('experience_company');?></p>
        </li>
    <?php endwhile;?>
    </ul>
</div>
<?php endif;?>