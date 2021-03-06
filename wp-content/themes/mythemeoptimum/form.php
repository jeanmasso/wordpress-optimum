<?php
get_header();

/*
  Template Name: Formulaire
*/
?>

  <div class="container my-4 my-md-5">
    <?php
    $page_id = get_the_ID();
    $page = get_post($page_id);
    $page_slug = $page->post_name;


    echo '<div class="row">';
    echo '<h2 class="text-center text-white">'. get_the_title().'</h2>';
    echo '</div>';

    echo '<div class="row my-4 my-md-5 d-flex justify-content-center">';

      ?>
      <div class="col-12 col-md-6">
        <?php the_content(); ?>
      </div>
    <?php
    echo '</div>';

    wp_reset_postdata();
    ?>
  </div>

<?php get_footer(); ?>