<?php get_header() ?>
    <header>
        <div class="header__banner" style="background-image: url('<?php the_field('home__header_background_image'); ?>')">
            <h1><?php the_field('home__header_title') ?></h1>
            <p><?php the_field('home__header_subtitle') ?></p>
        </div>
    </header>
    <div class="menu__wrapper">
        <?php if (have_rows('home__header_menu')) : ?>
            <?php while (the_repeater_field('home__header_menu')) : ?>
                <div class="menu__wrapper_card">
                    <?php the_sub_field('name'); ?>
                    <img src="<?php the_sub_field('image'); ?>">
                </div>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
    </div>
    
    <div class="content__wrapper">
        <div class="content__wraper_first-content">
            <img src="<?php the_field('body__content_first_image') ?>"/>
            <h3><?php the_field('body__content_first_title') ?></h3>
            <span></span>
            <p><?php the_field('body__content_first_subtitle') ?></p>
        </div>
        <div class="content__wraper_second-content">
            <img src="<?php the_field('body__content_second_image') ?>"/>
            <h3><?php the_field('body__content_second_title') ?></h3>
            <span></span>
            <p><?php the_field('body__content_second_subtitle') ?></p>
        </div>
        <div class="content__wraper_third-content">
            <img src="<?php the_field('body__content_third_image') ?>"/>
            <h3><?php the_field('body__content_third_title') ?></h3>
            <span></span>
            <p><?php the_field('body__content_third_subtitle') ?></p>
        </div>
        <div class="content__wraper_fourth-content">
            <img src="<?php the_field('body__content_fourth_image') ?>"/>
            <h3><?php the_field('body__content_fourth_title') ?></h3>
            <span></span>
            <p><?php the_field('body__content_fourth_subtitle') ?></p>
        </div>
    </div>

    <div  class="menu__phare_wrapper">
    <h2> <?php the_field('body__content_menu_phare') ?></h2>
<?php 
$args = array(
    'post_type' => 'menu_phare',
    'posts_per_page' => 4, // nombre d'articles à afficher
    'orderby' => 'date', // Ordonné par date de publication
    'order' => 'DESC' // Décroissant
);

// Section pour les menus phares

$the_query = new WP_Query($args); 
?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    
            <div class="menu__phare_wrapper_container">
                <img src="<?php the_field('menu_image'); ?>"></img>
                <p><?php the_field('menu_name'); ?></p>
                <?php $button_group = get_field('menu_cta_button');
                    if( $button_group ): ?>
                    <div class="menu__phare_wrapper_container_button-container">
                        <a href="<?php echo esc_url( $button_group['menu_cta_button_link'] ); ?>" class="button">
                        <?php echo esc_html( $button_group['menu_cta_button_text'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>    

    </div>


<!-- Catégories pour les taxonomy -->
    <?php
$terms = get_terms(array(
    'taxonomy' => 'pays',
    'hide_empty' => false,
));
?>
<div class="frontpage__cat_wrapper">
    <h2> <?php the_field('body__content_menu_cat') ?></h2>
    <?php foreach ($terms as $term) : ?>
        <a href="<?php echo get_term_link($term); ?>" class="frontpage__cat_wrapper_link"><?php echo $term->name; ?> </a>
    <?php endforeach; ?>    

        
    
</div>
<?php get_footer() ?>