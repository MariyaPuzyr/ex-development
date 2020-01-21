<?php 
if( !defined( 'ABSPATH')){ exit(); } 
mobile_theme_include('header');
?>

<div itemscope itemtype="https://schema.org/NewsArticle">

<h1 class="page_wrap_title"><?php the_title(); ?></h1>

<div class="single_news_wrap">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();

$blog_url = get_blog_url();

$post_id = $post->ID;
$image_arr = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'thumbnail');
$image = pn_strip_input(is_isset($image_arr,0));
if(!$image){ $image = $or_template_directory . '/logo.png'; }
$image_w = intval(is_isset($image_arr,1)); if(!$image_w){ $image_w = 100; }
$image_h = intval(is_isset($image_arr,2)); if(!$image_h){ $image_h = 60; }
?>				
		<div class="single_news">
		
			<a href="<?php echo get_permalink($post->ID); ?>" style="display: none;" itemprop="url"></a>
			
			<meta itemprop="name" content="<?php the_title_attribute(); ?>">
			<meta itemprop="author" content="<?php echo pn_site_name(); ?>">
			<meta itemprop="headline" content="<?php the_title_attribute(); ?>">
			<meta itemprop="image" content="<?php echo $image; ?>">
			<meta itemprop="dateModified" content="<?php the_time('Y-m-d'); ?>">
			
			<div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					<meta itemprop="image" content="<?php echo $image; ?>">
					<a href="<?php echo $image; ?>" style="display: none;" itemprop="url"></a>
					<span itemprop="width"><?php echo $image_w; ?></span>
					<span itemprop="height"><?php echo $image_h; ?></span>
				</div>
				<meta itemprop="name" content="<?php echo pn_site_name(); ?>">
				<meta itemprop="address" content="">
				<meta itemprop="telephone" content="">
			</div>		
			
			<div class="one_news_date" itemprop="datePublished" content="<?php the_time('Y-m-d'); ?>">
				<?php the_time(get_option('date_format')); ?>
			</div>
				<div class="clear"></div>
			
			<div class="one_news_content">
				<div class="text" itemprop="articleBody">				
					<?php the_content(); ?>
						<div class="clear"></div>
				</div>
			</div>
			
			<div class="metabox_div">
			
				<div class="metabox_cats">
					<span><?php _e('Category','pntheme'); ?>:</span> <?php the_terms( $post->ID, 'category','<span itemprop="articleSection">',', ','</span>'); ?>
				</div>
				<?php the_tags( '<div class="metabox_tags"><span>'. __('Tags','pntheme') .':</span> ', ', ', '</div>' ); ?>
				
			</div>

			<a href="<?php echo $blog_url;?>" class="one_news_more"><?php _e('Back to news','pntheme'); ?></a>
				<div class="clear"></div>			
		</div>		
<?php endwhile; ?>								
<?php endif; ?>	

</div>
</div>				

<?php 
mobile_theme_include('footer'); 
?>