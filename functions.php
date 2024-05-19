<?php
function posts_have_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'posts_have_archive', 10, 2);

add_theme_support('post-thumbnails');

function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive('post') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '12' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

?>