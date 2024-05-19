<?php get_header(); ?>

<section class="layoutCarouselArea">
  <div class="carouselWindows">
    <div class="campaign carouselWindow">
      <h1 class="campaign-title">CAMPAIGN</h1>
      <p class="campaign-catch">今ならなんと<span>50</span>%off</p>
      <a href="<?php echo home_url("campaign"); ?>" class="campaign-detailBtn">詳細を見る</a>
    </div>
    <div class="appealPhrase carouselWindow">
      <p class="appealPhrase-p">
      お客様ひとりひとりと最初から最後まで<br><span>丁寧</span>に<br><span>柔軟</span>に<br><span>全力</span>で<br>向き合います
      </p>
    </div>
    <div class="catchPhrase carouselWindow">
      <p class="catchPhrase-p">
      Webサイト制作・リニューアルは<br><span>トマプール</span>に<br>お任せください！
      </p>
    </div>
  </div>
  <ul class="carouselWindow-slideBtns">
    <li class="carouselWindow-slideBtn"></li>
    <li class="carouselWindow-slideBtn"></li>
    <li class="carouselWindow-slideBtn"></li>
  </ul>
</section>

<section class="layoutServiceArea">
  <h1 class="service-title">SERVICE</h1>
  <div class="serviceItems">
    <div class="serviceItem firstServiceItem">
        <img src="<?php echo get_template_directory_uri(); ?>/img/service1.jpeg" alt="Webサイト" class="serviceItem-img">
        <h1 class="serviceItem-h1">ホームページの制作・リニューアル</h1>
        <p class="serviceItem-p">
          完全オリジナルのホームページを制作いたします。<br>スマートフォン対応サイト化やWordPress化、お任せください。<br>その他、どんな細かなリニューアルでも対応いたします。
        </p>
        <a href="<?php echo home_url("service"); ?>" class="serviceItem-detailBtn">詳細を見る</a>
    </div>
    <div class="serviceItem">
        <img src="<?php echo get_template_directory_uri(); ?>/img/service2.jpeg" alt="コーディング" class="serviceItem-img">
        <h1 class="serviceItem-h1">コーディング代行</h1>
        <p class="serviceItem-p">
          デザインカンプからのコーディング、お任せください。<br>JavaScript（jQuery）、WordPressを用いる案件も対応可です。<br>Sassを用いて、BEMでコーディングさせていただきます。
        </p>
        <a href="<?php echo home_url("service"); ?>" class="serviceItem-detailBtn">詳細を見る</a>
    </div>
  </div>
</section>

<section class="layoutNewsArea">
  <h1 class="news-h1">NEWS</h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <a href="<?php the_permalink(); ?>" class="news-item">
    <?php echo get_the_date(); ?>
    <span class="news-title">
      <?php the_title(); ?>
    </span>
    <div class="news-underline"></div>
  </a>
  <?php endwhile; endif; ?>
  <a href="<?php echo home_url("news"); ?>" class="news-detailBtn">more</a>
</section>

<section class="layoutContactArea">
  <h1 class="contact-h1">
    CONTACT
  </h1>
  <?php echo do_shortcode('[contact-form-7 id="7" title="Tomapool"]'); ?>
  <!-- <div class="contact-wrapper">
    <p class="contact-p contact-firstP">
      お名前<span>必須</span>
    </p>
      [text* your-name class:contact-textbox]
    <p class="contact-p">
      メールアドレス<span>必須</span>
    </p>
      [email* your-email class:contact-textbox]
    <p class="contact-p">
      どちらからこのサイトに来られましたか？
    </p>
      [text* from class:contact-textbox]
    <p class="contact-p">
      ご用件<span>必須</span>
    </p>
      [text* subject class:contact-textbox]
    <p class="contact-p">
      お問い合わせ内容<span>必須</span>
    </p>
      [textarea* content class:contact-textarea]
    <div class="contact-submitWrapper">
      [submit class:contact-submit "送信"]
    </div>
  </div> -->
</section>

<?php get_footer(); ?>