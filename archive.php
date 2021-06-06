<?php
/*
Template Name: archive-news
*/
?>
<?php get_header(); ?>
    <main>
      <section class="news first-view">
        <div class="inner">
          <h1>ニュース</h1>
          <p>NEWS</p>
        </div>
      </section>

      <section id="news-main">
        <div class="inner">
          <h2 class="section-title">news</h2>
          <div class="newspage-main">
            <?php
              $posts = new WP_Query(
                array(
                  'post_type'      => 'post',
                  'category_name' => 'news',
                  'posts_per_page' => -1,
                  'order' => 'DESC',
                )
              );
              if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="newspage-item">
              <div class="flex news_archive_flex">
                <div class="news-img">
                  <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>　
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/news.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="newspage-detail">
                  <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                  <p class="newspage-name"><?php the_title(); ?></p>
                  <p class="news-content pc-display"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>

          </div>
        </div>
      </section>


<?php get_footer(); ?>
