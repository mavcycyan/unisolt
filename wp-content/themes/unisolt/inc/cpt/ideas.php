<?php

function custom_post_type_ideas() {


    $labels = array(
        'name'                  => _x( 'Идеи', 'Идеи', 'agreg' ),
        'singular_name'         => _x( 'Идеи', 'Идеи', 'agreg' ),
        'menu_name'             => __( 'Идеи', 'agreg' ),
        'name_admin_bar'        => __( 'Идеи', 'agreg' ),
        'archives'              => __( 'Архив идей', 'agreg' ),
        'attributes'            => __( 'Атрибуты идей', 'agreg' ),
        'parent_item_colon'     => __( 'Родительская запись:', 'agreg' ),
        'all_items'             => __( 'Все идеи', 'agreg' ),
        'add_new_item'          => __( 'Добавить новую идею', 'agreg' ),
        'add_new'               => __( 'Добавить новую', 'agreg' ),
        'new_item'              => __( 'Новая идея', 'agreg' ),
        'edit_item'             => __( 'Добавить идею', 'agreg' ),
        'update_item'           => __( 'Обновить идею', 'agreg' ),
        'view_item'             => __( 'Просмотреть идею', 'agreg' ),
        'view_items'            => __( 'Просмотреть идеи', 'agreg' ),
        'search_items'          => __( 'Поиск идеи', 'agreg' ),
        'not_found'             => __( 'Идеи не найдены', 'agreg' ),
        'not_found_in_trash'    => __( 'Идеи не найдены в корзине', 'agreg' ),
        'featured_image'        => __( 'Изображение', 'agreg' ),
        'set_featured_image'    => __( 'Добавить изображение', 'agreg' ),
        'remove_featured_image' => __( 'Удалить изображение', 'agreg' ),
        'use_featured_image'    => __( 'Использовать, как изображение', 'agreg' ),
        'insert_into_item'      => __( 'Вставить в запись', 'agreg' ),
        'uploaded_to_this_item' => __( 'Обновить в этой записи', 'agreg' ),
        'items_list'            => __( 'Список идей', 'agreg' ),
        'items_list_navigation' => __( 'Навигация по списку идей', 'agreg' ),
        'filter_items_list'     => __( 'Отфильтровать список идей', 'agreg' ),
    );
    $args = array(
        'label'                 => __( 'Идеи', 'agreg' ),
        'description'           => __( '', 'agreg' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'author', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'   			=> 'dashicons-megaphone',
        //'rewrite' => array( 'slug'=>'reviews', 'with_front' => false ),
        'with_front' => false
    );
    register_post_type( 'ideas', $args );

}

add_action('init', 'custom_post_type_ideas');