
<?php get_header();?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <h1><?php the_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; endif; ?>

    <?php
    $args = array(
      'post_type' => 'wishlist',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'orderby' => 'title',
    );
    $wishlist_query = new WP_Query( $args );
    ?>

    <?php if ( $wishlist_query->have_posts() ) : ?>

      <ul>

      <?php while ( $wishlist_query->have_posts() ) : $wishlist_query->the_post(); ?>

        <li>
          <?php the_title(); ?>
          <a href="<?php echo get_permalink(); ?>?add_to_cart=<?php echo get_the_ID(); ?>">Add to cart</a>
          <a href="<?php echo get_permalink(); ?>?remove_from_wishlist=<?php echo get_the_ID(); ?>">Remove from wishlist</a>
        </li>

      <?php endwhile; ?>

      </ul>

    <?php endif; wp_reset_query(); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
