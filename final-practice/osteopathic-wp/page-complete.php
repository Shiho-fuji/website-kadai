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

    <section id="complete">
      <div class="complete">
        <?php the_content(); ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>