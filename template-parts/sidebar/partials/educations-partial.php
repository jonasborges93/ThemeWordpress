<?php 
$cpt_education = array(
    'post_type' => 'education',
);

$content_education = new WP_Query($cpt_education);
?>

<?php if($content_education->have_posts()):?>
<div class="sidebar__education cards">
    <h2 class="sidebar__title">Formação acadêmica</h2>
    <ul class="education__list">
    <?php while ($content_education->have_posts()) : $content_education->the_post();?>
        <li class="education__item">
            <h3 class="education__title"><?php echo the_field('education_institution');?></h3>
            <p class="education__situation"><?php echo the_field('education_situation');?></p>
            <p class="education__organization"><?php echo the_title();?></p>
        </li>
    <?php endwhile;?>
    </ul>
</div>
<?php endif;?>