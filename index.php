<?php get_header(); ?>

<main>
  <?php
  if(have_posts()):
  else:
  ?>
  <div class="post">
    <h1>記事はありません</h1>
    <p>お探しの記事はありませんでした。</p>
  </div>
  <?php
  endif;
  ?>
</main>

<?php get_footer(); ?>
