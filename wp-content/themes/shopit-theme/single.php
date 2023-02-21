<?php get_header( );?>

<article class="container" id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if(have_posts()):
             while(have_posts()):
                the_post();
    ?>    
    <div class="jumbotron">
        <h2 class="text-center bg-secondary"><a class="text-decoration-none text-warning"href="<?php esc_url(get_permalink());?>"><?php the_title();?></a></h2>
        <small class=""><?php the_time('F j, Y');?> at <?php the_time('g:i a');?></small>
    </div>
    <div class="row">
        <div class="col">
            <?php if(has_post_thumbnail()){
                the_post_thumbnail('medium');
            }?>
        </div>
        <div class="col">
        <ul>
            <li><strong>Published Date: </strong><?php echo esc_attr( get_post_meta( get_the_ID(), 'published_date', true ) ); ?></li>
            <li><strong>Initial Price: </strong><?php echo esc_attr( get_post_meta( get_the_ID(), 'initial_price', true ) ); ?></li>
            <li><strong>Current Price: </strong><?php echo esc_attr( get_post_meta( get_the_ID(), 'current_price', true ) ); ?></li>
        </ul>
        </div>
    </div>
    <div class="row">
        <?php the_content();?>
    </div>
    <?php endwhile; ?>
            <!--Pagination Start -->
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-around">
                <li class="page-item">
                    <div class="page-link"><?php previous_post_link();?></div>
                </li>
                
                <li class="page-item">
                    <div class="page-link"><?php next_post_link();?></div>
                </li>
            </ul>
            </nav>
        <!--Pagination Ends -->
            <?php else:?> <!--End while loop -->
           <p> <?php _e('No Posts To Display');?> </p>
     <?php endif;?> <!--End if statement -->
     <!-- // If comments are open or we have at least one comment, load up the comment template. -->
</article>
<?php get_footer();?>