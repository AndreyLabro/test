jQuery(document).ready(function() {
	
//	mediaBlockMainInfoImgPosition();
//    // mixBlock();
//    createMasonry();

//	jQuery(window).on('resize', function() {
//		mediaBlockMainInfoImgPosition();
//        carousel_count();
//        // mixBlock();
//        createMasonry();
//	})

    // Шеринг в соц.сети
    jQuery('.share-btn-js').click(function(event){
        event.preventDefault();
        var social_type = jQuery(this).attr('data-type');
        var s_title = jQuery('#share-title').attr('content') || '';
        var s_text = jQuery('#share-descr').attr('content') || '';
        var s_img = jQuery('#share-img').attr('content') || '';
        var url = window.location.href;
        if (social_type){
            shareButtons(social_type, url, s_title, s_text, s_img);
        }
    });

    jQuery('.share-btn-test-js').click(function(event){
        event.preventDefault();
        jQuerycurentResult = jQuery('.curent-result');
        var social_type = jQuery(this).attr('data-type');
        var s_title = jQuerycurentResult.find('.result_title').text() || '';
        var s_text = jQuerycurentResult.find('.result_des').text() || '';
        var s_img = jQuerycurentResult.find('.result_img img').attr('src') || '';
        var url = window.location.href;
        if (social_type){
            shareButtons(social_type, url, s_title, s_text, s_img);
        }
    });

    jQuery('.share-btn-quote-js').click(function(event){
        event.preventDefault();
        var jQuerycurent = jQuery('.mediaQuote');
        var social_type = jQuery(this).attr('data-type');
        var s_title = 'Цитата дня';
        var s_text = jQuerycurent.find('.mediaQuote-text').text() || '';
        s_text = s_text + '. ' + (jQuerycurent.find('.mediaQuote-label').text() || '') ;
        var s_img = '';
        var url = window.location.href;
        if (social_type){
            if (social_type == 'twitter' || social_type == 'telegram') {
                s_title = s_text;
            }
            shareButtons(social_type, url, s_title, s_text, s_img);
        }
    });
    
    // Рейтинг (оценка) книг
    jQuery('.icon-star').on('click', function() {
        var scope = jQuery(this).data('scope');
        jQuery('#count-star').html(scope);
        jQuery('.icon-star').removeClass('active');
        for (var i = 0; i < scope; i++) {
            jQuery('.icon-star:nth-of-type('+(i+1)+')').addClass('active');
        };
    });


    // открыть кнопки шеринга
    jQuery('.mediaQuote-share-js').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var shareBlock = jQuery(this).parent('.shareBlock');
        jQuery(shareBlock).find('.shareBlock-list').addClass('open');
    });
    jQuery('.shareBlock-js').mouseleave(function(e) {
        jQuery(this).find('.shareBlock-list').removeClass('open');
    });


    // Отправка e-mail
    // .formSubscription--hasError
    jQuery('.send-email-js').click(function(e) {
        jQuery('.send-email-js .input-group .form-control').removeClass('mce_inline_error');
        console.log('1')
    });
    jQuery('.send-email-js').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();
        jQuery('.send-email-js .form-group').removeClass('formSubscription--hasError');
        var email = jQuery('.send-email-js .form-control').val();
        var validationEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}jQuery/;

        if ( !validationEmail.test(email) ) {
            jQuery('.send-email-js .form-group').addClass('formSubscription--hasError');
            return;
        } else {
            jQuery('.coming_soon-form .form-group .input-group').fadeOut();
            jQuery('.coming_soon-form .form-success').fadeIn();
        };


        var form_data = jQuery('.send-email-js').serialize();

        // jQuery.ajax({
        //     type: "POST",
        //     data: form_data,
        //     success: function(response) {
        //         console.log('all right');
        //     },
        //     error: function(response) {
        //         jQuery('.send-email-js .form-group').addClass('formSubscription--hasError');
        //     }
        // })
    });


    // Carousel
    jQuery('.carousel').carousel({
        wrap: false,
        interval: false
    });
    carousel_count();
    function carousel_count() {
        jQuery('.carousel').each(function(i, carousel) {
            var totalItems = jQuery(carousel).find('.item').length;
            jQuery(carousel).find('.carousel-count').html('1/'+totalItems);

            var currentIndex = jQuery(carousel).find('.item.active').index() + 1;
            jQuery(carousel).find('.carousel-count').html(currentIndex+'/'+totalItems);
            if (currentIndex > 1) {
                jQuery(carousel).find('.left.carousel-control').removeClass('disabled');
            } else {
                jQuery(carousel).find('.left.carousel-control').addClass('disabled');
            };
            if (currentIndex == totalItems) {
                jQuery(carousel).find('.right.carousel-control').addClass('disabled');
            } else {
                jQuery(carousel).find('.right.carousel-control').removeClass('disabled');
            };


            var height = 0;
            jQuery(carousel).find('.item').css('height', 'auto')
            jQuery(carousel).find('.item').each(function(i, carousel_item) {
                if (jQuery(carousel_item).hasClass('active')) {
                    var itemHeight = jQuery(carousel_item).height();
                } else {
                    var itemHeight = jQuery(carousel_item).height() * 0.9;
                };
                // console.log(itemHeight)
                if (height <  itemHeight) {
                    height = itemHeight;
                };
            });
            jQuery(carousel).find('.item').css('height', height)


            jQuery(carousel).on('slid.bs.carousel', function (e) {
                var currentIndex = jQuery(carousel).find('.item.active').index() + 1;
                jQuery(carousel).find('.carousel-count').html(currentIndex+'/'+totalItems);
                if (currentIndex > 1) {
                    jQuery(carousel).find('.left.carousel-control').removeClass('disabled');
                } else {
                    jQuery(carousel).find('.left.carousel-control').addClass('disabled');
                };
                if (currentIndex == totalItems) {
                    jQuery(carousel).find('.right.carousel-control').addClass('disabled');
                } else {
                    jQuery(carousel).find('.right.carousel-control').removeClass('disabled');
                };

            })
        })
    }

    // open search
    jQuery('.navbar-search').on('click', function(e) {
        e.stopPropagation();
        jQuery('.navbar-toggle[aria-expanded="true"]').click();
        jQuery('.navbar-form').toggleClass('open');
    });
    jQuery(document).on('click', function() {
        jQuery('.navbar-form').removeClass('open');
    });
    jQuery('.navbar-form').on('click', function(e) {
        e.stopPropagation();
    });

    jQuery('.book_theme').on('click', function(e) {
        
        jQuery('.book_theme').toggleClass('open')
    })



    // open/close review
    jQuery('#review-open').on('click', function() {
        if ( jQuery(this).hasClass('--open') ) {
            jQuery(this).removeClass('--open');
            jQuery('#review-form').css({
                'display': 'none',
                'height': '0'
            });

        } else {
            jQuery(this).addClass('--open');
            jQuery('#review-form').css({
                'display': 'block',
                'height': 'auto'
            });
        };
    });
    
    


    // Map
    function initMap() {
        var mapContainer = document.getElementById("mapInfo");
        if (!mapContainer) {
            return;
        };
        var myLatlng = new google.maps.LatLng(55.762641,37.606914);
        if (jQuery(window).width() < 768) {
           var myLatlng = new google.maps.LatLng(55.762656,37.610444);
        } ;


        var myOptions = {
            zoom: 17,
			scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("mapInfo"), myOptions); 

        var icon = {
            url: '../wp-content/themes/gorky/img/icon-map.png',
            size: new google.maps.Size(50, 75),
            origin: new google.maps.Point(0,0),
            anchor: new google.maps.Point(25, 75)
        };

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(55.762656,37.606914),
            map: map,
            icon: icon,
            title: '125009, Москва, Малый Гнездниковский пер., 12/27'
        });
        marker.setMap(map);

        var contentString = '<div class="map-info"><div class="map-place-img"></div>'+
                            '<div class="map-place-title">Горький Медиа</div>'+
                            '<div>125009, Москва, Малый Гнездниковский пер., 12/27</div>'+
                            '<div><i>e-mail:</i> <a href="mailto:in@gorky.media">in@gorky.media</a></div></div>';
        var infowindow = new google.maps.InfoWindow({
            disableAutoPan: true,
            content: contentString
        });
        infowindow.open(map, marker);

        google.maps.event.addListener(infowindow, 'domready', function() {

            var iwOuter = jQuery('.gm-style-iw');
            var iwBackground = iwOuter.parent();
            iwBackground.addClass('map-info-window');
            iwBackground.children(':nth-child(1)').css({'display' : 'none'});
            iwBackground.children(':nth-child(3)').css({'display' : 'none'});
        });

    };
    initMap();
	
