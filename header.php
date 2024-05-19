<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>京都のWeb制作・コーディング代行 | Tomapool（トマプール）</title>
  <meta name="description" content="京都のWeb制作・コーディング代行事務所のTomapool（トマプール）です。Wordpressを用いて柔軟にホームページ制作いたします。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/destyleWordPress.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SXCLTWJ6NK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SXCLTWJ6NK');
</script>
  <?php wp_head(); ?>
</head>

<body>
<header class="layoutHeaderArea">
  <div class="header-containerAll">
    <a href="<?php echo home_url(); ?>" class="header-containerLeft">
      <h1 class="header-mainTitle">Tomapool</h1>
      <h2 class="header-subTitle">Web制作事務所</h2>
    </a>
    <ul class="header-containerCenter">
      <li class="header-menuItem"><a href="<?php echo home_url(); ?>">TOP</a></li>
      <!-- <li class="header-menuItem"><a href="<?php #echo home_url("service"); ?>">SERVICE</a></li> -->
      <li class="header-menuItem"><a href="#service">SERVICE</a></li>
      <!-- <li class="header-menuItem"><a href="<?php #echo home_url("contact"); ?>">CONTACT</a></li> -->
      <li class="header-menuItem"><a href="#contact">CONTACT</a></li>
      <!-- <li class="header-menuItem"><a href="<?php #echo home_url("news"); ?>">NEWS</a></li> -->
      <li class="header-menuItem"><a href="#news">NEWS</a></li>
    </ul>
    <div class="header-containerRight">
      <p class="header-tel"><span>tel.</span>090-xxxx-xxxx</p>
      <div class="header-hamburger" id="hamburger"><i class="bi bi-list"></i></div>
    </div>
  </div>
</header>

<nav class="layoutMenuArea">
  <div class="nav-closeBtn" id="closeBtn">
    <i class="bi bi-x"></i>
  </div>
  <div class="nav-menuItem nav-menuItemTop"><a href="<?php echo home_url(); ?>">TOP</a></div>
  <div class="nav-menuItem"><a href="<?php echo home_url("service"); ?>">SERVICE</a></div>
  <div class="nav-menuItem"><a href="<?php echo home_url("contact"); ?>">CONTACT</a></div>
  <div class="nav-menuItem"><a href="<?php echo home_url("news"); ?>">NEWS</a></div>
</nav>