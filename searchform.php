<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="hide-for-medium-up">
        <div class="row collapse">
            <div class="small-9 columns">
                <input type="text" id="s" name="s" placeholder="Busca" value="<?php the_search_query(); ?>">
            </div>
            <div class="small-3 columns">
                <input type="submit" class="button postfix" id="searchsubmit" value="Buscar" />
            </div>
        </div>
    </div>
    <div class="show-for-medium-up">
        <div class="row collapse">
            <div class="small-10 columns">
                <input type="text" id="s" name="s" placeholder="Busca" value="<?php the_search_query(); ?>">
            </div>
            <div class="small-2 columns">
                <input type="submit" class="button postfix" id="searchsubmit" value="Buscar" />
            </div>
        </div>
    </div>
</form>