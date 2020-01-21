<?php  
if( !defined( 'ABSPATH')){ exit(); } 

get_header();

global $or_template_directory;
?>

	<?php if(is_category() or is_tax() or is_tag()){ ?>
		<?php 
		$description = trim(term_description()); 
		if($description){
		?>
			<div class="term_description">
				<div class="text">
					<?php echo apply_filters('the_content',$description); ?>
					<div class="clear"></div>
				</div>	
			</div>
		<?php } ?>
	<?php } ?>	
	
	
	<div class="many_news_wrap">
		<div class="many_news">
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); 
		
			$post_id = $post->ID;
			$image_arr = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'thumbnail');
			$image = pn_strip_input(is_isset($image_arr,0));
			if(!$image){ $image = $or_template_directory . '/logo.png'; }
			$image_w = intval(is_isset($image_arr,1)); if(!$image_w){ $image_w = 100; }
			$image_h = intval(is_isset($image_arr,2)); if(!$image_h){ $image_h = 60; }		
		?>	
		
			<div class="one_news" itemscope itemtype="https://schema.org/NewsArticle">
				
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
				
				<h2 class="one_news_title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span itemprop="name"><?php the_title(); ?></span></a>
				</h2>
				
				<div class="one_news_date" itemprop="datePublished" content="<?php the_time('Y-m-d'); ?>">
					<?php the_time(get_option('date_format')); ?>
				</div>
					<div class="clear"></div>
				
				<div class="one_news_excerpt">
					<div class="text" itemprop="articleBody">
						<a href="<?php the_permalink();?>" itemprop="url">
							<?php the_excerpt(); ?>
						</a>	
							<div class="clear"></div>
					</div>
				</div>
				
				<div class="metabox_div">
				
					<div class="metabox_left">
						<div class="metabox_cats">
							<span><?php _e('Category','pntheme'); ?>:</span> <?php the_terms( $post->ID, 'category','<span itemprop="articleSection">',', ','</span>'); ?>
						</div>
						<?php the_tags( '<div class="metabox_tags"><span>'. __('Tags','pntheme') .':</span> ', ', ', '</div>' ); ?>
					</div>
					
					
					<a href="<?php the_permalink();?>" itemprop="url" class="one_news_more"><?php _e('Read more','pntheme'); ?></a>
						<div class="clear"></div>
				</div>		
			</div>	
		
		<?php endwhile; ?>
			
		<?php else : ?>
		
		<div class="text">
			<p><?php _e('Unfortunately this section is empty','pntheme'); ?></p>								
		</div>
		
		<?php endif; ?>
		
		</div>
		
		<?php the_pagenavi(); ?>
	</div>
	
<?php  

get_footer(); 