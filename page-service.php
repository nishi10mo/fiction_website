<?php get_header(); ?>
<?php
/*
Template Name: service
*/
?>

<section class="layoutServiceMainArea">
  <h1 class="service-title"><?php the_title(); ?></h1>
  <div class="serviceItems">
    <div class="serviceItem">
        <?php
        $fields = $cfs->get('serviceItem'); //親ループ
        foreach ($fields as $field) :
        ?>
        <img class="serviceItem-img" src="<?php echo $field['img']; ?>" alt="serviceImg">
        <h1 class="serviceItem-h1">
          <?php echo $field["title"]; ?>
        </h1>
        <p class="serviceItem-p">
          <?php echo $field["p"]; ?>
        </p>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>