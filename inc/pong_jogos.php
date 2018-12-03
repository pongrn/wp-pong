<?php

if ( ! function_exists('jogos_post_type') ) {

// Register Custom Post Type
function jogos_post_type() {
	$icone = get_stylesheet_directory_uri() . '/img/icons/gamepad.png';
	$labels = array(
		'name'                  => _x( 'Jogos', 'Post Type General Name', 'jogos' ),
		'singular_name'         => _x( 'Jogo', 'Post Type Singular Name', 'jogos' ),
		'menu_name'             => __( 'Jogos', 'jogos' ),
		'name_admin_bar'        => __( 'Jogos', 'jogos' ),
		'archives'              => __( 'Arquivo de jogos', 'jogos' ),
		'attributes'            => __( 'Atributos de jogo', 'jogos' ),
		'parent_item_colon'     => __( 'Jogo pai:', 'jogos' ),
		'all_items'             => __( 'Todos os jogos', 'jogos' ),
		'add_new_item'          => __( 'Adicionar jogo', 'jogos' ),
		'add_new'               => __( 'Adicionar novo', 'jogos' ),
		'new_item'              => __( 'Novo jogo', 'jogos' ),
		'edit_item'             => __( 'Editar jogo', 'jogos' ),
		'update_item'           => __( 'Atualizar jogo', 'jogos' ),
		'view_item'             => __( 'Visualizar jogo', 'jogos' ),
		'view_items'            => __( 'Visualizar jogos', 'jogos' ),
		'search_items'          => __( 'Buscar jogos', 'jogos' ),
		'not_found'             => __( 'Não encontrado', 'jogos' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'jogos' ),
		'featured_image'        => __( 'Logotipo', 'jogos' ),
		'set_featured_image'    => __( 'Inserir logotipo', 'jogos' ),
		'remove_featured_image' => __( 'Remover logotipo', 'jogos' ),
		'use_featured_image'    => __( 'Usar como logotipo', 'jogos' ),
		'insert_into_item'      => __( 'Inserir no item', 'jogos' ),
		'uploaded_to_this_item' => __( 'Enviado para este jogo', 'jogos' ),
		'items_list'            => __( 'Lista de jogos', 'jogos' ),
		'items_list_navigation' => __( 'Navegação na lista', 'jogos' ),
		'filter_items_list'     => __( 'Filtro de jogos', 'jogos' ),
	);
	$rewrite = array(
		'slug'                  => 'jogos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Jogo', 'jogos' ),
		'description'           => __( 'Jogos criados por desenvolvedores, equipes e estúdios independentes potiguares', 'jogos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => $icone,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'jogos', $args );
}
add_action( 'init', 'jogos_post_type', 0 );
}