//	jQuery( '.mixitup' ).mixItUp();
	jQuery( '.letter-list a' ).each(
		function( index, element ){
			jQuery( element ).click(
				function(){
					if ( ! jQuery( element ).hasClass( 'all' ) )
						jQuery( '#current-letter' ).text( jQuery( element ).text() )
					else 
						jQuery( '#current-letter' ).text( '' );
				}
			)
		}
	);
    
    
    
    

});



//function mixBlock() {
//    var curWidth = jQuery(document).width()
//    if (curWidth > 1600) {
//        for (var i = 0; i < 20; i++) {
//            var clone = jQuery('.grid-item[data-lg="'+i+'"]').clone();
//            if ( clone.length ) {
//                jQuery('.grid-item[data-lg="'+i+'"]').remove();
//                jQuery(clone).insertBefore(jQuery(".grid-item:nth-of-type("+ (i+1) +")"));
//            };
//        };
//    };
//    createMasonry();
//}

//function createMasonry() {
//	
//	
//		jQuery('.readMore-list').masonry({
//				itemSelector: '.readMore-item',
//			columnWidth: 1,
//			transitionDuration: 0
//		});
//	
//
//		jQuery('#grid_masonry').masonry({
//				itemSelector: '.grid-item',
//			columnWidth: .1,
//			transitionDuration: 0
//		});
//}


