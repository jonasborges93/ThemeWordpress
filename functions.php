<?php
//Custom Post Types
require get_template_directory() . '/assets/utils/cpt/person.php';
require get_template_directory() . '/assets/utils/cpt/experiences.php';
require get_template_directory() . '/assets/utils/cpt/educations.php';
require get_template_directory() . '/assets/utils/cpt/technologies.php';


//Carregando folhas de estilo e scripts
function load_scripts(){
    wp_enqueue_script('template-js', get_template_directory_uri() . '/assets/js/template.js');
    wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css');
}

add_action('wp_enqueue_scripts', 'load_scripts');

//Registrando os menus
register_nav_menus(
    array(
        'my_main_menu' => 'Menu Principal',
        'my_footer_menu' => 'Menu do Rodapé',
    )
);