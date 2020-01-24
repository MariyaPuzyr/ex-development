<?php if( !defined( 'ABSPATH')){ exit(); }

global $or_template_directory;
$f_change = get_theme_option('f_change', array('ctext','timetable','phone','vk','fb','tw'));
?>
				<div class="clear"></div>
		</div>	
	</div>
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