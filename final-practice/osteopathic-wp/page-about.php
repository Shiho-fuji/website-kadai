<?php get_header();?>

  <main>
    <div class="about-top-mv">
      <div class="about-top-text">
        <h1 class="about-mv-text about-mv-back">About</h1>
        <p class="about-mv-text1">当院について</p>
      </div>
      <div class="about-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/about-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/about-mv-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/about-mv-pc.png" alt="aboutメインビジュアル" loading="lazy" class="about-mv-img">
        </picture>
      </div>
    </div>


    <section id="concept">
      <div class="concept">
        <div class="concept-gp">
          <div class="concept-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept01.png" class="concept-img01" alt="コンセプト、整体中の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept02.png" class="concept-img02" alt="コンセプト、整体中の画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept03.png" class="concept-img03" alt="コンセプト、整体中の画像">
          </div>
          <div class="concept-main">
            <div class="concept-title">
              <h2 class="concept-main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/Union.png" class="concept-title-img" alt="タイトルの横の画像">Concept</h2>
              <p class="concept-title-sub">特長</p>
            </div>
            <div>
              <p class="concept-text">日々変化する
              <br>カラダと心を癒すパーソナル
              <br>トレーナーとして</p>
            </div>
            <div>
              <P class="concept-example">
                当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
              </P>
              <P class="concept-example">
                また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
              </P>
              <P class="concept-example">
                ご不安な点や疑問点などお気軽にご相談くださいませ。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="flow">
      <div class="flow">
        <div class="flow-gp">
          <div class="flow-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flow01.png" class="flow-img01" alt="flowの画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flow02.png" class="flow-img02" alt="flowの画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flow03.png" class="flow-img03" alt="flowの画像">
          </div>
          <div class="flow-main">
            <div class="flow-title">
              <h2 class="flow-main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/Union.png" class="flow-title-img" alt="タイトルの横の画像">Flow</h2>
              <p class="flow-title-sub">施術の流れ</p>
            </div>
            <ol class="flow-list">
              <li class="flow-list1">受付</li>
              <li class="flow-list1">問診票のご記入</li>
              <li class="flow-list1">カウンセリング</li>
              <li class="flow-list1">施術</li>
              <li class="flow-list1">アフターカウンセリング</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    

    <section id="improve">
      <div class="improve">
        <div>
          <h2 class="improve-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/left-diagonal.png" alt="左側の斜線" class="diagonal">
            根本改善ポイント
            <img src="<?php echo get_template_directory_uri(); ?>/img/right-diagonal.png" alt="右側の斜線" class="diagonal">
          </h2>
          <p class="improve-title-text">お体の状態や生活習慣、ご要望を丁寧にお伺いします。
            <br>ご自身でできるケアなども含めて施術方針をお作りします。</p>
        </div>
        <ul class="improve-gp">
          <li class="improve-point">
            <div class="improve-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/point01.png" alt="改善ポイント画像" class="improve-img">
            </div>
            <p class="improve-child">丁寧なカウンセリング</p>
          </li>
          <li class="improve-point">
            <div class="improve-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/point02.png" alt="改善ポイント画像" class="improve-img">
            </div>
            <p class="improve-child">徹底的分析</p>
          </li>
          <li class="improve-point">
            <div class="improve-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/point03.png" alt="改善ポイント画像" class="improve-img">
            </div>
            <p class="improve-child">施術計画のご提案</p>
          </li>
        </ul>
      </div>
    </section>
  </main>

 
  <?php get_footer(); ?>