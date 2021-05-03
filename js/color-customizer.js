/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Themes Awesome 2017 - http://www.themesawesome.com
*
*/
( function( $ ){



	/* ======================== HEADER SECTION ======================== */
			
	// HEADER DEFAULT STYLING

	wp.customize('menu_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:active, .header-style-1-wrap .search-wrap #btn-search i, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_header',function( value ) {
		value.bind(function(to) {
			$('.sm-clean a span.sub-arrow').css('border-top-color', to ? to : '' );
		});
	});

	wp.customize('menu_hover_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_border',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a::before, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sub_bg',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap ul.sm-clean ul').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sub_menu',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap ul.sm-clean ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('search_close',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .btn--search-close').css('color', to ? to : '' );
		});
	});

	wp.customize('search_bar_title',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__info').css('color', to ? to : '' );
		});
	});

	wp.customize('search_sugges',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__suggestion h4').css('color', to ? to : '' );
			$('.header-style-1 .search__suggestion h4::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('search_desc_sugges',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__suggestion p').css('color', to ? to : '' );
		});
	});

	wp.customize('search_bord',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__input').css('color', to ? to : '' );
		});
	});


	// HEADER ALTERNATIVE STYLING

	wp.customize('alt_menu_hover',function( value ) {
		value.bind(function(to) {
			$('body .alt-head .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('alt_menu_border',function( value ) {
		value.bind(function(to) {
			$('body .alt-head .main-menu ul.sm-clean>li>a::before, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a::before').css('background-color', to ? to : '' );
		});
	});


	// HEADER STYLE 2 & 3

	wp.customize('icon_burger',function( value ) {
		value.bind(function(to) {
			$('.header-style-5 #showMenu span, .header-style-4 #showMenu span, .header-style-6 #showMenu span').css('background-color', to ? to : '' );
		});
	});

	wp.customize('menu_style45',function( value ) {
		value.bind(function(to) {
			$('.effect-moveleft .outer-nav a, .effect-airbnb .outer-nav a, .effect-movedown.animate .outer-nav a').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_hov_style45',function( value ) {
		value.bind(function(to) {
			$('.effect-moveleft .outer-nav a:hover, .effect-airbnb .outer-nav a:hover, .effect-movedown.animate .outer-nav a:hover').css('color', to ? to : '' );
		});
	});


	// HEADER TOP

	wp.customize('bg_top',function( value ) {
		value.bind(function(to) {
			$('.top-bar').css('background-color', to ? to : '' );
		});
	});

	wp.customize('top_menu',function( value ) {
		value.bind(function(to) {
			$('.top-bar a, .top-bar ul.sm-clean li a').css('color', to ? to : '' );
		});
	});

	wp.customize('top_menu_hover',function( value ) {
		value.bind(function(to) {
			$('.top-bar a:hover, .top-bar ul.sm-clean li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('top_search_bg',function( value ) {
		value.bind(function(to) {
			$('.top-bar .search-form.default-search .searchform input.field').css('background-color', to ? to : '' );
		});
	});

	wp.customize('top_search_bord',function( value ) {
		value.bind(function(to) {
			$('.top-bar .search-form.default-search .searchform input.field').css('border-color', to ? to : '' );
		});
	});

	wp.customize('top_search_icon',function( value ) {
		value.bind(function(to) {
			$('.top-bar .default-search .search-button').css('color', to ? to : '' );
		});
	});

	wp.customize('top_search_input',function( value ) {
		value.bind(function(to) {
			$('.top-bar .search-form.default-search .searchform input.field').css('color', to ? to : '' );
		});
	});




	/* ======================== CONTENT SECTION ======================== */

	// BLOG

	wp.customize('post_format_bg',function( value ) {
		value.bind(function(to) {
			$('.category-icon .category-icon-gallery i, .category-icon .category-icon-video i').css('background-color', to ? to : '' );
		});
	});

	wp.customize('post_format_border',function( value ) {
		value.bind(function(to) {
			$('.category-icon .category-icon-gallery i, .category-icon .category-icon-video i').css('border-color', to ? to : '' );
		});
	});

	wp.customize('post_format_icon',function( value ) {
		value.bind(function(to) {
			$('.category-icon .category-icon-gallery i, .category-icon .category-icon-video i').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta_hover',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta_border',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after').css('color', to ? to : '' );
		});
	});

	wp.customize('post_title',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a, .post-content h1.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('post_hover_title',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a:hover, .post-content h1.post-title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('post_desc',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-text p, .comment-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('read_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more').css('color', to ? to : '' );
		});
	});

	wp.customize('read_more_border',function( value ) {
		value.bind(function(to) {
			$('.blog-item .read-more').css('border-color', to ? to : '' );
		});
	});

	wp.customize('read_hover_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('read_hover_bg',function( value ) {
		value.bind(function(to) {
			$('.blog-item .read-more:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('read_hover_border',function( value ) {
		value.bind(function(to) {
			$('.blog-item .read-more:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('social_post',function( value ) {
		value.bind(function(to) {
			$('.share-section .social-share-wrapper .share-item a').css('color', to ? to : '' );
		});
	});

	wp.customize('social_hover_post',function( value ) {
		value.bind(function(to) {
			$('.share-section .social-share-wrapper .share-item a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('quote_border',function( value ) {
		value.bind(function(to) {
			$('blockquote').css('border-left-color', to ? to : '' );
		});
	});

	wp.customize('tag_icon',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_text',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_hover',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_bord',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post').css('border-top-color', to ? to : '' );
			$('.blog-single .next-prev-post, .comment-list, .magazine-1-post-style .post-content').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('prev_text',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post .prev-post p, .next-prev-post .next-post p, .post-navigation .btn').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_link',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post h4.title a, .comments-title .leave-reply-link a').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_hover_link',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post h4.title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_title',function( value ) {
		value.bind(function(to) {
			$('.comment-respond h3.comment-reply-title, .comments-title h3').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_hover_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a:hover, .comment-action a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_bg',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_text',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('color', to ? to : '' );
		});
	});

	wp.customize('next_archive',function( value ) {
		value.bind(function(to) {
			$('.archive .post-navigation .btn, .search-page .post-navigation .btn').css('color', to ? to : '' );
		});
	});


	// BLOG STYLE 2

	wp.customize('title_black',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('blog_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('border_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after').css('color', to ? to : '' );
		});
	});

	wp.customize('hover_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('hover_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover span, .blog-style-2 article.blog-item:hover .meta-wrapper span.author a, .blog-style-2 article.blog-item:hover .meta-wrapper span.date a, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories a').css('color', to ? to : '' );
			$('.blog-style-2 article.blog-item:hover .meta-wrapper span.date::before, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories::before').css('background-color', to ? to : '' );
		});
	});


	// SINGLE POST STYLE 2&3

	wp.customize('title_post',function( value ) {
		value.bind(function(to) {
			$('.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_post_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('category_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('color', to ? to : '' );
		});
	});

	wp.customize('category_text_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('category_bg',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('meta_post',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.author-separator, .blog-single .magazine-post-style p.date, .blog-single .magazine-post-style span.eta:before, .comment-author time').css('color', to ? to : '' );
		});
	});

	wp.customize('meta_post_style3',function( value ) {
		value.bind(function(to) {
			$('.single-post-style-3-inner-content .post-meta span.author-separator, .single-post-style-3-inner-content .post-meta a span.vcard, .blog-single .single-post-style-3-inner-content p.date, .blog-single .single-post-style-3-inner-content .post-meta i:before, .single-post-style-3-inner-content .love-it-wrapper a:before, .blog-single .single-post-style-3-inner-content .post-meta span.right-section span, .single-post-style-3-inner-content .post-meta span.eta:before').css('color', to ? to : '' );
		});
	});

	wp.customize('author_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.vcard, .comment-author cite, .magazine-post-style .author-desc a').css('color', to ? to : '' );
		});
	});

	wp.customize('author_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.vcard:hover, .magazine-post-style .post-meta a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_comment',function( value ) {
		value.bind(function(to) {
			$('.blog-single .magazine-post-style .post-meta i').css('color', to ? to : '' );
		});
	});

	wp.customize('span_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta a, .love-count').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_love',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .has-been-loved:before, .magazine-post-style .love-it-wrapper a:before').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_arrow',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .next-prev-post .column p i').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .share-section .social-share-wrapper .share-item a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .share-section .social-share-wrapper .share-item a:hover').css('color', to ? to : '' );
		});
	});


	// SIDEBAR & WIDGET

	wp.customize('sidebar_search_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_btn',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_icon',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button i').css('color', to ? to : '' );
		});
	});

	wp.customize('sidebar_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget').css('background-color', to ? to : '' );
		});
	});

	wp.customize('seniman_widget_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('border_widget_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('link_text_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget .widget_recent_entries ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar .widget .widget_recent_comments ul li a:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs li.active, .widget.widget_seniman_news .post-item:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs li.active a, .widget.widget_seniman_news .post-item:before').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs li').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs li a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2_hover',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('border_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_seniman_news .nav-tabs').css('border-bottom-color', to ? to : '' );
		});
	});


	// CONTACT

	wp.customize('form_bord',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef').css('background-color', to ? to : '' );
		});
	});

	wp.customize('form_bord_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_input',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send_border',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_bord_hov',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_bg',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_bg_hov',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('send_text',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit').css('color', to ? to : '' );
		});
	});

	wp.customize('send_text_hov',function( value ) {
		value.bind(function(to) {
			$('.custom-form .bordered-button input.wpcf7-submit:hover').css('color', to ? to : '' );
		});
	});


	/* ======================== PORTFOLIO SECTION ======================== */


	// PORTFOLIO TEMPLATE

	wp.customize('page_title',function( value ) {
		value.bind(function(to) {
			$('.page-title h2').css('color', to ? to : '' );
		});
	});

	wp.customize('page_subtitle',function( value ) {
		value.bind(function(to) {
			$('p.subtitle').css('color', to ? to : '' );
		});
	});

	wp.customize('caption_portfolio',function( value ) {
		value.bind(function(to) {
			$('figcaption .caption-inside h3.portfolio-loop-title').css('color', to ? to : '' );
		});
	});

	wp.customize('category_portfolio',function( value ) {
		value.bind(function(to) {
			$('.grid-item .portfolio-category, .masonry-item .portfolio-category').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style1',function( value ) {
		value.bind(function(to) {
			$('.filters.style-1 .filter-btn').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style1_hover',function( value ) {
		value.bind(function(to) {
			$('.filters.style-1 .filter-btn:hover').css('color', to ? to : '' );
			$('.filters.style-1 .filter-btn:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('filter_style2',function( value ) {
		value.bind(function(to) {
			$('.filters.style-2 .filter-btn').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style2_border',function( value ) {
		value.bind(function(to) {
			$('.filters.style-2 .filter-btn::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('filter_style3',function( value ) {
		value.bind(function(to) {
			$('.filters.style-3 .filter-btn').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style3_hover',function( value ) {
		value.bind(function(to) {
			$('.filters.style-3 .filter-btn:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style3_border',function( value ) {
		value.bind(function(to) {
			$('.filters.style-3 .filter-btn').css('color', to ? to : '' );
		});
	});

	wp.customize('filter_style3_bordhov',function( value ) {
		value.bind(function(to) {
			$('.filters.style-3 .filter-btn:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('filter_style3_bg',function( value ) {
		value.bind(function(to) {
			$('.filters.style-3 .filter-btn:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('load_bord1',function( value ) {
		value.bind(function(to) {
			$('.navigation-paging').css('border-top-color', to ? to : '' );
			$('.navigation-paging').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('load_bg1',function( value ) {
		value.bind(function(to) {
			$('.btn').css('background-color', to ? to : '' );
		});
	});

	wp.customize('load_text1',function( value ) {
		value.bind(function(to) {
			$('.btn').css('color', to ? to : '' );
		});
	});

	wp.customize('load_bord2',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-2 .btn').css('border-color', to ? to : '' );
		});
	});

	wp.customize('load_text2',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-2 .btn').css('color', to ? to : '' );
		});
	});

	wp.customize('load_text2_hover',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-2 .btn:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('load_bg2_hover',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-2 .btn:hover').css('background-color', to ? to : '' );
			$('.infinite-wrap.style-2 .btn:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('load_text3',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-3 .btn').css('color', to ? to : '' );
		});
	});

	wp.customize('load_bord3',function( value ) {
		value.bind(function(to) {
			$('.infinite-wrap.style-3 .btn:before').css('background-color', to ? to : '' );
		});
	});


	// PORTFOLIO SINGLE

	wp.customize('detail1_title',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .project-details ul li span').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_p',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .project-details ul li p, .portfolio-style1 .project-details ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_desc',function( value ) {
		value.bind(function(to) {
			$('.portfolio-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_pagination',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .portfolio-pagination .prev-portfolio a, .portfolio-style1 .portfolio-pagination .all-portfolio a, .portfolio-style1 .portfolio-pagination .next-portfolio a').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_hov_pagination',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .portfolio-pagination a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('single_title',function( value ) {
		value.bind(function(to) {
			$('.post-title-porto-2 span').css('color', to ? to : '' );
		});
	});

	wp.customize('single_border',function( value ) {
		value.bind(function(to) {
			$('.back-portfo2:after, .portfolio-style1 .page-title h2:after, .post-title-porto-2 span:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('detail2_title',function( value ) {
		value.bind(function(to) {
			$('.porto2-detail-wrap .portfolio-details span.detail-title, .share-portfolio .social-share-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('detail2_p',function( value ) {
		value.bind(function(to) {
			$('.portfolio-content .portfolio-details .detail-info, .portfolio-content .portfolio-details .detail-info a').css('color', to ? to : '' );
		});
	});




	/* ======================== FOOTER SECTION ======================== */

	// FOOTER

	wp.customize('footer_text',function( value ) {
		value.bind(function(to) {
			$('.copyright-text, .footer-text-area').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a, .footer-menu li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a:hover, .footer-menu li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_bg',function( value ) {
		value.bind(function(to) {
			$('.footer-widget-wrapper').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_title',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('link_text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a, .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .textwidget').css('color', to ? to : '' );
		});
	});

	wp.customize('border_widget',function( value ) {
		value.bind(function(to) {
			$('.latest-post-wrap h5').css('border-bottom-color', to ? to : '' );
		});
	});




} )( jQuery );