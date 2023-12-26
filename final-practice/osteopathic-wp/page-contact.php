<?php get_header();?>

  <main>
    <div class="contact-top-mv">
      <div class="contact-top-text">
        <h1 class="contact-mv-text contact-mv-back">Contact</h1>
        <p class="contact-mv-text1">ご予約・お問い合わせ</p>
      </div>
      <div class="contact-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-pc.png" alt="contactメインビジュアル" loading="lazy" class="contact-mv-img">
        </picture>
      </div>
    </div>
    
    <section id="contact">
      <div class="contact">
        <div>
          <h2 class="contact-title">お電話でのご予約・お問い合わせ</h2>
          <p class="contact-address">
          〒101-0022&ensp;東京都千代田区神田練堀町300番地
          <br>住友不動産秋葉原駅前ビル 5F
          </p>
          <p class="contact-tel"><span class="contact-tel-text">tel:</span>03-1234-5678</p>
        </div>
        <div>
          <h2 class="contact-title">ご予約・お問い合わせフォーム</h2>
          <p>※&ensp;2営業日以内にご返信いたします。</p>

          <?php the_content(); ?>
        </div>
      </div>
    </section>


  </main>

  <?php get_footer(); ?>