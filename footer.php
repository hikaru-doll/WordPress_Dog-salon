<?php
defined('ABSPATH') || exit;
?>
<!-- footer start ----------------------------------------->
<footer class="footer bg">
  <div class="wrapper">
    <p>※本サイトは架空の店舗を想定して制作したポートフォリオ作品です。実在する店舗ではありません。</p>
    <div class="logo">
      <a href="<?php echo esc_url(home_url()); ?> "> <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/dog_salon_logo.png" alt="Dog Salon Supica" /></a>
    </div>
    <nav class="footer-navigation">
      <ul class="footer-menu">
        <li><a href="<?php echo esc_url(home_url()); ?>">Top</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>">メニュー料金表</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('staff'))); ?>">スタッフ紹介</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?>">ご予約</a></li>
        <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('policy'))); ?>">ご利用規約</a></li>
      </ul>
    </nav>
    <div id="access">
      <p>Access</p>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6551.821456199486!2d135.34491!3d34.80818775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000f45d6ecc9fa3%3A0xfffca8c820285434!2z44CSNjY1LTA4NDUg5YW15bqr55yM5a6d5aGa5biC5qCE55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1783137130602!5m2!1sja!2sjp"
          width="100%"
          height="250"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>
      <dl class="grid">
        <dt>所在地</dt>
        <dd>〒000-000　兵庫県宝塚市子犬町0-0-0</dd>
        <dt>電話番号</dt>
        <dd>090-0000-0000</dd>
        <dt>定休日</dt>
        <dd>水曜日</dd>
        <dt>営業時間</dt>
        <dd>9:00～20:00</dd>
      </dl>
    </div>
  </div>
  <p class="copyright">&copy;<span id="year"></span> Dog Salon SUPICA</p>
</footer>
<?php wp_footer(); ?>
<!-- /footer end ----------------------------------------------->
</body>

</html>