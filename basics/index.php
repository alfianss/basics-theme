<?php
get_header();
?>

<div class="container-fluid">
    <!-- <div class="row"> -->
        <?php 
        if (have_posts()): while (have_posts()) : the_post();
            echo "<h2 class='text-center'>".get_the_title()."</h2>";
            echo "<blockquote class='text-center'>".get_the_content()."<blockquote>";
            endwhile; 
        endif;
        ?>
    <!-- </div> -->
</div>
<?php


get_sidebar();
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

