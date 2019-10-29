(function(){

	var dannys = {
		init: function(){
			this.CacheDom();
			this.BindEvents();
			this.enablePageLoader();
			this.enableShopMainSlider();
			this.enableShopMainSliderNav();
			this.enableTestimonialSlider();
			this.enableParallax();
			this.enableRelatedBlog();
			this.enableShopRelatedItems();
			this.enableStickyHeader();
			this.enableIsotope();
			this.enableMainMenu();
			this.enableMobileNav();
			this.enableReservationForm();
			this.enableRevolutionSlider();
			this.enableMailchimp();
			this.initContactForm();

			//Object Fit Cover
			objectFitImages();

		},
		CacheDom: function(){
			this._body = $('body'),
			this._window = $(window),
			this._shopMainSlider = $('.single-shop-item'),
			this._shopMainSliderNav = $('.single-shop-item-nav'),
			this._testimonialSlider = $('.testimonial-slider'),
			this._parallax = $('.parallax-window'),
			this._relatedBlog = $('.related-blog'),
			this._shopRelatedSlider = $('.single-shop-carousel'),
			this._header = $(".header .header-home"),
			this._isotopeContainer = $('.grid'),
			this._menuNavList = $('.navigation-list'),
			this._mainNav = $('.mainNav'),
			this._mailchimpForm = $('.mail-box');
		},
		BindEvents: function(){
		},
		enablePageLoader: function(){
			var fw = this;
			setTimeout(function(){
				fw._body.addClass('loaded');
			}, 3000);	
		},
		enableShopMainSlider: function(){
			this._shopMainSlider.slick({
				vertical: true,
				verticalSwiping: true,
				arrows: false,
				centerMode: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				swipeToSlide: true,
				asNavFor: '.single-shop-item-nav',
				responsive: [
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerPadding: '40px',
							vertical: false,
							verticalSwiping: false
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerPadding: '40px',
							vertical: false,
							verticalSwiping: false
						}
					}
				  ]
			});
		},
		enableShopMainSliderNav: function(){
			this._shopMainSliderNav.slick({
				vertical: true,
				verticalSwiping: true,
				arrows: false,
				slidesToShow: 5,
				slidesToScroll: 1,
				swipeToSlide: true,
				asNavFor: '.single-shop-item',
				responsive: [
					{
						breakpoint:1200,
						settings: {
							arrows: false,
							centerPadding: '20px',
							slidesToShow: 3
						}
					},
					{
						breakpoint:992,
						settings: {
							arrows: false,
							centerPadding: '20px',
							slidesToShow: 3
						}
					},
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerPadding: '40px',
							slidesToShow: 3,
							vertical: false,
							verticalSwiping: false
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerPadding: '40px',
							slidesToShow:2,
							vertical: false,
							verticalSwiping: false
					  }
					}
				  ]
			});
		},
		enableTestimonialSlider: function(){
			this._testimonialSlider.slick({
				dots: false,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear'
			});
		},
		enableParallax: function(){
			this._parallax.parallax({
				speed:0.2,
			});
		},
		enableRelatedBlog: function(){
			this._relatedBlog.slick({
				dots: false,
				infinite: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 2000,
				centerPadding: '40px',
				responsive: [{
					breakpoint:992,
					settings: {
						arrows: false,
						centerPadding: '20px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerPadding: '40px',
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}]
			});
		},
		enableShopRelatedItems: function(){
			$('.single-shop-carousel').slick({
				dots: false,
				infinite: false,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 2000,
				arrows: false,
				responsive: [
				{
					breakpoint:992,
					settings: {
						arrows: false,
						centerPadding: '20px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerPadding: '40px',
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			  ]
			});
		},
		enableStickyHeader: function(){
			var fw = this;
			this._window.scroll(function() {    
				var scroll = fw._window.scrollTop();

				if (scroll >= 300) {
					fw._header.addClass("sticky-header");
				} else {
					fw._header.removeClass("sticky-header");
				}
			});
		},
		enableIsotope: function(){
			this._isotopeContainer.isotope({
				itemSelector: '.blog-select',
				layoutMode: 'packery',
			});
		},
		enableMainMenu: function(){
			this._mainNav.navAccordion({
				expandButtonText: '<i class="fa fa-plus"></i>',
				collapseButtonText: '<i class="fa fa-minus"></i>'
			}, 
			function(){
				//console.log('Callback')
			});
		},
		enableMobileNav: function(){

			var fw = this;
			this._mainNav.click(function(e){
				fw._menuNavList.addClass('active');
				fw._body.addClass('overflow');
			});

			// Enable close button for mobile navigation
			$('.close-icon', fw._menuNavList).click(function(e){
				fw._menuNavList.removeClass('active');
				fw._body.removeClass('overflow');
				e.stopImmediatePropagation();
			});
		},
		enableReservationForm: function(){
			$('.datepicker' ).pickadate({
				formatSubmit: 'yyyy/mm/dd',
				// min: [2015, 7, 14],
				// editable: true,
				closeOnSelect: false,
				closeOnClear: false,
			});
			var $input = $( '.time' ).pickatime();
			var picker = $input.pickatime('picker');

			var $messageTextarea = $(".message-add textarea");
					
			//Open Textarea 
			$("a.add-message").click(function(){
				$messageTextarea.toggle();
				event.preventDefault();
			});
		},
		enableRevolutionSlider: function(){
			var revapi1075;
			if($("#rev_slider_1075_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_1075_1");
			}else{
				revapi1075 = $("#rev_slider_1075_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"revolution/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"on",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "vertical",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:false,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"right",
								v_align:"center",
								h_offset:60,
								v_offset:10
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:10,
								v_offset:10
							}
						},
						bullets: {
							enable:true,
							hide_onmobile:false,
							style:"uranus",
							hide_onleave:false,
							direction:"vertical",
							h_align:"left",
							v_align:"center",
							h_offset:30,
							v_offset:0,
							space:5,
							tmp:'<span class="tp-bullet-line"></span>'
						}
					},
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"scroll",
						origo:"slidercenter",
						speed:400,
						levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
						type:"scroll",
					},
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: ".header",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		},
		enableMailchimp: function(){
			this._mailchimpForm.on('submit', function(event){

				// Prevent the default 
				event.preventDefault();

				var responseContainer = $(this).find('.dn__newsletter-message');

				// Clear the message container
				responseContainer.html('').removeClass('has-error is-valid');

				var data = {};
				var dataArray = $(this).serializeArray();
				$.each(dataArray, function (index, item) {
					data[item.name] = item.value;
				});

				var url = $(this).attr('action').replace('/post?', '/post-json?').concat('&c=?');

				$.ajax({
					url: url,
					data: data,
					cache       : false,
					dataType: 'jsonp',
					error: function(data){
						alert('There was an error submitting your request. Please try again in a few minutes.');
					},
					success: function(data){
						if( data.result.length ){
							if( data.result == 'error' ){
								responseContainer.html( data.msg ).addClass('has-error');
							}
							else if( data.result == 'success' ){
								responseContainer.html( data.msg ).addClass('is-valid');
							}
						}
						else{
							alert('There was an error submitting your request. Please try again in a few minutes.');
						}
					}
				});
			});
		},
		initContactForm: function() { 
			var contactForm = $('.dn__contact-form');
            if( typeof(contactForm) === 'undefined' ){
                return;
            }
            contactForm.on('submit', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var self = $(this),
                    submitButton = self.find('.js-submit-form-button');

                //#! Disable repetitive clicks on the submit button. Prevents postbacks
                self.addClass('js-disable-action');
                submitButton.addClass('js-disable-action');

                //#! Redirect to the specified url on success, ONLY if a url is present in the input value
                var redirectToInput = self.find('.ky__redirect-to'),
                    redirectTo = ( typeof(redirectToInput) !== 'undefined' ? redirectToInput.val() : '' ),
                    //#! Holds the reference to the wrapper displaying the result message
                    responseWrapper = self.find('.js-cf-message');

                //#! Clear message
                responseWrapper.empty().hide();

                //#! Execute the ajax request
                $.ajax({
                    url: self.attr('action'),
                    method: 'POST',
                    cache: false,
                    timeout: 20000,
                    async: true,
                    data: {
                        'fields' : self.serialize()
                    }
                }).done(function(response){
                    responseWrapper.removeClass('js-response-success js-response-error');
                    if(response && typeof(response.data) !== 'undefined' ) {
                        responseWrapper.empty();
                        if( ! response.success ){
                            responseWrapper.addClass('js-response-error');
                            $.each( response.data, function(i, err) {
                                responseWrapper.append('<p>'+err+'</p>');
                            });
                        }
                        else {
                            responseWrapper
                                .addClass('js-response-success')
                                .append('<p>'+response.data+'</p>');
                            //#! Clear the form
                            self.find('.ky__input').val('');
                            //#! Redirect on success (maybe to a Thank you page, whatever)
                            if( redirectTo.length > 0 ){
                                window.setTimeout(function(){
                                    window.location.href = redirectTo;
                                }, 2000);
                            }
                        }
                        responseWrapper.fadeIn();
                    }
                    else {
                        responseWrapper.removeClass('js-response-success');
                        responseWrapper.empty().addClass('js-response-error').append('<p>An error occurred. Please try again in a few seconds.</p>').fadeIn();
                    }
                }).fail(function(txt, err){
                    responseWrapper.empty().addClass('js-response-error').append('<p>An error occurred: '+txt+' Err:'+err+'. Please try again in a few seconds.</p>').fadeIn();
                }).always(function() {
                    self.removeClass('js-disable-action');
                    submitButton.removeClass('js-disable-action');
                });
            });
		}

	};

	dannys.init();

	
})( jQuery );


