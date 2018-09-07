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
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="pagina-titulo text-center">
                            <h1>Desenvolvedores e estúdios potiguares</h1>
                        </div>

                        <div class="pagina-texto">
                            <div class="devs-wrapper">
                                <div class="devs-info row">
                                    <div class="dev-logo small-12 medium-4 large-4 column left text-center">
                                        <?php the_post_thumbnail('thumbnail-devs'); ?>
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
                                    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 clearing-thumbs" data-clearing>
                                        <?php if(have_rows('dev_galeria')): ?>
                                            <?php while(have_rows('dev_galeria')): the_row(); ?>
                                                <li class="text-center">
                                                    <?php
                                                        $imagem_id = get_sub_field('galeria_imagem');
                                                        $imagem_tamanho = 'full';

                                                        $imagem = wp_get_attachment_image_src($imagem_id, $imagem_tamanho);
                                                    ?>
                                                    <a href="<?php echo $imagem[0]; ?>">
                                                        <?php
                                                            $thumb_id = get_sub_field('galeria_imagem');
                                                            $thumb_tamanho = 'thumbnail-devs-small';

                                                            $thumbnail = wp_get_attachment_image_src($thumb_id, $thumb_tamanho);
                                                        ?>
                                                        <img data-caption="<?php the_sub_field('galeria_legenda'); ?>" src="<?php echo $thumbnail[0]; ?>">
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
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
            </article>
        </div>
    </section>
<?php get_footer(); ?>