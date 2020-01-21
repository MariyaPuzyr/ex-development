<?php 
if( !defined( 'ABSPATH')){ exit(); }

if(function_exists('is_mobile') and is_mobile()){
	remove_action('wp_footer','statuswork_wp_footer');	
	remove_action('premium_js','premium_js_exchange_widget');
	remove_action('live_change_html','js_select_live');
	
	add_filter('before_plinks_page', 'mobile_page_title'); 
	add_filter('before_preferals_page', 'mobile_page_title');
	add_filter('before_payouts_page', 'mobile_page_title');
	add_filter('before_sitemap_page', 'mobile_page_title');
	add_filter('before_tarifs_page', 'mobile_page_title');
	add_filter('before_pexch_page', 'mobile_page_title');
	add_filter('before_userxch_page', 'mobile_page_title');
	add_filter('before_userverify_page', 'mobile_page_title');
	add_filter('before_promotional_page', 'mobile_page_title');
	add_filter('before_exchange_page', 'mobile_page_title_exchange');
	add_filter('before_exchangestep_page', 'mobile_page_title_exchange');	
	
	add_filter('before_one_tarifs_block','mobile_before_one_tarifs_block');
	add_filter('after_one_tarifs_block','mobile_after_one_tarifs_block');
	add_filter('one_tarifs_line','mobile_one_tarifs_line', 10, 7);
	
	remove_action('premium_js','premium_js_exchange_table');
	remove_action('premium_js','premium_js_exchange_table2');
	remove_action('premium_js','premium_js_exchange_table3');
}

function mobile_page_title(){
	$html = '<h1 class="page_wrap_title">'. get_the_title() .'</h1>';
	return $html;
}

function mobile_page_title_exchange(){
	if(function_exists('is_exchange_page') and is_exchange_page()) {
		$html = '<h1 class="page_wrap_title" id="the_title_page">'. get_exchange_title() .'</h1>';
		return $html;		
	} elseif(function_exists('is_exchangestep_page') and is_exchangestep_page()){
		$html = '<h1 class="page_wrap_title" id="the_title_page">'. get_exchangestep_title() .'</h1>';
		return $html;
	}	
}

function mobile_one_tarifs_line($html, $tar, $curs1, $curs2, $reserv, $vd1, $vd2){
	
	$html = '
	<a href="'. get_exchange_link($tar->direction_name) .'" class="one_tarif_line">
		<div class="tarif_curs_one give">
			<div class="tarif_curs_image">
				<div class="tarif_curs_logo currency_logo" style="background-image: url('. get_currency_logo($vd1) .');"></div>
			</div>
			<div class="tarif_curs_vtype">
				'. get_currency_title($vd1) .'
			</div>
			<div class="tarif_curs_sum">
				'. $curs1 .'&nbsp;'. is_site_value($vd1->currency_code_title) .'
			</div>
		</div>
		<div class="tarif_curs_one">
			<div class="tarif_curs_image">
				<div class="tarif_curs_logo currency_logo" style="background-image: url('. get_currency_logo($vd2) .');"></div>
			</div>
			<div class="tarif_curs_vtype">
				'. get_currency_title($vd2) .'
			</div>
			<div class="tarif_curs_sum">
				'. $curs2 .'&nbsp;'. is_site_value($vd2->currency_code_title) .'
			</div>
		</div>		
			<div class="clear"></div>
		<div class="tarif_curs_reserv">'. __('Reserve','pn') .': '. $reserv .' '. get_currency_title($vd2) .'</div>
	</a>
	';
	
	return $html;
}

function mobile_before_one_tarifs_block($html){
	return '';
}

function mobile_after_one_tarifs_block($html){
	return '';
}