<?php
// Register Custom Taxonomy
function frogspark_featured_taxonomy() {

    $labels = array(
        'name'                       => _x('Featured Taxonomies', 'Taxonomy General Name', 'frogspark'),
        'singular_name'              => _x('Featured Taxonomy', 'Taxonomy Singular Name', 'frogspark'),
        'menu_name'                  => __('Featured Taxonomy', 'frogspark'),
        'all_items'                  => __('All Taxonomy', 'frogspark'),
        'parent_item'                => __('Parent Taxonomy', 'frogspark'),
        'parent_item_colon'          => __('Parent Taxonomy:', 'frogspark'),
        'new_item_name'              => __('New Item Taxonomy', 'frogspark'),
        'add_new_item'               => __('Add New Taxonomy', 'frogspark'),
        'edit_item'                  => __('Edit Taxonomy', 'frogspark'),
        'update_item'                => __('Update Taxonomy', 'frogspark'),
        'view_item'                  => __('View Taxonomy', 'frogspark'),
        'separate_items_with_commas' => __('Separate taxonomy with commas', 'frogspark'),
        'add_or_remove_items'        => __('Add or remove taxonomy', 'frogspark'),
        'choose_from_most_used'      => __('Choose from the most used', 'frogspark'),
        'popular_items'              => __('Popular taxonomies', 'frogspark'),
        'search_items'               => __('Search Items', 'frogspark'),
        'not_found'                  => __('Not Found', 'frogspark'),
        'no_terms'                   => __('No items', 'frogspark'),
        'items_list'                 => __('Items list', 'frogspark'),
        'items_list_navigation'      => __('Items list navigation', 'frogspark'),
    );
    $args   = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => false,
    );
    register_taxonomy('featured_taxonomy', array('post'), $args);

}

add_action('init', 'frogspark_featured_taxonomy', 0);