<?php
    $cpt_person = array(
        'post_type' => 'person',
    );

    $content_person = new WP_Query($cpt_person);
?>

<?php if($content_person -> have_posts()):?>
<div class="sidebar__profile cards">
<?php 
    while ($content_person->have_posts()) : $content_person->the_post();
    // Recuperando a Imagem do ACF
    $person_image = get_field('person_photo');
    if($person_image){
        $person_image = $person_image['sizes']['large'];
    }
    // Recuperando campo de texto do ACF
    $person_profession = get_field('person_profession');
    $person_location = get_field('person_location');
    $person_education = get_field('person_education');
    $person_github = get_field('person_github');
    $person_linkedin = get_field('person_linkedin');
    $person_site = get_field('person_site');
    $person_email = get_field('person_email');
?>
    <?php if($person_image) :?>
        <img src="<?php echo $person_image; ?>" alt="Foto <?php echo the_title()?>" class="sidebar__avatar">
    <?php endif;?> 
    <h1 class="sidebar__title"><?php echo the_title();?></h1>
    <?php if($person_profession) :?>
        <p class="sidebar__text"><?php echo $person_profession; ?></p>
    <?php endif;?> 
</div>

<?php if($person_location || $person_education || $person_github || $person_linkedin || $person_site || $person_email) : ?>
<div class="sidebar__information cards">
    <ul class="information__list">
        <?php if($person_location) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/map-pin.svg" alt="Icone de Localização"
                class="item__icon">
            <?php echo $person_location;?>
        </li>
        <?php endif;?>

        <?php if($person_education) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/briefcase.svg" alt="Icone da Instituição de Formação"
                class="item__icon">
            <?php echo $person_education;?>
        </li>
        <?php endif;?>

        <?php if($person_github) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/github.svg" alt="Icone do Github"
                class="item__icon">
            <?php echo $person_github;?>
        </li>
        <?php endif;?>

        <?php if($person_linkedin) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/linkedin.svg" alt="Icone do linkedin"
                class="item__icon">
            <?php echo $person_linkedin;?>
        </li>
        <?php endif;?>

        <?php if($person_site) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/globe.svg" alt="Icone do site"
                class="item__icon">
            <?php echo $person_site;?>
        </li>
        <?php endif;?>
        
        <?php if($person_email) : ?>
        <li class="information__item">
            <img src="<?php echo get_template_directory_uri();?> /assets/utils/icons/mail.svg" alt="Icone do e-mail"
                class="item__icon">
            <?php echo $person_email;?>
        </li>
        <?php endif;?>
    </ul>
</div>
<?php endif;?>

<?php endwhile;?>
<?php endif;?>