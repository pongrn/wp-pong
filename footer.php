        <!-- Rodapé -->
        <footer>
            <div class="row">
                <div class="small-11 small-centered medium-12 medium-uncentered large-12 large-uncentered column">
                    <div class="widgets row">
                        <?php dynamic_sidebar('widgets-rodape'); ?>
                    </div>

                    <div class="creditos row">
                        <div class="small-12 medium-12 large-12 column text-center">
                            &#169; 2014 - <?php echo date('Y'); ?> <?php bloginfo('name');?><br>
                            Desenvolvido por <a target="_blank" href="https://giancarlosilva.com.br">Giancarlo
                                Silva</a><br>
                            <a target="_blank" href="https://giancarlosilva.com.br/humans.txt">humans.txt</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>