<?php
/*
Template Name: page-service
*/
?>

<?php get_header(); ?>

    <main>
      <section class="service first-view">
        <div class="inner">
          <h1>事業内容</h1>
          <p>SERVICE</p>
        </div>
      </section>
      <div class="service-content">
        <section id="media">
          <div class="inner">
            <h2 class="section-title">メディア運営</h2>
            <h3 class="section-sub-title">「SEOに最適化したサイト運営」</h3>
            <p class="section-p">常にデータを分析しSEOに最適化したメディア運営を行っております</p>
            <div class="media-item-box flex-around">
              <?php
                $posts = new WP_Query(
                  array(
                    'post_type' => 'media-all',
                    'posts_per_page' => 2,
                  )
                );
                if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
              ?>
              <a href="<?php the_field('link'); ?>" target="_blank" class="media-item">
                <div class="media-img">
                  <?php the_post_thumbnail(); ?>　
                </div>
                <div class="media-detail">
                  <div class="flex media-name">
                    <p>サイト名：</p>
                    <p class="flex-1"><?php the_field('sitename'); ?></p>
                  </div>
                  <div class="flex media-period">
                    <p>運用期間：</p>
                    <p><?php the_field('period'); ?></p>
                  </div>
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                  <p>詳しく見る</p>
                </div>
              </a>

              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>

        <section id="web">
          <div class="inner">
            <h2 class="section-title">webサイト作成</h2>
            <h3 class="section-sub-title">「1人でも多くの人に情報を届ける」</h3>
            <p class="section-p">弊社では動物保護、畜産減少意識を一人でも多くの人に持ってもらえるよ毎日webに関する研究しております。そのノウハウを駆使し、貴社にとって最適なサイトを作成させていただきます 。</p>
            <div class="web-item-box flex-around">
              <?php
                $posts = new WP_Query(
                  array(
                    'post_type' => 'web',
                    'posts_per_page' => 2,
                  )
                );
                if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
              ?>
              <a href="<?php the_field('link'); ?>" target="_blank" class="web-item">
                <div class="web-img">
                  <?php the_post_thumbnail(); ?>　
                </div>
                <div class="web-detail">
                  <div class="flex web-date">
                    <p>UPDATE：</p>
                    <p class="flex-1"><?php the_field('update'); ?></p>
                  </div>
                  <div class="flex web-category">
                    <p>カテゴリー：</p>
                    <p><?php the_field('category'); ?></p>
                  </div>
                  <p class="web-client"><?php the_field('client'); ?></p>
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                  <p>詳しく見る</p>
                </div>
              </a>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>

        <section id="movie">
          <div class="inner">
            <h2 class="section-title">動画作成</h2>
            <h3 class="section-sub-title">「洗練された技術と発想」</h3>
            <p class="section-p">「魅力ある動画」を追求した作品を提供します。</p>
            <div class="movie-item-box flex-around">
              <?php
                $posts = new WP_Query(
                  array(
                    'post_type' => 'movie',
                    'posts_per_page' => 2,
                  )
                );
                if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
              ?>
              <a href="<?php the_field('link'); ?>" target="_blank" class="movie-item">
                <div class="movie-img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="movie-detail">
                  <div class="flex movie-date">
                    <p>UPDATE：</p>
                    <p class="flex-1"><?php the_field('update'); ?></p>
                  </div>
                  <div class="flex movie-category">
                    <p>カテゴリー：</p>
                    <p><?php the_field('category'); ?></p>
                  </div>
                  <p class="movie-client"><?php the_field('client'); ?></p>
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                  <p>詳しく見る</p>
                </div>
              </a>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>
      </div>


<?php get_footer(); ?>
