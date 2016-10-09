<?php
/**
 * Template Name: Empty Template
 * Author: Maker GmbH
 * Date: 2016-08-08
 * Time: 22:35
 */
?>
<!doctype html>
<html>
<head>
  <title>See 177</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
</head>
<body style="background:#dce2e2;text-align:center">
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : ?> <!--Because the_content() works only inside a WP Loop -->
      <!--<?php the_post(); ?>-->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</body>
</html>
