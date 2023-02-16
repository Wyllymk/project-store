<?php 
/**
 * Template Name: Shop Page
 */
get_header();?>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        $args = array(
            'post_type' => 'product',       
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $posts = new WP_Query( $args );
        if ( $posts -> have_posts() ):
            while ( $posts -> have_posts() ): 
                $posts->the_post();
        ?>

                <div class="col mb-5">
                    <div class="card h-100" style="width: 18rem;">
                         <!-- Sale badge-->
                         <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <div class="d-flex justify-content-center img-fluid">
                            <?php the_post_thumbnail('thumbnail');?>
                        </div>

                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="card-title" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a class="text-decoration-none"href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                <p class="card-text"><?php the_excerpt();?></p>
                                <!-- Product price-->
                                <div class="d-flex justify-content-center gap-2">
                                    <p class="text-danger text-decoration-line-through">Ksh <?php echo esc_attr( get_post_meta( get_the_ID(), 'initial_price', true ) ); ?></p>
                                    <p class="bold">Ksh <?php echo esc_attr( get_post_meta( get_the_ID(), 'current_price', true ) ); ?></p>
                                </div>                               
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-primary mt-auto" href="<?php the_permalink();?>">View Product</a></div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
        endif;
            

        wp_reset_query();
        ?>
                
    </div>
</div>
<?php get_footer();?>