<?php

if ( ! function_exists('empresas_post_type') ) {
	// Register Custom Post Type
	function empresas_post_type() {
		$labels = array(
			'name'                  => _x( 'Empresas', 'Post Type General Name', 'empresas' ),
			'singular_name'         => _x( 'Empresa', 'Post Type Singular Name', 'empresas' ),
			'menu_name'             => __( 'Empresas', 'empresas' ),
			'name_admin_bar'        => __( 'Empresas', 'empresas' ),
			'archives'              => __( 'Arquivo de empresas', 'empresas' ),
			'attributes'            => __( 'Atributos de empresa', 'empresas' ),
			'parent_item_colon'     => __( 'Empresa pai:', 'empresas' ),
			'all_items'             => __( 'Todos os empresas', 'empresas' ),
			'add_new_item'          => __( 'Adicionar empresa', 'empresas' ),
			'add_new'               => __( 'Adicionar novo', 'empresas' ),
			'new_item'              => __( 'Novo empresa', 'empresas' ),
			'edit_item'             => __( 'Editar empresa', 'empresas' ),
			'update_item'           => __( 'Atualizar empresa', 'empresas' ),
			'view_item'             => __( 'Visualizar empresa', 'empresas' ),
			'view_items'            => __( 'Visualizar empresas', 'empresas' ),
			'search_items'          => __( 'Buscar empresas', 'empresas' ),
			'not_found'             => __( 'Não encontrado', 'empresas' ),
			'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'empresas' ),
			'featured_image'        => __( 'Logotipo', 'empresas' ),
			'set_featured_image'    => __( 'Inserir logotipo', 'empresas' ),
			'remove_featured_image' => __( 'Remover logotipo', 'empresas' ),
			'use_featured_image'    => __( 'Usar como logotipo', 'empresas' ),
			'insert_into_item'      => __( 'Inserir no item', 'empresas' ),
			'uploaded_to_this_item' => __( 'Enviado para este empresa', 'empresas' ),
			'items_list'            => __( 'Lista de empresas', 'empresas' ),
			'items_list_navigation' => __( 'Navegação na lista', 'empresas' ),
			'filter_items_list'     => __( 'Filtro de empresas', 'empresas' ),
		);
		$rewrite = array(
			'slug'                  => 'empresas',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Empresa', 'empresas' ),
			'description'           => __( 'Empresas criados por desenvolvedores, equipes e estúdios independentes potiguares', 'empresas' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-businessman',
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
		register_post_type( 'empresas', $args );
	}
add_action( 'init', 'empresas_post_type', 0 );
}