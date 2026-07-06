<?php
defined('ABSPATH') || exit;
?>
<?php get_header();
?>
<main class="wrapper">
  <?php if (have_posts()) : the_post(); ?>
    <h1 class="section-title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>