<?php get_header(); ?>

<section class="layoutNewsMainArea">
  <div class="news-hero">
    <div class="news-title">
      <?php the_title(); ?>
    </div>
  </div>
  <div class="news-wrapper">
    <div class="news-info">
      <span class="news-date">
        <?php the_time(); ?>
      </span>
      <span class="news-category">
        <?php
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          echo $cat_name;
        ?>
      </span>
    </div>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="news-thumbnail" class="news-thumbnail">
    <div class="news-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>