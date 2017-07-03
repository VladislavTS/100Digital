<?php

function web_studio() { 
  $labels = array( 
  'name' => 'Seo студии', 
  'singular_name' => 'Seo студии', 
  'menu_name' => 'Seo студии', 
  'parent_item_colon' => 'Родительский:', 
  'all_items' => 'Все seo студии', 
  'view_item' => 'Просмотреть', 
  'add_new_item' => 'Добавить seo студию', 
  'add_new' => 'Добавить seo студию', 
  'edit_item' => 'Редактировать seo студию', 
  'update_item' => 'Обновить seo студию', 
  'search_items' => 'Найти seo студию', 
  'not_found' => 'Не найдено', 
  'not_found_in_trash' => 'Не найдено в корзине', 
  ); 
  $args = array( 
  'labels' => $labels, 
  'supports' => array( 'title','page-attributes'),  
  'public' => true, 
  'menu_position' => 5, 
  'menu_icon' => 'dashicons-book', 
  ); 
  
  register_post_type( 'web_studio', $args );
} 
add_action( 'init', 'web_studio', 0 );

function mobile_studio() { 
  $labels = array( 
  'name' => 'Mobile студии', 
  'singular_name' => 'Mobile студии', 
  'menu_name' => 'Mobile студии', 
  'parent_item_colon' => 'Родительский:', 
  'all_items' => 'Все mobile студии', 
  'view_item' => 'Просмотреть', 
  'add_new_item' => 'Добавить mobile студию', 
  'add_new' => 'Добавить mobile студию', 
  'edit_item' => 'Редактировать mobile студию', 
  'update_item' => 'Обновить mobile студию', 
  'search_items' => 'Найти mobile студию', 
  'not_found' => 'Не найдено', 
  'not_found_in_trash' => 'Не найдено в корзине', 
  ); 
  $args = array( 
  'labels' => $labels, 
  'supports' => array( 'title','page-attributes'),  
  'public' => true, 
  'menu_position' => 5, 
  'menu_icon' => 'dashicons-book', 
  ); 
  
  register_post_type( 'mobile_studio', $args );
} 
add_action( 'init', 'mobile_studio', 0 );

function advertising() { 
  $labels = array( 
  'name' => 'Реклама', 
  'singular_name' => 'Реклама', 
  'menu_name' => 'Реклама', 
  'parent_item_colon' => 'Родительский:', 
  'all_items' => 'Вся реклама', 
  'view_item' => 'Просмотреть', 
  'add_new_item' => 'Добавить рекламу', 
  'add_new' => 'Добавить рекламу', 
  'edit_item' => 'Редактировать рекламу', 
  'update_item' => 'Обновить рукламу', 
  'search_items' => 'Найти рекламу', 
  'not_found' => 'Не найдено', 
  'not_found_in_trash' => 'Не найдено в корзине', 
  ); 
  $args = array( 
  'labels' => $labels, 
  'supports' => array( 'title','page-attributes'),  
  'public' => true, 
  'menu_position' => 5, 
  'menu_icon' => 'dashicons-book', 
  ); 
  
  register_post_type( 'advertising', $args );
} 
add_action( 'init', 'advertising', 0 );

?>