<?php get_header(); ?>

<div class="layoutNewsArchiveArea">
  <h1 class="news-h1">NEWS</h1>
  <div class="news-wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="news-item">
        <img class="news-thumbnail" src="<?php the_post_thumbnail_url(); ?>">
        <div class="news-date">
          <?php the_time(); ?>
        </div>
        <h1 class="news-title">
          <?php the_title(); ?>
        </h1>
      </a>
    <?php endwhile; endif; ?>
  </div>

  <div class="news-pager">
    <?php the_posts_pagination(
      array(
          'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
          // 'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text'     => __( '«'), // 「前へ」リンクのテキスト
          'next_text'     => __( '»'), // 「次へ」リンクのテキスト
          // 'type'          => 'list', // 戻り値の指定 (plain/list)
      )
    ); ?>
  </div>
</div>

<?php get_footer(); ?>