<form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
    <input type="hidden" name="action" value="add_to_wishlist">
    <input type="hidden" name="post_id" value="<?php echo get_the_ID(); ?>">
    <button type="submit" class="wishlist-button">Add to Wishlist</button>
</form>
