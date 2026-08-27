<?php
defined('ABSPATH') || exit;
?>
<?php
function dogsalon_assets_enqueue_styles()
{
  // ファイルの読み込み
  $uri = get_theme_file_uri();

  wp_enqueue_style(
    'variable',
    $uri . '/assets/css/variable.css',
    array(),
    filemtime(get_theme_file_path('/assets/css/variable.css'))
  );

  wp_enqueue_style(
    'reset',
    $uri . '/assets/css/reset.css',
    array('variable'),
    filemtime(get_theme_file_path('/assets/css/reset.css'))
  );

  wp_enqueue_style(
    'style',
    $uri . '/style.css',
    array('reset'),
    filemtime(get_theme_file_path('/style.css'))
  );

  wp_enqueue_style(
    'main',
    $uri . '/assets/css/main.css',
    array('style'),
    filemtime(get_theme_file_path('/assets/css/main.css'))
  );

  wp_enqueue_style(
    'responsive',
    $uri . '/responsive.css',
    array('main'),
    filemtime(get_theme_file_path('/responsive.css'))
  );
  wp_enqueue_script(
    'my-script',
    get_theme_file_uri('/main.js'),
    array(),
    filemtime(get_theme_file_path('/main.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'dogsalon_assets_enqueue_styles');

// 管理画面のサイドメニューから「コメント」を非表示にする
function remove_menus()
{
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_menus', 999);

// タイトルタグを出力
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
});

// 構造化データ
function insert_custom_structured_data()
{
  // 1. トップページの場合
  if (is_front_page() || is_home()) {
?>
    <script type="application/ld-json">
      {
      "@context": "https://schema.org",
      "@type": "PetGrooming",
      "name": "Dog Salon SUPICA",
      "url": "<?php echo esc_url(home_url('/')); ?>",
      "image": "【ロゴやメインビジュアルのURL】",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "兵庫県",
        "addressLocality": "宝塚市",
        "streetAddress": "子犬町0-0-0",
        "addressCountry": "JP"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "9:00",
          "closes": "20:00"
        }
      ]
    }
    </script>
  <?php
  }

  // 2. 投稿ページ（ブログ・コラム）の場合（Article / BlogPosting）
  elseif (is_single()) {
    global $post;
    // サムネイル画像（アイキャッチ）の取得
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    $image_url = $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, 'full') : '【デフォルト画像のURL】';
  ?>
    <script type="application/ld-json">
      {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "headline": "<?php echo esc_js(get_the_title()); ?>",
          "image": "<?php echo esc_url($image_url); ?>",
          "datePublished": "<?php echo get_the_date('c'); ?>",
          "dateModified": "<?php echo get_the_modified_date('c'); ?>",
          "author": {
            "@type": "Person",
            "name": "<?php echo esc_js(get_the_author()); ?>"
          },
          "publisher": {
            "@type": "Organization",
            "name": "【ビジネス名・屋号】",
            "logo": {
              "@type": "ImageObject",
              "url": "【ロゴ画像のURL】"
            }
          }
        }
        </script>
<?php
  }
}
add_action('wp_head', 'insert_custom_structured_data');
