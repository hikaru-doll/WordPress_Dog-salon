<?php
defined('ABSPATH') || exit;
?>
<?php get_header();
?>
<!-- main start ---------------------------------------------->
<main id="page-calendar" class="main">
  <div class="wrapper">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <ul class="order-list grid">
          <li>カレンダーから希望日を選択</li>
          <li>コースを選択</li>
          <li>時間を選択</li>
          <li>個人情報を入力</li>
          <li>予約完了</li>
        </ul>
        <div class="plugin">
          <?php the_content(); ?>
        </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</main>
<!-- /main end  ---------------------------------------------------->
<?php get_footer(); ?>