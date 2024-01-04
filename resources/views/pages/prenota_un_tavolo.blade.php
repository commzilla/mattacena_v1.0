@extends('frontend')

@section('main_frontend')
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
    <link rel='stylesheet' id='nd_rst_style-css' href='{{ asset('prenota_un_tavolo/style.css?ver=6.4.2') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nd_options_style-css' href='{{ asset('prenota_un_tavolo/style.css?ver=6.4.2') }}'
        type='text/css' media='all' />
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
        href='{{ asset('prenota_un_tavolo/woocommerce-layout.css?ver=8.3.1') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{ asset('prenota_un_tavolo/woocommerce-smallscreen.css?ver=8.3.1') }}' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='{{ asset('prenota_un_tavolo/woocommerce.css?ver=8.3.1') }}'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='nicdark-style-css' href='{{ asset('prenota_un_tavolo/style.css?ver=6.4.2') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('prenota_un_tavolo/custom-frontend-lite.min.css?ver=1701938811') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('prenota_un_tavolo/swiper.min.css?ver=8.4.5') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2979-css' href='{{ asset('prenota_un_tavolo/post-2979.css?ver=1701938811') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{ asset('prenota_un_tavolo/custom-pro-frontend-lite.min.css?ver=1701938811') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2967-css'
        href='{{ asset('prenota_un_tavolo/post-2967.css?ver=1701944424') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1579-css'
        href='{{ asset('prenota_un_tavolo/post-1579.css?ver=1701938812') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-475-css' href='{{ asset('prenota_un_tavolo/post-475.css?ver=1701938812') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-516-css' href='{{ asset('prenota_un_tavolo/post-516.css?ver=1701938812') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Jost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCormorant%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='restaurant_system_public_style-css'
        href='{{ asset('prenota_un_tavolo/public-style.css?ver=2.3.8') }}' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <script type="text/javascript" src="https://www.fbgcdn.com/embedder/js/ewm2.js?ver=6.4.2"
        id="jsforwp-blocks-frontend-js-js"></script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/jquery.min.js?ver=3.7.1') }}" id="jquery-core-js">
    </script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/jquery-migrate.min.js?ver=3.4.1') }}"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/jquery.blockUI.min.js?ver=2.7.0-wc.8.3.1') }}"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>

    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/frontend/add-to-cart.min.js?ver=8.3.1') }}"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/js.cookie.min.js?ver=2.1.4-wc.8.3.1') }}"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>

    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/woocommerce.min.js?ver=8.3.1') }}" id="woocommerce-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/page-transitions.min.js?ver=3.17.1') }}"
        id="page-transitions-js"></script>
    <link rel="https://api.w.org/" href="https://mattacena.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://mattacena.com/wp-json/wp/v2/pages/2967" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mattacena.com/xmlrpc.php?rsd" />

    <link rel="canonical" href="https://mattacena.com/prenota-un-tavolo/" />
    <link rel='shortlink' href='https://mattacena.com/?p=2967' />
    <link rel="alternate" type="application/json+oembed"
        href="https://mattacena.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmattacena.com%2Fprenota-un-tavolo%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://mattacena.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmattacena.com%2Fprenota-un-tavolo%2F&#038;format=xml" />


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

    <link rel="stylesheet" href="{{ asset('frontend/custom.css') }}" type="text/css" media="all">

    <div data-elementor-type="wp-page" data-elementor-id="2967" class="elementor elementor-2967"
        data-elementor-post-type="page">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-5bab4d29 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="5bab4d29" data-element_type="section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77d6fe58"
                    data-id="77d6fe58" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-66b6d026 elementor-widget elementor-widget-heading"
                            data-id="66b6d026" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Prenota il tuo tavolo e
                                    risparmia il 50% 🙌</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7400abe4 elementor-widget elementor-widget-heading"
                            data-id="7400abe4" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">Prenota quando tu vói e vieni
                                    a prova' la vera 'ucina Toscana!</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6edcd04c elementor-widget elementor-widget-shortcode"
                            data-id="6edcd04c" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">

                                    <div id="nd_rst_component_container"
                                        class="nd_rst_section nd_rst_padding_30 nd_rst_box_sizing_border_box nd_rst_border_1_solid_grey">


                                        <input id="nd_rst_action_return" type="hidden" name="nd_rst_action_return"
                                            value="{{ route('prenota_un_tavolo') }}">


                                        <!--START step index-->
                                        <div id="nd_rst_steps_container" class="nd_rst_section nd_rst_text_align_center">
                                            <div class="nd_rst_float_left nd_rst_width_20_percentage ">
                                                <div class="nd_rst_section nd_rst_height_1"></div>
                                            </div>
                                            <div
                                                class="nd_rst_float_left nd_rst_width_20_percentage nd_rst_single_step nd_rst_step_first nd_rst_step_active">
                                                <h5 class="nd_options_color_grey"><span>1</span>ESPLORA</h5>
                                            </div>
                                            <div
                                                class="nd_rst_float_left nd_rst_width_20_percentage nd_rst_single_step nd_rst_step_booking">
                                                <h5 class="nd_options_color_grey"><span>2</span>DETTAGLI</h5>
                                            </div>
                                            <div
                                                class="nd_rst_float_left nd_rst_width_20_percentage nd_rst_single_step nd_rst_step_checkout">
                                                <h5 class="nd_options_color_grey"><span>3</span>CONFERMA</h5>
                                            </div>
                                            <div class="nd_rst_float_left nd_rst_width_20_percentage ">
                                                <div class="nd_rst_section nd_rst_height_1"></div>
                                            </div>
                                        </div>
                                        <!--END step index-->


                                        <div class="nd_rst_section nd_rst_booking_container_all">
                                            <div class="nd_rst_section nd_rst_booking_container_1">


                                                <div id="nd_rst_rest_guests_legend_section" class="nd_rst_section">

                                                    <!--START RESTAURANT-->
                                                    <div id="nd_rst_section_restaurant" class="nd_rst_section  ">
                                                        <label class="" for="nd_rst_restaurant">Ristorante</label>

                                                        <div class="nd_rst_section nd_rst_position_relative">

                                                            <div class="nd_rst_rest_single  nd_rst_rest_single_2259 ">



                                                            </div>
                                                            <ul class="nd_rst_ul_restaurant nd_rst_display_none">
                                                                <li data-restaurant="2259"
                                                                    class="nd_rst_ulli_restaurant  nd_rst_bg_color_blue  ">
                                                                    Mattacena Firenze</li>
                                                            </ul>
                                                        </div>

                                                        <input readonly class="nd_rst_display_none_important"
                                                            type="number" name="nd_rst_restaurant"
                                                            id="nd_rst_restaurant" value="2259">

                                                    </div>
                                                    <!--END RESTAURANT-->



                                                    <div id="nd_rst_guests_legend_section" class="nd_rst_section">

                                                        <!--START GUESTS-->
                                                        <div id="nd_rst_guests_section" class="nd_rst_section">

                                                            <h3 class="">Persone a sedere</h3>

                                                            <div class=" nd_rst_section">

                                                                <div class=" nd_rst_guest_number  nd_rst_section">
                                                                    <h1
                                                                        class="nd_rst_guests_number nd_rst_margin_0 nd_rst_padding_0">
                                                                        1</h1>


                                                                    <div
                                                                        class=" nd_rst_guest_number_add  nd_rst_width_50_percentage">
                                                                        <button class="nd_rst_guests_increase"
                                                                            type="button">Aggiungi</button>
                                                                    </div>

                                                                    <div
                                                                        class=" nd_rst_guest_number_remove  nd_rst_width_50_percentage">
                                                                        <button class="nd_rst_guests_decrease"
                                                                            type="button">Rimuovi</button>
                                                                    </div>


                                                                </div>



                                                            </div>

                                                            <input readonly class="nd_rst_display_none_important"
                                                                type="number" name="nd_rst_guests" id="nd_rst_guests"
                                                                min="1" value="1">

                                                        </div>
                                                        <!--END GUESTS-->

                                                        <!--START LEGEND-->
                                                        <div id="nd_rst_legend_section" class="nd_rst_section">
                                                            <p class="nd_rst_legend_current"><span></span>Giorno
                                                                corrente</p>
                                                            <p class="nd_rst_legend_selected"><span></span>Giorno
                                                                selezionato</p>
                                                            <p class="nd_rst_legend_not_available"><span></span>Non
                                                                disponibile</p>
                                                        </div>
                                                        <!--END LEGEND-->


                                                    </div>

                                                </div>



                                                <div id="nd_rst_cal_occa_section" class="nd_rst_section">

                                                    <h1 id="nd_rst_calendar_word_bg">Occasione</h1>
                                                    <!--START CALENDAR-->
                                                    <div id="nd_rst_calendar_section" class="">


                                                        <div id="nd_rst_calendar_container"
                                                            class="nd_rst_section nd_rst_text_align_center">

                                                            <div id="nd_rst_calendar_content" class="nd_rst_section">

                                                                <div class="nd_rst_display_table nd_rst_section">

                                                                    <div
                                                                        class="nd_rst_display_table_cell nd_rst_vertical_align_middle nd_rst_width_25_percentage">

                                                                        <div class="nd_rst_section nd_rst_height_1">
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="nd_rst_display_table_cell nd_rst_vertical_align_middle nd_rst_width_50_percentage">
                                                                        <h3 class="nd_rst_margin_0 nd_rst_padding_0">
                                                                            December 2023</h3>
                                                                    </div>

                                                                    <div
                                                                        class="nd_rst_display_table_cell nd_rst_vertical_align_middle nd_rst_width_25_percentage">

                                                                        <input type="hidden" name="nd_rst_next_month"
                                                                            id="nd_rst_next_month" value="01">
                                                                        <input type="hidden" name="nd_rst_next_year"
                                                                            id="nd_rst_next_year" value="2024">
                                                                        <button onclick="nd_rst_calendar(2)"
                                                                            class="nd_rst_prev_next_cal nd_rst_float_right"
                                                                            type="button">></button>

                                                                    </div>

                                                                </div>


                                                                <div class="nd_rst_section nd_rst_height_20"></div>

                                                                <div class="nd_rst_section nd_rst_calendar_week">
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>M</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>T</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>W</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>T</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>F</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>S</strong></p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p><strong>S</strong></p>
                                                                    </div>
                                                                </div>

                                                                <div class="nd_rst_section">
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage nd_rst_height_1">
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage nd_rst_height_1">
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage nd_rst_height_1">
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage nd_rst_height_1">
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-01" class="">1</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-02" class="">2</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-03" class="">3</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-04" class="">4</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-05" class="">5</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-06" class="">6</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-07" class="">7</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-08" class="">8</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-09" class="">9</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-10" class="">10
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-11" class="">11
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-12" class="">12
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-13" class="">13
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-14" class="">14
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-15" class="">15
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-16" class="">16
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-17" class="">17
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-18" class="">18
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-19" class="">19
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-20" class="">20
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-21" class="">21
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-22" class="">22
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-23" class="">23
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-24" class="">24
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-25" class="">25
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-26" class="">26
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-27" class="">27
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-28" class="">28
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-29"
                                                                            class=" nd_rst_cal_today nd_rst_cursor_pointer nd_rst_calendar_date  nd_rst_cal_active ">
                                                                            29</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-30"
                                                                            class=" nd_rst_cursor_pointer nd_rst_calendar_date ">
                                                                            30</p>
                                                                    </div>
                                                                    <div
                                                                        class="nd_rst_float_left nd_rst_width_14_percentage">
                                                                        <p data-date="2023-12-31"
                                                                            class=" nd_rst_cursor_pointer nd_rst_calendar_date ">
                                                                            31</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input readonly class="nd_rst_display_none_important"
                                                            type="text" name="nd_rst_date" id="nd_rst_date"
                                                            value="2023-12-29">
                                                    </div>
                                                    <!--END CALENDAR-->
                                                    <!--START OCCASION-->
                                                    <div id="nd_rst_occasion_section" class="nd_rst_section">
                                                        <div id="nd_rst_occasion_cont" class="nd_rst_section  ">
                                                            <h3 class="">Occasione :</h3>

                                                            <div id="nd_rst_occasion_cont_change"
                                                                class="nd_rst_section nd_rst_position_relative">
                                                                <div class="nd_rst_occas_single  nd_rst_occas_single_0">
                                                                    Casual</div>
                                                                <div
                                                                    class="nd_rst_occas_single  nd_rst_display_none  nd_rst_occas_single_1">
                                                                    Lavoro</div>
                                                                <div
                                                                    class="nd_rst_occas_single  nd_rst_display_none  nd_rst_occas_single_2">
                                                                    Compleanno</div>
                                                                <div
                                                                    class="nd_rst_occas_single  nd_rst_display_none  nd_rst_occas_single_3">
                                                                    Anniversario</div>
                                                                <ul class="nd_rst_ul_occasion nd_rst_display_none">
                                                                    <li data-occasion="0"
                                                                        class="nd_rst_ulli_occasion  nd_rst_bg_color_blue  ">
                                                                        Casual</li>
                                                                    <li data-occasion="1" class="nd_rst_ulli_occasion   ">
                                                                        Lavoro</li>
                                                                    <li data-occasion="2" class="nd_rst_ulli_occasion   ">
                                                                        Compleanno
                                                                    </li>
                                                                    <li data-occasion="3" class="nd_rst_ulli_occasion   ">
                                                                        Anniversario
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <input readonly class="nd_rst_display_none_important"
                                                            type="text" name="nd_rst_occasion" id="nd_rst_occasion"
                                                            value="0">

                                                    </div>
                                                    <!--END OCCASION-->

                                                </div>
                                                <div id="nd_rst_time_section" class="nd_rst_section">
                                                    <h3 class="">Orario :</h3>

                                                    <ul id="nd_rst_all_time_slots_container"
                                                        class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_list_style_none">

                                                        <div class="nd_rst_section nd_rst_all_time_slots_single">
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time nd_rst_bg_color_blue"
                                                                    data-time="12:00">12:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="12:30">12:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="13:00">13:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="13:30">13:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="14:00">14:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="14:30">14:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="15:00">15:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="15:30">15:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="16:00">16:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="16:30">16:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="17:00">17:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="17:30">17:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="18:00">18:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="18:30">18:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="19:00">19:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="19:30">19:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="20:00">20:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="20:30">20:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="21:00">21:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="21:30">21:30</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="22:00">22:00</p>
                                                            </li>
                                                            <li class="nd_rst_display_inline_block">
                                                                <p class="nd_rst_margin_0 nd_rst_padding_0 nd_rst_bg_color_ccc nd_rst_margin_right_10 nd_rst_time"
                                                                    data-time="22:30">22:30</p>
                                                            </li>
                                                            <div class="nd_rst_section nd_rst_height_20"></div>
                                                            <input readonly class="nd_rst_display_none_important"
                                                                type="text" name="nd_rst_time" id="nd_rst_time"
                                                                value="12:00">
                                                        </div>
                                                    </ul>
                                                </div>
                                                <!--END TIME-->



                                                <div id="nd_rst_btn_go_to_booking_container" class="nd_rst_section">
                                                    <button class="nd_options_first_font" id="nd_rst_btn_go_to_booking"
                                                        onclick="nd_rst_go_to_booking()">Prenota un tavolo</button>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div data-elementor-type="popup" data-elementor-id="1579" class="elementor elementor-1579 elementor-location-popup"
        data-elementor-settings="{&quot;entrance_animation&quot;:&quot;zoomInLeft&quot;,&quot;exit_animation&quot;:&quot;zoomInLeft&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-6dd63dd e-con-full e-flex e-con e-parent" data-id="6dd63dd"
            data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
            data-core-v316-plus="true">
            <div class="elementor-element elementor-element-d7471a8 e-con-full e-flex e-con e-child" data-id="d7471a8"
                data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                <div class="elementor-element elementor-element-3715a49 elementor-nav-menu__align-center elementor-nav-menu--dropdown-none elementor-invisible elementor-widget elementor-widget-nav-menu"
                    data-id="3715a49" data-element_type="widget"
                    data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;&quot;},&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:500}"
                    data-widget_type="nav-menu.default">
                    <div class="elementor-widget-container">
                        <nav
                            class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                            <ul id="menu-1-3715a49" class="elementor-nav-menu sm-vertical">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2085">
                                    <a href="{{ route('home.index') }}" class="elementor-item">Home</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2084"><a
                                        href="{{ route('la_nostra_storia') }}" class="elementor-item">La
                                        nostra storia</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2081"><a
                                        href="{{ route('contact') }}" class="elementor-item">Contattaci</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3132"><a
                                        href="{{ route('dove_siamo') }}" class="elementor-item">Dove
                                        siamo</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2415">
                                    <a href="#" class="elementor-item">Menu</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2260">
                                            <a href="{{ route('menu_mattopiatto') }}"
                                                class="elementor-sub-item">Mattopiatto</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2437">
                                            <a href="{{ route('antipasti') }}" class="elementor-sub-item">Né
                                                antipasto né primo…</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2438">
                                            <a href="{{ route('stritte_fudde') }}" class="elementor-sub-item">Stritte
                                                Fudde</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2433">
                                            <a href="{{ route('i_nostri_primi') }}" class="elementor-sub-item">I nostri
                                                primi</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2435">
                                            <a href="{{ route('manzo') }}" class="elementor-sub-item">Menu
                                                manzo</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2436">
                                            <a href="{{ route('menu_bistecca') }}" class="elementor-sub-item">Menu
                                                bistecca</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2432">
                                            <a href="{{ route('i_nostri_ontorni') }}" class="elementor-sub-item">I nostri
                                                ‘ontorni</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2434">
                                            <a href="{{ route('i_bere') }}" class="elementor-sub-item">I’
                                                bere</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                            <ul id="menu-2-3715a49" class="elementor-nav-menu sm-vertical">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2085">
                                    <a href="https://mattacena.com/" class="elementor-item" tabindex="-1">Home</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2084"><a
                                        href="https://mattacena.com/la-nostra-storia/" class="elementor-item"
                                        tabindex="-1">La nostra storia</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2081"><a
                                        href="https://mattacena.com/contact/" class="elementor-item"
                                        tabindex="-1">Contattaci</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3132"><a
                                        href="https://mattacena.com/dove-siamo/" class="elementor-item"
                                        tabindex="-1">Dove siamo</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2415">
                                    <a href="https://mattacena.com/?page_id=2412" class="elementor-item"
                                        tabindex="-1">Menu</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2260">
                                            <a href="https://mattacena.com/menu-mattopiatto/" class="elementor-sub-item"
                                                tabindex="-1">Mattopiatto</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2437">
                                            <a href="https://mattacena.com/antipasti/" class="elementor-sub-item"
                                                tabindex="-1">Né antipasto né primo…</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2438">
                                            <a href="https://mattacena.com/stritte-fudde/" class="elementor-sub-item"
                                                tabindex="-1">Stritte Fudde</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2433">
                                            <a href="https://mattacena.com/i-nostri-primi/" class="elementor-sub-item"
                                                tabindex="-1">I nostri primi</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2435">
                                            <a href="https://mattacena.com/manzo/" class="elementor-sub-item"
                                                tabindex="-1">Menu manzo</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2436">
                                            <a href="https://mattacena.com/menu-bistecca/" class="elementor-sub-item"
                                                tabindex="-1">Menu bistecca</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2432">
                                            <a href="https://mattacena.com/i-nostri-ontorni/" class="elementor-sub-item"
                                                tabindex="-1">I nostri ‘ontorni</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2434">
                                            <a href="https://mattacena.com/i-bere/" class="elementor-sub-item"
                                                tabindex="-1">I’ bere</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' id='nd_rst_style_layout-css' href='{{ asset('prenota_un_tavolo/layout-1.css?ver=6.4.2') }}'
        type='text/css' media='all' />
    <style id='nd_rst_style_layout-inline-css' type='text/css'>
        /*dark 1*/
        #nd_rst_steps_container h5 span {
            background-color: #2d2d2d;
        }

        #nd_rst_cal_occa_section {
            background-color: #2d2d2d;
        }

        #nd_rst_booking_step_datas_form label span {
            background-color: #2d2d2d;
        }

        #nd_rst_booking_step_resume_all_info {
            background-color: #2d2d2d;
        }

        #nd_rst_checkout_step_resume_all_info {
            background-color: #2d2d2d;
        }

        .nd_rst_ul_restaurant li.nd_rst_bg_color_blue {
            background-color: #2d2d2d;
        }

        .nd_rst_ul_occasion li.nd_rst_bg_color_blue {
            background-color: #2d2d2d;
        }

        #nd_rst_time_section .nd_rst_time.nd_rst_bg_color_blue {
            background-color: #2d2d2d;
        }

        .nd_rst_toogle_icon {
            background-color: #2d2d2d;
        }

        /*color 1*/
        #nd_rst_steps_container .nd_rst_step_active h5 span {
            background-color: #c0a58a;
        }

        .nd_rst_legend_selected span {
            background-color: #c0a58a;
        }

        .nd_rst_legend_not_available span {
            background-color: #c0a58a;
        }

        .nd_rst_cal_active.nd_rst_calendar_date {
            background-color: #c0a58a !important;
        }

        #nd_rst_time_section p {
            background-color: #c0a58a;
        }

        #nd_rst_btn_go_to_booking {
            background-color: #c0a58a;
        }

        #nd_rst_booking_step_datas_form button {
            background-color: #c0a58a;
        }

        .nd_rst_checkout_container_3 button {
            background-color: #c0a58a;
        }

        #nd_rst_checkout_step_datas_form button,
        #nd_rst_checkout_step_datas_form input[type="submit"] {
            background-color: #c0a58a;
        }

        .nd_rst_cal_not_set:after {
            background-color: #c0a58a;
        }

        /*color 2*/
        .nd_rst_legend_current span {
            background-color: #b66565;
        }

        .nd_rst_cal_today.nd_rst_calendar_date {
            background-color: #b66565;
        }
    </style>
    <link rel='stylesheet' id='e-animations-css' href='{{ asset('prenota_un_tavolo/animations.min.css?ver=3.18.1') }}'
        type='text/css' media='all' />
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/comment-reply.min.js?ver=6.4.2') }}"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="module" src="{{ asset('prenota_un_tavolo/instant-page.min.js?ver=3.17.1') }}" id="instant-page-js">
    </script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/public-scripts.js?ver=2.3.8') }}"
        id="restaurant_system_public_scripts_js-js"></script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/jquery.smartmenus.min.js?ver=1.0.1') }}"
        id="smartmenus-js"></script>
    <script type="text/javascript" id="nd_rst_calendar_script-js-extra">
        /* <![CDATA[ */
        var nd_rst_my_vars_calendar = {
            "nd_rst_ajaxurl": "https:\/\/mattacena.com\/wp-admin\/admin-ajax.php",
            "nd_rst_ajaxnonce": "33a7d115b2"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('prenota_un_tavolo/nd_rst_calendar.js?ver=6.4.2') }}"
        id="nd_rst_calendar_script-js"></script>
    <script type="text/javascript" id="nd_rst_calendar_script-js-after">
        /* <![CDATA[ */

        jQuery(document).ready(function() {

            jQuery(function($) {

                $(".nd_rst_calendar_date").click(function() {

                    $(".nd_rst_calendar_date").removeClass("nd_rst_cal_active");
                    var nd_rst_calendar_date_select = $(this).attr("data-date");
                    $(this).addClass("nd_rst_cal_active");

                    $("#nd_rst_date").val(nd_rst_calendar_date_select);
                    nd_rst_update_timing(nd_rst_calendar_date_select);
                });

            });

        });




        jQuery(document).ready(function() {

            jQuery(function($) {


                $(".nd_rst_rest_single").click(function() {

                    $(".nd_rst_ul_restaurant").removeClass("nd_rst_display_none");

                });


                $(".nd_rst_ulli_restaurant").click(function() {

                    $(".nd_rst_rest_single").removeClass("nd_rst_display_block");
                    $(".nd_rst_ulli_restaurant").removeClass("nd_rst_bg_color_blue");
                    var nd_rst_rest_select = $(this).attr("data-restaurant");
                    $(this).addClass("nd_rst_bg_color_blue");

                    $("#nd_rst_restaurant").val(nd_rst_rest_select);

                    var nd_rst_calendar_date_select = $("#nd_rst_date").val();
                    nd_rst_update_timing(nd_rst_calendar_date_select);
                    $(".nd_rst_rest_single").addClass("nd_rst_display_none");
                    $(".nd_rst_rest_single_" + nd_rst_rest_select).addClass("nd_rst_display_block");
                    $(".nd_rst_ul_restaurant").addClass("nd_rst_display_none");

                });

            });

        });




        jQuery(document).ready(function() {

            jQuery(function($) {

                $(".nd_rst_guests_increase").click(function() {
                    var value = $(".nd_rst_guests_number").text();

                    if (value < 27) {
                        value++;
                        $(".nd_rst_guests_number").text(value);
                        $("#nd_rst_guests").val(value);

                        var nd_rst_calendar_date_select = $("#nd_rst_date").val();
                        nd_rst_update_timing(nd_rst_calendar_date_select);
                    }

                });

                $(".nd_rst_guests_decrease").click(function() {
                    var value = $(".nd_rst_guests_number").text();

                    if (value > 1) {
                        value--;
                        $(".nd_rst_guests_number").text(value);
                        $("#nd_rst_guests").val(value);

                        var nd_rst_calendar_date_select = $("#nd_rst_date").val();
                        nd_rst_update_timing(nd_rst_calendar_date_select);
                    }

                });

            });

        });





        jQuery(document).ready(function() {

            jQuery(function($) {


                $(".nd_rst_occas_single").click(function() {

                    $(".nd_rst_ul_occasion").removeClass("nd_rst_display_none");

                });


                $(".nd_rst_ulli_occasion").click(function() {

                    $(".nd_rst_occas_single").removeClass("nd_rst_display_block");
                    $(".nd_rst_ulli_occasion").removeClass("nd_rst_bg_color_blue");
                    var nd_rst_occas_select = $(this).attr("data-occasion");
                    $(this).addClass("nd_rst_bg_color_blue");

                    $("#nd_rst_occasion").val(nd_rst_occas_select);

                    $(".nd_rst_occas_single").addClass("nd_rst_display_none");
                    $(".nd_rst_occas_single_" + nd_rst_occas_select).addClass(
                        "nd_rst_display_block");
                    $(".nd_rst_ul_occasion").addClass("nd_rst_display_none");

                });

            });

        });




        jQuery(document).ready(function() {

            jQuery(function($) {

                $(".nd_rst_time").click(function() {

                    $(".nd_rst_time").removeClass("nd_rst_bg_color_blue");
                    var nd_rst_calendar_time_select = $(this).attr("data-time");
                    $(this).addClass("nd_rst_bg_color_blue");

                    $("#nd_rst_time").val(nd_rst_calendar_time_select);

                });

            });

        });




        jQuery(document).ready(function() {

            jQuery(function($) {

                $("#nd_rst_btn_go_to_booking").removeClass("nd_rst_display_none_important");

                $(".nd_rst_all_time_slots_single li:first-child p").trigger("click");

            });

        });


        /* ]]> */
    </script>
@endsection
