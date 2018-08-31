<?php get_header(); ?>
    <section class="conteudo-pagina">
        <div class="row">
            <div class="pong-breadcrumbs small-12 medium-12 large-12 column text-right">
                Início / <a href="#">Lorem ipsum</a>
            </div>
        </div>

        <div class="row">
            <article class="paginas-wrapper bg-claro small-11 small-centered medium-12 medium-uncentered large-12 large-uncentered column">
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