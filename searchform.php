<form action="<?php echo home_url( '/' ); ?>" method="get" id="searchform" role="search">
    <fieldset>
        <input type="text" name="s" id="search" class="inputSearch" value="<?php the_search_query(); ?>" />
        <input type="image" alt="Search" class="imgSearch" src="<?php bloginfo( 'template_url' ); ?>/images/search_btn.png" />
    </fieldset>
</form>