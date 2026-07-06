<?php
defined('ABSPATH') || exit;
?>
<?php
function my_enqueue_styles()
{

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
    get_theme_file_uri('/java.js'),
    array(),
    filemtime(get_theme_file_path('/java.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');



// サムネイルを使用
add_theme_support('post-thumbnails');

// 管理画面のサイドメニューから「コメント」を非表示にする
function remove_menus()
{
  remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus', 999);
