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
                            <h1>Jogos independentes criados por desenvolvedores e estúdios potiguares</h1>
                        </div>

                        <div class="pagina-texto">
                            <div class="devs-wrapper">
                                <div class="devs-info row">
                                    <div class="dev-logo small-12 medium-4 large-4 column left text-center">
                                        <?php the_post_thumbnail('logo-jogos'); ?>
                                    </div>
                                    <div class="dev-texto small-12 medium-8 large-8 column">
                                        <?php the_title('<h2 class="text-center">', '</h2>'); ?>
                                        <div class="row">
                                            <div class="small-12 medium-10 large-10 column left">
                                                <?php
                                                    $porcentagem = get_field('jogo_progresso');
                                                ?>
                                                <?php if( $porcentagem ): ?>
                                                    <div class="progress round">
                                                        <span class="meter alert" style="width: <?php echo $porcentagem; ?>%"></span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="small-12 medium-2 large-2 column right text-center">
                                                <?php echo $porcentagem . '% concluído'; ?>
                                            </div>
                                        </div>

                                        <?php
                                            $string_formato_data = 'd \d\e F \d\e Y';
                                            $timestamp = strtotime(get_field('jogo_data_lancamento'));

                                            echo 'Lançamento em: ' . date_i18n($string_formato_data, $timestamp);
                                        ?>

                                        <?php the_field('jogo_descricao'); ?>
                                        <div class="text-right">
                                            <!-- <a target="_blank" class="tiny button" href="<?php // the_field('dev_url_site'); ?>">Acessar site</a> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="jogo-screenshots row">
                                    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 clearing-thumbs" data-clearing>
                                        <?php if(have_rows('jogo_screenshots')): ?>
                                            <?php while(have_rows('jogo_screenshots')): the_row(); ?>
                                                <li class="text-center">
                                                    <?php
                                                        $imagem_id = get_sub_field('galeria_imagem');
                                                        $imagem_tamanho = 'full';

                                                        $imagem = wp_get_attachment_image_src($imagem_id, $imagem_tamanho);
                                                    ?>
                                                    <a href="<?php echo $imagem[0]; ?>">
                                                        <?php
                                                            $thumb_id = get_sub_field('galeria_imagem');
                                                            $thumb_tamanho = 'thumbnail-jogos-small';

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