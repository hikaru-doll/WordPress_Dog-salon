<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header start -------------------------------------------->
  <header class="header flex">
    <h1 class="logo">
      <a href="<?php echo esc_url(home_url()); ?> ">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/dog_salon_logo.png" alt="ロゴマーク" />
      </a>
    </h1>
    <button class="ham" aria-label="メニューを開く" aria-expanded="false" aria-controls="main-navigation">
      <span class="ham1"></span>
      <span class="ham2"></span>
      <span class="ham3"></span>
    </button>
    <nav id="main-navigation" class="main-navigation">
      <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url()); ?>">Top</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>">メニュー</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>">ご予約</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/#access">アクセス</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('policy'))); ?>">ご利用規約</a></li>
      </ul>
    </nav>
    <ul class="information">
      <li>電話：090-0000-0000</li>
      <div class="flex">
        <li>定休日：水曜日</li>
        <li>営業時間：9:00～20:00</li>
      </div>
    </ul>
  </header>
  <!-- /header end --------------------------------------------->
  <!-- /header end ------------------------------------------------------------------------------------>
  <!-- パンくずリスト -->
  <div class="breadcrumb wrapper">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>