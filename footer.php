<footer>
  <div class="footer-contact">
    <p class="free-contact">無料相談・お問い合わせはこちら</p>
    <p>些細なお悩みでもお気軽にお問い合わせください。</p>
    <div class="flex footer-contct-content">
      <div class="footer-right">
        <a class="blue-btn footer-btn" href="<?php echo home_url(); ?>#contact">フォームからお問い合わせ</a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-bottom-content flex-between">
      <div class="footer-bottom-left">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo2.png" alt="">
      </div>
      <div class="footer-bottom-right">
        <p>Copyright © 2020 EggSmart.inc All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- jQueryの読み込み（CDN） -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- main.jsの読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/asset/js/main.js?06"></script>

</main>
<?php wp_footer(); ?>
</body>
</html>
