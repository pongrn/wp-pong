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
            <article class="paginas-wrapper bg-claro small-11 small-centered medium-11 medium-centered large-12 large-uncentered column">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="pagina-titulo text-center">
                            <?php the_title('<h1>', '</h1>'); ?>
                        </div>

                        <div class="pagina-texto">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="post-404 pagina-titulo text-center">
                        <h1>404 - Not Found</h1>
                        <p>Post não encontrado.</p>
                    </div>
                <?php endif; ?>
            </article>
        </div>
    </section>
<?php get_footer(); ?>