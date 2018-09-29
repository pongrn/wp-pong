<?php get_header(); ?>

    <section class="conteudo">
        <div class="row">
            <div class="secao-titulo small-12 medium-12 large-12 column">
                <h1>Últimas notícias - BLOG</h1>
            </div>
        </div>

        <div class="row">
            <div class="posts-wrapper bg-claro small-11 small-centered medium-11 medium-centered large-12 large-uncentered column">
                <div class="row collapse">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="noticia small-12 medium-4 large-4 column left">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thumb-container">
                                        <?php the_post_thumbnail('thumbnail-index'); ?>
                                        <div class="thumb-texto">
                                            <?php the_title('<h1>', '</h1>'); ?>
                                            <p><?php the_time('j \d\e F \d\e Y'); ?> - <?php comments_popup_link('Nenhum comentário', '1 comentário', '% comentários', 'comments-link', ''); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="noticia small-12 medium-12 large-12 column left">
                            <div class="post-404 post-titulo text-center">
                                <h1>404 - Not Found</h1>
                                <p>Post não encontrado.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
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
            </div>
        </div>
    </section>

<?php get_footer(); ?>