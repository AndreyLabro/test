<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="96d7a102ee381d9a" />
	
	<?php if(in_category(192) || in_category(210)) {
		$rubric_link = 'https://gorky.media/context/';
		$rubric_name = 'Контекст';
	} elseif(in_category(1) || in_category(234)) {
		$rubric_link = 'https://gorky.media/reviews/';
		$rubric_name = 'Рецензии';
	} elseif(in_category(191) || in_category(486)) {
		$rubric_link = 'https://gorky.media/fragments/';
		$rubric_name = 'Фрагменты';
	}
	
	?>
	
	<?php if(is_singular('post')) : ?>
	<meta property="mywidget:rubric_link" content="<?php echo $rubric_link; ?>" />
	<meta property="mywidget:rubric_name" content="<?php echo $rubric_name; ?>" />
	<meta property="mywidget:description" content="<?php the_field('subtitle'); ?>" />
	<?php endif; ?>

   <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
    
    
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/bootstrap/js/bootstrap.min.js"></script>
<?php $pathToCSS = get_stylesheet_directory() . '/js/main.js'?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js?v=<?php echo filemtime($pathToCSS); ?>" />"></script>
	
<?php if(!is_single('11104')) : ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/handlebars.min.js"></script>

<script id="widget-template" type="text/x-handlebars-template">
        
          	<div data-mywidget-id="{{{_id}}}">
			{{#each list}}
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-item">
                <section class="mediaBlock -context">
                  <div class="mediaBlockInfo mediaBlockInfo-default">
                    <div style="background-image: url({{{preview.original_url}}});" class="mediaBlockInfo-img"></div><a href="{{{custom_fields.rubric_link}}}" data-mywidget-id="{{{_id}}}" class="mediaBlockInfo-category">{{{custom_fields.rubric}}}</a>
                    <div class="mediaBlockInfo-date">{{{custom_fields.date}}}</div>
                    <div class="mediaBlockInfo-main"><a href="{{{url}}}" data-mywidget-id="{{{_id}}}" class="mediaBlockInfo-title">{{{title}}}</a>
                      <div class="mediaBlockInfo-about">{{{description}}}</div>
                    </div>
                  </div>
                </section>
              </div>
            {{/each}}
        </div>
    </script>

<script id="my-widget-script" async
src="https://likemore-go.imgsmail.ru/widget.js"
data-uid="ab3f3ef380341d7f4a9cafb650447b68">
</script>

 <script>
  jQuery(function(){
    if (jQuery('#widget').size() > 0) {
        myWidget.get('6eb7cb5129158948b424cc0512f23910', {
            n: 3,
			descriptionLength: 90,
			escaping: true
        }, function (data, callback) {
            var source = jQuery('#widget-template').html();
            var template = Handlebars.compile(source);
            jQuery('#widget').html(template(data));
            callback();
        });
      }
    });
</script>
 
<?php endif; ?>




    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon_180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon_32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon_194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon_96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon_16x16.png" sizes="16x16">
    
  <?php if( is_page(7417) || is_page(9060) ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/test.js"></script>
  <?php endif; ?>
  
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39369610 = new Ya.Metrika({
                    id:39369610,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39369610" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82430416-1', 'auto');
  ga('send', 'pageview');

</script>
    
</head>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8181075403124196",
    enable_page_level_ads: true
  });
</script>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '143996632723621',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    

    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>
    
    <?php locate_template('parts/menu-mobile.php', true);?>
    <?php locate_template('parts/search.php', true);?>
    
    
    <div id="td-outer-wrap">
        
   
    <?php //this is closing in the footer.php file ?>

        <?php
        /*
         * loads the header template set in Theme Panel -> Header area
         * the template files are located in ../parts/header
         */
        td_api_header_style::_helper_show_header();

        do_action('td_wp_booster_after_header'); //used by unique articles