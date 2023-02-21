<?php

add_action('init', 'custom_wishlist');

function custom_wishlist() {
    if(!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = array();
    }
}


add_action('woocommerce_after_shop_loop_item', 'add_to_wishlist_button');

function add_to_wishlist_button() {
    global $product;

    $wishlist = $_SESSION['wishlist'];
    $product_id = $product->get_id();

    if(in_array($product_id, $wishlist)) {
        echo '<a href="?remove_from_wishlist=' . $product_id . '">Remove from wishlist</a>';
    } else {
        echo '<a href="?add_to_wishlist=' . $product_id . '">Add to wishlist</a>';
    }
}


add_action('init', 'add_to_wishlist');

function add_to_wishlist() {
    if(isset($_GET['add_to_wishlist'])) {
        $product_id = $_GET['add_to_wishlist'];
        $wishlist = $_SESSION['wishlist'];
        if(!in_array($product_id, $wishlist)) {
            array_push($wishlist, $product_id);
        }
        $_SESSION['wishlist'] = $wishlist;
        wp_redirect(get_permalink(get_page_id('shop')));
        exit;
    }
}


add_action('init', 'remove_from_wishlist');

function remove_from_wishlist() {
    if(isset($_GET['remove_from_wishlist'])) {
        $product_id = $_GET['remove_from_wishlist'];
        $wishlist = $_SESSION['wishlist'];
        $wishlist = array_diff($wishlist, array($product_id));
        $_SESSION['wishlist'] = $wishlist;
        wp_redirect(get_permalink(get_page_id('shop')));
        exit;
    }
}


function display_wishlist() {
    $wishlist = $_SESSION['wishlist'];
    if(!empty($wishlist)) {
        echo '<ul>';
        foreach($wishlist as $product_id) {
            $product = wc_get_product($product_id);
            echo '<li>' . $product->get_name() . ' - <a href="?remove_from_wishlist=' . $product_id . '">Remove</a> - <a href="?add_to_cart=' . $product_id . '">Add to cart</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Your wishlist is empty</p>';
    }
}
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
  ?>