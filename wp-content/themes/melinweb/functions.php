<?php
add_action('wp_enqueue_scripts', 'wpm_enqueue_styles');
function wpm_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Disable plugings automatic updates plugins & themes
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');


/*
* On utilise une fonction pour créer notre custom post type 'Projets'
*/

function wpm_custom_post_type()
{

    // Projets

    $label_project = array(
        // Le nom au pluriel
        'name'                => _x('Projets', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Projet', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Projets'),
        // Les différents libellés de l'administration
        'all_items'           => __('Tous les projets'),
        'view_item'           => __('Voir les projets'),
        'add_new_item'        => __('Ajouter un nouveau projet'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer le projet'),
        'update_item'         => __('Modifier le projet'),
        'search_items'        => __('Rechercher un projet'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille'),
    );

    $args_project = array(
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'label'               => __('projects'),
        'description'         => __('Tous sur projets'),
        'labels'              => $label_project,
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'projects'),
    );

    register_post_type('projects', $args_project);

    // Formations

    $label_formation = array(
        // Le nom au pluriel
        'name'                => _x('Formations', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Formation', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Formations'),
        // Les différents libellés de l'administration
        'all_items'           => __('Toutes les formations'),
        'view_item'           => __('Voir les formations'),
        'add_new_item'        => __('Ajouter une nouvelle formation'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer la formation'),
        'update_item'         => __('Modifier la formation'),
        'search_items'        => __('Rechercher une formation'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args_formation = array(
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'label'               => __('formations'),
        'description'         => __('Tous sur formation'),
        'labels'              => $label_formation,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        /*
            * Différentes options supplémentaires
            */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'formations'),
    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type('formations', $args_formation);

    // Experiences

    $label_experience = array(
        // Le nom au pluriel
        'name'                => _x('Expériences', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Expérience', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Expériences'),
        // Les différents libellés de l'administration
        'all_items'           => __('Toutes les expériences'),
        'view_item'           => __('Voir les expériences'),
        'add_new_item'        => __('Ajouter une nouvelle expérience'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer l\'expérience'),
        'update_item'         => __('Modifier l\'expérience'),
        'search_items'        => __('Rechercher une expérience'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args_experience = array(
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'label'               => __('experiences'),
        'description'         => __('Tous sur formation'),
        'labels'              => $label_experience,
        'menu_icon'           => 'dashicons-archive',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'experiences'),
    );

    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type('experiences', $args_experience);
}

add_action('init', 'wpm_custom_post_type', 0);

add_action('init', 'wpm_add_taxonomies', 0);

// Taxonomies

function wpm_add_taxonomies()
{

    // Catégorie

    $label_cat_project = array(
        'name'                       => _x('Catégories', 'taxonomy general name'),
        'singular_name'              => _x('Catégories', 'taxonomy singular name'),
        'search_items'               => __('Rechercher une catégorie'),
        'popular_items'              => __('Catégories'),
        'all_items'                  => __('Toutes les catégories'),
        'edit_item'                  => __('Editer une catégorie'),
        'update_item'                => __('Mettre à jour une catégorie'),
        'add_new_item'               => __('Ajouter une nouvelle catégorie'),
        'new_item_name'              => __('Nom de la nouvelle catégorie'),
        'add_or_remove_items'        => __('Ajouter ou supprimer une catégorie'),
        'choose_from_most_used'      => __('Choisir parmi les catégories les plus utilisées'),
        'not_found'                  => __('Pas de catégories trouvées'),
        'menu_name'                  => __('Catégories'),
    );

    $args_cat_project = array(
        // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
        'hierarchical'          => true,
        'labels'                => $label_cat_project,
        'show_ui'               => true,
        'show_in_rest'            => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'categories-projects'),
    );

    register_taxonomy('categories-projects', 'projects', $args_cat_project);

    // Tags

    $label_tag_project = array(
        'name'                       => _x('Tags', 'taxonomy general name'),
        'singular_name'              => _x('Tags', 'taxonomy singular name'),
        'search_items'               => __('Rechercher un tag'),
        'popular_items'              => __('Tags'),
        'all_items'                  => __('Tous les tags'),
        'edit_item'                  => __('Editer un tag'),
        'update_item'                => __('Mettre à jour un tag'),
        'add_new_item'               => __('Ajouter un nouveau tag'),
        'new_item_name'              => __('Nom du nouveau tag'),
        'add_or_remove_items'        => __('Ajouter ou supprimer un tag'),
        'choose_from_most_used'      => __('Choisir parmi les tags les plus utilisés'),
        'not_found'                  => __('Pas de tags trouvés'),
        'menu_name'                  => __('Tags'),
    );

    $args_tag_project = array(
        // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
        'hierarchical'          => true,
        'labels'                => $label_tag_project,
        'show_ui'               => true,
        'show_in_rest'            => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'tags-projects'),
    );

    register_taxonomy('tags-projects', array('projects', 'formations'), $args_tag_project);
}
