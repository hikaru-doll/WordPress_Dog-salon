<?php
defined('ABSPATH') || exit;
?>

<?php
/*
Template Name: menu
*/
get_header();
?>

<!-- main start ---------------------------------------------->
<main class="main page-menu">
  <div class="wrapper">

    <h1 class="page-title">メニュー料金表</h1>
    <?php $args = array(
      'posts_per_page' => -1,
      'post_type' => 'post', //カスタム投稿タイプなら'post_type' => 'スラッグ',になる
    );
    ?>
    <?php $my_query = new WP_Query($args); ?>

    <table>
      <tr>
        <th>犬種</th>
        <th>シャンプー</th>
        <th>シャンプー&<br class="blank" />トリミング</th>
      </tr>
      <?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post(); ?>
          <tr>
            <th><?php the_title(); ?></th>
            <td><?php the_field('shampoo'); ?></td>
            <td><?php the_field('trimming'); ?></td>
          </tr>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </table>
    <div class="reference">
      <p>記載のない犬種・MIX犬はお問い合わせください。</p>
      <p>料金は税込み価格です。</p>
      <p>
        シャンプーコース、シャンプー＆トリミングコースどちらも耳掃除・肛門腺絞り・爪切り・足裏バリカン・ブローは含みます。
      </p>
    </div>
  </div>
</main>
<!-- /main end  ---------------------------------------------------->
<?php get_footer(); ?>