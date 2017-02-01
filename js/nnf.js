var Map = function (options) {

	this.data = [];
	this.$rootContainer = options.$rootContainer;
	this.svgUrl = options.svgUrl;
	this.dataUrl = options.dataUrl;
	this.$list = options.$list;

	this.modalClose = this.modalClose.bind(this);
	this.onClick = this.onClick.bind(this);
	this.onSvgLoaded = this.onSvgLoaded.bind(this);
	this.onDataLoaded = this.onDataLoaded.bind(this);

	this.loadSvg();
	this.loadData();

};

Map.prototype.getDataById = function (id) {
	return this.data.find(function (item) {
		return item.id === id;
	})
};

Map.prototype.loadSvg = function loadSvg() {
	jQuery.get(this.svgUrl, this.onSvgLoaded)
};

Map.prototype.loadData = function () {
	jQuery.getJSON(this.dataUrl, this.onDataLoaded)
};

Map.prototype.onSvgLoaded = function (data) {
	var svg = jQuery(data).find('svg');
    this.$rootContainer.children().remove();
	this.$rootContainer.append(svg);
	jQuery('.area')
		.css({cursor: 'pointer', fill:'#FFFBE4'})
		.on('click', this.onClick)
};

Map.prototype.onDataLoaded = function (data) {
	for (var field in data) {
		this.data.push({id: data[field], info: field})
	}

	this.dataByName = [].concat(this.data).sort(function (a, b) {
		var nameA = a.info.toUpperCase();
		var nameB = b.info.toUpperCase();
		if (nameA < nameB) {
			return -1;
		}
		if (nameA > nameB) {
			return 1;
		}

		// names must be equal
		return 0;
	});
	this.drawList()
};

Map.prototype.drawList = function () {
	var quater = this.dataByName.length / 4 ^ 0;
	var firstQuater = this.dataByName.slice(0, quater);
	var secondQuater = this.dataByName.slice(quater, quater * 2);
	var thridQuater = this.dataByName.slice(quater * 2, quater * 3);
	var fourthQuater = this.dataByName.slice(quater * 3);

	var $selector = this.$list.find('.row div');

	firstQuater.forEach(function (data) {
		$selector[0].innerHTML += '<a href="#" data-stand-number="'+data.id+'" class="nf-list-stand">'+data.info+'</a>\n';
	}.bind(this));

	secondQuater.forEach(function (data) {
		$selector[1].innerHTML += '<a href="#" data-stand-number="'+data.id+'" class="nf-list-stand">'+data.info+'</a>\n'
	}.bind(this));

	thridQuater.forEach(function (data) {
		$selector[2].innerHTML += '<a href="#" data-stand-number="'+data.id+'" class="nf-list-stand">'+data.info+'</a>\n'
	}.bind(this));

	fourthQuater.forEach(function (data) {
		$selector[3].innerHTML += '<a href="#" data-stand-number="'+data.id+'" class="nf-list-stand">'+data.info+'</a>\n'
	}.bind(this));

	jQuery('[data-stand-number]').on('click', function (event) {
		var id = event.target.getAttribute('data-stand-number');
		event.preventDefault();
		jQuery('.nf-nav-for-map').show();
		jQuery('.nf-nav-for-books').hide();
		jQuery('.nf-books').hide();
		jQuery('#nf-section-map').show();
		this.highlight(id);
	}.bind(this))
	//
	// jQuery('.show-map-js').on('click', function (event) {
	// 	var id = event.target.getAttribute('data-stand-number');
	// 	console.log('dfsdf')
	// }.bind(this))
};

Map.prototype.highlight = function (id) {
	jQuery('.area').css({fill:'#FFFBE4'});
	var $element = jQuery('#'+id);
	var rect = $element.offset();
    jQuery('body').removeClass('nf-hidden');
    jQuery('.nf-books .nf-section .row').data('moveTo', 'right').css('transform', 'rotate(0)');
	if(rect){
		window.scrollTo(0,rect.top-200);
		$element.css({fill:'#8bc34a'})
	}
};

