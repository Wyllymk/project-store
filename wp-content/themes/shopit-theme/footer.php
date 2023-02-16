<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * 
 */
?>
        <footer>
            <nav>
                <?php
                    $args = array(
                        'theme_location' => 'secondary'
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
            <div class="bg-dark text-light border-top py-2 text-center">
                <div class="container">
                <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
                </div>
            </div>
        </footer>
    </div><!-- #page -->
        <?php wp_footer();?>
    </body>
</html>