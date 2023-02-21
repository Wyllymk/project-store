
<?php

get_header();
 
function display_wishlist() {
    if (isset($_SESSION['wishlist'])) {
        $wishlist = $_SESSION['wishlist'];
        if (!empty($wishlist)) {
            echo '<ul>';
            foreach($wishlist as $product_id) {
                $product = wc_get_product($product_id);
                echo '<li>' . $product->get_name() . ' - <a href="?remove_from_wishlist=' . $product_id . '">Remove</a> - <a href="?add_to_cart=' . $product_id . '">Add to cart</a></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Your wishlist is empty</p>';
        }
    } else {
        echo '<p>Your wishlist is empty</p>';
    }
}

?>

<div class="container">
  <h1>Wishlist</h1>
  <?php display_wishlist(); ?>
</div>

<?php get_footer(); ?>

