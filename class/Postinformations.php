<?php

namespace App;

class PostInformations
{
    public function __construct()
    {
        $this->create_post_type();
    }

    public function create_post_type()
    {
        $label = array(
            'name'                     => __('Tendances', '_solubytheme'),
            'singular_name'            => __('Tendance', '_solubytheme'),
            'menu_name'                => __('Tendance', 'Admin menu name', '_solubytheme'),
            'add_new'                  => __('Ajouter un info', '_solubytheme'),
            'add_new_item'             => __('Ajouter une tendance', '_solubytheme'),
            'edit'                     => __('Editer la tendance', '_solubytheme'),
            'edit_item'                => __('Editer les tendances', '_solubytheme'),
            'new_item'                 => __('Nouvelle info', '_solubytheme'),
            'view'                     => __('Voir info', '_solubytheme'),
            'view_items'               => __('Voir les tendances', '_solubytheme'),
            'search_items'             => __('Rechercher les tendances', '_solubytheme'),
            'not_found'                => __('Aucun info trouvée', '_solubytheme'),
            'not_found_in_trash'       => __('Aucun info trouvée dans la corbeille', '_solubytheme'),
        );

        $args = array(
            'labels'              => $label,
            'public'              => true,
            'has_archive'         => true,
            'publicly_queryable'  => true,
            'show_in_menu'        => true,
            'hierarchical'        => false,
            'exclude_from_search' => false,
            'supports'            => array('title', 'editor', 'exerpt', 'thumbnail', 'page-attributes'),
            'capability_type'     => 'post',
        );
        register_post_type('solubytheme_PostInformations', $args);
    }

    public static function get_all_tendances()
    {
        $args = array(
            'post_type'      => 'solubytheme_PostInformations',
            'posts_per_page' => 1

        );

        return new \WP_Query($args);
    }
}
new PostInformations();
