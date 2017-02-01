<div id="todayBlock" class="hidden-sm col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
    
              <?php 
				query_posts(array( 
					'post_type' => 'date',
					'posts_per_page' => 1
				) );  
			?>
            
<?php while (have_posts()) : the_post(); ?>

			   <?php
		
			  $char_count = strlen(utf8_decode(wp_strip_all_tags($post->post_content)));
			  if($char_count < 57 ) {
				  $sizes = 'font-size: 21px; line-height: 26px;';
			  } elseif($char_count > 57 && $char_count <= 114) {
				  $sizes = 'font-size: 21px; line-height: 26px;';
			  } elseif($char_count > 114 && $char_count <= 126) {
				  $sizes = 'font-size: 21px; line-height: 26px;';
			  } elseif($char_count > 126 && $char_count <= 144) {
				  $sizes = 'font-size: 17px; line-height: 26px;';
			  } elseif($char_count > 144 && $char_count <= 160) {
				  $sizes = 'font-size: 17px; line-height: 24px;';
			  } elseif($char_count > 160 ) {
				  $sizes = 'font-size: 16px; line-height: 21px;';
			  }
			  
			  ?>
			  

   
              <section class="todayBlock shareBlock-js">
                <div class="todayBlock-date"><?php the_time('j'); ?><i><?php the_time('F'); ?></i></div>
                <div class="todayBlock-aboutDate" style="<?php echo $sizes; ?>"><?php echo get_the_content(); ?></div>
                <!--<div class="shareBlock">
                  <button class="todayBlock-share mediaQuote-share-js">Поделиться</button>
				  <div class="shareBlock-list"><a href="#" data-type="vkontakte" class="shareBlock-link share-btn-js"><span class="icon-vk-xs"></span>52</a><a href="#" data-type="facebook" class="shareBlock-link share-btn-js"><span class="icon-fb-xs"></span>3</a><a href="#" data-type="twitter" class="shareBlock-link share-btn-js"><span class="icon-tw-xs"></span>122</a><a href="#" data-type="telegram" class="shareBlock-link share-btn-js"><span class="icon-telegram-xs"></span>152</a><a href="#" data-type="whatsapp" class="shareBlock-link share-btn-js hidden-md hidden-lg"><span class="icon-whatsapp-xs"></span>15</a></div>
                </div>-->
              </section>
              
                   <?php endwhile; wp_reset_query(); ?>
              
            </div>