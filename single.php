<?php get_header(); ?>

  <section class="news first-view">
    <div class="inner">
      <h1>ニュース</h1>
      <p>NEWS</p>
    </div>
  </section>
  <div class="single-inner">
    <div class="inner">
      <p class="single-date"><?php the_time('Y.m.d'); ?></p>
      <h2 class="single-title"><?php the_title(); ?></h2>
      <p class="single-content"><?php the_content(); ?></p>
    </div>
    <a class="blue-btn more-btn single-btn" href="<?php echo esc_url( home_url( '/news/' ) ); ?>">一覧へ</a>
  </div>


<?php get_footer(); ?>
