<section class="site-main__info">
    <?php
        $plark_theme_description = get_bloginfo( 'description', 'display' );
        if( $plark_theme_description || is_customize_preview() ) : ?>
        <h1 class="site-main__infodescription"><?php echo $plark_theme_description; /* WPCS: xss ok. */ ?></h1>
    <?php endif ?>
</section>