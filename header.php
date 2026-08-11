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
    <?php if (is_front_page()): ?>
      <h1 class="logo">
        <a href="<?php echo esc_url(home_url()); ?> ">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/dog_salon_logo.png" alt="Dog Salon Supica" />
        </a>
      </h1>
    <?php else: ?>
      <p class="logo">
        <a href="<?php echo esc_url(home_url()); ?> ">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/dog_salon_logo.png" alt="Dog Salon Supica" />
        </a>
      </p>
    <?php endif; ?>
    <button class="ham" aria-label="メニューを開く" aria-expanded="false" aria-controls="main-navigation">
      <span class="ham1"></span>
      <span class="ham2"></span>
      <span class="ham3"></span>
    </button>
    <ul class="information">
      <li><a href="tel:09000000000">電話：090-0000-0000</a></li>
      <li>
        <ul class="flex">
          <li>定休日：水曜日</li>
          <li>営業時間：9:00～20:00</li>
        </ul>
      </li>
    </ul>
    <nav id="main-navigation" class="main-navigation">
      <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url()); ?>">Top</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>">メニュー&料金</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>">ご予約</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('staff'))); ?>">スタッフ</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>/#access">アクセス</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('policy'))); ?>">ご利用規約</a></li>
      </ul>
    </nav>

  </header>
  <!-- /header end --------------------------------------------->
  <!-- パンくずリスト -->
  <nav class="breadcrumb wrapper" aria-label="パンくず">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </nav>