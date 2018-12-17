<?php

if ( ! function_exists('devs_post_type') ) {
	// Register Custom Post Type
	function devs_post_type() {
		$labels = array(
			'name'                  => _x( 'Desenvolvedores', 'Post Type General Name', 'devs' ),
			'singular_name'         => _x( 'Desenvolvedor', 'Post Type Singular Name', 'devs' ),
			'menu_name'             => __( 'Desenvolvedores', 'devs' ),
			'name_admin_bar'        => __( 'Desenvolvedores', 'devs' ),
			'archives'              => __( 'Arquivo de devs', 'devs' ),
			'attributes'            => __( 'Atributos de dev', 'devs' ),
			'parent_item_colon'     => __( 'Dev pai:', 'devs' ),
			'all_items'             => __( 'Todos os devs', 'devs' ),
			'add_new_item'          => __( 'Adicionar dev', 'devs' ),
			'add_new'               => __( 'Adicionar novo', 'devs' ),
			'new_item'              => __( 'Novo dev', 'devs' ),
			'edit_item'             => __( 'Editar dev', 'devs' ),
			'update_item'           => __( 'Atualizar dev', 'devs' ),
			'view_item'             => __( 'Visualizar dev', 'devs' ),
			'view_items'            => __( 'Visualizar devs', 'devs' ),
			'search_items'          => __( 'Buscar devs', 'devs' ),
			'not_found'             => __( 'Não encontrado', 'devs' ),
			'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'devs' ),
			'featured_image'        => __( 'Logotipo', 'devs' ),
			'set_featured_image'    => __( 'Inserir logotipo', 'devs' ),
			'remove_featured_image' => __( 'Remover logotipo', 'devs' ),
			'use_featured_image'    => __( 'Usar como logotipo', 'devs' ),
			'insert_into_item'      => __( 'Inserir no item', 'devs' ),
			'uploaded_to_this_item' => __( 'Enviado para este dev', 'devs' ),
			'items_list'            => __( 'Lista de devs', 'devs' ),
			'items_list_navigation' => __( 'Navegação na lista', 'devs' ),
			'filter_items_list'     => __( 'Filtro de devs', 'devs' ),
		);
		$rewrite = array(
			'slug'                  => 'devs',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Desenvolvedor', 'devs' ),
			'description'           => __( 'Desenvolvedores, equipes e estúdios independentes potiguares', 'devs' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-editor-code',
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
		register_post_type( 'devs', $args );
	}
add_action( 'init', 'devs_post_type', 0 );
}