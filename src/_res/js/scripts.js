var Portfolio = Portfolio || {};

Portfolio = {
	init: function() {
		// not sure I still need this or if Google even supports it anymore
		// invoke Googles webfont lib to deal with FOUT
		WebFont.load({
			custom: {
				families: ['MuseoSans500']
			}
		});

		if (!this.$_window) {
			this.setSelectors();
		}

		// handle 'touch/no-touch' on Windows phones
		var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
		if (supportsTouch) {
			this.$_html.removeClass('no-touch');
			this.$_html.addClass('touch');
		}

		this.setProperties();
		this.bindEvents();
	},

	setSelectors: function() {
		this.$_window = $(window);
		this.$_html = $('html');
		this.$_body = $('body');
		this.$_htmlBody = $('html, body');
		this.$_galleries = $('.gallery');
		this.$_thumbnailLinks = $('.gallery li a');
		this.$_modal = $('#modal');
		this.$_modalContent = $('.modal-content');
		this.$_modalInfo = this.$_modalContent.find('.info');
		this.$_modalTitle = this.$_modalContent.find('h2');
		this.$_modalImg = this.$_modalContent.find('img');
		this.$_modalMaterials = this.$_modalContent.find('.materials');
		this.$_modalDimensions = this.$_modalContent.find('.dimensions');
		this.$_modalYear = this.$_modalContent.find('.year');
		this.$_modalPrevious = this.$_modal.find('.previous');
		this.$_modalNext = this.$_modal.find('.next');
		this.$_modalCount = this.$_modal.find('.count');
	},

	setProperties: function() {
		this.properties = {
			windowHeight : this.$_window.height(),
			windowWidth : this.$_window.width(),
			modal : {
				title : null,
				imgSrc : null,
				materials : null,
				dimensions : null
			}
		};
	},

	populateModal: function(galleryItem) {
		var self, $currentGallery, galleryLength, galleryIndex;
		self = this.properties.modal;
		$currentGallery = $(galleryItem).parents('.gallery');
		galleryLength = $currentGallery.children('li').length;
		galleryIndex = $('.current').index() + 1;
		data = galleryItem.dataset;

		if (galleryIndex == 1) {
			this.$_modalPrevious.hide();
		} else {
			this.$_modalPrevious.show();
		}

		if (galleryIndex == galleryLength) {
			this.$_modalNext.hide();
		} else {
			this.$_modalNext.show();
		}

		this.$_modalTitle.text(data.title);
		this.$_modalImg.attr('src', data.imgfull);
		this.$_modalMaterials.text(data.materials);
		this.$_modalDimensions.text(data.dimensions);
		this.$_modalYear.text(data.year);
		this.$_modalInfo.width(this.$_modalImg.width());

		this.$_modalCount.text(galleryIndex + ' of ' + galleryLength);
	},

	openModal: function(e, clickedEl) {
		var self = this;
		$(clickedEl).parent().addClass('current');
		self.populateModal(clickedEl);
		self.$_body.addClass('blur');
		self.$_modal.addClass('display');
	},

	closeModal: function(e, clickedEl) {
		$('.current').removeClass('current');
		this.$_body.removeClass('blur');
		this.$_modal.removeClass('display');
		this.$_modalInfo.width('auto');
	},

	// if browser width <= 540 show info instead of modal
	showInfo: function(e, clickedEl) {
		if ($(clickedEl).children('.info').length == 0) {
			data = clickedEl.dataset;
			var infoEl = '<div class="info"><h2>' + data.title + '</h2>' +
					'<ul>' +
						'<li>' + data.materials + '</li>' +
						'<li>' + data.dimensions + '</li>' +
						'<li>' + data.year + '</li>' +
					'</ul>'
				'</div>';
			$(clickedEl).append(infoEl);
			var infoWidth = $(clickedEl).find('img').width() - 24;
			$(clickedEl).find('.info').css('width', infoWidth);
		}

		$(clickedEl).toggleClass('active');
	},

	bindEvents: function() {
		var self = this;

		self.$_thumbnailLinks.on('click tap', this, function(e) {
			e.preventDefault();
			if (self.properties.windowWidth > 540) {
				self.openModal(e, this);
			} else {
				self.showInfo(e, this);
			}
		});

		self.$_modalPrevious.on('click tap', function(e) {
			e.stopPropagation();
			e.preventDefault();
			var previousGalleryItem = $('.current').prev().find('a').get(0);
			$('.current').removeClass('current').prev().addClass('current');
			self.populateModal(previousGalleryItem);
		});

		self.$_modalNext.on('click tap', function(e) {
			e.stopPropagation();
			e.preventDefault();
			var nextGalleryItem = $('.current').next().find('a').get(0);
			$('.current').removeClass('current').next().addClass('current');
			self.populateModal(nextGalleryItem);
		});

		self.$_modal.on('click tap', this, function(e) {
			self.closeModal(e, this);
		});
	}

};


$(document).ready(function() {
	Portfolio.init();
});