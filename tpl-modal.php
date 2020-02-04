<?php
/*

Template Name: Modal window news template

*/

  $id = intval($_POST["post_id"]);
$args = array(
  'p' => $id
);
  $args['post_status'] = 'publish';
  $query = new WP_Query($args);
    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
        ?>
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

      <?php endwhile;

    endif;
    wp_reset_postdata();
    ?>


