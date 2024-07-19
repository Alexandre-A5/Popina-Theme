<?php get_header(); ?>

    <h1 class="tax__title"><?php single_term_title(); ?></h1>
    <div class="tax__wrapper">
        <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="tax__wraper_info_container">
            <img src="<?php the_field('menu_image')?>" alt="">
            <h2><?php the_title(); ?></h2>

            <?php $button_group = get_field('menu_cta_button');
                    if( $button_group ): ?>
                    <div class="button-container">
                        <a href="<?php echo esc_url( $button_group['menu_cta_button_link'] ); ?>" class="button">
                        <?php echo esc_html( $button_group['menu_cta_button_text'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>

        </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
    

<?php get_footer(); ?>