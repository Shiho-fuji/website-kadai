<?php get_header();?>

  <main>
    <div class="voice-top-mv">
      <div class="voice-top-text">
        <h1 class="voice-mv-text voice-mv-back">Voice</h1>
        <p class="voice-mv-text1">お客様の声</p>
      </div>
      <div class="voice-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-pc.png" alt="voiceメインビジュアル" loading="lazy" class="voice-mv-img">
        </picture>
      </div>
    </div>
    

    <section id="voice">
      <div class="voice">
        <ul class="voice-gp">

        <?php
            $args = array(
              'post_type' => 'voice',// 投稿タイプを指定
              'posts_per_page' => 5,// 表示する記事数
            );
            $voice_query = new WP_Query( $args );
            if ( $voice_query->have_posts() ): 
              while ( $voice_query->have_posts() ): 
                $voice_query->the_post(); 
            ?>

          <li class="voice-parent">
            <div class="voice-img-parent">
              <div class="voice-img">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>

            <div class="voice-text-gp">
              <p class="voice-name"><?php the_title(); ?></p>
              <p class="voice-comment">
                <?php the_content(); ?>
              </p>
            </div>
          </li>
          
          <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </ul>
      </div>
    </section>
  </main>

  
  <?php get_footer(); ?>