  <footer id="footer">
    <div class="footer">
      <h2 class="footer-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/left-diagonal.png" alt="左側の斜線" class="diagonal">
        お気軽にご来院ください
        <img src="<?php echo get_template_directory_uri(); ?>/img/right-diagonal.png" alt="右側の斜線" class="diagonal">
      </h2>
        <div class="footer-gp">
          <div class="footer-left">
            <p class="footer-walk">JR「秋葉原駅」より徒歩1分</p>
            <P class="footer-address">
              〒101-0022
              <br>東京都千代田区神田練堀町300番地
              <br>住友不動産秋葉原駅前ビル 5F
            </P>
            <p class="footer-tel"><span class="footer-tel-text">tel:</span>03-1234-5678</p>
            <table border="1" style="border: 1px solid #dddddd; border-collapse: collapse;" class="footer-table">
              <tr>
                <th class="footer-date">営業時間</th>
                <th class="footer-date">月</th>
                <th class="footer-date">火</th>
                <th class="footer-date">水</th>
                <th class="footer-date">木</th>
                <th class="footer-date">金</th>
                <th class="footer-date">土</th>
                <th class="footer-date">日</th>
              </tr>
              <tr>
                <th class="footer-time">9:00~12:30</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">-</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
              </tr>
              <tr>
                <th class="footer-time">15:30~20:00</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">-</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
                <th class="footer-time">●</th>
              </tr>
            </table>
            <div class="footer-link-parent">
              <a href="<?php echo home_url(); ?>/contact" class="footer-link">ご予約・お問い合わせはこちらから</a>
            </div>
          </div>
          <div class="google-map-parent">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6480.1377242930685!2d139.774653!3d35.699923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1700143608833!5m2!1sja!2sjp" class="google-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="footer-header">
          <div class="footer-logo">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo" alt="SAMURAI整体院">
            </a>
          </div>
          <nav class="footer-nav">
            <ul class="nav-list">
              <li><a href="/" class="footer-nav-link">TOP</a></li>
              <li><a href="<?php echo home_url(); ?>/about" class="footer-nav-link">当院について</a></li>
              <li><a href="<?php echo home_url(); ?>/price" class="footer-nav-link">コース・料金</a></li>
              <li><a href="<?php echo home_url(); ?>/category/news" class="footer-nav-link">お知らせ</a></li>
              <li><a href="<?php echo home_url(); ?>/voice" class="footer-nav-link">お客様の声</a></li>
              <li><a href="<?php echo home_url(); ?>/contact" class="footer-nav-link">ご予約・お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div id="page_top"><a href="#"></a></div>
    <span id="copyright">&copy;2023 SAMURAI整体院</span>
    <?php wp_footer(); ?>
  </footer>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/index.js"></script>
</body>
</html>