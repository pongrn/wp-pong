<?php
if ( ! function_exists('devs_post_type') ) {
    function devs_post_type() {
        $labels = array(
            'name'                  => _x( 'Desenvolvedores(as)', 'Post Type General Name', 'pong_rn' ),
            'singular_name'         => _x( 'Desenvolvedor(a)', 'Post Type Singular Name', 'pong_rn' ),
            'menu_name'             => __( 'Devs', 'pong_rn' ),
            'name_admin_bar'        => __( 'Desenvolvedor(a)', 'pong_rn' ),
            'archives'              => __( 'Arquivo de Desenvolvedores(as)', 'pong_rn' ),
            'attributes'            => __( 'Atributos de Desenvolvedores(as)', 'pong_rn' ),
            'parent_item_colon'     => __( 'Desenvolvedor(a) pai:', 'pong_rn' ),
            'all_items'             => __( 'Todos os(as) devs', 'pong_rn' ),
            'add_new_item'          => __( 'Adicionar novo item', 'pong_rn' ),
            'add_new'               => __( 'Adicionar novo', 'pong_rn' ),
            'new_item'              => __( 'Novo item', 'pong_rn' ),
            'edit_item'             => __( 'Editar Item', 'pong_rn' ),
            'update_item'           => __( 'Atualizar Item', 'pong_rn' ),
            'view_item'             => __( 'Visualizar Item', 'pong_rn' ),
            'view_items'            => __( 'Visualizar Itens', 'pong_rn' ),
            'search_items'          => __( 'Buscar item', 'pong_rn' ),
            'not_found'             => __( 'Não encontrado', 'pong_rn' ),
            'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'pong_rn' ),
            'featured_image'        => __( 'Imagem de destaque', 'pong_rn' ),
            'set_featured_image'    => __( 'Definir imagem de destaque', 'pong_rn' ),
            'remove_featured_image' => __( 'Remover imagem de destaque', 'pong_rn' ),
            'use_featured_image'    => __( 'Usar como imagem de destaque', 'pong_rn' ),
            'insert_into_item'      => __( 'Inserir no item', 'pong_rn' ),
            'uploaded_to_this_item' => __( 'Enviado para este item', 'pong_rn' ),
            'items_list'            => __( 'Lista de itens', 'pong_rn' ),
            'items_list_navigation' => __( 'Navegação', 'pong_rn' ),
            'filter_items_list'     => __( 'Filtro', 'pong_rn' ),
        );
        $args = array(
            'label'                 => __( 'Desenvolvedores', 'pong_rn' ),
            'description'           => __( 'Desenvolvedor(a), equipe ou estúdio independente', 'pong_rn' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'revisions' ),
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
            'capability_type'       => 'page',
            'show_in_rest'          => false,
        );
        register_post_type( 'desenvolvedores', $args );
    }
    add_action( 'init', 'devs_post_type', 0 );
}