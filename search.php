<?php get_header(); ?>
    <section class="conteudo-pagina">
        <div class="row">
            <div class="pong-breadcrumbs small-12 medium-12 large-12 column text-right">
                Início / <a href="#">Lorem ipsum</a>
            </div>
        </div>

        <div class="row">
            <article class="paginas-wrapper bg-claro small-11 small-centered medium-12 medium-uncentered large-12 large-uncentered column">
                <div class="resultados-busca">
                    <p><?php $mySearch = new WP_Query("s=$s & showposts=9999"); $num = $mySearch->post_count; echo $num.' resultado(s) de busca para o termo "'; the_search_query();?>" em <?php get_num_queries(); ?> <?php timer_stop(1); ?> segundos.</p>
                </div>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="pagina-titulo">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_time('j \d\e F \d\e Y'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="post-404 pagina-titulo text-center">
                        <h1>404 - Not Found</h1>
                        <p>Post não encontrado.</p>
                    </div>
                <?php endif; ?>
                <div class="paginacao row">
                    <div class="small-12 medium-12 large-12 column text-center">
                        <?php
                            the_posts_pagination( array(
                                    'mid_size'  => 3,
                                    'prev_text' => __( '<<', 'textdomain' ),
                                    'next_text' => __( '>>', 'textdomain' ),
                                )
                            );
                        ?>
                    </div>
                </div>
            </article>
        </div>
    </section>
<?php get_footer(); ?>