Map.prototype.onClick = function (event) {
	var id = event.target.getAttribute('id');
	var data = this.getDataById(id);

	if (data) {
		this.modalOpen(data)
		this.highlight(id);        
	}

};

Map.prototype.modalOpen = function (data) {
	document.body.addEventListener('click', this.modalClose, true);

	var block = jQuery('#' + data.id)[0];
	var modal = jQuery('.nf-toggle');

	setTimeout(function () {
		jQuery(window).on('scroll',this.modalClose);

		var rect = block.getBoundingClientRect();
		var x = rect.left;
		var y = rect.top + rect.height + 10;

		modal.removeClass('hide');
		modal.find('.nf-toggle-number').html(data.id);
		modal.find('.nf-toggle-stand').html(data.info);
		modal.css({
			transform: 'translate(' + x + 'px, ' + y + 'px)',
		})
	}.bind(this), 300);

};

Map.prototype.modalClose = function () {
	document.body.removeEventListener('click', this.modalClose);
	jQuery(window).off('scroll',this.modalClose);

	jQuery('.nf-toggle').addClass('hide');
	//.css({
	//	display: 'none',
	//})
};

jQuery(document).ready(function () {

	new Map({
		$rootContainer: jQuery('#nf-floor_2'),
		svgUrl: '/wp-content/themes/gorky/js/floor_2.svg',
		dataUrl: '/wp-content/themes/gorky/js/floor_2.json',
		$list: jQuery('.nf-stand-list [data-floor="nf-floor_2"]')
	});

	new Map({
		$rootContainer: jQuery('#nf-floor_3'),
		svgUrl: '/wp-content/themes/gorky/js/floor_3.svg',
		dataUrl: '/wp-content/themes/gorky/js/floor_3.json',
		$list: jQuery('.nf-stand-list [data-floor="nf-floor_3"]')
	});

// nf
	var link = window.location.href;
	var linkId = window.location.hash.replace("#", "");
	if ((link.indexOf('nonfiction') + 1) && linkId) {
		linkId = jQuery('#' + linkId);
		$('.nf-books').hide();
		linkId.closest('.nf-books').show();
		var catCur = '#' + linkId.closest('.nf-books').attr('id');
		jQuery('.nf-nav-list-js .nf-nav-item').removeClass('-active');
		jQuery('.nf-nav-list-js .nf-nav-item').each(function () {
			if (jQuery(this).data('nf-block') == catCur) {
				jQuery(this).addClass('-active');
			}
		});
		jQuery('html,body').animate({
			scrollTop: linkId.offset().top
		}, 0);
	}

//    jQuery('.nf-carousel').slick({
//            dots: true
//        });
//
	jQuery('.share-nf-book-js').click(function (event) {
		event.preventDefault();
		var book = jQuery(this).closest('section');
		var social_type = jQuery(this).attr('data-type');
		var s_title = book.find('.nf-book-author').text() + ', ' + book.find('.nf-book-name').text() || '';
		var s_text = book.find('.nf-book-des').text() || '';
		var s_img = book.find('img').first().attr('src') || '';
		var link = window.location.origin + window.location.pathname;
		var url = link.slice(0, -1) + '#' + book.attr('id');
		if (social_type) {
			shareButtons(social_type, url, s_title, s_text, s_img);
		}
	});

	jQuery('.nf-section .scroll-bottom-js').on('click', function () {
		var self = jQuery(this).closest('.nf-section');
		var next = self.next('.nf-section');
		var top;
		if (self.hasClass('nf-header')) {
			top = jQuery(window).height();
		} else {
			top = next.offset().top;
		}
		jQuery('html,body').animate({
			scrollTop: top
		}, 1000);
	});

	jQuery('.nf-nav-list-js .nf-nav-item').on('click', function () {
		jQuery('.nf-nav-list-js .nf-nav-item').removeClass('-active');
		jQuery(this).addClass('-active');
		jQuery('.nf-books').hide();
		var current = jQuery(this).data('nf-block');
		jQuery(current).show();
		jQuery('html,body').animate({
			scrollTop: jQuery(window).height()
		}, 0);
		jQuery('.carousel').carousel({
			wrap: false,
			interval: false
		});
	});
	jQuery('.nf-nav-map .nf-nav-item').on('click', function () {
		jQuery('.nf-nav-map .nf-nav-item').removeClass('-active');
		jQuery(this).addClass('-active');
		jQuery('.nf-floor').hide();
		jQuery('[data-floor]').hide();
		var current = jQuery(this).data('nf-block');
		jQuery('[data-floor="'+current+'"]').show();
		jQuery('html,body').animate({
			scrollTop: jQuery(window).height()
		}, 0);
	});

	jQuery('.scroll-right-js').on('click', function () {
		var $parent = jQuery(this).closest('.row');
		var moveTo = jQuery(this).data('moveTo');
		if (moveTo == 'left') {
            jQuery('body').removeClass('nf-hidden');
			$parent.css('transform', 'translateX(0)');
			jQuery(this).data('moveTo', 'right').css('transform', 'rotate(0)');
		} else {
            jQuery('body').addClass('nf-hidden');
			$parent.css('transform', 'translateX(-85vw)');
			jQuery(this).data('moveTo', 'left').css('transform', 'rotate(180deg)');
		}
		jQuery('html,body').animate({
			scrollTop: jQuery(this).closest('section').offset().top
		}, 0);
	});

	jQuery('.to-section-map-js').on('click', function () {
		jQuery('.nf-nav-for-map').show();
		jQuery('.nf-nav-for-books').hide();
		jQuery('.nf-books').hide();
		jQuery('#nf-section-map').show();
        setTimeout(function() {
            var scroll = jQuery('#nf-section-map').offset().top;
            window.scrollTo(0,scroll);
        }, 200)
	});
	jQuery('.to-section-book-js').on('click', function () {
		jQuery('.nf-nav-for-books').show();
		jQuery('.nf-nav-for-map').hide();
		jQuery('#nf-section-map').hide();
		var $current;
		jQuery('.nf-nav-list-js .nf-nav-item').each(function () {
			if (jQuery(this).hasClass('-active')) {
				$current = jQuery(this).data('nf-block');
			}
		});
		jQuery($current).show();
		jQuery('html,body').animate({
			scrollTop: jQuery(window).height()
		}, 100);
	});

	jQuery('.to-section-list-js').on('click', function () {
		jQuery("html, body").stop().animate({
			scrollTop: (jQuery('.nf-stand-list').offset().top - 100)
		}, 300);
	});

	/* конфигурация */
	var $carousel = jQuery('.nf-nav-scroll-wrapper');
	var $navList = jQuery('.nf-nav-list-js');
	var $listElems = $navList.find('li');

	var position = 0; // текущий сдвиг влево

	jQuery('.btn-scroll-right').on('click', function () {
		var maxPosition = ($navList.width() - $carousel.width()) * (-1);
		position = Math.max(position - ($carousel.width() * 0.8), maxPosition);
		if (position < 0) {
			jQuery('.btn-scroll-left').removeClass('hide');
		}
		if (position == maxPosition) {
			jQuery('.btn-scroll-right').addClass('hide');
		}
		$navList.css('transform', 'translateX(' + position + 'px)');
	});
	jQuery('.btn-scroll-left').on('click', function () {
		var maxPosition = ($navList.width() - $carousel.width()) * (-1);
		position = Math.min(position + ($carousel.width() * 0.8), 0);
		if (position == 0) {
			jQuery('.btn-scroll-left').addClass('hide');
		}
		if (position > maxPosition) {
			jQuery('.btn-scroll-right').removeClass('hide');
		}
		$navList.css('transform', 'translateX(' + position + 'px)');
	});

	jQuery('a.contents').colorbox({
		maxHeight: '95%',
		maxWidth: '95%',
		onOpen: function () {
			jQuery('body').addClass('nf-hidden');
		},
		onClosed: function () {
			jQuery('body').removeClass('nf-hidden');
		},
	});

});


