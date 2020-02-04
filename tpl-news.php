<?php
/*

Template Name: News page template

*/
$currentDay = date("m.d.y");
$postDay =  get_the_date();
?>
<div class="currency-reserves" id="content">
  <div class="d-flex align-items-center mb-2 position-relative"><a class="back-link" href="#"></a>
    <h2 class="sidebar-title">Новости</h2>
  </div>
    <?php
//    $args = unserialize(stripslashes($_POST['query']));
    $args['post_status'] = 'publish';
    $query = new WP_Query($args);
    ?>
  <div class="news-list">
    <?php
      if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();
      ?>
      <?php if (get_the_date() == $currentDay) {?>
          <div class="news-list__item meganews">
            <div class="news-list__item--date"><?php echo get_the_date(); ?></div>
            <div class="news-list__item--link" data-post-id="<?= get_the_ID()?>"><?php the_excerpt(); ?></div>
          </div>
        <?php } else {
        ?>
    <div class="news-list__item">
      <div class="news-list__item--date"><?php echo get_the_date(); ?></div>
      <div class="news-list__item--link" data-post-id="<?= get_the_ID()?>"><?php the_excerpt(); ?></div>
    </div>
    <?php
            }
        endwhile;

      endif;
    wp_reset_postdata();
    ?>
  </div>
</div>
