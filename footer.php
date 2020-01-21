<?php if( !defined( 'ABSPATH')){ exit(); }

global $or_template_directory;
$f_change = get_theme_option('f_change', array('ctext','timetable','phone','vk','fb','tw'));
?>

			<?php if(!is_front_page() and !is_page_template('pn-notsidebar.php')){ ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>	
			<?php } ?>		
	
				<div class="clear"></div>
		</div>	
	</div>
	
	<!-- footer --> 
	<!--<div class="footer_wrap">
		<div class="footer">

			<div class="footer_left">
				<div class="copyright">
					<?php /*if($f_change['ctext']){ */?>
						<?php /*echo apply_filters('comment_text', $f_change['ctext']); */?>
					<?php /*} else { */?>
						&copy; <?php /*echo get_copy_date('2015'); */?> PremiumExchanger.com — <?php /*_e('electronic currency exchange service.','pntheme'); */?>
					<?php /*} */?>
				</div>

				<div class="footer_menu">
					<?php
/*					wp_nav_menu(array(
						'sort_column' => 'menu_order',
						'container' => 'div',
						'container_class' => 'menu',
						'menu_class' => 'hmenu',
						'menu_id' => '',
						'depth' => '1',
						'fallback_cb' => 'no_menu',
						'theme_location' => 'the_bottom_menu'
					));
					*/?>
						<div class="clear"></div>
				</div>
			</div>

			<div class="footer_center">
				<div class="footer_soc">
					<?php /*
					$self_link = lang_self_link();
					$self_link = urlencode($self_link);

					$arr = array('vk','fb','tw');
					foreach($arr as $ar){
						if($f_change[$ar]){
							$link = $f_change[$ar];
							$link_class = '';
							if(strstr($link,'[soc_link]')){
								$link_class = 'social_link';

								if($ar == 'vk'){
									$link = 'https://vk.com/share.php?url='.$self_link;
								} elseif($ar == 'fb'){
									$link = 'https://www.facebook.com/sharer/sharer.php?u='.$self_link;
								} elseif($ar == 'tw'){
									$link = 'https://twitter.com/share?url='.$self_link;
								}
							}
							$link = esc_url($link);
						*/?>
							<a href="<?php /*echo $link; */?>" class="<?php /*echo $link_class; */?>" target="_blank" rel="nofollow"><img src="<?php /*echo $or_template_directory; */?>/images/<?php /*echo $ar; */?>-ico.png" alt="" /></a>
						<?php /*
						}
					}
					*/?>
						<div class="clear"></div>
				</div>

				<?php /*if(function_exists('mobile_vers_link')){ */?>
					<a href="<?php /*echo mobile_vers_link(); */?>" class="mobile_link"><?php /*_e('Mobile version', 'pntheme'); */?></a>
						<div class="clear"></div>
				<?php /*} */?>
			</div>

			<div class="footer_right">

				<?php /*if($f_change['phone']){ */?>
				<div class="footer_phone">
					<span><?php /*echo pn_strip_input($f_change['phone']); */?></span>
				</div>
				<?php /*} */?>

				<?php /*if($f_change['timetable']){ */?>
				<div class="footer_timetable">
					<?php /*echo apply_filters('comment_text',$f_change['timetable']); */?>
				</div>
				<?php /*} */?>

			</div>

				<div class="clear"></div>
		</div>
	</div>-->
	<!-- end footer -->
	
</div>
<div class="modal fade news" id="news" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-news" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <svg class="icon">
            <use xlink:href="<?php echo $or_template_directory; ?>/img/sprites/sprite.svg#close-ico"></use>
          </svg>
        </button>
        <div class="section">Новости</div>
        <div class="slider single-item">
          <div class="slick-active">
            <div class="date">17 мая 2017</div>
            <h2>Производим переводы в Райффайзен банк.</h2>
            <p>Для жителей Вологодской области операция займет от 1го до 3х дней, для других регионов России срок утверждается отдельно. Осуществляется при участии курьера. Заявки принимаются круглосуточно, но в обработку поступают с 10:00 по Москве.</p>
            <div class="share-list"><span>Поделиться:</span>
              <ul>
                <li><a class="vk-ico share-ico" href="#"></a></li>
                <li><a class="facebook-ico share-ico" href="#"></a></li>
                <li><a class="od-ico share-ico" href="#"></a></li>
              </ul>
              <!--.share42init(data-url="http://share42.com/ru" data-title="Share42.com - Скрипт кнопок социальных закладок и сетей" data-image="http://site.name/image.jpg" data-top1="110" data-top2="20" data-margin="-90")-->
            </div>
          </div>
          <div>
            <div class="date">17 мая 2017</div>
            <h2>Производим переводы в Райффайзен банк.</h2>
            <p>Для жителей Вологодской области операция займет от 1го до 3х дней, для других регионов России срок утверждается отдельно. Осуществляется при участии курьера. Заявки принимаются круглосуточно, но в обработку поступают с 10:00 по Москве.</p>
            <div class="share-list"><span>Поделиться:</span>
              <ul>
                <li><a class="vk-ico share-ico" href="#"></a></li>
                <li><a class="facebook-ico share-ico" href="#"></a></li>
                <li><a class="od-ico share-ico" href="#"></a></li>
              </ul>
              <!--.share42init(data-url="http://share42.com/ru" data-title="Share42.com - Скрипт кнопок социальных закладок и сетей" data-image="http://site.name/image.jpg" data-top1="110" data-top2="20" data-margin="-90")-->
            </div>
          </div>
          <div>
            <div class="date">17 мая 2017</div>
            <h2>Производим переводы в Райффайзен банк.</h2>
            <p>Для жителей Вологодской области операция займет от 1го до 3х дней, для других регионов России срок утверждается отдельно. Осуществляется при участии курьера. Заявки принимаются круглосуточно, но в обработку поступают с 10:00 по Москве.</p>
            <div class="share-list"><span>Поделиться:</span>
              <ul>
                <li><a class="vk-ico share-ico" href="#"></a></li>
                <li><a class="facebook-ico share-ico" href="#"></a></li>
                <li><a class="od-ico share-ico" href="#"></a></li>
              </ul>
              <!--.share42init(data-url="http://share42.com/ru" data-title="Share42.com - Скрипт кнопок социальных закладок и сетей" data-image="http://share42.com/i/logo.png" data-top1="110" data-top2="20" data-margin="-90")-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="topped" class="js_to_top js_show_top"><span></span></div>

<?php do_action('pn_footer_theme'); ?>

<?php wp_footer(); ?>

</body>
</html>