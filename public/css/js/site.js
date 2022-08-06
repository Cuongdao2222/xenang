$(document).ready(function() {

	$(".product-image-col a").fancybox({
    titleShow: false
  });

	$('.topbar .searchbar a').click(function() {
		$(this).parent('li').children('.search-bar').toggleClass('showit');
		$('#txtkeyword').focus();

		return false;
	});

	$('.order-box select').change(function() {
			current_url = window.location.href;
			n_url = current_url.indexOf("?");
			if (n_url > 0) {
				wanted_url = current_url.substr(0, n_url);
			}
			else
			{
				wanted_url = current_url;
			}
			window.location.href = wanted_url + '?sort_by=' + ($('.order-box select').val());
		});

		$('.topclick a').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
		});

		$("#storeList").owlCarousel({
				loop:true,
				margin:10,
				responsiveClass:true,
				dots: false,
				responsive:{
						0:{
								items:1
						},
						600:{
								items:3
						},
						1000:{
								items:4,
								loop:true
						}
				}
    });

		var owl = $('.owl-carousel');

		$('.owl-prev').click(function() {
		    owl.trigger('next.owl.carousel');
		})
		// Go to the previous item
		$('.owl-next').click(function() {
		    owl.trigger('prev.owl.carousel');
		})

		$('#btSubscribe').click(function() {
			var email = $("#email_address").val().trim();

			if (email == '') {
				alert('Bạn chưa nhập địa chỉ email');
			} else {
				$.ajax({
					url: 'site/Subscribe',
					method: 'post',
					dataType: 'json',
					data: {
						email: email
					},
					beforeSend: function() {
						$('.email-box .input-group').append('<img id="loaderEmail" src="css/images/ajax-loader.gif" alt="Loading..." />');
						$('#btSubscribe').hide();
					},
					success: function(data) {
						//console.log(data);
						if (data.result == 'ok') {
							$('.email-box').html(data.msg);
						} else {
							alert(data.msg);
						}
					},
					complete: function() {
						$('#loaderEmail').remove();
						$('#btSubscribe').show();
					}
				});
			}

			return false;
		});

		$('#email_address').keypress(function(e) {
	    if (e.keyCode == 13) {
        $('#btSubscribe').trigger('click');
	    }
		});

		if ($('.logo-brand').length > 0 ){
			$('.logo-brand').owlCarousel({
			    loop:true,
			    margin:10,
					autoplay:true,
					autoplayTimeout: 2000,
					nav:true,
					dots:false,
					navText: [
						"<i class='fa fa-chevron-left'></i>",
						"<i class='fa fa-chevron-right'></i>"
					],
			    responsive:{
			        0:{
			            items:2
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:5
			        }
			    }
			});
		}

		if ($('.owl-productshop').length > 0 ){
			var owlproduct = $('.owl-productshop');

			$('.owl-productshop').owlCarousel({
			    loop:true,
			    margin:10,
					autoplay:true,
					autoplayTimeout: 8000,
					nav:true,
					dots:false,
          items:1,
					navText: [
						"<i class='fa fa-chevron-left'></i>",
						"<i class='fa fa-chevron-right'></i>"
					]
			});

			owlproduct.on('changed.owl.carousel', function(property) {
				var current = property.item.index;
				var src = $(property.target).find(".owl-item").eq(current).find("img").attr('src');

				$('#home-product-image').fadeOut(300, function() {
					$('#home-product-image').attr('src', src);
					$('#home-product-image').fadeIn();
				});
			});

			var src = owlproduct.find(".owl-item").find("img").attr('src');
			$('#home-product-image').attr('src', src);

			// $('#productshop .product-list a').click(function() {
			// 	var id = parseInt($(this).data('id'));
			// 	owlproduct.trigger('to.owl.carousel', [id]);
			// 	return false;
			// });
			//
			// $('#productshop .product-list a').mousemove(function() {
			// 	$(this).trigger('click');
			// })
		}


		if ($('.project-list').length > 0 ){
			$('.project-list').owlCarousel({
			    loop:true,
			    margin:20,
					autoplay:true,
					autoplayTimeout: 8000,
					nav:true,
					dots:false,
					navText: [
						"<i class='fa fa-chevron-left'></i>",
						"<i class='fa fa-chevron-right'></i>"
					],
					responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1000:{
		            items:4
		        }
			    }
			});
		}

		$('body').prepend('<div class="dimbackground"></div>');
		var $dim = $('.dimbackground');

		// $('.productmenu').hover(function(){
		//   $dim.slideDown(200);
		// }, function(){
		//   $dim.slideUp(200);
		// });

		$('.main ._box .box-title a').click(function() {
			$(this).parent().parent('._box').toggleClass('active');
			return false;
		});

		$('.cityrow form select').change(function() {
			$('.cityrow form').submit();
		});

		if ($('.order-cart .size-list').length > 0) {
			$('.order-cart .size-list select').change(function() {
				var price = $(this).find(':selected').data('price');
				$('#priceshow').text(price);
			});

			$('.order-cart .size-list select').trigger('change');
		}

		$('.order-cart form').submit(function(e) {
		  if ($('.order-cart .size-list').length > 0) {

				if ($('select[name="size"]').val() == '') {
					alert('Bạn chưa chọn kích thước của sản phẩm');
					return false;
				}

			}
		});

		$('.faq-list dl dt').click(function() {
			$(this).next('dd').slideToggle();
		});

		$('.col-office a').click(function() {
			var tag = $(this).parent().parent();
			var img = tag.find('.image');
			var title = tag.find('h3');
			console.log(img.html());
			$('#officeModal .modal-title').text(title.text());
			$('#officeModal .img-show').html(img.html());
			$('#officeModal .office-content').html(tag.html());
			$('#officeModal .office-content .image').remove();

			$('#officeModal').modal('show');

			return false;
		});

		$('.more-video a').click(function() {
			var code = $(this).data('code');

			var embed = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'+code+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';

			$('#video-frame').html(embed);

			return false;
		});

		$('a[href="#baogia"]').each(function() {
			var a = $(this);
			a.fancybox(
			{
				baseClass : 'baogiabox',

				beforeShow: function( instance, current ) {
					if ('laithu' == a.attr("class")) {
						$('#registerType').val('drive');
						$('.header_requestprice').hide();
						$('.header_requestdrive').show();
					} else {
						$('#registerType').val('price');
						$('.header_requestprice').show();
						$('.header_requestdrive').hide();
					}

					$('#baogia .success').remove();
					$("#baogia form").show();
				}
	  	});
		});


		$(document).on('submit','.baogiabox form',function(){
			var url = $(this).attr('action');

			$.ajax({
				 type: "POST",
	       url: url,
	       data: $(".baogiabox form").serialize(), // serializes the form's elements.
				 dataType: 'json',
				 beforeSend: function() {
					 $('.form-group .error').remove();
					 $('.form-submit').prepend('<img src="css/images/ajax-loader.gif" alt="Loading..." />');
					 $('.form-submit button').hide();
				 },
	       success: function(data)
	       {
					 if(data.success == '1') {
						 $('#baogia').append('<div class="success">' + data.msg + "</div>");
						 $(".baogiabox form").hide();
						 $(".baogiabox form").trigger('reset');
					 } else {
						 for(var i = 0; i < data.check.length; i++) {
							 var tag = $('.form-group [name="' + data.check[i] + '"]');

							 if(data.check[i] == 'car')
							 	tag = $('.car_choose');

							 tag.parent('div').append('<div class="error">' + data.checkmsg[i] + '</div>');
						 }
					 }
	       },
				 complete: function() {
					 $('.form-submit img').remove();
					 $('.form-submit button').show();
				 }
			});
			return false;
		});

		//Fixed navbar to top when scroll
		var menu = $('.navbar');
		var origOffsetY = menu.offset().top;
		var menubar = $('.menubar');
		var menubarOffsetY = menubar.offset().top;

		function scroll() {
				if ($(window).width() > 991) {
					if ($('.navbar').hasClass('navbar-fixed-top'))
						$('.navbar').removeClass('navbar-fixed-top');

					// if ($(window).scrollTop() >= menubarOffsetY) {
		      //   menubar.addClass('fixedtop');
			    // } else {
		      //   menubar.removeClass('fixedtop');
			    // }

					return;
				}

				if (menubar.hasClass('fixedtop'))
					menubar.removeClass('fixedtop');

		    if ($(window).scrollTop() >= origOffsetY) {
		        $('.navbar').addClass('navbar-fixed-top');
		    } else {
		        $('.navbar').removeClass('navbar-fixed-top');
		    }
	   }

	   document.onscroll = scroll;

		 /* Navbar: slide from left */
		 var sideslider = $('[data-toggle=collapse-side]');
       var sel = sideslider.attr('data-target');
       var sel2 = sideslider.attr('data-target-2');
       sideslider.click(function(event){
           $(sel).toggleClass('in');
           $(sel2).toggleClass('out');

					 sideslider.toggleClass('show');

					 if ($(sel).hasClass('in'))
					   	$('.dimbackground').fadeOut();
					 else
					    $('.dimbackground').fadeIn();
       });

			 $('.dimbackground').click(function() {
				 sideslider.trigger('click');
			 });
			/* END Navbar: slide from left */


		 //Enable parent menu clickable
		 $( window ).resize(function() {
  	 	if ($( window ).width() > 992) {
				$('.dropdown-toggle').addClass('disabled');
			} else {
				$('.dropdown-toggle').removeClass('disabled');
			}
		});

		$( window ).trigger( "resize" );


		new WOW({
			offset:       10,
			mobile:       false
		}).init();

		// window.addEventListener('scroll', function(e) {
    //   if( $(window).scrollTop() <= 0) {
    //     $('.wow').removeClass('animated');
    //     $('.wow').removeAttr('style');
    //     new WOW().init();
    //   }
		// });

		$('#customer-carousel').marquee({
		    //speed in milliseconds of the marquee
		    duration: 20000,
		    //gap in pixels between the tickers
		    gap: 50,
		    //time in milliseconds before the marquee will start animating
		    delayBeforeStart: 0,
		    //'left' or 'right'
		    direction: 'left',
		    //true or false - should the marquee be duplicated to show an effect of continues flow
		    duplicated: true
		});

		window.addEventListener('scroll', function(e) {
			 if( $(window).scrollTop() <= 0) {
				 $('.backtotop').fadeOut();
			 } else {
				 $('.backtotop').fadeIn();
			 }
		});

		$('.backtotop').fadeOut();

		$('.backtotop').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});

		if($('.col-right').height() > 400) {
			$('.agent_box').affix({
			  offset: {
			    top: $('.agent_box').offset().top,
			    bottom: $('#introshop').innerHeight() + $('#customer').innerHeight() + $('#contactshop').innerHeight() + $('footer').innerHeight()
			  }
			});
		}


});
