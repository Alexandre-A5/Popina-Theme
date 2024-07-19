<?php

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
    register_nav_menus(
        array(
            'main-navigation' => __( 'Main Navigation' ),
            'footer' => __( 'Footer Navigation' ) // Assurez-vous que l'emplacement 'footer' est bien enregistré
        )
    );

