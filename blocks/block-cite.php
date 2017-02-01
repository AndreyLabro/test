<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">

              <?php
				query_posts(array(
					'post_type' => 'cite',
					'posts_per_page' => 1
				) );
			?>

<?php while (have_posts()) : the_post(); ?>

			  <?php

			  $char_count = strlen(utf8_decode(wp_strip_all_tags($post->post_content)));
			  if($char_count > 134 && $char_count <= 145) {
				  $sizes = 'font-size: 20px; line-height: 30px;';
			  } elseif($char_count > 145 && $char_count <= 170) {
				  $sizes = 'font-size: 19px; line-height: 27px;';
			  } elseif($char_count > 170 && $char_count <= 193) {
				  $sizes = 'font-size: 18px; line-height: 26px;';
			  } elseif($char_count > 193 && $char_count <= 225) {
				  $sizes = 'font-size: 18px; line-height: 24px;';
			  } elseif($char_count > 225 && $char_count <= 231) {
				  $sizes = 'font-size: 17px; line-height: 24px;';
			  } elseif($char_count > 231 && $char_count <= 250) {
				  $sizes = 'font-size: 16px; line-height: 23px;';
			  } elseif($char_count > 250 && $char_count <= 288) {
				  $sizes = 'font-size: 16px; line-height: 21px;';
			  } elseif($char_count > 288 && $char_count <= 296) {
				  $sizes = 'font-size: 15px; line-height: 20px;';
			  } elseif($char_count > 296 && $char_count <= 338) {
				  $sizes = 'font-size: 15px; line-height: 18px;';
			  } elseif($char_count > 338 && $char_count <= 368) {
				  $sizes = 'font-size: 14px; line-height: 17px;';
			  } elseif($char_count > 368) {
				  $sizes = 'font-size: 13px; line-height: 16px;';
			  }

			  ?>

              <section class="mediaQuote text-center shareBlock-js">
                <q class="mediaQuote-text" style="<?php echo $sizes; ?>"><?php the_content(); ?></q>
                <div class="mediaQuote-label"><?php echo get_the_excerpt(); ?></div>
             <?php if(current_user_can('administrator')) : ?>
               	<div class="shareBlock text-center">
                  <button class="mediaQuote-share mediaQuote-share-js">Поделиться</button>
                  <div class="shareBlock-list">
                  	<a href="#" data-type="vkontakte" class="shareBlock-link share-btn-quote-js"><span class="icon-vk-xs"></span></a>
                  	<a href="#" data-type="facebook" class="shareBlock-link share-btn-quote-js"><span class="icon-fb-xs"></span></a>
                  	<a href="#" data-type="twitter" class="shareBlock-link share-btn-quote-js"><span class="icon-tw-xs"></span></a>
                  	<a href="#" data-type="telegram" class="shareBlock-link share-btn-quote-js"><span class="icon-telegram-xs"></span></a>
                  	<!-- <a href="#" data-type="whatsapp" class="shareBlock-link share-btn-js hidden-md hidden-lg"><span class="icon-whatsapp-xs"></span>15</a> -->
                  </div>
                </div>
		<?php endif; ?>
              </section>

              <?php endwhile; wp_reset_query(); ?>

            </div>
