<?php
defined('ABSPATH') || exit;
?>

<?php
/*
Template Name: staff
*/
get_header();
?>

<!-- main start ---------------------------------------------->
<main class="main page-staff">
  <div class="wrapper">
    <?php
    $theme_uri = esc_url(get_theme_file_uri()); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="list grid">
          <article class="item">
            <div class="image">
              <img class="jhon" src="<?php echo $theme_uri; ?>/assets/imgs/staff5.webp" alt="ジョン" />
            </div>
            <h2 class="staff-name">Jhon</h2>
            <p class="text">
              Johnは当サロンのトリミングのプロフェッショナルで、JKC（日本犬協会）公認のトリマー資格を持っています。<br />
              彼は犬の美容に情熱を傾け、一匹一匹の犬の個性を尊重しながら、最高のトリミングを提供します。犬との絆を深め、飼い主の皆様にもトリミングが楽しいひとときとなるよう心がけています。
            </p>
          </article>
          <article class="item">
            <div class="image">
              <img class="lisa" src="<?php echo $theme_uri; ?>/assets/imgs/staff8.webp" alt="リサ" />
            </div>
            <h2 class="staff-name">Lisa</h2>
            <p class="text">
              Lisaは当サロンの誇るJDA（日本ドッグアート協会）公認トリマーです。<br>
              彼女は犬の美容に対する情熱と技術力を兼ね備えており、犬の美しさを最大限に引き立てるために努力しています。お客様の要望に応じ、犬の個性に合わせたトリミングを提供し、笑顔でお出迎えいたします。 </p>
          </article>
          <article class="item">
            <div class="image">
              <img class="emma" src="<?php echo $theme_uri; ?>/assets/imgs/staff7.webp" alt="エマ" />
            </div>
            <h2 class="staff-name">Emma</h2>
            <p class="text">
              Emmaは美容師から転身したトリマーとして、犬の美容に新しい視点をもたらしています。<br>
              彼女は美容の世界で培ったスキルを活かし、犬たちに特別なケアを提供します。犬たちにとってリラックスできる環境を大切にし、飼い主の皆様にも安心感を提供します。</p>
          </article>
          <article class="item">
            <div class="image">
              <img class="michael" src="<?php echo $theme_uri; ?>/assets/imgs/staff6.webp" alt="マイケル" />
            </div>
            <h2 class="staff-name">Michael</h2>
            <p class="text">
              Michaelは当サロンのアシスタントとして、スタッフ全体をサポートしています。<br>
              彼は犬たちへの愛情深い接し方で知られ、トリミングプロセスがより円滑に進行するお手伝いをします。笑顔とポジティブなエネルギーで、お客様とその愛犬たちに楽しいひとときを提供します。 </p>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
        </div>
  </div>
</main>
<!-- /main end  ---------------------------------------------------->
<?php get_footer(); ?>