<?php
/**
 * The main template file.
 */

get_header(); ?>

<div class="main">
  <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </div>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <p><?php esc_html_e( 'Nothing found' ); ?></p>

  <?php endif; ?>
</div>
