<?php 
// Register Custom Post Type
function custom_post_type_person() {
	$labels = array(
		'name'                  => _x( 'Info. Pessoal', 'Info. Pessoa', 'text_domain' ),
		'singular_name'         => _x( 'Info. Pessoal', 'Info. Pessoa', 'text_domain' ),
		'menu_name'             => __( 'Info. Pessoal', 'text_domain' ),
		'name_admin_bar'        => __( 'Info. Pessoal', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todas Infos. Pessoais', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar nova Info. Pessoal', 'text_domain' ),
		'add_new'               => __( 'Adicionar Nova', 'text_domain' ),
		'new_item'              => __( 'Nova Info. Pessoal', 'text_domain' ),
		'edit_item'             => __( 'Editar Info. Pessoal', 'text_domain' ),
		'update_item'           => __( 'Atualizar Info. Pessoal', 'text_domain' ),
		'view_item'             => __( 'Ver Info. Pessoal', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Info. Pessoal', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Info. Pessoais', 'text_domain' ),
		'description'           => __( 'Info. Pessoais Descri????o', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon' 			=> 'dashicons-edit-large',
	);
	register_post_type( 'Person', $args );

}
add_action( 'init', 'custom_post_type_person', 0 );