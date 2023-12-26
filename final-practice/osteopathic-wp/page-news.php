<?php get_header();?>

  <main>
    <div class="information-top-mv">
      <div class="information-top-text">
        <h1 class="information-mv-text information-mv-back">Information</h1>
        <p class="information-mv-text1">お知らせ</p>
      </div>
      <div class="information-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/information-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/information-mv-pc.png">
          <img decoding="async" srcset="img/information-mv-pc.png" alt="informationメインビジュアル" loading="lazy" class="information-mv-img">
        </picture>
      </div>
    </div>

    <section id="information">
      <div class="information">
        <ul class="information-gp">
    
        <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
            // 投稿タイプ
              'post_type'      => 'post',
              // カテゴリー名
              'category_name' => 'news',
              // 1ページに表示する投稿数
              'posts_per_page' => 10,
            );
            // データの取得
            $posts = get_posts($args);
          ?>

          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>

          <li class="information-list">
            <a class="information-list-link" href="<?php the_permalink(); ?>">

              <div class="information-img">
                <?php the_post_thumbnail(); ?>
              </div>

              <div class="information-text-gp">
                <p class="information-title"><?php the_title(); ?></p>
                <div class="information-date-and-time">
                  <p class="information-date"><?php echo get_the_date(); ?></p>
                  <p class="information-day">営業日時</p>
                </div>
              </div>
            </a>
          </li>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>

        </ul>

        <?php get_sidebar(); ?>

      </div>
    </section>
  </main>

<?php get_footer(); ?>