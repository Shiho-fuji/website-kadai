<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>整体院</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather+Sans&family=Noto+Sans+JP:wght@700&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather+Sans&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Shippori+Mincho&display=swap" rel="stylesheet">  
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- reset.css ress -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body>
  <header id="header">
    <div class="header-area">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" id="logo" alt="SAMURAI整体院">
      </a>
      <div id="nav-wrapper" class="nav-wrapper">
        <div class="hamburger" id="js-hamburger">
          <span class="hamburger__line hamburger__line--1"></span>
          <span class="hamburger__line hamburger__line--2"></span>
          <span class="hamburger__line hamburger__line--3"></span>
        </div>
        <nav class="sp-nav">
          <ul>
            <li><a id="logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="トップページに戻る"></a></li>
            <li><p class="text-menu">メニュー</p></li>
            <li><a href="/" class="hamburger-link">ホーム</a></li>
            <li><a href="<?php echo home_url(); ?>/about" class="hamburger-link">当院について</a></li>
            <li><a href="<?php echo home_url(); ?>/price" class="hamburger-link">コース・料金</a></li>
            <li><a href="<?php echo home_url(); ?>/news" class="hamburger-link">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/voice" class="hamburger-link">お客様の声</a></li>
            <li><a href="<?php echo home_url(); ?>/contact" class="hamburger-inquiry-link">ご予約・お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="black-bg" id="js-black-bg"></div>
       </div>
    </div>
    <nav class="header-nav">
      <ul class="nav-list">
        <li><a href="/" class="nav-link">ホーム</a></li>
        <li><a href="<?php echo home_url(); ?>/about" class="nav-link">当院について</a></li>
        <li><a href="<?php echo home_url(); ?>/price" class="nav-link">コース・料金</a></li>
        <li><a href="<?php echo home_url(); ?>/category/news" class="nav-link">お知らせ</a></li>
        <li><a href="<?php echo home_url(); ?>/voice" class="nav-link">お客様の声</a></li>
        <li><a href="<?php echo home_url(); ?>/contact" class="inquiry-link">ご予約・お問い合わせ</a></li>
      </ul>
    </nav>
  </header>
  