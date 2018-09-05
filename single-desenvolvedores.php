<?php get_header(); ?>
    <section class="conteudo-pagina">
        <div class="row">
            <div class="pong-breadcrumbs small-11 small-centered medium-11 medium-centered large-12 large-uncentered column text-right">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<span id="breadcrumbs">','</span>');
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <article class="paginas-wrapper bg-claro small-11 small-centered medium-12 medium-uncentered large-12 large-uncentered column">
                <?php
                    $args = array(
                        'post_type' => 'desenvolvedores',
                        'posts_per_page' => 1,
                    );

                    $devs_query = new WP_Query( $args );
                ?>
                <?php if ( $devs_query->have_posts() ): ?>
                    <?php while ( $devs_query->have_posts() ) : $devs_query->the_post(); ?>
                        <div class="pagina-titulo text-center">
                            <h1>Desenvolvedores e estúdios potiguares</h1>
                        </div>

                        <div class="pagina-texto">
                            <div class="devs-wrapper">
                                <div class="devs-info row">
                                    <div class="dev-logo small-12 medium-4 large-4 column left text-center">
                                        <?php the_post_thumbnail('thumbnail-devs-info'); ?>
                                    </div>
                                    <div class="dev-texto small-12 medium-8 large-8 column right">
                                        <?php the_title('<h2>', '</h2>'); ?>
                                        <?php the_field('dev_descricao'); ?>
                                        <div class="text-right">
                                            <a target="_blank" class="tiny button" href="<?php the_field('dev_url_site'); ?>">Acessar site</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="devs-galeria row">
                                    <div class="small-12 medium-12 large-12 column">
                                        <img src="https://via.placeholder.com/500x360?text=Imagem+Galeria">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="post-404 pagina-titulo text-center">
                        <h1>404 - Not Found</h1>
                        <p>Post não encontrado.</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </article>
        </div>
    </section>
<?php get_footer(); ?>