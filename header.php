<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/style.css?12">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap"rel="stylesheet"/>
    <script src="https://unpkg.com/scrollreveal"></script>
	  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P486XKL');</script>
    <!-- End Google Tag Manager -->

    <!-- OGP設定 -->
    <meta property="og:url" content="https://eggsmart.jp/" />
    <meta property="og:type" content="企業サイト" />
    <meta property="og:title" content="EggSmart株式会社ホームページ" />
    <meta property="og:description" content="EggSmart株式会社の公式ホームページです。" />
    <meta property="og:site_name" content="EggSmart" />
    <meta property="og:image" content="https://eggsmart.jp/asset/img/logo.png" />
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P486XKL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
      <div class="header-wrap flex-between">
        <div class="header-left">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.png" alt="EggSmart株式会社"></a>
        </div>
        <div class="header-right">
          <nav class="header-nav">
            <ul class="flex pc-display">
              <li><a class="header_nav_item" href="<?php echo home_url(); ?>/#service">事業内容</a></li>
              <li><a class="header_nav_item" href="<?php echo home_url(); ?>#company">会社情報</a></li>
              <li><a class="header_nav_item" href="<?php echo home_url(); ?>/#news">ニュース</a></li>
              <li><a class="header_nav_item blue-btn" href="<?php echo home_url(); ?>/#contact">お問い合わせ</a></li>
            </ul>
            <ul class="flex sp-display">
              <li class="sp-display hamburger-nav"><a href="<?php echo home_url(); ?>/service/">事業内容</a></li>
              <li class="sp-display hamburger-nav"><a href="<?php echo home_url(); ?>#company">会社情報</a></li>
              <li class="sp-display hamburger-nav"><a href="<?php echo home_url(); ?>/news/">ニュース</a></li>
              <li class="sp-display hamburger-nav"><a href="<?php echo home_url(); ?>/#contact" class="blue-btn spContactBtn">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <main>
