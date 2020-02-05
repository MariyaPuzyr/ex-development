<?php
/*

Template Name: Modal window news template

*/

$args['post_status'] = 'publish';
$query = new WP_Query($args);
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
        ?>
          <div data-news="<?= get_the_ID()?>">
              <div class="date"><?= get_the_date(); ?></div>
              <h2><?= get_the_title()?></h2>
            <?= the_content()?>
              <div class="share-list"><span>Поделиться:</span>
                  <ul>
                      <li><a class="vk-ico share-ico" href="http://vk.com/share.php?url=<?= get_permalink()?>&title=<?= get_the_title()?>&noparse=true" target="_blank"></a></li>
                      <li><a class="facebook-ico share-ico" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink()?>" target="_blank"></a></li>
                      <li><a class="od-ico share-ico" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?= get_permalink()?>&st.comments=<?= get_the_title()?>" target="_blank"></a></li>
                  </ul>
              </div>
          </div>
      <?php endwhile;

    endif;
    wp_reset_postdata();
    ?>


