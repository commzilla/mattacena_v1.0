@extends('frontend')

@section('main_frontend')


<head>

	<link rel="stylesheet" id="online-css-css"
		href="{{ asset('frontend/la_nostra_storia/order-online.css')}}" type="text/css"
		media="all">

	<link rel="stylesheet" id="nd_rst_style-css"
		href="{{ asset('frontend/la_nostra_storia/style.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="nd_options_style-css"
		href="{{ asset('frontend/la_nostra_storia/style(1).css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="nd_options_font_family_h-css"
		href="{{ asset('frontend/la_nostra_storia/css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="nd_options_font_family_p-css"
		href="{{ asset('frontend/la_nostra_storia/css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="nd_options_font_family_third-css"
		href="{{ asset('frontend/la_nostra_storia/css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="woocommerce-layout-css"
		href="{{ asset('frontend/la_nostra_storia/woocommerce-layout.css')}}"
		type="text/css" media="all">
	<link rel="stylesheet" id="woocommerce-smallscreen-css"
		href="{{ asset('frontend/la_nostra_storia/woocommerce-smallscreen.css')}}"
		type="text/css" media="only screen and (max-width: 768px)">
	<link rel="stylesheet" id="woocommerce-general-css"
		href="{{ asset('frontend/la_nostra_storia/woocommerce.css')}}" type="text/css"
		media="all">
	<style id="woocommerce-inline-inline-css" type="text/css">
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel="stylesheet" id="nicdark-style-css"
		href="{{ asset('frontend/la_nostra_storia/style(2).css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-frontend-css"
		href="{{ asset('frontend/la_nostra_storia/custom-frontend-lite.min.css')}}"
		type="text/css" media="all">
	<link rel="stylesheet" id="swiper-css"
		href="{{ asset('frontend/la_nostra_storia/swiper.min.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-post-2979-css"
		href="{{ asset('frontend/la_nostra_storia/post-2979.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-pro-css"
		href="{{ asset('frontend/la_nostra_storia/custom-pro-frontend-lite.min.css')}}"
		type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-1382-css"
		href="{{ asset('frontend/la_nostra_storia/post-1382.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-post-1579-css"
		href="{{ asset('frontend/la_nostra_storia/post-1579.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-post-475-css"
		href="{{ asset('frontend/la_nostra_storia/post-475.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="elementor-post-516-css"
		href="{{ asset('frontend/la_nostra_storia/post-516.css')}}" type="text/css"
		media="all">
	<link rel="stylesheet" id="google-fonts-1-css"
		href="{{ asset('frontend/la_nostra_storia/css(1)')}}" type="text/css" media="all">
	<link rel="stylesheet" id="restaurant_system_public_style-css"
		href="{{ asset('frontend/la_nostra_storia/public-style.css')}}" type="text/css"
		media="all">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<script>
		/* <![CDATA[ */
		var rcewpp = {
			"ajax_url": "http://mattacena.com/wp-admin/admin-ajax.php",
			"nonce": "a33f954755",
			"home_url": "http://mattacena.com/",
			"settings_icon": 'http://mattacena.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
			"settings_hover_icon": 'http://mattacena.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
		};
		/* ]]\> */
	</script>
	<script type="text/javascript" src="{{ asset('frontend/la_nostra_storia/ewm2.js')}}"
		id="jsforwp-blocks-frontend-js-js"></script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/jquery.min.js')}}"
		id="jquery-core-js"></script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/jquery-migrate.min.js')}}"
		id="jquery-migrate-js"></script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/jquery.blockUI.min.js')}}"
		id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
	<script type="text/javascript" id="wc-add-to-cart-js-extra">
		/* <![CDATA[ */
		var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "Visualizza carrello", "cart_url": "http:\/\/mattacena.com\/?page_id=729", "is_cart": "", "cart_redirect_after_add": "no" };
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/add-to-cart.min.js')}}"
		id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/js.cookie.min.js')}}" id="js-cookie-js"
		defer="defer" data-wp-strategy="defer"></script>
	<script type="text/javascript" id="woocommerce-js-extra">
		/* <![CDATA[ */
		var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
		/* ]]> */
	</script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/woocommerce.min.js')}}"
		id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
	<script type="text/javascript"
		src="{{ asset('frontend/la_nostra_storia/page-transitions.min.js')}}"
		id="page-transitions-js"></script>
	<link rel="https://api.w.org/" href="http://mattacena.com/wp-json/">
	<link rel="alternate" type="application/json" href="http://mattacena.com/wp-json/wp/v2/pages/1382">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://mattacena.com/xmlrpc.php?rsd">

	<link rel="canonical" href="http://mattacena.com/la-nostra-storia/">
	<link rel="shortlink" href="http://mattacena.com/?p=1382">
	<link rel="alternate" type="application/json+oembed"
		href="http://mattacena.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmattacena.com%2Fla-nostra-storia%2F">
	<link rel="alternate" type="text/xml+oembed"
		href="http://mattacena.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmattacena.com%2Fla-nostra-storia%2F&amp;format=xml">


	<style type="text/css">
		/*color_dark_1*/
		.nd_rst_bg_dark_1 {
			background-color: #2d2d2d;
		}

		/*color_1*/
		.nd_rst_bg_color_1 {
			background-color: #c0a58a;
		}

		/*color_2*/
		.nd_rst_bg_color_2 {
			background-color: #b66565;
		}
	</style>




	<style type="text/css">
		/*START FONTS FAMILY*/
		.nd_options_customizer_fonts .nd_options_first_font,
		.nd_options_customizer_fonts h1,
		.nd_options_customizer_fonts h2,
		.nd_options_customizer_fonts h3,
		.nd_options_customizer_fonts h4,
		.nd_options_customizer_fonts h5,
		.nd_options_customizer_fonts h6 {
			font-family: 'Montserrat', sans-serif;
		}

		.nd_options_customizer_fonts,
		.nd_options_customizer_fonts .nd_options_second_font,
		.nd_options_customizer_fonts p,
		.nd_options_customizer_fonts a,
		.nd_options_customizer_fonts select,
		.nd_options_customizer_fonts textarea,
		.nd_options_customizer_fonts label,
		.nd_options_customizer_fonts input,
		#start_nicdark_framework {
			font-family: 'Montserrat', sans-serif;
		}

		.nd_options_customizer_fonts .nd_options_second_font_important {
			font-family: 'Montserrat', sans-serif !important;
		}

		.nd_options_customizer_fonts .nd_options_third_font {
			font-family: 'Montserrat', sans-serif;
		}


		/*START FONTS COLOR*/
		.nd_options_customizer_fonts .nd_options_color_greydark,
		.nd_options_customizer_fonts h1,
		.nd_options_customizer_fonts h2,
		.nd_options_customizer_fonts h3,
		.nd_options_customizer_fonts h4,
		.nd_options_customizer_fonts h5,
		.nd_options_customizer_fonts h6 {
			color: #727475;
		}

		.nd_options_customizer_fonts .nd_options_color_greydark_important {
			color: #727475 !important;
		}

		/*PLACEHOLDER*/
		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-webkit-input-placeholder {
			color: #727475 !important;
		}

		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-moz-placeholder {
			color: #727475 !important;
		}

		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-ms-input-placeholder {
			color: #727475 !important;
		}

		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-moz-placeholder {
			color: #727475 !important;
		}

		.nd_options_customizer_fonts,
		.nd_options_customizer_fonts .nd_options_color_grey,
		.nd_options_customizer_fonts p,
		.nd_options_customizer_fonts a,
		.nd_options_customizer_fonts select,
		.nd_options_customizer_fonts textarea,
		.nd_options_customizer_fonts label,
		.nd_options_customizer_fonts input {
			color: #a3a3a3;
		}

		.nd_options_color_grey_important {
			color: #a3a3a3 !important;
		}


		/*compatibility with plugin Learning*/
		#nd_learning_calendar_single_course .ui-datepicker-title {
			font-family: 'Montserrat', sans-serif;
			color: #727475;
		}

		#nd_learning_calendar_single_course .ui-datepicker-calendar th {
			color: #727475;
		}
	</style>




	<style type="text/css">
		/*START FORMS STYLES*/
		.nd_options_customizer_forms span.wpcf7-not-valid-tip,
		.nd_options_customizer_forms .wpcf7-response-output.wpcf7-validation-errors,
		.wpcf7-response-output {
			background-color: #444;
			border-width: 0px !important;
			border-color: #fff !important;
			border-radius: 3px;
			border-style: solid;
			padding: 10px 20px !important;
			color: #ffffff;
			margin: 10px 0px 10px 0px !important;
			font-size: 13px;
			line-height: 20px;
		}

		.nd_options_customizer_forms .wpcf7-response-output.wpcf7-mail-sent-ok {
			background-color: #444;
			border-width: 0px;
			border-color: #fff;
			border-radius: 3px;
			border-style: solid;
			padding: 10px 20px;
			color: #ffffff;
			margin: 0px;
			margin-top: 10px;
			font-size: 13px;
			line-height: 20px;
		}


		/*new compatibility*/
		.nd_options_customizer_forms .wpcf7 form.sent .wpcf7-response-output {
			background-color: #444;
			border-width: 0px;
			border-color: #fff;
			border-radius: 3px;
			border-style: solid;
			padding: 10px 20px;
			color: #ffffff;
			margin: 0px;
			margin-top: 10px;
			font-size: 13px;
			line-height: 20px;
		}
	</style>




	<style type="text/css">
		/*START FORMS STYLES*/
		.nd_options_customizer_forms input[type="text"],
		.nd_options_customizer_forms input[type="email"],
		.nd_options_customizer_forms input[type="url"],
		.nd_options_customizer_forms input[type="tel"],
		.nd_options_customizer_forms input[type="number"],
		.nd_options_customizer_forms input[type="date"],
		.nd_options_customizer_forms input[type="file"],
		.nd_options_customizer_forms input[type="password"],
		.nd_options_customizer_forms select,
		.nd_options_customizer_forms textarea,
		.StripeElement {
			background-color: #fff;
			border-width: 1px;
			border-color: #fff;
			border-radius: 0px;
			border-style: solid;
			padding: 10px 20px;
			-webkit-appearance: none;
			color: #a3a3a3 !important;

		}


		.nd_options_customizer_forms input[type="text"]::-webkit-input-placeholder,
		.nd_options_customizer_forms input[type="email"]::-webkit-input-placeholder,
		.nd_options_customizer_forms input[type="url"]::-webkit-input-placeholder,
		.nd_options_customizer_forms input[type="tel"]::-webkit-input-placeholder,
		.nd_options_customizer_forms input[type="password"]::-webkit-input-placeholder,
		.nd_options_customizer_forms input[type="number"]::-webkit-input-placeholder,
		.nd_options_customizer_forms textarea::-webkit-input-placeholder {
			color: #a3a3a3 !important;
		}


		.nd_options_customizer_forms select {
			cursor: pointer;
		}

		.nd_options_customizer_forms select option {
			padding: 10px 20px;
		}
	</style>




	<style type="text/css">
		/*START FORMS STYLES*/
		.nd_options_customizer_forms input[type="submit"],
		.nd_options_customizer_forms button[type="submit"],
		.give-btn.give-btn-modal {
			background-color: #444;
			border-width: 0px;
			border-color: #fff;
			border-radius: 3px;
			border-style: solid;
			padding: 10px 20px;
			-webkit-appearance: none;
			color: #ffffff;
			cursor: pointer;
			font-family: 'Montserrat', sans-serif;

		}
	</style>



	<style type="text/css">
		.nd_options_cursor_default_a>a {
			cursor: default;
		}

		.nd_options_customizer_labels_color_new {
			background-color: #444444;
		}

		/*hot*/
		.nd_options_navigation_type .menu li.nd_options_hot_label>a:after,
		#nd_options_header_5 .menu li.nd_options_hot_label>a:after,
		#nd_options_header_6 .menu li.nd_options_hot_label>a:after {
			content: "HOT";
			float: right;
			background-color: #444444;
			border-radius: 3px;
			color: #fff;
			font-size: 10px;
			line-height: 10px;
			padding: 3px 5px;
		}

		/*best*/
		.nd_options_navigation_type .menu li.nd_options_best_label>a:after,
		#nd_options_header_5 .menu li.nd_options_best_label>a:after,
		#nd_options_header_6 .menu li.nd_options_best_label>a:after {
			content: "BEST";
			float: right;
			background-color: #444444;
			border-radius: 3px;
			color: #fff;
			font-size: 10px;
			line-height: 10px;
			padding: 3px 5px;
		}

		/*new*/
		.nd_options_navigation_type .menu li.nd_options_new_label>a:after,
		#nd_options_header_5 .menu li.nd_options_new_label>a:after,
		#nd_options_header_6 .menu li.nd_options_new_label>a:after {
			content: "NEW";
			float: right;
			background-color: #444444;
			border-radius: 3px;
			color: #fff;
			font-size: 10px;
			line-height: 10px;
			padding: 3px 5px;
		}

		/*slide*/
		.nd_options_navigation_type .menu li.nd_options_slide_label>a:after,
		#nd_options_header_5 .menu li.nd_options_slide_label>a:after,
		#nd_options_header_6 .menu li.nd_options_slide_label>a:after {
			content: "SLIDE";
			float: right;
			background-color: #444444;
			border-radius: 3px;
			color: #fff;
			font-size: 10px;
			line-height: 10px;
			padding: 3px 5px;
		}

		/*demo*/
		.nd_options_navigation_type .menu li.nd_options_demo_label>a:after,
		#nd_options_header_5 .menu li.nd_options_demo_label>a:after,
		#nd_options_header_6 .menu li.nd_options_demo_label>a:after {
			content: "DEMO";
			float: right;
			background-color: #444444;
			border-radius: 3px;
			color: #fff;
			font-size: 10px;
			line-height: 10px;
			padding: 3px 5px;
		}

		/*all*/
		#nd_options_header_6 .menu li.nd_options_hot_label>a:after,
		#nd_options_header_6 .menu li.nd_options_best_label>a:after,
		#nd_options_header_6 .menu li.nd_options_new_label>a:after,
		#nd_options_header_6 .menu li.nd_options_slide_label>a:after,
		#nd_options_header_6 .menu li.nd_options_demo_label>a:after {
			padding: 5px 5px 3px 5px;
			border-radius: 0px;
			letter-spacing: 1px;
		}

		/*all*/
		.nd_elements_navigation_sidebar_content .menu li.nd_options_new_label>a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_hot_label>a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_best_label>a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_slide_label>a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_demo_label>a:after {
			display: none;
		}
	</style>


	<!--START css-->
	<style type="text/css">
		.nd_options_navigation_search_content_form {}

		.nd_options_navigation_search_content_form input[type="search"] {
			background: none;
			border: 0px;
			border-bottom: 2px solid #fff;
			color: #fff;
			font-size: 30px;
			line-height: 30px;
		}

		.nd_options_navigation_search_content_form input[type="search"]::-webkit-input-placeholder {
			color: #fff;
		}

		.nd_options_navigation_search_content_form input[type="submit"] {
			font-size: 25px;
			line-height: 40px;
			margin-left: 20px;
		}
	</style>
	<!--END css-->

	<style type="text/css"></style>

	<style>
		.give-currency-symbol,
		.give-donation-level-btn {
			background-color: #22B6AF !important;
			color: #fff !important;
			border-color: #22B6AF !important;
		}

		.give-donation-total-label {
			background-color: #282828 !important;
			color: #fff !important;
			border-color: #282828 !important;
		}

		.give-form-wrap legend {
			color: #2d2d2d !important;
		}
	</style>




	<!--START  for post-->
	<style type="text/css">
		/*sidebar*/
		.wpb_widgetised_column .widget {
			margin-bottom: 40px;
		}

		.wpb_widgetised_column .widget img,
		.wpb_widgetised_column .widget select {
			max-width: 100%;
		}

		.wpb_widgetised_column .widget h3 {
			margin-bottom: 20px;
			font-weight: bolder;
		}

		/*search*/
		.wpb_widgetised_column .widget.widget_search input[type="text"] {
			width: 100%;
		}

		.wpb_widgetised_column .widget.widget_search input[type="submit"] {
			margin-top: 20px;
		}

		/*list*/
		.wpb_widgetised_column .widget ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}

		.wpb_widgetised_column .widget>ul>li {
			padding: 10px;
			border-bottom: 1px solid #f1f1f1;
		}

		.wpb_widgetised_column .widget>ul>li:last-child {
			padding-bottom: 0px;
			border-bottom: 0px solid #f1f1f1;
		}

		.wpb_widgetised_column .widget ul li {
			padding: 10px;
		}

		.wpb_widgetised_column .widget ul.children {
			padding: 10px;
		}

		.wpb_widgetised_column .widget ul.children:last-child {
			padding-bottom: 0px;
		}

		/*calendar*/
		.wpb_widgetised_column .widget.widget_calendar table {
			text-align: center;
			background-color: #fff;
			width: 100%;
			border: 1px solid #f1f1f1;
			line-height: 20px;
		}

		.wpb_widgetised_column .widget.widget_calendar table th {
			padding: 10px 5px;
		}

		.wpb_widgetised_column .widget.widget_calendar table td {
			padding: 10px 5px;
		}

		.wpb_widgetised_column .widget.widget_calendar table tbody td a {
			color: #fff;
			padding: 5px;
			border-radius: 3px;
		}

		.wpb_widgetised_column .widget.widget_calendar table tfoot td a {
			color: #fff;
			background-color: #444444;
			padding: 5px;
			border-radius: 3px;
			font-size: 13px;
		}

		.wpb_widgetised_column .widget.widget_calendar table tfoot td {
			padding-bottom: 20px;
		}

		.wpb_widgetised_column .widget.widget_calendar table tfoot td#prev {
			text-align: right;
		}

		.wpb_widgetised_column .widget.widget_calendar table tfoot td#next {
			text-align: left;
		}

		.wpb_widgetised_column .widget.widget_calendar table caption {
			font-size: 20px;
			font-weight: bolder;
			background-color: #f9f9f9;
			padding: 20px;
			border: 1px solid #f1f1f1;
			border-bottom: 0px;
		}

		/*color calendar*/
		.wpb_widgetised_column .widget.widget_calendar table thead {
			color: #727475;
		}

		.wpb_widgetised_column .widget.widget_calendar table tbody td a {
			background-color: #444;
		}

		.wpb_widgetised_column .widget.widget_calendar table caption {
			color: #727475;
			font-family: 'Montserrat', sans-serif;
		}

		/*menu*/
		.wpb_widgetised_column .widget div ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}

		.wpb_widgetised_column .widget div>ul>li {
			padding: 10px;
			border-bottom: 1px solid #f1f1f1;
		}

		.wpb_widgetised_column .widget div>ul>li:last-child {
			padding-bottom: 0px;
			border-bottom: 0px solid #f1f1f1;
		}

		.wpb_widgetised_column .widget div ul li {
			padding: 10px;
		}

		.wpb_widgetised_column .widget div ul.sub-menu {
			padding: 10px;
		}

		.wpb_widgetised_column .widget div ul.sub-menu:last-child {
			padding-bottom: 0px;
		}

		/*tag*/
		.wpb_widgetised_column .widget.widget_tag_cloud a {
			padding: 5px 10px;
			border: 1px solid #f1f1f1;
			border-radius: 3px;
			display: inline-block;
			margin: 5px;
			margin-left: 0px;
			font-size: 13px !important;
			line-height: 20px;
		}
	</style>
	<!--END css for post-->



	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator"
		content="Elementor 3.18.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon" href="http://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-32x32.png"
		sizes="32x32">
	<link rel="icon" href="http://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-192x192.png"
		sizes="192x192">
	<link rel="apple-touch-icon"
		href="http://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-180x180.png">
	<meta name="msapplication-TileImage"
		content="http://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-270x270.png">
	<style type="text/css" id="wp-custom-css">
		.nd_rst_section li:nth-child(9),
		.nd_rst_section li:nth-child(10),
		.nd_rst_section li:nth-child(11),
		.nd_rst_section li:nth-child(12),
		.nd_rst_section li:nth-child(13),
		.nd_rst_section li:nth-child(14) {
			display: none;
		}

		#head {
			overflow: visible;
		}

		@media screen and (max-width: 1200px) {
			.elementor-475 .elementor-element.elementor-element-88e1888 {
				display: block !important;
				margin: 0 auto !important;
			}

			.elementor-475 .elementor-element.elementor-element-88e1888 img {
				display: block !important;
				margin: 0 auto !important;
			}
		}
	</style>
	<style id="_10000.1.0.1-">
		@import url(chrome-extension://jmjbgcjbgmcfgbgikmbdioggjlhjegpp/insides/permanent/outside.css?10000.1.0.1-);
	</style>
	<link rel="prerender" href="http://mattacena.com/contact/">
	<link rel="prerender" href="http://mattacena.com/dove-siamo/">
	<link rel="stylesheet" href="{{ asset('frontend/custom.css') }}" type="text/css"
	media="all">
</head>


    <div data-elementor-type="wp-page" data-elementor-id="1382" class="elementor elementor-1382"
        data-elementor-post-type="page">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-24b4cf93 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="24b4cf93" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-52179341"
                    data-id="52179341" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6e310123 elementor-widget elementor-widget-heading"
                            data-id="6e310123" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">La nostra storia ⚜️</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6167f0a elementor-widget elementor-widget-heading"
                            data-id="6167f0a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">La storia della <b>Mattacèna</b>
                                    se la cerchi su Internet la 'un c'è: e ti si racconta noi, 'un ti preoccupa'. Tanto
                                    tempo fa, ma neanche poi troppo, quando la primavera l'era già quasi estate, in campagna
                                    s'iniziava la mietitura. Insomma, quando si miete'a l'era un lavorone, ma si sta'a tutti
                                    insieme e c'era un monte di gente, l'omini, le donne, i bambini, i vecchi, e tutti
                                    quanti si da'a una mano.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-745bca96"
                    data-id="745bca96" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1353da85 elementor-widget elementor-widget-image"
                            data-id="1353da85" data-element_type="widget"
                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:20,&quot;end&quot;:80}}}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="1024" height="576"
                                    src="{{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-1024x576.png') }}"
                                    class="attachment-large size-large wp-image-2231" alt=""
                                    srcset="{{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-1024x576.png') }} 1024w, {{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-300x169.png') }} 300w, {{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-768x432.png') }} 768w, {{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-1536x864.png') }} 1536w, {{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-2048x1152.png') }} 2048w, {{ asset('frontend/la_nostra_storia/Screenshot-2023-12-01-alle-13.20.01-600x338.png') }} 600w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5ee56a77 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="5ee56a77" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_direction&quot;:&quot;negative&quot;,&quot;motion_fx_translateX_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;motion_fx_translateX_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="1024" height="1024"
                                    src="{{ asset('frontend/la_nostra_storia/DSC2541-copia-1024x1024.jpg') }}"
                                    class="attachment-large size-large wp-image-3030" alt=""
                                    srcset="{{ asset('frontend/la_nostra_storia/DSC2541-copia-1024x1024.jpg') }} 1024w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-300x300.jpg') }} 300w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-150x150.jpg') }} 150w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-768x768.jpg') }} 768w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-1536x1536.jpg') }} 1536w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-2048x2048.jpg') }} 2048w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-600x600.jpg') }} 600w, {{ asset('frontend/la_nostra_storia/DSC2541-copia-100x100.jpg') }} 100w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-37569dcb elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="37569dcb" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="683" height="1024"
                                    src="{{ asset('frontend/la_nostra_storia/DSC2808-683x1024.jpg') }}"
                                    class="attachment-large size-large wp-image-2558" alt=""
                                    srcset="{{ asset('frontend/la_nostra_storia/DSC2808-683x1024.jpg') }} 683w, {{ asset('frontend/la_nostra_storia/DSC2808-200x300.jpg') }} 200w, {{ asset('frontend/la_nostra_storia/DSC2808-768x1152.jpg') }} 768w, {{ asset('frontend/la_nostra_storia/DSC2808-133x200.jpg') }} 133w, {{ asset('frontend/la_nostra_storia/DSC2808-1024x1536.jpg') }} 1024w, {{ asset('frontend/la_nostra_storia/DSC2808-1365x2048.jpg') }} 1365w, {{ asset('frontend/la_nostra_storia/DSC2808-scaled.jpg') }} 1707w"
                                    sizes="(max-width: 683px) 100vw, 683px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1dcc7b08 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="1dcc7b08" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_direction&quot;:&quot;negative&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="683" height="1024"
                                    src="{{ asset('frontend/la_nostra_storia/DSC2834-683x1024.jpg') }}"
                                    class="attachment-large size-large wp-image-2564" alt=""
                                    srcset="{{ asset('frontend/la_nostra_storia/DSC2834-683x1024.jpg') }} 683w, {{ asset('frontend/la_nostra_storia/DSC2834-200x300.jpg') }} 200w, {{ asset('frontend/la_nostra_storia/DSC2834-768x1152.jpg') }} 768w, {{ asset('frontend/la_nostra_storia/DSC2834-133x200.jpg') }} 133w, {{ asset('frontend/la_nostra_storia/DSC2834-1024x1536.jpg') }} 1024w, {{ asset('frontend/la_nostra_storia/DSC2834-1365x2048.jpg') }} 1365w, {{ asset('frontend/la_nostra_storia/DSC2834-scaled.jpg') }} 1706w"
                                    sizes="(max-width: 683px) 100vw, 683px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-77ca62e1 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="77ca62e1" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}}}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="683" height="1024"
                                    src="{{ asset('frontend/la_nostra_storia/DSC2683-683x1024.jpg') }}"
                                    class="attachment-large size-large wp-image-2555" alt=""
                                    srcset="{{ asset('frontend/la_nostra_storia/DSC2683-683x1024.jpg') }} 683w, {{ asset('frontend/la_nostra_storia/DSC2683-200x300.jpg') }} 200w, {{ asset('frontend/la_nostra_storia/DSC2683-768x1152.jpg') }} 768w, {{ asset('frontend/la_nostra_storia/DSC2683-133x200.jpg') }} 133w, {{ asset('frontend/la_nostra_storia/DSC2683-1024x1536.jpg') }} 1024w, {{ asset('frontend/la_nostra_storia/DSC2683-1365x2048.jpg') }} 1365w, {{ asset('frontend/la_nostra_storia/DSC2683-scaled.jpg') }} 1707w"
                                    sizes="(max-width: 683px) 100vw, 683px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-62a6d894 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="62a6d894" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29f3d29a"
                    data-id="29f3d29a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-07d487a elementor-widget elementor-widget-video"
                            data-id="07d487a" data-element_type="widget"
                            data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}"
                            data-widget_type="video.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.18.0 - 06-12-2023 */
                                    .elementor-widget-video .elementor-widget-container {
                                        overflow: hidden;
                                        transform: translateZ(0)
                                    }

                                    .elementor-widget-video .elementor-wrapper {
                                        aspect-ratio: var(--video-aspect-ratio)
                                    }

                                    .elementor-widget-video .elementor-wrapper iframe,
                                    .elementor-widget-video .elementor-wrapper video {
                                        height: 100%;
                                        width: 100%;
                                        display: flex;
                                        border: none;
                                        background-color: #000
                                    }

                                    @supports not (aspect-ratio:1/1) {
                                        .elementor-widget-video .elementor-wrapper {
                                            position: relative;
                                            overflow: hidden;
                                            height: 0;
                                            padding-bottom: calc(100% / var(--video-aspect-ratio))
                                        }

                                        .elementor-widget-video .elementor-wrapper iframe,
                                        .elementor-widget-video .elementor-wrapper video {
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            bottom: 0;
                                            left: 0
                                        }
                                    }

                                    .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                        position: absolute;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0;
                                        background-size: cover;
                                        background-position: 50%
                                    }

                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                        cursor: pointer;
                                        text-align: center
                                    }

                                    .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                        opacity: 1
                                    }

                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                        display: block;
                                        width: 100%;
                                        aspect-ratio: var(--video-aspect-ratio);
                                        -o-object-fit: cover;
                                        object-fit: cover;
                                        -o-object-position: center center;
                                        object-position: center center
                                    }

                                    @supports not (aspect-ratio:1/1) {
                                        .elementor-widget-video .elementor-custom-embed-image-overlay {
                                            position: relative;
                                            overflow: hidden;
                                            height: 0;
                                            padding-bottom: calc(100% / var(--video-aspect-ratio))
                                        }

                                        .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            bottom: 0;
                                            left: 0
                                        }
                                    }

                                    .elementor-widget-video .e-hosted-video .elementor-video {
                                        -o-object-fit: cover;
                                        object-fit: cover
                                    }

                                    .e-con-inner>.elementor-widget-video,
                                    .e-con>.elementor-widget-video {
                                        width: var(--container-widget-width);
                                        --flex-grow: var(--container-widget-flex-grow)
                                    }
                                </style>
                                <div class="e-hosted-video elementor-wrapper elementor-open-inline">
                                    <video class="elementor-video" src="{{ asset('frontend/video/mattacena.mp4') }}"
                                        autoplay="" loop="" muted="muted" playsinline=""
                                        controlsList="nodownload"
                                        poster="{{ asset('frontend/la_nostra_storia/Screenshot-2023-12-05-alle-12.40.01.png') }}"></video>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d1069e9 elementor-widget elementor-widget-spacer"
                            data-id="d1069e9" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.18.0 - 06-12-2023 */
                                    .elementor-column .elementor-spacer-inner {
                                        height: var(--spacer-size)
                                    }

                                    .e-con {
                                        --container-widget-width: 100%
                                    }

                                    .e-con-inner>.elementor-widget-spacer,
                                    .e-con>.elementor-widget-spacer {
                                        width: var(--container-widget-width, var(--spacer-size));
                                        --align-self: var(--container-widget-align-self, initial);
                                        --flex-shrink: 0
                                    }

                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                                    .e-con>.elementor-widget-spacer>.elementor-widget-container {
                                        height: 100%;
                                        width: 100%
                                    }

                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                                    .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                        height: 100%
                                    }

                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                                    .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                        height: var(--container-widget-height, var(--spacer-size))
                                    }

                                    .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                                    .e-con>.elementor-widget-spacer.elementor-widget-empty {
                                        position: relative;
                                        min-height: 22px;
                                        min-width: 22px
                                    }

                                    .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                                    .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        margin: auto;
                                        padding: 0;
                                        width: 22px;
                                        height: 22px
                                    }
                                </style>
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



	<link rel="stylesheet" id="e-animations-css"
		href="{{ asset('frontend/la_nostra_storia/animations.min.css')}}" type="text/css"
		media="all">
	
    
@endsection