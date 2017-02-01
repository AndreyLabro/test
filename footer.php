
<!-- Footer -->
<?php
//if (td_util::get_option('tds_footer') != 'no') {
//    td_api_footer_template::_helper_show_footer();
//}
?>
<?php if(is_page(2010)) : ?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBiHe2gCoUaMLl-Z-5C13XdF0k51UJoReA"></script>
<section id="mapInfo" class="mapInfo"></section>
<?php endif; ?>

<footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-md-3 footer-form">
           
           <form action="//media.us13.list-manage.com/subscribe/post?u=a3123759f1d5fe5458efa44ec&amp;id=849dbe5dc1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate formSubscription" target="_blank" novalidate>

<label for="mce-EMAIL" class="formSubscription-label">Подпишитесь на нашу рассылку</label>
<div class="form-group">
<div class="input-group">
<input type="email" placeholder="Ваш e-mail" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">

	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>

<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a3123759f1d5fe5458efa44ec_849dbe5dc1" tabindex="-1" value=""></div>



<button type="submit" class="btn btn-default" name="subscribe" id="mc-embedded-subscribe"><span class="icon-arrow"></span></button>
</div></div>
</form>
		   
		      <p class="gift">Мы подарим вам месяц бесплатного чтения на Bookmate</p>

<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: RU
 */
}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
           
              
      
              <div class="inf-mistake hidden-xs">Нашли опечатку?<br> Выделите текст и нажмите Ctrl+Enter</div>
			
            </div>
            <div class="col-md-4 col-md-offset-5 col-lg-3 col-lg-offset-6 footerMenu">
              <ul class="footerMenuList">
                <li class="footerMenu-item"><a href="<?php echo site_url( '/redaction/', 'https' ); ?>" class="footerMenu-link">Редакция </a></li>
                <li class="footerMenu-item 2"><a href="<?php echo site_url( '/advert/', 'https' ); ?>" class="footerMenu-link">Реклама </a></li>
                <li class="footerMenu-item"><a href="<?php echo site_url( '/autor/', 'https' ); ?>" class="footerMenu-link">Авторы </a></li>
              </ul>
            </div>
            <div class="col-xs-5 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-5 col-lg-3 col-lg-offset-6 copy-footer"><span class="copyrightInfo">© Горький Медиа, 2016 <br>Все права защищены. Частичная перепечатка материалов сайта разрешена при наличии активной ссылки на оригинальную публикацию, полная — только с письменного разрешения редакции.<br><img src="/wp-content/themes/gorky/img/Zimin_fnd_main_logo.png" class="zimin"> При поддержке Zimin Foundation</span>
              <ul class="network">
                <li class="network-item"><a href="https://vk.com/gorkiy_media" target="_blank" class="network-link icon-vk"></a></li>
                <li class="network-item"><a href="https://www.facebook.com/gorky.media/" target="_blank" class="network-link icon-fb"></a></li>
                <li class="network-item"><a href="https://ok.ru/group/54195133415536" target="_blank" class="network-link icon-ok"></a></li>
                <li class="network-item"><a href="https://twitter.com/gorky_media" target="_blank" class="network-link icon-tw"></a></li>
                <li class="network-item"><a href="https://telegram.me/gorky_media" target="_blank" class="network-link icon-telegram"></a></li>
                <li class="network-item"><a href="http://gorky.media/feed/" target="_blank" class="network-link icon-rss"></a></li>
                <li class="network-item"><a href="https://flipboard.com/@gorkymedia/горький-s0di42v2y" target="_blank" class="network-link icon-flip"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

</div><!--close td-outer-wrap-->

 <!-- <script src="<?php // echo get_stylesheet_directory_uri(); ?>/vendors/masonry.pkgd.min.js"></script>-->

 

<?php wp_footer(); ?>


</body>
</html>