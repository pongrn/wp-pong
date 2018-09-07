<?php
add_filter('acf/settings/show_admin', '__return_false');

/* ACF - Página de opções do tema */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Opções do site',
        'menu_title'    => 'Opções do site',
        'menu_slug'     => 'opcoes-site',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}