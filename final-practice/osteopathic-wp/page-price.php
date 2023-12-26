<?php get_header();?>

  <main>
    <div class="price-top-mv">
      <div class="price-top-text">
        <h1 class="price-mv-text price-mv-back">Price</h1>
        <p class="price-mv-text1">コース・料金</p>
      </div>
      <div class="price-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/price-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/price-mv-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/price-mv-pc.png" alt="priceメインビジュアル" loading="lazy" class="price-mv-img">
        </picture>
      </div>
    </div>


    <section id="price">
      <div class="price">
        <div class="course-title">
          <h2 class="course-title-child">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left-diagonal.png" alt="左側の斜線" class="diagonal">
            コース・料金
            <img src="<?php echo get_template_directory_uri(); ?>/img/right-diagonal.png" alt="右側の斜線" class="diagonal">
          </h2>
        </div>
        <div class="course-content">
          <p>当院では保険診療、自費診療と<br>もにご対応しております。</p>
        </div>
        <div>
          <div class="course-gp">
            <div class="course-child">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cose01.png" class="course-img" alt="コースの診療の画像">
              <p class="course-clinical">保険診療</p>
              <ul class="course-list">
                <li class="course-list1">骨折・打撲・捻挫・脱臼</li>
                <li class="course-list1">スポーツ診療</li>
                <li class="course-list1">交通事故</li>
              </ul>
            </div>
            <div class="course-child">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cose02.png" class="course-img" alt="コースの診療の画像">
              <p class="course-clinical">自費診療</p>
              <ul class="course-list">
                <li class="course-list1">腰痛・肩こり</li>
                <li class="course-list1">冷え性・だるさ</li>
                <li class="course-list1">骨盤・背骨矯正</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="insurance">
      <div class="insurance">
        <div class="insurance-gp">
          <div class="insurance-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cose01.png" class="insurance-img01" alt="コースの診療の画像">
          </div>
          <div class="insurance-main">
            <div class="insurance-title">
              <h2 class="insurance-main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/Union.png" class="insurance-title-img" alt="タイトルの横の画像">Insurance</h2>
              <p class="insurance-title-sub">保険診療</p>
            </div>
            <p class="insurance-explain">
              健康保険の適用は、慢性化していない、急性のけがのみが対象となります。
              <br>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
            </p>
            <ul class="insurance-list">
              <li class="insurance-list1">骨折・打撲・捻挫・脱臼</li>
              <li class="insurance-list1">スポーツ診療</li>
              <li class="insurance-list1">交通事故</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    

    <section id="self-pay">
      <div class="self-pay">
        <div class="self-pay-gp">
          <div class="self-pay-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/self-pay-img.png" class="self-pay-img01" alt="コースの診療の画像">
          </div>
          <div class="self-pay-main">
            <div class="self-pay-title">
              <h2 class="self-pay-main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/Union.png" class="self-pay-title-img" alt="タイトルの横の画像">Self-pay</h2>
              <p class="self-pay-title-sub">自費診療</p>
            </div>
            <p class="self-pay-explain">
              慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
            </p>
            <ul class="self-pay-list">
              <li class="self-pay-list1">骨折・打撲・捻挫・脱臼</li>
              <li class="self-pay-list1">スポーツ診療</li>
              <li class="self-pay-list1">交通事故</li>
            </ul>
            <p class="self-pay-price"><span class="self-pay-price01">初回</span><span class="self-pay-price02">8,800円（税込）&ensp;/&ensp;50分</span></p>
            <p class="self-pay-price"><span class="self-pay-price01">2回目以降</span><span class="self-pay-price02">6,600円（税込）&ensp;/&ensp;30分</span></p>
          </div>
        </div>
      </div>
    </section>
  </main>
 
  <?php get_footer(); ?>