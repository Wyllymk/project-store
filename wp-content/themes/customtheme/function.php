
<?php

function create_wishlist_post_type() {
    register_post_type('wishlist',
      array(
        'labels' => array(
          'name' => __('Wishlist'),
          'singular_name' => __('Wishlist'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'wishlist'),
      )
    );
  }
  add_action('init', 'create_wishlist_post_type');
  

function add_to_wishlist() {
  $post_id = $_POST['post_id'];
  $wishlist_item = array(
    'post_title' => get_the_title($post_id),
    'post_content' => '',
    'post_status' => 'publish',
    'post_type' => 'wishlist',
    'post_author' => get_current_user_id()
  );
  wp_insert_post($wishlist_item);

  // Redirect back to the product page
  wp_redirect(get_permalink($post_id));
  exit;
}
add_action('admin_post_add_to_wishlist', 'add_to_wishlist');

// Add to Cart
function add_to_cart() {
  $post_id = $_POST['post_id'];
  // Add item to cart
  WC()->cart->add_to_cart($post_id);
  // Remove item from wishlist
  $wishlist_item_id = get_post_meta($post_id, '_wishlist_item_id', true);
  wp_delete_post($wishlist_item_id);

  // Redirect to the cart page
  wp_redirect(wc_get_cart_url());
  exit;
}
add_action('admin_post_add_to_cart', 'add_to_cart');

function display_wishlist() {
    $wishlist_items = get_posts(array(
      'post_type' => 'wishlist',
      'post_status' => 'publish',
      'author' => get_current_user_id()
    ));
  
    if (count($wishlist_items) == 0) {
      echo '<p>Your wishlist is currently empty.</p>';
      return;
    }
  
    echo '<ul class="wishlist-items">';
    foreach ($wishlist_items as $wishlist_item) {
      $post_id = get_post_meta($wishlist_item->ID, '_wishlist_post_id', true);
      $product = wc_get_product($post_id);
      echo '<li>';
      echo '<h4>' . get_the_title($post_id) . '</h4>';
      echo '<button class="remove-from-wishlist" data-wishlist-id="' . $wishlist_item->ID . '">Remove from Wishlist</button>';
      echo '</li>';
    }
    echo '</ul>';
  }
 
function remove_from_wishlist() {
    $wishlist_item_id = $_POST['wishlist_id'];
    wp_delete_post($wishlist_item_id);
  
    // Redirect back to the wishlist page
    wp_redirect(get_permalink(get_page_by_title('Wishlist')));
    exit;
  }
  add_action('admin_post_remove_from_wishlist', 'remove_from_wishlist');

  function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
  
  
?>