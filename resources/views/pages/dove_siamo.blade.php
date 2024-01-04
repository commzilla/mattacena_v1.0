@extends('frontend')

@section('main_frontend')


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <title>Dove siamo &#8211; Mattacena &#8211; Cucina Tradizionale Toscana</title>
        <meta name='robots' content='max-image-preview:large' />
        <link rel='dns-prefetch' href='//www.fbgcdn.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel="alternate" type="application/rss+xml" title="Mattacena - Cucina Tradizionale Toscana &raquo; Feed"
            href="https://mattacena.com/feed/" />
        <link rel="alternate" type="application/rss+xml"
            title="Mattacena - Cucina Tradizionale Toscana &raquo; Feed dei commenti"
            href="https://mattacena.com/comments/feed/" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/mattacena.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
                }
            };
            /*! This file is auto-generated */
            ! function(i, n) {
                var o, s, e;

                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }

                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                            .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }

                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                                n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                    "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                    "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                    );
                        case "emoji":
                            return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                                "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                    }
                    return !1
                }

                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                            300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", {
                            willReadFrequently: !0
                        }),
                        o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }), o
                }

                function t(e) {
                    var t = i.createElement("script");
                    t.src = e, t.defer = !0, i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }), new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                                e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                            typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                            var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                    .toString()
                                ].join(",") + "));",
                                r = new Blob([e], {
                                    type: "text/javascript"
                                }),
                                a = new Worker(URL.createObjectURL(r), {
                                    name: "wpTestEmojiSupports"
                                });
                            return void(a.onmessage = function(e) {
                                c(n = e.data), a.terminate(), t(n)
                            })
                        } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }).then(function(e) {
                    for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                        .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                            .everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                        .DOMReady = !1, n.readyCallback = function() {
                            n.DOMReady = !0
                        }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                        .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
                }))
            }((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <style id='wp-emoji-styles-inline-css' type='text/css'>
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='online-css-css' href='https://www.fbgcdn.com/embedder/css/order-online.css?ver=6.4.2'
            type='text/css' media='all' />
        <style id='classic-theme-styles-inline-css' type='text/css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        <style id='global-styles-inline-css' type='text/css'>
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flow>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            body .is-layout-flow>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            body .is-layout-flow>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            body .is-layout-constrained>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            body .is-layout-constrained>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            body .is-layout-constrained>.alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            body .is-layout-flex>* {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            body .is-layout-grid>* {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel='stylesheet' id='nd_rst_style-css'
            href='https://mattacena.com/wp-content/plugins/nd-restaurant-reservations/assets/css/style.css?ver=6.4.2'
            type='text/css' media='all' />
        <link rel='stylesheet' id='nd_options_style-css'
            href='https://mattacena.com/wp-content/plugins/nd-shortcodes/css/style.css?ver=6.4.2' type='text/css'
            media='all' />
        <link rel='stylesheet' id='nd_options_font_family_h-css'
            href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=6.4.2' type='text/css'
            media='all' />
        <link rel='stylesheet' id='nd_options_font_family_p-css'
            href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=6.4.2' type='text/css'
            media='all' />
        <link rel='stylesheet' id='nd_options_font_family_third-css'
            href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=6.4.2' type='text/css'
            media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'
            href='https://mattacena.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.3.1'
            type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'
            href='https://mattacena.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.3.1'
            type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'
            href='https://mattacena.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.3.1' type='text/css'
            media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='nicdark-style-css'
            href='https://mattacena.com/wp-content/themes/ristorante/style.css?ver=6.4.2' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1701938811'
            type='text/css' media='all' />
        <link rel='stylesheet' id='swiper-css'
            href='https://mattacena.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
            type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-2979-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/post-2979.css?ver=1701938811' type='text/css'
            media='all' />
        <link rel='stylesheet' id='elementor-pro-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/custom-pro-frontend-lite.min.css?ver=1701938811'
            type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-2964-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/post-2964.css?ver=1701989148' type='text/css'
            media='all' />
        <link rel='stylesheet' id='elementor-post-1579-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/post-1579.css?ver=1701938812' type='text/css'
            media='all' />
        <link rel='stylesheet' id='elementor-post-475-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/post-475.css?ver=1701938812' type='text/css'
            media='all' />
        <link rel='stylesheet' id='elementor-post-516-css'
            href='https://mattacena.com/wp-content/uploads/elementor/css/post-516.css?ver=1701938812' type='text/css'
            media='all' />
        <link rel='stylesheet' id='google-fonts-1-css'
            href='https://fonts.googleapis.com/css?family=Jost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCormorant%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2'
            type='text/css' media='all' />
        <link rel='stylesheet' id='restaurant_system_public_style-css'
            href='https://mattacena.com/wp-content/plugins/menu-ordering-reservations/assets/css/public-style.css?ver=2.3.8'
            type='text/css' media='all' />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script>
            /* <![CDATA[ */
            var rcewpp = {
                "ajax_url": "https://mattacena.com/wp-admin/admin-ajax.php",
                "nonce": "14d80fcff0",
                "home_url": "https://mattacena.com/",
                "settings_icon": 'https://mattacena.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
                "settings_hover_icon": 'https://mattacena.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
            };
            /* ]]\> */
        </script>
        <script type="text/javascript" src="https://www.fbgcdn.com/embedder/js/ewm2.js?ver=6.4.2"
            id="jsforwp-blocks-frontend-js-js"></script>
        <script type="text/javascript" src="https://mattacena.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
            id="jquery-core-js"></script>
        <script type="text/javascript" src="https://mattacena.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
            id="jquery-migrate-js"></script>
        <script type="text/javascript"
            src="https://mattacena.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.3.1"
            id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "Visualizza carrello",
                "cart_url": "https:\/\/mattacena.com\/?page_id=729",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://mattacena.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.3.1"
            id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript"
            src="https://mattacena.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.3.1"
            id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://mattacena.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.3.1"
            id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript"
            src="https://mattacena.com/wp-content/plugins/elementor-pro/assets/js/page-transitions.min.js?ver=3.17.1"
            id="page-transitions-js"></script>
        <link rel="https://api.w.org/" href="https://mattacena.com/wp-json/" />
        <link rel="alternate" type="application/json" href="https://mattacena.com/wp-json/wp/v2/pages/2964" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mattacena.com/xmlrpc.php?rsd" />

        <link rel="canonical" href="https://mattacena.com/dove-siamo/" />
        <link rel='shortlink' href='https://mattacena.com/?p=2964' />
        <link rel="alternate" type="application/json+oembed"
            href="https://mattacena.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmattacena.com%2Fdove-siamo%2F" />
        <link rel="alternate" type="text/xml+oembed"
            href="https://mattacena.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmattacena.com%2Fdove-siamo%2F&#038;format=xml" />


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
        <link rel="icon" href="https://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-32x32.png"
            sizes="32x32" />
        <link rel="icon" href="https://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-192x192.png"
            sizes="192x192" />
        <link rel="apple-touch-icon"
            href="https://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-180x180.png" />
        <meta name="msapplication-TileImage"
            content="https://mattacena.com/wp-content/uploads/2023/11/cropped-Mattacena-Favicon-270x270.png" />
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

<link rel="stylesheet" href="{{ asset('frontend/custom.css') }}" type="text/css"
media="all">
    </head>




        

        <div data-elementor-type="wp-page" data-elementor-id="2964" class="elementor elementor-2964"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-269a6a4 e-flex e-con-boxed e-con e-parent" data-id="269a6a4"
                data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-50ca565 elementor-widget elementor-widget-spacer"
                        data-id="50ca565" data-element_type="widget" data-widget_type="spacer.default">
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c43a488 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                data-id="c43a488" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5609f1e"
                        data-id="5609f1e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cedf0ca elementor-widget elementor-widget-google_maps"
                                data-id="cedf0ca" data-element_type="widget" data-widget_type="google_maps.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.18.0 - 06-12-2023 */
                                        .elementor-widget-google_maps .elementor-widget-container {
                                            overflow: hidden
                                        }

                                        .elementor-widget-google_maps .elementor-custom-embed {
                                            line-height: 0
                                        }

                                        .elementor-widget-google_maps iframe {
                                            height: 300px
                                        }
                                    </style>
                                    <div class="elementor-custom-embed">
                                        <iframe loading="lazy"
                                            src="https://maps.google.com/maps?q=Mattacena&#038;t=m&#038;z=16&#038;output=embed&#038;iwloc=near"
                                            title="Mattacena" aria-label="Mattacena"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a6b9b5d"
                        data-id="a6b9b5d" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-37b05c9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="37b05c9" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-89487bc"
                                        data-id="89487bc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ec81008 elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="ec81008" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-map-marker-alt"
                                                                viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3ad1200 elementor-widget elementor-widget-heading"
                                                data-id="3ad1200" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Dove siamo :
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-22ec78a elementor-widget elementor-widget-heading"
                                                data-id="22ec78a" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Via del Moro
                                                        85R, Firenze</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e7116a"
                                        data-id="2e7116a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c81aed1 elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="c81aed1" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-clock"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-58e3244 elementor-widget elementor-widget-heading"
                                                data-id="58e3244" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Orari :</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-da1c9c2 elementor-widget elementor-widget-heading"
                                                data-id="da1c9c2" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Pranzo: 12:00
                                                        - 15:30<br>Cena: 19:00 - 23:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-219a2cd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="219a2cd" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-778478d"
                                        data-id="778478d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b72fec3 elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="b72fec3" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-phone-alt"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2ecbb7b elementor-widget elementor-widget-heading"
                                                data-id="2ecbb7b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Chiamaci :
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-52fe7ca elementor-widget elementor-widget-heading"
                                                data-id="52fe7ca" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default"><a
                                                            href="tel:+39055281193​"><u>055281193</u></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9ba7a67"
                                        data-id="9ba7a67" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c96918f elementor-view-default elementor-widget elementor-widget-icon"
                                                data-id="c96918f" data-element_type="widget"
                                                data-widget_type="icon.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-wrapper">
                                                        <div class="elementor-icon">
                                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-at"
                                                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6c08f99 elementor-widget elementor-widget-heading"
                                                data-id="6c08f99" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Scrivici :
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-23b08e2 elementor-widget elementor-widget-heading"
                                                data-id="23b08e2" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default"><a
                                                            href="mailto:info@mattacena.com​"><u>info@mattacena.com</u></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7a95756 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7a95756" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24451a5"
                        data-id="24451a5" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>
        </div>







@endsection
