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
