<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $onclick
 * @var $custom_links
 * @var $custom_links_target
 * @var $img_size
 * @var $images
 * @var $el_class
 * @var $mode
 * @var $slides_per_view
 * @var $wrap
 * @var $autoplay
 * @var $hide_pagination_control
 * @var $hide_prev_next_buttons
 * @var $speed
 * @var $partial_view
 * @var $css
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_images_carousel
 */
$title = $onclick = $custom_links = $custom_links_target =
$img_size = $images = $el_class = $mode = $slides_per_view =
$wrap = $autoplay = $hide_pagination_control =
$hide_prev_next_buttons = $speed = $partial_view = $css = '';

$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$gal_images = '';
$link_start = '';
$link_end = '';
$el_start = '';
$el_end = '';
$slides_wrap_start = '';
$slides_wrap_end = '';
$pretty_rand = 'link_image' === $onclick ? ' data-rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"' : '';

wp_enqueue_script( 'vc_carousel_js' );
wp_enqueue_style( 'vc_carousel_css' );
if ( 'link_image' === $onclick ) {
	wp_enqueue_script( 'prettyphoto' );
	wp_enqueue_style( 'prettyphoto' );
}

if ( '' === $images ) {
	$images = '-1,-2,-3';
}

if ( 'custom_link' === $onclick ) {
	$custom_links = vc_value_from_safe( $custom_links );
	$custom_links = explode( ',', $custom_links );
}

$images = explode( ',', $images );
$i = - 1;

$class_to_filter = 'wpb_images_carousel wpb_content_element vc_clearfix';
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

$carousel_id = 'vc_images-carousel-' . WPBakeryShortCode_VC_images_carousel::getCarouselIndex();
$slider_width = $this->getSliderWidth( $img_size );
?>
<div class="<?php echo esc_attr( apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $css_class, $this->settings['base'], $atts ) ); ?>">
	<div class="wpb_wrapper">
		<div class="slider-count"></div>
		<?php echo wpb_widget_title( array( 'title' => $title, 'extraclass' => 'wpb_gallery_heading' ) ) ?>
		<div id="<?php echo $carousel_id ?>" data-ride="vc_carousel" data-wrap="<?php echo 'yes' === $wrap ? 'true' : 'false' ?>" style="width: <?php echo $slider_width ?>;" data-interval="<?php echo 'yes' === $autoplay ? $speed : 0 ?>" data-auto-height="yes" data-mode="<?php echo $mode ?>" data-partial="<?php echo 'yes' === $partial_view ? 'true' : 'false' ?>" data-per-view="<?php echo $slides_per_view ?>" data-hide-on-end="<?php echo 'yes' === $autoplay ? 'false' : 'true' ?>" class="vc_slide vc_images_carousel">
			<?php if ( 'yes' !== $hide_pagination_control ) :  ?>
				<!-- Indicators -->
				<ol class="vc_carousel-indicators">
					<?php for ( $z = 0; $z < count( $images ); $z ++ ) :  ?>
						<li data-target="#<?php echo $carousel_id ?>" data-slide-to="<?php echo $z ?>"></li>
					<?php endfor; ?>
				</ol>
			<?php endif ?>
			<!-- Wrapper for slides -->
			<div class="vc_carousel-inner">
				<div class="vc_carousel-slideline">
					<div class="vc_carousel-slideline-inner">
						<?php $cnt = 1; ?>
						<?php foreach ( $images as $attach_id ) :  ?>
							<?php
							
							$i ++;
							if ( $attach_id > 0 ) {
								$post_thumbnail = wpb_getImageBySize( array(
									'attach_id' => $attach_id,
									'thumb_size' => $img_size,
								) );
							} else {
								$post_thumbnail = array();
								$post_thumbnail['thumbnail'] = '<img src="' . vc_asset_url( 'vc/no_image.png' ) . '" />';
								$post_thumbnail['p_img_large'][0] = vc_asset_url( 'vc/no_image.png' );
							}
							$thumbnail = $post_thumbnail['thumbnail'];
							?>
							<div class="vc_item">
								
								<div class="vc_inner">
									
										
				<div class="count"><?php echo $cnt .'/'. count( $images) ; ?></div><?php  $cnt++; ?>
				
									
									<?php if ( 'link_image' === $onclick ) :  ?>
										<?php $p_img_large = $post_thumbnail['p_img_large']; ?>
										<a class="prettyphoto" href="<?php echo $p_img_large[0] ?>" <?php echo $pretty_rand; ?>>
											<?php echo $thumbnail ?>
										</a>
									<?php elseif ( 'custom_link' === $onclick && isset( $custom_links[ $i ] ) && '' !== $custom_links[ $i ] ) :  ?>
										<a href="<?php echo $custom_links[ $i ] ?>"<?php echo( ! empty( $custom_links_target ) ? ' target="' . $custom_links_target . '"' : '' ) ?>>
											<?php echo $thumbnail ?>
										</a>
									<?php else : ?>
										<?php echo $thumbnail ?>
									<?php endif ?>
									<?php $parms = wp_prepare_attachment_for_js( $attach_id ) ?> 
								</div>
						<div class="carousel-about">
                        <div class="row">
                          <div class="col-xs-12 col-sm-7">
                            <div class="carousel-description"><?php echo $parms['caption']; ?></div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-2">
                            <div class="img-description"><?php echo $parms['description']; ?></div>
                          </div>
                        </div>
                      </div><!--carousel-about-->
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<?php if ( 'yes' !== $hide_prev_next_buttons ) :  ?>
				<!-- Controls -->
				<a class="vc_left vc_carousel-control" href="#<?php echo $carousel_id ?>" data-slide="prev">
					<svg viewBox="0 0 26.2 51.1">
                      <g>
                        <path d="M20,51.1L0.1,26.9L0,24L20,0l6,4L9.8,25.3L26.2,47L20,51.1z" class="arrow"></path>
                      </g>
                    </svg>
				</a>
				<a class="vc_right vc_carousel-control" href="#<?php echo $carousel_id ?>" data-slide="next">
					<svg viewBox="0 0 26.3 51.1">
                      <g>
                        <path d="M6.1,51.1L0,47l16.3-21.7L0.1,4l6-4l20.2,24L26,26.9L6.1,51.1z" class="arrow"></path>
                      </g>
                    </svg>
				</a>
			<?php endif ?>
			
		</div>
	</div>
</div>
