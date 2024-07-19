<?php wp_footer(); ?>

<footer>
    <?php
    // Afficher le menu du footer
    wp_nav_menu(
        array(
            'theme_location' => 'footer', // Nom de l'emplacement du menu pour le footer
            'container' => 'footer',         // Élément HTML conteneur
            'menu_class' => 'footer__menu',
            'container_class' => 'footer__container',
        )    
    );

    // Nom de l'emplacement du menu
    $menu_name = 'footer';

    // Obtenir les emplacements de menus
    $locations = get_nav_menu_locations();

    // Vérifier si l'emplacement de menu est défini
    if (isset($locations[$menu_name])) {
        $menu_id = $locations[$menu_name];
        
        // Récupérer les champs ACF associés au menu
        $facebook_link = get_field('footer__facebook_link', 'nav_menu_' . $menu_id);
        $instagram_link = get_field('footer__instagram_link', 'nav_menu_' . $menu_id);
        $youtube_link = get_field('footer__youtube_link', 'nav_menu_' .$menu_id)
        
        // Afficher les champs ACF
        ?>
        <div class="footer__rs_container">
            <?php if ($facebook_link): ?>
                <p><?php echo "$facebook_link"?></p>
            <?php endif; ?>

            <?php if ($instagram_link): ?>
                <p><?php echo "$instagram_link"?></p>
            <?php endif; ?>
            
            <?php if ($youtube_link): ?>
                <p><?php echo "$youtube_link"?></p>
            <?php endif; ?>
        </div>


        <?php
    } else {
        echo '<p>Emplacement du menu pour le footer non défini.</p>';
    }
    ?>
</footer>






</body>
</html>
