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
                <div class="arquivamento">
                    <?php $post = $posts[0]; // Hack. Insira $post para que the_date() funcione. ?>
                    <?php /* Exibição por Categoria */ if (is_category()) { ?>
                    <p>Todos os posts da categoria "<?php echo single_cat_title(); ?>"</p>
                    <?php /* Exibição por dia */ } elseif (is_day()) { ?>
                    <p>Todos os posts de <?php the_time('j \d\e F \d\e Y'); ?></p>
                    <?php /* Exibição por mês */ } elseif (is_month()) { ?>
                    <p>Todos os posts de <?php the_time('F \d\e Y'); ?></p>
                    <?php /* Exibição por ano */ } elseif (is_year()) { ?>
                    <p>Todos os posts de <?php the_time('Y'); ?></p>
                    <?php /* Exibição por autor */ } elseif (is_author()) { ?>
                    <p>Todos os posts do(a) autor(a) <?php the_author(); ?></p>
                    <?php /* Caso o arquivamento deva ser exibido em uma Página estática */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <p>Arquivo do site</p>
                    <?php } ?>
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
            </article>
        </div>
    </section>
<?php get_footer(); ?>