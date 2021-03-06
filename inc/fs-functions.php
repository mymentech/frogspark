<?php
// Register custom navigation menus
function frogspark_nav_menus() {

    $locations = array(
        'footer-menu' => __('Footer Navigation', 'frogspark'),
    );
    register_nav_menus($locations);

}

add_action('init', 'frogspark_nav_menus');
add_theme_support('post-thumbnails');
add_image_size('blog_image', 900, 450);
add_image_size('blog_image_thumb', 400, 300, true);

if (!function_exists('frogspark_load_more_post')) {
    function frogspark_load_more_post() {
        if (check_ajax_referer('fromspart_load_more_posts', 'load_more_nonce')) {
            // prepare our arguments for the query
//             // we need next page to be loaded
            $args['post_status']    = 'publish';
            $args['post_type']      = array('post');
            $args['posts_per_page'] = 12;
            $args['order']          = 'DESC';
            $args['orderby']        = 'date';
            $args['paged']          = $_POST['page'] + 1;

            // it is always better to use WP_Query but not here
            query_posts($args);
            if (have_posts()) :

                // run the loop
                while (have_posts()): the_post();
                    get_template_part('template-parts/posts','blog');
                endwhile;

            endif;

            die();
        }
    }

    add_action('wp_ajax_frogspark_loadmore_posts', 'frogspark_load_more_post');
    add_action('wp_ajax_nopriv_frogspark_loadmore_posts', 'frogspark_load_more_post');
}

function get_terms_per_post_type( $taxonomies, $args=array() ) {
    //Parse $args in case its a query string.
    $args = wp_parse_args($args);

    if( !empty( $args['post_type'] ) ){

        $args['post_type'] = (array)$args['post_type'];

        add_filter( 'terms_clauses', function ( $pieces, $tax, $args){
            global $wpdb;

            //Don't use db count
            $pieces['fields'] .= ", COUNT(*) AS count_type" ;

            //Join extra tables to restrict by post type.
            $pieces['join'] .= " INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id 
                                 INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id ";

            //Restrict by post type and Group by term_id for COUNTing.
            $post_type = implode( ',', $args['post_type'] );
            $pieces['where'] .= $wpdb->prepare( " AND p.post_type IN(%s) GROUP BY t.term_id", $post_type );

            remove_filter( current_filter(), __FUNCTION__ );

            return $pieces;

        }, 10, 3 );

    }

    return get_terms($taxonomies, $args);           
}