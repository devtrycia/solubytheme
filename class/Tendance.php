<?php

// namespace App;


// class Tendance
// {

//     public function __construct()
//     {
//         $this->create_post_type();
//     }

//     public function create_post_type()
//     {
//         $label = array(
//             'name'                     => __('Tendances', '_themevertlette'),
//             'singular_name'            => __('Tendance', '_themevertlette'),
//             'menu_name'                => __('Tendance', 'Admin menu name', '_themevertlette'),
//             'add_new'                  => __('Ajouter un info', '_themevertlette'),
//             'add_new_item'             => __('Ajouter une tendance', '_themevertlette'),
//             'edit'                     => __('Editer la tendance', '_themevertlette'),
//             'edit_item'                => __('Editer les tendances', '_themevertlette'),
//             'new_item'                 => __('Nouvelle info', '_themevertlette'),
//             'view'                     => __('Voir info', '_themevertlette'),
//             'view_items'               => __('Voir les tendances', '_themevertlette'),
//             'search_items'             => __('Rechercher les tendances', '_themevertlette'),
//             'not_found'                => __('Aucun info trouvée', '_themevertlette'),
//             'not_found_in_trash'       => __('Aucun info trouvée dans la corbeille', '_themevertlette'),
//         );

//         $args = array(
//             'labels'              => $label,
//             'public'              => true,
//             'has_archive'         => true,
//             'publicly_queryable'  => true,
//             'show_in_menu'        => true,
//             'hierarchical'        => false,
//             'exclude_from_search' => false,
//             'supports'            => array('title', 'editor', 'exerpt', 'thumbnail', 'page-attributes'),
//             'capability_type'     => 'post',
//         );
//         register_post_type('vertlette_tendance', $args);
//     }

//     static public function get_all_tendances()
//     {
//         $args = array(
//             'post_type'      => 'vertlette_tendance',
//             'posts_per_page' => 1

//         );

//         return new \WP_Query($args);
//     }
// }
// new Tendance();
