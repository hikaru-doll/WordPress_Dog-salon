<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main start ---------------------------------------------->
<main class="main page-404">
  <div class="wrapper">
    <h1 class="page-title">404 NOT FOUND</h1>
    <p class="text">
      お探しのページはありませんでした。URLが正しくないかもしれません。
    </p>
    <div class="dog-icon"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/dog.svg" alt="柴犬のイラスト" /></div>
    <div class="button"><a href="<?php home_url(); ?>">TOPページへ戻る</a></div>
  </div>
</main>
<!-- /main end  ---------------------------------------------------->
<?php get_footer(); ?>