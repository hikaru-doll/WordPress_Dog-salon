<?php
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>
<!-- main start ---------------------------------------------->
<main id="front-page" class="main">
  <!-- section hero start --------------------->
  <section class="hero">
    <ul class="anime">
      <li>
        <picture>
          <source
            media="(max-width:700px)"
            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual4_sp.jpg" />
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual4.webp" alt="ゴールデンレトリーバー" />
        </picture>
      </li>
      <li>
        <picture>
          <source
            media="(max-width:700px)"
            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual5_sp.jpg" />
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual5.webp" alt="ボーダーコリー" />
        </picture>
      </li>
      <li>
        <picture>
          <source
            media="(max-width:700px)"
            srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual04_sp.jpg" />
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/mainvisual6.webp" alt="キャバリア" />
        </picture>
      </li>
    </ul>
  </section>
  <!-- /section hero end ------------------------------>
  <!-- section about start ------------------------------>
  <section class="about">
    <div class="wrapper">
      <article class="text">
        Dog Salon
        SUPICAは、ワンちゃんが心からリラックスできる特別な空間を提供することを第一に考えています。<br />
        私たちはワンちゃんと飼い主様の両方にとって、美しさと癒しをお届けいたします。<br />
        どうぞお気軽にお越しください。
      </article>
    </div>
  </section>
  <!-- /section about end  ------------------------------>
  <!-- section flow start ------------------------------->
  <section class="flow bg">
    <div class="wrapper">
      <h2 class="section-title">Flow</h2>
      <ul class="container">
        <li class="item">
          <div class="text">
            <h3 class="item-title"><span class="number">1.</span>ご予約</h3>
            <p>
              当店は完全予約制です。 お電話のみの受付となっています。
              分からないことやご質問がございましたら、
              お気軽にお電話でお問い合わせください。
            </p>
          </div>
          <div class="image">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/hearing3.jpg" alt="紙と鉛筆" />
          </div>
        </li>
        <li class="item">
          <div class="text">
            <h3 class="item-title">
              <span class="number">2.</span>ヒアリング
            </h3>
            <p>
              初回ご利用時はワンちゃんのことをひとつでも多く知るために、
              まずは飼い主さまからその子の性格やご自宅での過ごし方などをお伺いしています。
              カットのご要望が具体的に決まっていなかったとしても、じっくりと相談し合いながらその子にぴったりのスタイルをご提案いたします。
            </p>
          </div>
          <div class="image">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/shampoo1.jpg" alt="シャンプーの画像" />
          </div>
        </li>
        <li class="item">
          <div class="text">
            <h3 class="item-title">
              <span class="number">3.</span>トリミング
            </h3>
            <p>
              シャンプーは飼い主さまのご要望やワンちゃんの皮膚・被毛の状態に合わせて、3種類ご用意しています。
              皮膚トラブルを抱えている子のための低刺激のものや、仕上がりの美しさを重視したものなど、
              それぞれ期待できる効果も異なりますので愛犬にどんなケアをしてあげればいいのか分からないと困っている飼い主さまもお気軽にご相談ください。
            </p>
          </div>
          <div class="image">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/counseling.webp" alt="犬を抱く女性" />
          </div>
        </li>
        <li class="item">
          <div class="text">
            <h3 class="item-title"><span class="number">4.</span>お迎え</h3>
            <p>
              施術時間はメニューやワンちゃんによって変わってきます。おおよその時間はご来店時にお伝えしたうえで、
              施術終了前に電話でご連絡いたします。ワンちゃんがリラックスしてお迎えを待つ部屋も用意しています。
            </p>
          </div>
          <div class="image">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/welcome1.webp" alt="犬を迎える女性" />
          </div>
        </li>
        <li class="item">
          <div class="text">
            <p>
              ウェイティングスペースを設けています。<br />
              時間に余裕をもってお迎えに来てください。
            </p>
          </div>
          <div class="image chair">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/imgs/chair2.jpg" alt="イスとテーブル" />
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- /section flow end  ------------------------------->
  <!-- section reservation start ------------------------>
  <section class="reservation">
    <div class="wrapper">
      <h2 class="section-title">Reservation</h2>
      <p></p>
      <p>当店では完全予約制となっています。</p>
      <p>
        ご予約の前に、<a href="<?php echo esc_url(get_permalink(get_page_by_path('policy'))); ?>" class="policy-link">ご利用規約</a>をご覧になり、同意の上でご予約ください。
      </p>
      <p>
        ご予約は下のご予約カレンダーよりフォームを送信してください。お電話での受付も承っています。<br />
        分からないことがございましたらお気軽にご連絡ください。
      </p>
      <div class="button">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('reservation'))); ?> ">ご予約カレンダーへ</a>
      </div>
    </div>
  </section>
  <!-- -/section reservation end  ----------------------->
</main>
<!-- /main end  ---------------------------------------------------->
<?php get_footer(); ?>