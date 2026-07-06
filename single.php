<?php
defined('ABSPATH') || exit;
?>

<?php get_header();
?>
<main>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php if (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>