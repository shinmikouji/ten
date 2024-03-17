<?php get_header('news'); ?>
<main>
  <section class="p-news-detail">
    <div class="p-news-detail__inner">
      <h3 class="p-news-detail__title"><?php the_title(); ?></h3>
      <?php
      $categories = get_the_category(); // 記事のカテゴリを取得
      if (!empty($categories)) : // カテゴリが存在する場合のみ分岐
      ?>
        <ul class="p-news-detail__categories">
          <?php foreach ($categories as $category) : ?>
            <?php if ($category->name !== 'Uncategorized') : ?>
              <li><?php echo esc_html($category->name); ?></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <p class="p-news-detail__time">投稿日：<time><?php echo get_the_date(); ?></time></p>
      <div class="p-news-detail__contents">
        <?php the_content(); ?>
      </div>
      <?php
      $prev_post = get_previous_post(); // 前の記事を取得
      $next_post = get_next_post(); // 次の記事を取得
      ?>
      <?php if ($prev_post || $next_post) : ?>
        <div class="pagination">
          <?php if ($prev_post) : ?>
            <div class="prev">
              <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">前のタイトル</a>
            </div>
          <?php endif; ?>
          <?php if ($prev_post  && $next_post) : ?>
          <div class="vertical-border"></div>
          <?php endif; ?>
          <?php if ($next_post) : ?>
            <div class="next">
              <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">次のタイトル</a>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>