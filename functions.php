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
