<?php get_header(); ?>
      <section class="mainvisual">
        <div class="inner">
          <h1>鶏と養鶏家を <br>共に幸せにする</h1>
        </div>
      </section>
      <section class="top-section top-service-wrap box" id="service">
        <h2>事業内容</h2>
        <h3>SERVICE</h3>
        <div class="top-service-area">
          <div class="top-service-content">
            <div class="change_content">
              <div class="top-service-tab_content">
                <ul class="top_service_tab-wrap">
                  <li class="animate animate_dr01">
                    <a href="#">
                      <div class="service-list-contents blue">
                        <div class="service-list-contents-position">
                          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-icon1.png" alt="養鶏　平飼い">
                          <span>養鶏</span>
                          <p class="problem-item-list-msg">動物に優しい平飼い<br>を追求しております。</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="animate animate_dr03">
                    <a href="<?php echo home_url(); ?>/service#media">
                    <div class="service-list-contents white">
                      <div class="service-list-contents-position">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-icon2.png" alt="メディア運営">
                      <span>メディア運営</span>
                      <p class="problem-item-list-msg">SEOを意識した<br>サイトを設計運営いたします。</p>
                      </div>
                    </div>
                    </a>
                  </li>
                  <li class="animate animate_dr04">
                    <a href="<?php echo home_url(); ?>/service#web">
                    <div class="service-list-contents blue">
                      <div class="service-list-contents-position">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-icon4.png" alt="webサイト作成">
                      <span>webサイト作成</span>
                      <p class="problem-item-list-msg">LP、コーポレートサイト、ECサイト<br>全て承ります。</p>
                      </div>
                    </div>
                    </a>
                  </li>
                  <li class="animate animate_dr05">
                    <a href="<?php echo home_url(); ?>/service#movie">
                    <div class="service-list-contents blue">
                      <div class="service-list-contents-position">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-icon5.png" alt="動画制作">
                      <span>動画編集</span>
                      <p class="problem-item-list-msg">貴社のブランディング動画、広告動画<br>を制作致します。</p>
                      </div>
                    </div>
                    </a>
                  </li>
                  <!-- いったん非公開→事業増えたら後悔する -->
                  <!-- <li class="animate animate_dr06">
                    <a href="<?php echo get_template_directory_uri(); ?>/service/">
                    <div class="service-list-contents white">
                      <div class="service-list-contents-position">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/service-icon6.png" alt="卵販売">
                      <span>卵の直売</span>
                      <p class="problem-item-list-msg">平飼いの養鶏所の<br>新鮮卵を販売しております。</p>
                      </div>
                    </div>
                    </a>
                  </li> -->
                  <!-- 非公開用 -->
                  <li class="animate animate_dr06">
                  </li>
                </ul>
                <ul class="service_tab-area-bg">
                  <li class="animate_dr00"></li>
                  <li class="animate_dr02"></li>
                  <li class="animate_dr07"></li>
                </ul>
              </div>
              <div class="top-service-eyecatch"></div>
            </div>
          </div>
        </div>
        <a href="<?php echo home_url(); ?>/service" class="blue-btn service-btn ma-center">事業一覧</a>
      </section>
      <section id="company" class="top-section company">
        <div class="inner">
          <h2>会社情報</h2>
          <h3>ABOUT US</h3>
          <div class="company-table">
            <div class="company-item flex">
              <div class="company-left">
                <p>社名</p>
              </div>
              <div class="company-right">
                <p>EggSmart株式会社</p>
              </div>
            </div>
            <div class="company-item flex">
              <div class="company-left">
                <p>代表</p>
              </div>
              <div class="company-right">
                <p>宮崎　将明</p>
              </div>
            </div>
            <div class="company-item flex">
              <div class="company-left">
                <p>所在地</p>
              </div>
              <div class="company-right">
                <p>本社：神奈川県川崎市宮前区鷺沼2ー10ー68</p>
                <p>沖縄支社：沖縄県うるま市与那城饒辺592</p>
              </div>
            </div>
            <div class="company-item flex">
              <div class="company-left">
                <p>設立</p>
              </div>
              <div class="company-right">
                <p>2020年7月21日</p>
              </div>
            </div>
            <div class="company-item flex">
              <div class="company-left">
                <p>資本金</p>
              </div>
              <div class="company-right">
                <p>100万円</p>
              </div>
            </div>
            <div class="company-item flex">
              <div class="company-left">
                <p>事業内容</p>
              </div>
              <div class="company-right">
                <p>養鶏、メディア受託、webサイト制作、動画制作事業</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section id="news">
        <div class="inner">
          <div class="news-box flex">
            <div class="pc-display flex">
              <div class="news-title">
                <p class="section-sub-title">新着情報</p>
                <p class="section-title">news</p>
                <a class="blue-btn news-btn pc-display" href="<?php echo home_url(); ?>/news/">MORE</a>
              </div>
              <div class="news-main">
                <?php
                  $posts = new WP_Query(
                    array(
                      'post_type'      => 'post',
                      'category_name' => 'news',
                      'posts_per_page' => 3,
                      'order' => 'DESC',
                    )
                  );
                  if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="news-item">
                  <div class="news-detail flex">
                    <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                    <p class="category">お知らせ</p>
                    <p class="news-name"><?php the_title(); ?></p>
                  </div>
                </a>
              <?php endwhile; endif; wp_reset_postdata(); ?>
              </div>
            </div>

            <div class="sp-news-box sp-display">
              <div class="news-title">
                <h2 class="section-title">news</h2>
                <h3 class="section-sub-title">新着情報</h3>
                <a class="blue-btn news-btn pc-display" href="#">MORE</a>
              </div>
              <div class="news-main">
                <?php
                  $posts = new WP_Query(
                    array(
                      'post_type'      => 'post',
                      'category_name' => 'news',
                      'posts_per_page' => 3,
                      'order' => 'DESC',
                    )
                  );
                  if($posts->have_posts()): while($posts->have_posts()): $posts->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="news-item">
                  <div class="flex">
                    <div class="news-detail">
                      <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                      <p class="news-name"><?php the_title(); ?></p>
                    </div>
                  </div>
                </a>
                <?php endwhile; endif; wp_reset_postdata(); ?>
              </div>
              <a class="blue-btn news-btn sp-display" href="#">MORE</a>
            </div>

          </div>
        </div>
      </section>
      <section id="contact" class="top-section">
        <h2>お問い合わせ</h2>
        <h3>CONTACT</h3>
        <div class="inner">
          <?php
            echo do_shortcode('[contact-form-7 id="32" title="コンタクトフォーム 1"]');
          ?>
        </div>
      </section>

      <section class="access">
        <div class="inner flex-between">
          <div class="access-left">
            <h2>アクセス</h2>
            <div class="access-item">
              <p>EggSmart株式会社</p>
              <div class="street-address flex"><p>本社:</p><p>神奈川県川崎市宮前区鷺沼2-10-68</p></div>
              <div class="street-address flex"><p>沖縄支社：</p><p>沖縄県うるま市与那城饒辺592</p></div>
              <p>< 最寄りバス停 ></p>
              <p>饒辺</p>
            </div>
          </div>
          <div class="access-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.3951587567462!2d127.9113188150323!3d26.313700983389182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e50be0f499affb%3A0x904ba73def8f6800!2z44CSOTA0LTIzMDcg5rKW57iE55yM44GG44KL44G-5biC5LiO6YKj5Z-O6aWS6L6677yV77yZ77yS!5e0!3m2!1sja!2sjp!4v1601737497084!5m2!1sja!2sjp" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
