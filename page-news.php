<?php /* Template Name:news  */ ?>
<?php get_header('news'); ?>
<main>
  <section class="p-news-archive">
    <ul class="p-news-archive__list">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $archive_query = new WP_Query($args);
      ?>
      <?php if ($archive_query->have_posts()) : ?>
        <?php while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
          <li class="p-news-archive__items">
            <a href="<?php the_permalink(); ?>" class="p-news-archive__link">
              <?php
              $post_content = get_the_content();
              $post_images = get_post_gallery_images();
              if (!empty($post_images)) {
                $img_src = reset($post_images);
              } else {
                $img_src = get_template_directory_uri() . '/images/top/top-mv.png';
              }
              ?>
              <img src="<?php echo esc_url($img_src); ?>" alt="">
              <div class="p-news-archive__items-textArea">
                <h3><?php the_title() ?></h3>
                <p class="p-news-archive__items-time">投稿日：<time><?php echo get_the_date(); ?></time></p>
                <?php
                $start_pos = strpos($post_content, '<p>'); // 最初の<p>タグの位置を取得
                $end_pos = strpos($post_content, '</p>', $start_pos); // 最初の</p>タグの位置を取得
                $extracted_content = substr($post_content, $start_pos, $end_pos - $start_pos + strlen('</p>'));
                echo $extracted_content;
                ?>
              </div>
            </a>
          </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
        <div class="p-news-archive-pagination">
          <?php //ページリスト表示処理
          global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
          } else {
            $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
              user_trailingslashit('page/%#%/', 'paged');
            $paginate_base .= '%_%';
          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $archive_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '前へ',
            'next_text' => '次へ',
          ));
          ?>
        </div>
      <?php else : ?>
        <p class="">記事が見つかりませんでした。</p>
      <?php endif; ?>
    </ul>
  </section>
</main>
<?php get_footer(); ?>