function mediaBlockMainInfoImgPosition() {
	var img = jQuery('#mediaBlockMainInfoImg');
    if (!img.offset()) {
        return
    };
	var imgParent = jQuery('#mediaBlockMainInfoImg').parent('.mediaBlockInfo');
	var left = (imgParent.offset().left) * (-1);
	img.css('left', left + 'px');
};

function shareButtons(social_type, share_url, share_title, share_text, share_image) {
    var title = share_title;
    var url = '';
    var purl = share_url;
    var text = share_text;
    var img = share_image;


    text = text.replace(/<.*?>/g, "");

    var Share = {
        vkontakte: function(purl, ptitle, pimg, text) {
            // text = text.slice(0, 100) + '...';
            url  = 'http://vkontakte.ru/share.php?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title='       + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&image='       + encodeURIComponent(pimg);
            url += '&noparse=true';
            Share.popup(url);
        },
        facebook: function(purl, ptitle, pimg, text) {
            url  = 'http://facebook.com/sharer.php?'
            url += 's=400';
            url += '&p[url]='         + encodeURIComponent(purl);
            url += '&p[title]='      + encodeURIComponent(ptitle);
            url += '&p[summary]='    + encodeURIComponent(text);
            url += '&p[images][0]='  + encodeURIComponent(pimg);
            
            console.log(pimg)

            // facebook share dialog
            FB.ui( {
                method: 'feed',
                name: ptitle,
                link: purl,
                picture: pimg,
                description: text
            }, function( response ) {
                // do nothing
            } );

            // Share.popup(url);
        },
        twitter: function(purl, ptitle, pimg, text) {
            ptitle = ptitle.slice(0, 112) + '...';
            url  = 'http://twitter.com/share?';
            url += 'text='      + encodeURIComponent(ptitle);
            url += '&url='      + encodeURIComponent(purl);
            url += '&counturl=' + encodeURIComponent(purl);

            Share.popup(url);
        },
        telegram: function(purl, ptitle, pimg, text) {
            url  = 'https://telegram.me/share/url?';
            url += 'url='      + encodeURIComponent(purl);
            url += '&text='    + encodeURIComponent(ptitle);

            Share.popup(url);
        },
        popup: function(url) {
            window.open(url,'','toolbar=0,status=0,width=626,height=436');
        }
    };

    var func = Share[social_type];
    if (func) {
        func(purl, title, img, text);
    }

}