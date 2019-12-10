<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = 'qh13b2';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:16,h:16,m" sizes="16x16">
    <link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:24,h:24,m" sizes="24x24">
    <link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:32,h:32,m" sizes="32x32">
    <link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:48,h:48,m" sizes="48x48">
    <link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:64,h:64,m" sizes="64x64">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolevar</title>
    <meta name="author" content="Bolevar">
    <link rel="manifest" href="https://bolevar.godaddysites.com/manifest.webmanifest">
    <link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:57,h:57,m">
    <link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:60,h:60,m">
    <link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:72,h:72,m">
    <link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:114,h:114,m">
    <link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:120,h:120,m">
    <link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:144,h:144,m">
    <link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:152,h:152,m">
    <link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/favicon/774f480e-d6a2-47c4-b597-b6ed0658dd9c.jpg/:/rs=w:180,h:180,m">
    <meta property="og:url" content="https://bolevar.appspot.com/">
    <meta property="og:site_name" content="Bolevar">
    <meta property="og:title" content="Welcome to our humble home">
    <meta property="og:description" content="Follow our nutty vacations, wild sporting events, fine arts, and zany get-togethers.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://img1.wsimg.com/isteam/stock/10337">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Bolevar">
    <meta name="twitter:description" content="Welcome to our humble home">
    <meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/10337">
    <meta name="twitter:image:alt" content="Bolevar">
    <meta name="theme-color" content="#75978D">
    <script src="https://connect.facebook.net/signals/config/589766451798999?v=2.9.14&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js"></script>
    <script type="text/javascript">
        "undefined" === typeof _trfq && (window._trfq = []);
        "undefined" == typeof _trfd && (window._trfd = []);
    </script>
    <script type="text/javascript">
        function logTcclEvent() {
            var t = this.getAttribute("data-tccl");
            if (window._trfq && t) try {
                for (var e = t.split(","), r = e[0], d = e[1], n = e.splice(2), c = [], o = 0; o < n.length; o += 2) c.push([n[o], n[o + 1]]);
                window._trfq.push(["cmdLogEvent", d, r, c])
            } catch (e) {
                window._trfq.push(["cmdLogEvent", "gc_published_site_error", "tccl.published.log", [
                    ["error", e.toString()],
                    ["data", t]
                ]])
            }
        }
        "undefined" != typeof window && "undefined" != typeof document && window.addEventListener("DOMContentLoaded", function() {
            for (var t = document.querySelectorAll("[data-tccl]"), e = 0; e < t.length; e++) try {
                var r = t[e].getAttribute("data-tccl").split(",");
                t[e].addEventListener(r[1], logTcclEvent)
            } catch (t) {
                window._trfq.push(["cmdLogEvent", "gc_published_site_error", "tccl.published.add", [
                    ["error", t.toString()]
                ]])
            }
        });
    </script>
    <script type="text/javascript">
        "use strict";

        /* eslint-disable */
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;

            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };

            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.agent = 'plgodaddy';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '589766451798999');
        fbq('track', 'PageView');
    </script>
    <style type="text/css">
        /*
Copyright (c) 2011-2012, Jonathan Pinhorn (jonpinhorn.typedesign@gmail.com), with Reserved Font Names "Karla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* latin-ext */

        @font-face {
            font-family: 'Karla';
            font-style: normal;
            font-weight: 400;
            src: url("https://img1.wsimg.com/gfonts/s/karla/v12/qkBIXvYC6trAT55ZBi1ueQVIjQTD-JqaHUlKd7c.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Karla';
            font-style: normal;
            font-weight: 400;
            src: url("https://img1.wsimg.com/gfonts/s/karla/v12/qkBIXvYC6trAT55ZBi1ueQVIjQTD-JqaE0lK.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Karla';
            font-style: normal;
            font-weight: 700;
            src: url("https://img1.wsimg.com/gfonts/s/karla/v12/qkBIXvYC6trAT55ZBi1ueQVIjQTDH52aHUlKd7c.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Karla';
            font-style: normal;
            font-weight: 700;
            src: url("https://img1.wsimg.com/gfonts/s/karla/v12/qkBIXvYC6trAT55ZBi1ueQVIjQTDH52aE0lK.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /*
Copyright 2011 The Old Standard Project Authors (amkryukov@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* cyrillic-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: italic;
            font-weight: 400;
            src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q3bHNiZg.woff2") format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: italic;
            font-weight: 400;
            src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q-bHNiZg.woff2") format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: italic;
            font-weight: 400;
            src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q1bHNiZg.woff2") format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: italic;
            font-weight: 400;
            src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q0bHNiZg.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: italic;
            font-weight: 400;
            src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q6bHM.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 400;
            src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVep1q4dHc.woff2") format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 400;
            src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVerlq4dHc.woff2") format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 400;
            src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepVq4dHc.woff2") format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 400;
            src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepFq4dHc.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 400;
            src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVeqlq4.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 700;
            src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRlZfX80.woff2") format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 700;
            src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tT1ZfX80.woff2") format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 700;
            src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRFZfX80.woff2") format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 700;
            src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRVZfX80.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Old Standard TT';
            font-style: normal;
            font-weight: 700;
            src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url("https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tS1Zf.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/4ce1a7c86682e5e8/styles.css">
    <link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/587d3fe9944c8116/styles.css">
    <style type="text/css" data-glamor="cxs-default-sheet">
        .x .c2-1 {
            letter-spacing: normal;
        }

        .x .c2-2 {
            text-transform: none;
        }

        .x .c2-3 {
            font-family: "Old Standard TT", serif;
        }

        .x .c2-4 {
            font-size: 16px;
        }

        .x .c2-9 {
            letter-spacing: 2px;
        }

        .x .c2-a {
            overflow-wrap: break-word;
        }

        .x .c2-b {
            overflow-wrap: break-word;
        }

        .x .c2-c {
            line-height: 1.2;
        }

        .x .c2-d {
            margin-left: 0px;
        }

        .x .c2-e {
            margin-right: 0px;
        }

        .x .c2-f {
            margin-top: 0px;
        }

        .x .c2-g {
            margin-bottom: 0px;
        }

        .x .c2-h {
            max-width: 100%;
        }

        .x .c2-i {
            text-align: center;
        }

        .x .c2-j {
            word-break: break-word;
        }

        .x .c2-k {
            font-family: "Karla", sans-serif;
        }

        .x .c2-l {
            color: rgb(27, 27, 27);
        }

        .x .c2-m {
            font-size: 32px;
        }

        .x .c2-n {
            font-weight: 700;
        }

        .x .c2-y {
            display: inline-block;
        }

        .x .c2-z {
            width: 100%;
        }

        .x .c2-10 {
            text-decoration: none;
        }

        .x .c2-11 {
            display: flex;
        }

        .x .c2-12 {
            cursor: pointer;
        }

        .x .c2-13 {
            align-items: center;
        }

        .x .c2-14 {
            position: relative;
        }

        .x .c2-15 {
            margin-left: -6px;
        }

        .x .c2-16 {
            margin-right: -6px;
        }

        .x .c2-17 {
            margin-top: -6px;
        }

        .x .c2-18 {
            margin-bottom: -6px;
        }

        .x .c2-19 {
            padding-left: 6px;
        }

        .x .c2-1a {
            padding-right: 6px;
        }

        .x .c2-1b {
            padding-top: 6px;
        }

        .x .c2-1c {
            padding-bottom: 6px;
        }

        .x .c2-1d::before {
            content: "";
        }

        .x .c2-1e::before {
            margin-right: 0.5em;
        }

        .x .c2-1f::before {
            display: inline-block;
        }

        .x .c2-1g::before {
            height: 1px;
        }

        .x .c2-1h::before {
            width: 0.5em;
        }

        .x .c2-1i::before {
            background-color: rgb(27, 27, 27);
        }

        .x .c2-1j::before {
            transition: inherit;
        }

        .x .c2-1k::before {
            vertical-align: middle;
        }

        .x .c2-1l::before {
            opacity: 0;
        }

        .x .c2-1m:hover {
            color: rgb(27, 27, 27);
        }

        .x .c2-1n:hover {
            opacity: 0.5;
        }

        .x .c2-1o:active {
            color: rgb(96, 125, 116);
        }

        .x .c2-1p {
            color: inherit;
        }

        .x .c2-1q {
            transition: transform 0.33s ease-in-out 0s;
        }

        .x .c2-1r {
            transform: rotate(0deg);
        }

        .x .c2-1s {
            padding-top: 16px;
        }

        .x .c2-1t {
            padding-bottom: 16px;
        }

        .x .c2-1u {
            padding-left: 48px;
        }

        .x .c2-1v {
            padding-right: 48px;
        }

        .x .c2-1w {
            background-color: transparent;
        }

        .x .c2-1x {
            border-style: solid;
        }

        .x .c2-1y {
            border-color: rgb(27, 27, 27);
        }

        .x .c2-1z {
            border-radius: 4em;
        }

        .x .c2-20 {
            transition-property: background-color;
        }

        .x .c2-21 {
            transition-duration: 0.3s;
        }

        .x .c2-22 {
            transition-timing-function: ease-in-out;
        }

        .x .c2-23 {
            border-top-width: 2px;
        }

        .x .c2-24 {
            border-right-width: 2px;
        }

        .x .c2-25 {
            border-bottom-width: 2px;
        }

        .x .c2-26 {
            border-left-width: 2px;
        }

        .x .c2-27 {
            margin-top: 8px;
        }

        .x .c2-28:hover {
            background-color: black;
        }

        .x .c2-29:hover {
            color: white;
        }

        .x .c2-2a:focus {
            outline: currentcolor none medium;
        }

        .x .c2-2b:active {
            background-color: black;
        }

        .x .c2-2c:active {
            color: white;
        }

        .x .c2-2j {
            box-sizing: border-box;
        }

        .x .c2-2k {
            flex-direction: row;
        }

        .x .c2-2l {
            flex-wrap: wrap;
        }

        .x .c2-2m {
            margin-right: -12px;
        }

        .x .c2-2n {
            margin-bottom: -24px;
        }

        .x .c2-2o {
            margin-left: -12px;
        }

        .x .c2-2t {
            flex-grow: 1;
        }

        .x .c2-2u {
            flex-shrink: 1;
        }

        .x .c2-2v {
            flex-basis: 0%;
        }

        .x .c2-2w {
            padding-top: 0px;
        }

        .x .c2-2x {
            padding-right: 12px;
        }

        .x .c2-2y {
            padding-bottom: 24px;
        }

        .x .c2-2z {
            padding-left: 12px;
        }

        .x .c2-34 {
            overflow: hidden;
        }

        .x .c2-35 {
            margin-bottom: 16px;
        }

        .x .c2-36:hover .dim {
            opacity: 1;
        }

        .x .c2-37:hover .dim {
            transition: all 0.3s ease 0s;
        }

        .x .c2-38 {
            margin-left: auto;
        }

        .x .c2-39 {
            margin-right: auto;
        }

        .x .c2-3a {
            vertical-align: middle;
        }

        .x .c2-3b {
            max-height: 660px;
        }

        .x .c2-3c {
            object-fit: cover;
        }

        .x .c2-3d {
            line-height: 1.25;
        }

        .x .c2-3e {
            margin-bottom: 24px;
        }

        .x .c2-3f {
            font-size: 22px;
        }

        .x .c2-3g {
            font-weight: 400;
        }

        .x .c2-3m {
            padding-left: 0px !important;
        }

        .x .c2-3n {
            padding-right: 0px !important;
        }

        .x .c2-3o input {
            border-radius: 0px;
        }

        .x .c2-3p input {
            border-top-width: 0px;
        }

        .x .c2-3q input {
            border-right-width: 0px;
        }

        .x .c2-3r input {
            border-left-width: 0px;
        }

        .x .c2-3s input {
            border-bottom-width: 0.04rem;
        }

        .x .c2-3t input {
            border-bottom-style: solid;
        }

        .x .c2-3u input {
            border-color: rgb(115, 115, 115);
        }

        .x .c2-3v {
            background-color: rgb(255, 255, 255);
        }

        .x .c2-3w {
            border-color: rgb(115, 115, 115);
        }

        .x .c2-3x {
            border-top-width: 0px;
        }

        .x .c2-3y {
            border-right-width: 0px;
        }

        .x .c2-3z {
            border-bottom-width: 0.04rem;
        }

        .x .c2-40 {
            border-left-width: 0px;
        }

        .x .c2-41 {
            padding-top: 23px;
        }

        .x .c2-42 {
            padding-bottom: 8px;
        }

        .x .c2-43 {
            border-radius: 0px;
        }

        .x .c2-44 {
            border-bottom-style: solid;
        }

        .x .c2-45::placeholder {
            color: inherit;
        }

        .x .c2-46:focus+label {
            font-size: 12px;
        }

        .x .c2-47:focus+label {
            top: 8px;
        }

        .x .c2-48:focus+label {
            color: rgb(96, 125, 116);
        }

        .x .c2-49:not([value=""])+label {
            font-size: 12px;
        }

        .x .c2-4a:not([value=""])+label {
            top: 8px;
        }

        .x .c2-4b:not([value=""])+label {
            color: rgb(96, 125, 116);
        }

        .x .c2-4c::-webkit-input-placeholder {
            color: inherit;
        }

        .x .c2-4e {
            position: absolute;
        }

        .x .c2-4f {
            top: 30%;
        }

        .x .c2-4g {
            left: 0px;
        }

        .x .c2-4h {
            transition: all 0.15s ease 0s;
        }

        .x .c2-4i {
            pointer-events: none;
        }

        .x .c2-4j {
            padding-left: 0px;
        }

        .x .c2-4k {
            padding-right: 0px;
        }

        .x .c2-4l {
            resize: vertical;
        }

        .x .c2-4m {
            padding: 0px !important;
        }

        .x .c2-4n {
            display: block;
        }

        .x .c2-4r {
            margin-top: 40px;
        }

        .x .c2-4s {
            display: none;
        }

        .x .c2-4t {
            height: inherit;
        }

        .x .c2-4v {
            height: 100%;
        }

        .x .c2-4w {
            top: 0px;
        }

        .x .c2-4x {
            z-index: 3;
        }

        .x .c2-4y {
            padding-top: 56px;
        }

        .x .c2-4z {
            padding-bottom: 56px;
        }

        .x .c2-50 {
            transform: translate3d(-120%, 0px, 0px);
        }

        .x .c2-51 {
            opacity: 0;
        }

        .x .c2-52 {
            transition: transform 0.8s ease 0s, opacity 0.1s ease 0s;
        }

        .x .c2-53 {
            justify-content: center;
        }

        .x .c2-54 {
            padding-left: 24px;
        }

        .x .c2-55 {
            padding-right: 24px;
        }

        .x .c2-56 {
            max-width: 600px;
        }

        .x .c2-57 {
            flex-direction: column;
        }

        .x .c2-59 {
            flex-basis: 100%;
        }

        .x .c2-5a {
            padding-bottom: 0px;
        }

        .x .c2-5e {
            padding-top: 24px;
        }

        .x .c2-5f {
            line-height: 1.5;
        }

        .x .c2-5g {}

        .x .c2-5h {
            text-decoration: underline;
        }

        .x .c2-5i {
            color: rgb(96, 125, 116);
        }

        .x .c2-5j {
            display: inline;
        }

        .x .c2-5k {
            margin-left: 20px;
        }

        .x .c2-5l:hover {
            cursor: pointer;
        }
    </style>
    <style data-glamor="cxs-media-sheet" type="text/css"></style>
    <link data-glamor="cxs-xs-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/bb3636532309af6f/styles.css">
    <style type="text/css" data-glamor="cxs-xs-sheet">
        @media (max-width: 767px) {
            .x .c2-o {
                font-size: 32px;
            }
        }

        @media (max-width: 767px) {
            .x .c2-2d {
                max-width: max-content !important;
            }
        }

        @media (max-width: 767px) {
            .x .c2-3h {
                text-align: center;
            }
        }
    </style>
    <link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/2e3d5fd2c7c0111c/styles.css">
    <style type="text/css" data-glamor="cxs-sm-sheet">
        @media (min-width: 768px) {
            .x .c2-5 {
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-p {
                font-size: 38px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-2e {
                width: auto;
            }
        }

        @media (min-width: 768px) {
            .x .c2-2p {
                margin-top: 0px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-2q {
                margin-right: -24px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-2r {
                margin-bottom: -48px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-2s {
                margin-left: -24px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-30 {
                padding-top: 0px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-31 {
                padding-right: 24px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-32 {
                padding-bottom: 48px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-33 {
                padding-left: 24px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-3i {
                font-size: 22px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-58 {
                margin-bottom: 0px;
            }
        }

        @media (min-width: 768px) {
            .x .c2-5b {
                padding-bottom: 0px;
            }
        }
    </style>
    <link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/60a64d95945759c7/styles.css">
    <style type="text/css" data-glamor="cxs-md-sheet">
        @media (min-width: 1024px) {
            .x .c2-6 {
                font-size: 16px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-q {
                max-width: none;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-r {
                margin-top: 0px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-s {
                margin-right: 0px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-t {
                margin-bottom: 0px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-u {
                margin-left: 0px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-v {
                font-size: 38px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-2f {
                padding-top: 16px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-2g {
                padding-bottom: 16px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-2h {
                padding-left: 48px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-2i {
                padding-right: 48px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-3j {
                font-size: 22px;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-4o {
                width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-4p {
                position: static;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-4q {
                display: none;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-4u {
                display: block;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-5c {
                padding-bottom: 80px !important;
            }
        }

        @media (min-width: 1024px) {
            .x .c2-5d:last-of-type {
                padding-bottom: 0px !important;
            }
        }
    </style>
    <style data-glamor="cxs-lg-sheet" type="text/css">
        @media (min-width: 1280px) {
            .x .c1-f {
                font-size: 16px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-37 {
                font-size: 44px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-5w {
                width: 1160px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-6l {
                font-size: 62px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-6x {
                font-size: 22px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-8t {
                font-size: 14px;
            }
        }

        @media (min-width: 1280px) {
            .x .c1-92 {
                font-size: 18px;
            }
        }

        @media (min-width: 1280px) {
            .x .c2-7 {
                font-size: 16px;
            }
        }

        @media (min-width: 1280px) {
            .x .c2-w {
                font-size: 44px;
            }
        }

        @media (min-width: 1280px) {
            .x .c2-3k {
                font-size: 22px;
            }
        }
    </style>
    <style data-glamor="cxs-xl-sheet" type="text/css">
        @media (min-width: 1536px) {
            .x .c1-g {
                font-size: 18px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-38 {
                font-size: 48px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-5x {
                width: 1280px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-6m {
                font-size: 70px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-6y {
                font-size: 24px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-8u {
                font-size: 16px;
            }
        }

        @media (min-width: 1536px) {
            .x .c1-93 {
                font-size: 20px;
            }
        }

        @media (min-width: 1536px) {
            .x .c2-8 {
                font-size: 18px;
            }
        }

        @media (min-width: 1536px) {
            .x .c2-x {
                font-size: 48px;
            }
        }

        @media (min-width: 1536px) {
            .x .c2-3l {
                font-size: 24px;
            }
        }
    </style>
    <style type="text/css">
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        .page-inner {
            background-color: rgb(255, 255, 255);
            min-height: 100vh;
        }
    </style>
</head>

<body class="x  x-fonts-karla">
    <div id="layout-9-e-4-f-5-c-9-f-d-5-c-6-4697-9497-4-aea-9-c-707-fe-9" class="layout layout-layout layout-layout-layout-28 locale-en-US lang-en">
        <div data-ux="Page" id="page-2" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
            <div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                <div id="036390f2-ff7e-484a-a1c2-738eca78b1b0" class="widget widget-header widget-header-header-9">
                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                            <div>
                                <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div>
                                    <div data-ux="Block" id="header_parallax5" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" style="transform: none;">
                                        <div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div>
                                    </div>
                                    <nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-d c1-v c1-w c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-1t c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-1w c1-11 c1-s c1-1x c1-t c1-1y c1-1z c1-1f c1-20 c1-21 c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-11 c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                        <a rel="" typography="LinkAlpha" data-ux="Link" data-page="587c3d57-3799-4af9-bd74-7dd6e71e5b8c" title="Bolevar" href="" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page"
                                                            data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.6.click,click">
                                                            <div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingEpsilon" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-1" logotext="Bolevar" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r c2-s c2-t c2-u c2-v c2-w c2-x x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-y c2-z c2-k c2-m c2-p c2-v c2-w c2-x x-d-ux x-d-aid x-d-route">Bolevar</span></h3>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-39 c1-1m c1-b c1-c c1-3a c1-3b c1-1p c1-1q c1-3c c1-1s c1-d c1-16 c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-3h c1-3i c1-27 c1-28 c1-3j c1-2a c1-d c1-3k c1-3l c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux">
                                                    <nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-11 c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                        <div data-ux="Block" id="n-310-navId-1" class="x-el x-el-div c1-1 c1-2 c1-q c1-1f c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4w c1-2w c1-4x c1-4y c1-q c1-4z c1-2b c1-b c1-c c1-50 c1-d c1-e c1-f c1-g x-d-ux" style="visibility: hidden;">
                                                                <div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script></span></div>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-1n c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-51 c1-27 c1-28 c1-3j c1-2a c1-d c1-52 c1-35 c1-34 c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-11 c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                        <a rel="" typography="LinkAlpha" data-ux="Link" data-page="587c3d57-3799-4af9-bd74-7dd6e71e5b8c" title="Bolevar" href="" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page"
                                                            data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.13.click,click">
                                                            <div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingEpsilon" fontsizemap="[object Object]" data-ux="LogoHeading" id="logo-container-2" logotext="Bolevar" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r c2-s c2-t c2-u c2-v c2-w c2-x x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-y c2-z c2-k c2-m c2-p c2-v c2-w c2-x x-d-ux x-d-aid x-d-route">Bolevar</span></h3>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-3h c1-3i c1-27 c1-28 c1-3j c1-2a c1-d c1-3k c1-53 c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux">
                                                    <nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-11 c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                        <div data-ux="Block" id="n-311-navId-2" class="x-el x-el-div c1-1 c1-2 c1-q c1-1f c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4w c1-2w c1-4x c1-4y c1-q c1-4z c1-2b c1-b c1-c c1-50 c1-d c1-e c1-f c1-g x-d-ux" style="visibility: hidden;">
                                                                <div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="3" data-aid="NAV_MORE" ignorecloseattr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c2-9 c2-2 c2-10 c2-a c2-b c2-11 c2-12 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-k c2-l c2-4 c2-n c2-1d c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.4.click,click"><div style="pointer-events: none; display: flex; align-items: center;" data-aid="NAV_DROPDOWN"><span style="margin-right: 4px;">More</span>
                                                                    <svg
                                                                        viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c2-1p c2-y c2-1q c2-1r c2-14 c2-k c2-4 c2-1m c2-1n c2-5 c2-6 c2-7 c2-8 x-d-ux">
                                                                        <path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path>
                                                                        </svg>
                                                                </div>
                                                                </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                </div>
                                                </nav>
                                            </div>
                                        </div>
                            </div>
                            </nav>
                            <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-2w c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-5t c1-d c1-16 c1-5u c1-5v c1-17 c1-18 c1-19 c1-1a c1-e c1-5w c1-f c1-5x c1-g x-d-ux">
                                <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5y c1-1j c1-2x c1-1l c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-5z c1-11 c1-s c1-5s c1-t c1-5r c1-1z c1-1f c1-1n c1-1o c1-60 c1-61 c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-d c1-62 c1-63 c1-64 c1-65 c1-v c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-61 c1-66 c1-4 c1-q c1-67 c1-68 c1-69 c1-b c1-c c1-d c1-65 c1-16 c1-6a c1-6b c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-67 c1-b c1-c c1-d c1-6c c1-6d c1-6e c1-e c1-f c1-g x-d-ux">
                                                <h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-6f c1-2 c1-2i c1-2j c1-2v c1-x c1-y c1-1j c1-6g c1-q c1-2c c1-2y c1-6h c1-30 c1-6i c1-6j c1-6k c1-6l c1-6m x-d-ux x-d-aid x-d-route">Welcome to our humble home</h1>
                                                <div typography="HeadingDelta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-2u c1-2 c1-2i c1-2j c1-6n c1-1j c1-6o c1-2b c1-11 c1-6p c1-6q c1-6r c1-6s c1-b c1-2y c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route x-rt">
                                                    <p style="margin:0"><span>Follow our nutty vacations, wild sporting events, fine arts, and zany get-togethers.</span></p>
                                                </div>
                                                <div id="bs-6" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#f42a66d9-796c-4d0e-bbe2-276361bc4eef" target="" data-tccl="ux2.header.cta_button.click,click" data-page="587c3d57-3799-4af9-bd74-7dd6e71e5b8c" data-section-jump="f42a66d9-796c-4d0e-bbe2-276361bc4eef" class="x-el x-el-a c2-9 c2-2 c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-y c2-i c2-10 c2-12 c2-b c2-a c2-h c2-z c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-27 c2-k c2-l c2-n c2-4 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-5 c2-2f c2-2g c2-2h c2-2i c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Say Hi!</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-7t c1-11 c1-s c1-4u c1-t c1-4v c1-1z c1-1f c1-1n c1-1o c1-7u c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-d c1-7v c1-7w c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1o c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="https://img1.wsimg.com/isteam/stock/10337/:/" alt="image1" data-ux="HeaderMediaImage" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-11 c1-7x c1-x c1-y c1-7y c1-1l c1-7z c1-80 c1-81 c1-82 c1-b c1-c c1-d c1-3p c1-3q c1-83 c1-84 c1-6c c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"></div>
                                    </div>
                                </div>
                            </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div id="8eb5d024-6765-44f2-80fc-b9b8fe1c8c5c" class="widget widget-introduction widget-introduction-introduction-1">
                <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                    <div>
                        <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-85 c1-86 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux">
                            <div data-ux="SplitLayout" data-aid="SPLIT_LAYOUT_RENDERED" class="x-el x-el-div x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-d c1-87 c1-88 c1-e c1-f c1-g x-d-ux x-d-aid">
                                <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5y c1-1j c1-1k c1-39 c1-1m c1-b c1-c c1-1p c1-1q c1-3c c1-1s c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-7t c1-11 c1-s c1-1x c1-3e c1-1y c1-b c1-c c1-27 c1-28 c1-3j c1-2a c1-d c1-89 c1-8a c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8b c1-8c c1-q c1-b c1-c c1-d c1-8d c1-8e c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/6778/:/" alt="image2" data-ux="Image" data-field-id="image" data-field-route="/imagePivot" class="x-el x-el-img c1-1 c1-2 c1-11 c1-4 c1-x c1-y c1-1j c1-1l c1-7z c1-8f c1-8g c1-8h c1-b c1-c c1-d c1-8i c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid"></div>
                                    </div>
                                    <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-7t c1-11 c1-s c1-1x c1-3e c1-1y c1-b c1-c c1-27 c1-28 c1-3j c1-2a c1-d c1-89 c1-8a c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-8g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="VerticalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-8g c1-7x c1-1f c1-1n c1-8j c1-61 c1-20 c1-8k c1-3e c1-b c1-c c1-8l c1-d c1-8m c1-8n c1-8o c1-8p c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <h6 typography="DetailsAlpha" data-ux="Details" data-route="secondaryTitle" data-aid="SECONDARY_TITLE_RENDERED" class="x-el x-el-h6 c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-6o c1-20 c1-b c1-2y c1-8q c1-6u c1-8r c1-8s c1-8t c1-8u x-d-ux x-d-route x-d-aid">This is your introduction.</h6>
                                                    <h2 typography="HeadingEpsilon" data-ux="HeadingMajor" data-route="sectionTitle" data-aid="SECTION_TITLE_RENDERED" class="x-el x-el-h2 c1-2u c1-2 c1-2i c1-2j c1-8v c1-2w c1-2x c1-1j c1-1l c1-20 c1-s c1-4u c1-t c1-4v c1-2c c1-2y c1-2z c1-30 c1-8w c1-32 c1-52 c1-v c1-3q c1-w c1-3p c1-17 c1-34 c1-19 c1-35 c1-36 c1-37 c1-38 x-d-ux x-d-route x-d-aid">Welcome</h2>
                                                    <div data-ux="HorizontalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-8x c1-4 c1-1f c1-1n c1-8j c1-8y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div typography="BodyBeta" data-ux="Text" data-route="description" data-aid="DESCRIPTION_TEXT" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-1l c1-11 c1-b c1-2y c1-8z c1-6u c1-90 c1-91 c1-92 c1-93 x-d-ux x-d-route x-d-aid x-rt">
                                                            <p style="margin:0"><span class="x-el x-el-span c1-94 c1-95 c1-b c1-8z c1-90 c1-91 c1-92 c1-93 x-d-ux">What do you want your visitors to know about you?</span></p>
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
                </div>
            </div>
            <div id="47db73ac-d08a-4fce-9346-d25b780cb9d8" class="widget widget-gallery widget-gallery-gallery-6">
                <div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                    <div>
                        <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux">
                            <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-5t c1-d c1-96 c1-87 c1-88 c1-e c1-5w c1-f c1-5x c1-g x-d-ux">
                                <h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-2u c1-2 c1-2i c1-2j c1-97 c1-2w c1-2x c1-1j c1-98 c1-k c1-20 c1-2c c1-6t c1-2y c1-30 c1-6v c1-99 c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2>
                                <div id="bs-7"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-11 c2-2j c2-2k c2-2l c2-f c2-2m c2-2n c2-2o c2-3 c2-4 c2-2p c2-2q c2-2r c2-2s c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2j c2-2t c2-2u c2-2v c2-h c2-2w c2-2x c2-2y c2-2z c2-3 c2-4 c2-30 c2-31 c2-32 c2-33 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-34 c2-14 c2-12 c2-35 c2-3 c2-4 c2-36 c2-37 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/6777/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-z c2-38 c2-39 c2-f c2-g c2-3a c2-3b c2-3c c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-34 c2-14 c2-12 c2-35 c2-3 c2-4 c2-36 c2-37 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/51702/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-z c2-38 c2-39 c2-f c2-g c2-3a c2-3b c2-3c c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-34 c2-14 c2-12 c2-35 c2-3 c2-4 c2-36 c2-37 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/143/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-z c2-38 c2-39 c2-f c2-g c2-3a c2-3b c2-3c c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div id="f42a66d9-796c-4d0e-bbe2-276361bc4eef" class="widget widget-contact widget-contact-contact-7">
                <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                    <div>
                        <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux">
                            <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-5t c1-d c1-96 c1-87 c1-88 c1-e c1-5w c1-f c1-5x c1-g x-d-ux">
                                <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5y c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-t c1-1y c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux">
                                        <h2 typography="HeadingBeta" data-ux="SectionHeading" data-route="sectionTitle" data-aid="CONTACT_SECTION_TITLE_REND" class="x-el x-el-h2 c1-2u c1-2 c1-2i c1-2j c1-97 c1-2w c1-2x c1-1j c1-98 c1-k c1-20 c1-2c c1-6t c1-2y c1-30 c1-6v c1-99 c1-6w c1-6x c1-6y x-d-ux x-d-route x-d-aid"><span data-ux="Element" class="">Say Hi!</span></h2>
                                    </div>
                                </div>
                                <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5y c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-7t c1-11 c1-s c1-1x c1-t c1-1y c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-89 c1-8a c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                <div>
                                                    <div id="f42a66d9-796c-4d0e-bbe2-276361bc4eef-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-9 c2-2 c2-a c2-b c2-3d c2-d c2-e c2-f c2-3e c2-3 c2-l c2-3f c2-3g c2-3h c2-3i c2-3j c2-3k c2-3l x-d-ux x-d-aid x-d-route x-d-field-route">We miss you :-) </h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="We miss you :-) " formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="bolevar.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="9e4f5c9f-d5c6-4697-9497-4aea9c707fe9" pageid="587c3d57-3799-4af9-bd74-7dd6e71e5b8c" accountid="3dac7ca0-1a81-11ea-81ac-3417ebe724ff" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-3m c2-3n c2-41 c2-42 c2-1x c2-43 c2-44 c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-46 c2-47 c2-48 c2-49 c2-4a c2-4b c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-4e c2-4f c2-4g c2-4h c2-4i c2-3 c2-l c2-4 c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input6" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-3m c2-3n c2-41 c2-42 c2-1x c2-43 c2-44 c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-46 c2-47 c2-48 c2-49 c2-4a c2-4b c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-4e c2-4f c2-4g c2-4h c2-4i c2-3 c2-l c2-4 c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-4j c2-4k c2-1s c2-1t c2-1x c2-43 c2-44 c2-4l c2-4m c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-9 c2-2 c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-4n c2-i c2-10 c2-12 c2-b c2-a c2-h c2-z c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-k c2-l c2-n c2-4 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-5 c2-4o c2-2f c2-2g c2-2h c2-2i c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 0px; height: 0px; visibility: hidden;"></div></form></div></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-7t c1-11 c1-s c1-1x c1-t c1-1y c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-89 c1-8a c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Block" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-20 c1-7y c1-b c1-c c1-ad c1-1p c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-98 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8v c1-2w c1-2x c1-1j c1-9d c1-b c1-2y c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route">Stay in the loop!</h4>
                                                    <div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-9d c1-ae c1-af c1-ag c1-ah c1-ai c1-aj c1-ak c1-al c1-am c1-an c1-ao c1-ap c1-aq c1-ar c1-as c1-at c1-au c1-av c1-aw c1-ax c1-ay c1-az c1-b0 c1-b1 c1-b2 c1-b3 c1-b4 c1-b5 c1-b6 c1-b c1-2y c1-c c1-6u c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt">
                                                        <p style="margin:0"><span>Want to know more about upcoming family events? Want to make sure we have your most-recent email address? Want to just share your thoughts? Send a message! Family is important, and everyone's individual voice should be, too!</span></p>
                                                    </div>
                                                </div>
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8v c1-2w c1-2x c1-1j c1-9d c1-b c1-2y c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route">gestorp</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div id="dd1d1025-3df6-4cee-a65e-0ec0564626de" class="widget widget-contact widget-contact-contact-4">
                <div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                    <div>
                        <div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-2w c1-2x c1-4v c1-4u c1-11 c1-1f c1-61 c1-q c1-3 c1-b7 c1-b c1-c c1-d c1-b8 c1-b9 c1-ba c1-e c1-f c1-g x-d-ux">
                            <div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1u c1-bb c1-11 c1-q c1-b c1-c c1-bc c1-bd c1-be c1-d c1-89 c1-8a c1-1c c1-bf c1-e c1-f c1-g x-d-ux">
                                <section data-ux="SectionSplit" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-4 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                    <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-d c1-3p c1-3q c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-17 c1-18 c1-19 c1-1a c1-e c1-f c1-g x-d-ux">
                                            <h2 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-2u c1-2 c1-2i c1-2j c1-97 c1-2w c1-2x c1-1j c1-98 c1-k c1-67 c1-2c c1-6t c1-2y c1-30 c1-6v c1-99 c1-bg c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2>
                                            <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-67 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-98 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8v c1-2w c1-2x c1-1j c1-9d c1-b c1-2y c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route">Better yet, see us in person!</h4>
                                                    <p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-9d c1-ae c1-af c1-ag c1-ah c1-ai c1-aj c1-ak c1-al c1-am c1-an c1-ao c1-ap c1-aq c1-ar c1-as c1-at c1-au c1-av c1-aw c1-ax c1-ay c1-az c1-b0 c1-b1 c1-b2 c1-b3 c1-b4 c1-b5 c1-b6 c1-b c1-2y c1-c c1-6u c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">We love our customers, so feel free to visit during normal business hours.</p>
                                                </div>
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8v c1-2w c1-2x c1-1j c1-9d c1-b c1-2y c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route">gestorp</h4>
                                                    <p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INFO_ADDRESS_REND" data-route="address" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-9d c1-b6 c1-b c1-2y c1-c c1-6u c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">1018 British Columbia Route 99, Vancouver, British Columbia V6Z 0A9, Canada</p>
                                                    <p typography="BodyAlpha" data-ux="ContentText" data-route="phone" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-9d c1-b6 c1-bh c1-b c1-2y c1-c c1-6u c1-d c1-e c1-f c1-g x-d-ux x-d-route">+<a rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_INFO_PHONE_REND" href="tel:16046828226" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-aid"
                                                            data-tccl="ux2.CONTACT.contact4.Content.Default.Link.Default.20.click,click">1 604-682-8226</a></p>
                                                </div>
                                                <div>
                                                    <div id="dd1d1025-3df6-4cee-a65e-0ec0564626de-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-4p c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_MOBILE" class="x-el x-el-div c2-1 c2-2 c2-4n c2-3 c2-4 c2-5 c2-4q c2-6 c2-7 c2-8 x-d-ux x-d-aid"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c2-9 c2-2 c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-y c2-i c2-10 c2-12 c2-b c2-a c2-h c2-z c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-4r c2-k c2-l c2-n c2-4 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-5 c2-2f c2-2g c2-2h c2-2i c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.8.click,click">Drop us a line!</button></div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP" class="x-el x-el-div c2-1 c2-2 c2-4s c2-4t c2-3 c2-4 c2-5 c2-4u c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP_REND" class="x-el x-el-div c2-1 c2-2 c2-4e c2-4v c2-4g c2-4w c2-4x c2-4y c2-4z c2-50 c2-51 c2-52 c2-z c2-3v c2-11 c2-53 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-z c2-3v c2-54 c2-55 c2-2y c2-56 c2-14 c2-11 c2-57 c2-53 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-9 c2-2 c2-a c2-b c2-3d c2-d c2-e c2-f c2-3e c2-3 c2-l c2-3f c2-3g c2-3i c2-3j c2-3k c2-3l x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" id="contact-form9" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="bolevar.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="9e4f5c9f-d5c6-4697-9497-4aea9c707fe9" pageid="587c3d57-3799-4af9-bd74-7dd6e71e5b8c" accountid="3dac7ca0-1a81-11ea-81ac-3417ebe724ff" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." infotitle="Better yet, see us in person!" info="We love our customers, so feel free to visit during normal business hours." class="x-el x-el-form c2-1 c2-2 c2-g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3v c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-11 c2-2j c2-2k c2-2l c2-f c2-2m c2-g c2-2o c2-3 c2-4 c2-2p c2-2q c2-58 c2-2s c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_FORM_COL1" class="x-el x-el-div c2-1 c2-2 c2-2j c2-2t c2-2u c2-59 c2-h c2-2w c2-2x c2-5a c2-2z c2-3 c2-4 c2-30 c2-31 c2-5b c2-33 c2-5 c2-5c c2-6 c2-5d c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input10" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-3m c2-3n c2-41 c2-42 c2-1x c2-43 c2-44 c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-46 c2-47 c2-48 c2-49 c2-4a c2-4b c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input10" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-4e c2-4f c2-4g c2-4h c2-4i c2-3 c2-l c2-4 c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input11" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-3m c2-3n c2-41 c2-42 c2-1x c2-43 c2-44 c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-46 c2-47 c2-48 c2-49 c2-4a c2-4b c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input11" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-4e c2-4f c2-4g c2-4h c2-4i c2-3 c2-l c2-4 c2-3g c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-3v c2-3w c2-z c2-3x c2-3y c2-3z c2-40 c2-4j c2-4k c2-1s c2-1t c2-1x c2-43 c2-44 c2-4l c2-4m c2-3 c2-l c2-4 c2-3g c2-45 c2-2a c2-4c c2-4d c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTROLS" class="x-el x-el-div controls c2-1 c2-2 c2-5e c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-9 c2-2 c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-y c2-i c2-10 c2-12 c2-b c2-a c2-h c2-z c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-k c2-l c2-n c2-4 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-5 c2-2f c2-2g c2-2h c2-2i c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button><span typography="BodyAlpha" data-ux="Text" data-aid="CONTACT_CANCEL_BUTTON_REND" class="x-el x-el-span c2-1 c2-2 c2-a c2-b c2-5f c2-f c2-g c2-5g c2-5h c2-5i c2-i c2-5j c2-e c2-5k c2-3 c2-4 c2-3g c2-5l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid">Cancel</span></div>
                                                </div>
                                            </div>
                                            <div style="width: 0px; height: 0px; visibility: hidden;"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c2-9 c2-2 c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-y c2-i c2-10 c2-12 c2-b c2-a c2-h c2-z c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-4r c2-k c2-l c2-n c2-4 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-5 c2-2f c2-2g c2-2h c2-2i c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route x-d-field-route"
                                            data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.12.click,click">Drop us a line!</button></div>
                            </div>
                        </div>
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>
    <div data-ux="SplitItemImage" data-route="address" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1u c1-bb c1-11 c1-q c1-bw c1-bx c1-by c1-bz c1-b c1-c c1-bc c1-bd c1-be c1-c0 c1-c1 c1-d c1-89 c1-8a c1-1c c1-c2 c1-c3 c1-e c1-f c1-g x-d-ux x-d-route">
        <div data-ux="Map" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                <div data-ux="Block" id="dd1d1025-3df6-4cee-a65e-0ec0564626de-map-container" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div style="width: 0px; height: 0px; visibility: hidden;"></div></span></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="101013ca-fb2a-4774-858f-18b368ce2524" class="widget widget-footer widget-footer-footer-1">
        <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
            <div>
                <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-bl c1-bm c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux">
                    <div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-b c1-c c1-5t c1-d c1-96 c1-87 c1-88 c1-c4 c1-e c1-5w c1-f c1-5x c1-g x-d-ux">
                        <div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                            <div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-9d c1-b c1-2y c1-8q c1-6u c1-8r c1-8s c1-8t c1-8u x-d-ux x-d-aid x-d-route x-rt">
                                <p style="margin:0"><span class="x-el x-el-span c1-94 c1-95 c1-b c1-8q c1-8r c1-8s c1-8t c1-8u x-d-ux">Copyright © 2019 b - All Rights Reserved.</span></p>
                            </div>
                            <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5r c1-5s c1-11 c1-20 c1-c5 c1-b c1-c c1-5t c1-d c1-96 c1-e c1-5w c1-f c1-5x c1-g x-d-ux">
                                <ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-c6 c1-c7 c1-s c1-4u c1-t c1-4v c1-1j c1-2x c1-1l c1-2w c1-8w c1-b c1-c c1-c8 c1-c9 c1-d c1-e c1-f c1-g x-d-ux"></ul>
                            </div>
                            <hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-ca c1-cb c1-77 c1-1j c1-9d c1-cc c1-x c1-y c1-68 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                            <p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-6n c1-1j c1-1l c1-b c1-2y c1-8q c1-6u c1-8r c1-8s c1-8t c1-8u x-d-ux x-d-aid x-d-route"><span></span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.24.js"></script>
    <script type="text/javascript">
        window.cxs && window.cxs.setOptions({
            prefix: "c2-"
        });
    </script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/d3d78604439e32b7/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/17d6eee626c9d02f/script.js"></script>
    <script type="text/javascript">
        window.wsb['context-bs-1'] = {
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE",
            "fonts": ["karla", "default", ""],
            "colors": ["#75978D"],
            "fontScale": "medium",
            "locale": "en-US",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "587c3d57-3799-4af9-bd74-7dd6e71e5b8c": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "587c3d57-3799-4af9-bd74-7dd6e71e5b8c",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme28"
        };
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-1',
                componentName: 'Parallax',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "speed": -2,
            "uniqueId": "header_parallax5",
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Section",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-2',
                componentName: 'LogoText',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "logo": {
                "logoText": "Bolevar"
            },
            "fontPackLogoId": null,
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Logo",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/da0c836e0b7923e2/script.js"></script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-3',
                componentName: 'NavOverflow',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "style": {
                "marginHorizontal": "-6px",
                "marginVertical": "-6px",
                "paddingHorizontal": "6px",
                "paddingVertical": "6px"
            },
            "activeStyle": {
                "marginHorizontal": "-6px",
                "marginVertical": "-6px",
                "paddingHorizontal": "6px",
                "paddingVertical": "6px"
            },
            "label": "More",
            "parentId": "n-310-navId-1",
            "toggleId": "12-moreId",
            "hideDropdown": true,
            "inlineUtilitiesMenu": false,
            "navigation": [],
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Nav",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-4',
                componentName: 'LogoText',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "logo": {
                "logoText": "Bolevar"
            },
            "fontPackLogoId": null,
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Logo",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-5',
                componentName: 'NavOverflow',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "style": {
                "marginHorizontal": "-6px",
                "marginVertical": "-6px",
                "paddingHorizontal": "6px",
                "paddingVertical": "6px"
            },
            "activeStyle": {
                "marginHorizontal": "-6px",
                "marginVertical": "-6px",
                "paddingHorizontal": "6px",
                "paddingVertical": "6px"
            },
            "label": "More",
            "parentId": "n-311-navId-2",
            "splitNavId": "n-310-navId-1",
            "toggleId": "15-moreId",
            "inlineUtilitiesMenu": false,
            "navigation": [],
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Nav",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        ! function(n) {
            var t = {};

            function o(e) {
                if (t[e]) return t[e].exports;
                var r = t[e] = {
                    i: e,
                    l: !1,
                    exports: {}
                };
                return n[e].call(r.exports, r, r.exports, o), r.l = !0, r.exports
            }
            o.m = n, o.c = t, o.d = function(n, t, e) {
                o.o(n, t) || Object.defineProperty(n, t, {
                    configurable: !1,
                    enumerable: !0,
                    get: e
                })
            }, o.n = function(n) {
                var t = n && n.__esModule ? function() {
                    return n.default
                } : function() {
                    return n
                };
                return o.d(t, "a", t), t
            }, o.o = function(n, t) {
                return Object.prototype.hasOwnProperty.call(n, t)
            }, o.p = "", o(o.s = 0)
        }([function(n, t, o) {
            "use strict";
            window.wsb = window.wsb || {}, window.wsb.CTAButton = window.wsb.CTAButton || o(1).components.CTAButton
        }, function(n, t) {
            n.exports = Core
        }]);
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-6',
                componentName: 'CTAButton',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "ctaButton": {
                "enabled": true,
                "label": "Say Hi!",
                "pageId": "587c3d57-3799-4af9-bd74-7dd6e71e5b8c",
                "widgetId": "f42a66d9-796c-4d0e-bbe2-276361bc4eef"
            },
            "data-aid": "HEADER_CTA_BTN",
            "style": {
                "marginTop": "xsmall"
            },
            "data-tccl": "ux2.header.cta_button.click,click",
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "section": "default",
            "category": "neutral",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "036390f2-ff7e-484a-a1c2-738eca78b1b0",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Hero",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        Number(window.vctElements) || (window.vctElements = 0), window.vctElements++, window.markVisuallyComplete();
    </script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/f87df809b6167478/script.js"></script>
    <script type="text/javascript">
        window.wsb['context-bs-7'] = {
            "renderMode": "PUBLISH",
            "fonts": ["karla", "default", ""],
            "colors": ["#75978D"],
            "fontScale": "medium",
            "locale": "en-US",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "587c3d57-3799-4af9-bd74-7dd6e71e5b8c": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "587c3d57-3799-4af9-bd74-7dd6e71e5b8c",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme28"
        };
    </script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/8302b8df9080663b/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/9f8029ec36e41427/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/ece0a87d007d9a09/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/261649e036f2ab86/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/dd8d7e32d972a620/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/c3fffe7d4068656a/script.js"></script>
    <script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e4f5c9f-d5c6-4697-9497-4aea9c707fe9/gpub/44bd5b0c2cdbe1fb/script.js"></script>
    <script type="text/javascript">
        document.getElementById('page-2').addEventListener('click', function() {}, false);
    </script>
</body>

</html>
