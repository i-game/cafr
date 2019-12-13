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
<html data-scrapbook-source="https://dohanois.godaddysites.com/" data-scrapbook-create="20191213113404286" lang="en-US">
<head>
<link rel="icon" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:16,h:16,m" sizes="16x16"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:24,h:24,m" sizes="24x24"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:32,h:32,m" sizes="32x32"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:48,h:48,m" sizes="48x48"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:64,h:64,m" sizes="64x64"><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>dohanois</title><meta name="author" content="dohanois"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://dohanois.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/be75c993-d9e8-4388-a3f6-b8778778720b/favicon/87575218-cdac-4f44-aa43-9ac026c77849.jpg/:/rs=w:180,h:180,m"><meta property="og:url" content="https://dohanois.appspot.com/">
<meta property="og:site_name" content="dohanois">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/6yVqp2k">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="dohanois">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/6yVqp2k">
<meta name="twitter:image:alt" content="dohanois">
<meta name="theme-color" content="#a99677"><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/mhgGrlTs_PbFQOW4ejlxlxZn/recaptcha__ru.js"></script><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js"></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXjeu.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGR_p.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2011 by Ana Paula Megda (www.anamegda.com|anapbm@gmail.com), with Reserved Font Name Lusitana.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin */
@font-face {
  font-family: 'Lusitana';
  font-style: normal;
  font-weight: 400;
  src: local('Lusitana'), url("https://img1.wsimg.com/gfonts/s/lusitana/v7/CSR84z9ShvucWzsMKyhdTOI.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin */
@font-face {
  font-family: 'Lusitana';
  font-style: normal;
  font-weight: 700;
  src: local('Lusitana Bold'), local('Lusitana-Bold'), url("https://img1.wsimg.com/gfonts/s/lusitana/v7/CSR74z9ShvucWzsMKyDmafctaNY.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/b4806b4351cedd0a/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: "Lusitana", Georgia, serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { letter-spacing: 1px; }
.x .c2-a { text-transform: uppercase; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { overflow-wrap: break-word; }
.x .c2-d { line-height: 1.2; }
.x .c2-e { margin-left: 0px; }
.x .c2-f { margin-right: 0px; }
.x .c2-g { margin-top: 0px; }
.x .c2-h { margin-bottom: 0px; }
.x .c2-i { max-width: 100%; }
.x .c2-j { font-family: "Lato", arial, sans-serif; }
.x .c2-k { font-size: 22px; }
.x .c2-l { color: rgb(27, 27, 27); }
.x .c2-m { font-weight: 400; }
.x .c2-r { display: inline-block; }
.x .c2-s { width: 100%; }
.x .c2-t { letter-spacing: 0.063em; }
.x .c2-u { padding-top: 16px; }
.x .c2-v { padding-bottom: 16px; }
.x .c2-w { padding-left: 32px; }
.x .c2-x { padding-right: 32px; }
.x .c2-y { background-color: rgb(169, 150, 119); }
.x .c2-z { border-style: none; }
.x .c2-10 { text-align: center; }
.x .c2-11 { text-decoration: none; }
.x .c2-12 { cursor: pointer; }
.x .c2-13 { width: auto; }
.x .c2-14 { position: relative; }
.x .c2-15 { border-radius: 0px; }
.x .c2-16 { transition-property: background-color; }
.x .c2-17 { transition-duration: 0.3s; }
.x .c2-18 { transition-timing-function: ease-out; }
.x .c2-19 { margin-top: 32px; }
.x .c2-1a { color: rgb(0, 0, 0); }
.x .c2-1b { font-weight: 700; }
.x .c2-1c:hover { background-color: rgb(184, 163, 130); }
.x .c2-1d:focus { outline: currentcolor none medium; }
.x .c2-1e:active { background-color: rgb(141, 124, 98); }
.x .c2-25 { display: flex; }
.x .c2-26 { box-sizing: border-box; }
.x .c2-27 { flex-direction: row; }
.x .c2-28 { flex-wrap: wrap; }
.x .c2-29 { margin-right: -12px; }
.x .c2-2a { margin-bottom: -24px; }
.x .c2-2b { margin-left: -12px; }
.x .c2-2g { flex-grow: 1; }
.x .c2-2h { flex-shrink: 1; }
.x .c2-2i { flex-basis: 0%; }
.x .c2-2j { padding-top: 0px; }
.x .c2-2k { padding-right: 12px; }
.x .c2-2l { padding-bottom: 24px; }
.x .c2-2m { padding-left: 12px; }
.x .c2-2r { overflow: hidden; }
.x .c2-2s { margin-bottom: 16px; }
.x .c2-2t:hover .dim { opacity: 1; }
.x .c2-2u:hover .dim { transition: all 0.3s ease 0s; }
.x .c2-2v { margin-left: auto; }
.x .c2-2w { margin-right: auto; }
.x .c2-2x { vertical-align: middle; }
.x .c2-2y { max-height: 660px; }
.x .c2-2z { object-fit: cover; }
.x .c2-31 { padding-bottom: 0px; }
.x .c2-39 { line-height: 1.5; }
.x .c2-3a { color: rgb(94, 94, 94); }
.x .c2-3b { flex-direction: column; }
.x .c2-3c { justify-content: center; }
.x .c2-3d { align-items: center; }
.x .c2-3e { text-shadow: none; }
.x .c2-3g { margin-bottom: 24px; }
.x .c2-3l { background-color: rgb(255, 255, 255); }
.x .c2-3m { border-color: rgb(226, 226, 226); }
.x .c2-3n { border-top-width: 1px; }
.x .c2-3o { border-right-width: 1px; }
.x .c2-3p { border-bottom-width: 1px; }
.x .c2-3q { border-left-width: 1px; }
.x .c2-3r { border-style: solid; }
.x .c2-3s { padding-left: 16px; }
.x .c2-3t { padding-right: 16px; }
.x .c2-3u { padding-top: 23px; }
.x .c2-3v { padding-bottom: 8px; }
.x .c2-3w::placeholder { color: inherit; }
.x .c2-3x:focus + label { font-size: 12px; }
.x .c2-3y:focus + label { top: 8px; }
.x .c2-3z:focus + label { color: rgb(133, 116, 90); }
.x .c2-40:not([value=""]) + label { font-size: 12px; }
.x .c2-41:not([value=""]) + label { top: 8px; }
.x .c2-42:not([value=""]) + label { color: rgb(133, 116, 90); }
.x .c2-43::-webkit-input-placeholder { color: inherit; }
.x .c2-45 { position: absolute; }
.x .c2-46 { top: 30%; }
.x .c2-47 { left: 16px; }
.x .c2-48 { transition: all 0.15s ease 0s; }
.x .c2-49 { pointer-events: none; }
.x .c2-4a { line-height: 1.25; }
.x .c2-4b { resize: vertical; }
.x .c2-4c { padding-top: 8px; }
.x .c2-4d { color: rgb(89, 89, 89); }
.x .c2-4e { font-size: 12px; }
.x .c2-4j { letter-spacing: inherit; }
.x .c2-4k { text-transform: inherit; }
.x .c2-4l { display: inline; }
.x .c2-4m { color: rgb(133, 116, 90); }
.x .c2-4n { font-weight: inherit; }
.x .c2-4o:hover { color: rgb(118, 105, 82); }
.x .c2-4p:active { color: rgb(105, 93, 73); }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-m{padding-top:40px}}@media (max-width: 767px){.x .c1-n{padding-bottom:40px}}@media (max-width: 767px){.x .c1-t{position:relative}}@media (max-width: 767px){.x .c1-27{width:100%}}@media (max-width: 767px){.x .c1-3i{background-color:rgb(22, 22, 22)}}@media (max-width: 767px){.x .c1-4l{max-width:100%}}@media (max-width: 767px){.x .c1-4m{margin-left:0}}@media (max-width: 767px){.x .c1-4n{margin-right:0}}@media (max-width: 767px){.x .c1-6f > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-6g  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8y{display:flex}}@media (max-width: 767px){.x .c1-8z{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/b3c1f4c4d732e1f7/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-n { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-1f { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-2c { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2d { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2e { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-2f { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2n { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2o { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2p { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-2q { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-30 { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-32 { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-33 { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-34 { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-35 { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-4f { font-size: 12px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/f55933866ddc6062/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-o { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-1g { z-index: 1; }
}
@media (min-width: 1024px) {
  .x .c2-1h { margin-top: 32px; }
}
@media (min-width: 1024px) {
  .x .c2-1i::after { content: ""; }
}
@media (min-width: 1024px) {
  .x .c2-1j::after { position: absolute; }
}
@media (min-width: 1024px) {
  .x .c2-1k::after { right: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-1l::after { left: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-1m::after { top: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-1n::after { bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-1o::after { background-color: transparent; }
}
@media (min-width: 1024px) {
  .x .c2-1p::after { border-color: transparent; }
}
@media (min-width: 1024px) {
  .x .c2-1q::after { border-style: solid; }
}
@media (min-width: 1024px) {
  .x .c2-1r::after { color: rgb(0, 0, 0); }
}
@media (min-width: 1024px) {
  .x .c2-1s::after { box-shadow: 0px 0px 0px 1px inset; }
}
@media (min-width: 1024px) {
  .x .c2-1t::after { visibility: hidden; }
}
@media (min-width: 1024px) {
  .x .c2-1u::after { opacity: 0; }
}
@media (min-width: 1024px) {
  .x .c2-1v::after { z-index: -1; }
}
@media (min-width: 1024px) {
  .x .c2-1w::after { transition-property: opacity, visibility; }
}
@media (min-width: 1024px) {
  .x .c2-1x::after { transition-duration: 0.3s; }
}
@media (min-width: 1024px) {
  .x .c2-1y::after { transition-timing-function: ease-out; }
}
@media (min-width: 1024px) {
  .x .c2-1z::after { border-top-width: 4px; }
}
@media (min-width: 1024px) {
  .x .c2-20::after { border-right-width: 4px; }
}
@media (min-width: 1024px) {
  .x .c2-21::after { border-bottom-width: 4px; }
}
@media (min-width: 1024px) {
  .x .c2-22::after { border-left-width: 4px; }
}
@media (min-width: 1024px) {
  .x .c2-23:hover::after { visibility: visible; }
}
@media (min-width: 1024px) {
  .x .c2-24:hover::after { opacity: 1; }
}
@media (min-width: 1024px) {
  .x .c2-36 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-37 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-38 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-3f { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-3h { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-3i { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-3j { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-3k { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-4g { font-size: 12px; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-19 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-2w { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-4d { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-7o { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c1-8u { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-p { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c2-4h { font-size: 12px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-1a { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-2x { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-4e { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-7p { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-8v { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-q { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c2-4i { font-size: 14px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-lato"><div id="layout-be-75-c-993-d-9-e-8-4388-a-3-f-6-b-8778778720-b" class="layout layout-layout layout-layout-layout-18 locale-en-US lang-en"><div data-ux="Page" id="page-1109" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-4 c1-s c1-b c1-c c1-t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-q c1-v c1-w c1-x c1-3 c1-b c1-c c1-d c1-y c1-z c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1l c1-1m c1-1n c1-1o c1-d c1-1p c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-1s c1-14 c1-1t c1-1u c1-1v c1-1w c1-1b c1-1x c1-1y c1-b c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-23 c1-24 c1-25 c1-26 c1-14 c1-c c1-27 c1-28 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="dohanois" href="" class="x-el x-el-a c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-2g c1-2h c1-2i c1-2j c1-b c1-2k c1-c c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1114.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-1" logotext="dohanois" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-r c2-s c2-j c2-k c2-n c2-o c2-p c2-q x-d-ux x-d-aid x-d-route">dohanois</span></h3></span></div></a></div></div></div><div data-ux="Grid" id="n-11101117-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2y c1-1c c1-1d c1-2z c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-1l c1-1m c1-1n c1-1o c1-d c1-30 c1-31 c1-32 c1-33 c1-34 c1-35 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-36 c1-1r c1-37 c1-38 c1-1t c1-1u c1-1v c1-1w c1-1b c1-1k c1-1j c1-1x c1-b c1-c c1-1z c1-20 c1-21 c1-22 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-23 c1-24 c1-25 c1-26 c1-14 c1-c c1-27 c1-28 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="dohanois" href="" class="x-el x-el-a c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-2g c1-2h c1-2i c1-2j c1-b c1-2k c1-c c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1118.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-2" logotext="dohanois" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-r c2-s c2-j c2-k c2-n c2-o c2-p c2-q x-d-ux x-d-aid x-d-route">dohanois</span></h3></span></div></a></div></div></div></div></nav></div></div><div data-ux="Block" id="header_parallax1120" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" style="position: relative; top: 0px;"><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg1121" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="accent" treatment="Fill" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-39 c1-3a c1-3b c1-3c c1-1b c1-3d c1-3e c1-3f c1-3g c1-3h c1-b c1-c c1-3i c1-d c1-3j c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/6yVqp2k/:/rs=w:1900,h:840,cg:true,m/cr=w:1900,h:840,a:cc&quot;); opacity: 1;"><div data-ux="Block" id="header_parallax1122" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1q c1-2y c1-1k c1-3d c1-1j c1-1f c1-1h c1-b c1-c c1-d c1-3k c1-3l c1-30 c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2p c1-2q c1-12 c1-13 c1-14 c1-i c1-j c1-b c1-c c1-17 c1-d c1-18 c1-30 c1-31 c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1b c1-3d c1-1q c1-3r c1-37 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-3s c1-3t c1-14 c1-1t c1-1v c1-1b c1-3d c1-1q c1-3r c1-37 c1-1j c1-1k c1-b c1-c c1-27 c1-17 c1-d c1-18 c1-32 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-1x c1-1f c1-1k c1-1b c1-3d c1-4 c1-3u c1-3v c1-b c1-c c1-3w c1-d c1-3o c1-3x c1-3y c1-3k c1-3z c1-40 c1-32 c1-41 c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroCenterHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-23 c1-24 c1-2c c1-2d c1-2o c1-10 c1-11 c1-1f c1-1h c1-q c1-44 c1-45 c1-46 c1-47 c1-4 c1-1x c1-26 c1-48 c1-49 c1-2t c1-4a c1-4b c1-3m c1-3n c1-4c c1-4d c1-4e x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-4g c1-25 c1-4h c1-4i c1-4j c1-4k c1-1x c1-b c1-48 c1-2r c1-2t c1-4l c1-4m c1-4n c1-2u c1-4b c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-5" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-t c2-2 c2-u c2-v c2-w c2-x c2-y c2-z c2-r c2-10 c2-11 c2-12 c2-c c2-b c2-i c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-3 c2-1a c2-1b c2-4 c2-1c c2-1d c2-1e c2-1f c2-5 c2-1g c2-1h c2-6 c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-7 c2-8 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div></div><div data-ux="Block" id="header_parallax1123" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1q c1-1b c1-1k c1-3d c1-1j c1-1f c1-1h c1-b c1-c c1-d c1-3k c1-3l c1-1p c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-6"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2p c1-2q c1-12 c1-13 c1-14 c1-i c1-j c1-b c1-c c1-17 c1-d c1-18 c1-30 c1-31 c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1b c1-3d c1-1q c1-3r c1-37 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-3s c1-3t c1-14 c1-1t c1-1v c1-1b c1-3d c1-1q c1-3r c1-37 c1-1j c1-1k c1-b c1-c c1-27 c1-17 c1-d c1-18 c1-32 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-1x c1-1f c1-1k c1-1b c1-3d c1-4 c1-3u c1-3v c1-b c1-c c1-3w c1-d c1-3o c1-3x c1-3y c1-3k c1-3z c1-40 c1-32 c1-41 c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroCenterHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-23 c1-24 c1-2c c1-2d c1-2o c1-10 c1-11 c1-1f c1-1h c1-q c1-44 c1-45 c1-46 c1-47 c1-4 c1-1x c1-26 c1-48 c1-49 c1-2t c1-4a c1-4b c1-3m c1-3n c1-4c c1-4d c1-4e x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-4g c1-25 c1-4h c1-4i c1-4j c1-4k c1-1x c1-b c1-48 c1-2r c1-2t c1-4l c1-4m c1-4n c1-2u c1-4b c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-7" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-t c2-2 c2-u c2-v c2-w c2-x c2-y c2-z c2-r c2-10 c2-11 c2-12 c2-c c2-b c2-i c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-3 c2-1a c2-1b c2-4 c2-1c c2-1d c2-1e c2-1f c2-5 c2-1g c2-1h c2-6 c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-7 c2-8 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/6yVqp2k/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg1121'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-23 c1-24 c1-2c c1-2d c1-5z c1-2p c1-2q c1-1f c1-60 c1-k c1-61 c1-26 c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-23 c1-24 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux">Our App</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-23 c1-24 c1-62 c1-45 c1-63 c1-64 c1-1h c1-4 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux"></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1x c1-1j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1b c1-1c c1-1d c1-2z c1-1f c1-1g c1-65 c1-1i c1-b c1-c c1-1l c1-1m c1-66 c1-1o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-67 c1-14 c1-1t c1-1u c1-x c1-1w c1-1b c1-b c1-c c1-68 c1-69 c1-1z c1-20 c1-6a c1-22 c1-d c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-3d c1-1k c1-1x c1-1j c1-4 c1-6d c1-6e c1-3v c1-1q c1-b c1-c c1-6f c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-2c c1-2d c1-6h c1-2p c1-2q c1-1f c1-1h c1-1x c1-6i c1-b c1-2s c1-2r c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-1q c1-b c1-7b c1-c c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-67 c1-14 c1-1t c1-1u c1-x c1-1w c1-1b c1-b c1-c c1-68 c1-69 c1-1z c1-20 c1-6a c1-22 c1-d c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-3d c1-1k c1-1x c1-1j c1-4 c1-6d c1-6e c1-3v c1-1q c1-b c1-c c1-6f c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-2c c1-2d c1-6h c1-2p c1-2q c1-1f c1-1h c1-1x c1-6i c1-b c1-2s c1-2r c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-1q c1-b c1-7b c1-c c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-67 c1-14 c1-1t c1-1u c1-x c1-1w c1-1b c1-b c1-c c1-68 c1-69 c1-1z c1-20 c1-6a c1-22 c1-d c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-3d c1-1k c1-1x c1-1j c1-4 c1-6d c1-6e c1-3v c1-1q c1-b c1-c c1-6f c1-6g c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2c c1-2d c1-6h c1-2p c1-2q c1-1f c1-1h c1-1x c1-6i c1-b c1-2s c1-2r c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-1q c1-b c1-7b c1-c c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-6"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-23 c1-24 c1-2c c1-2d c1-5z c1-2p c1-2q c1-1f c1-60 c1-k c1-61 c1-26 c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-23 c1-24 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux">Photo Gallery</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-23 c1-24 c1-62 c1-45 c1-63 c1-64 c1-1h c1-4 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux"></h2><div id="bs-8"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-25 c2-26 c2-27 c2-28 c2-g c2-29 c2-2a c2-2b c2-3 c2-4 c2-2c c2-2d c2-2e c2-2f c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-26 c2-2g c2-2h c2-2i c2-i c2-2j c2-2k c2-2l c2-2m c2-3 c2-4 c2-2n c2-2o c2-2p c2-2q c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2r c2-14 c2-12 c2-2s c2-3 c2-4 c2-2t c2-2u c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/1036/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-i c2-s c2-2v c2-2w c2-g c2-h c2-2x c2-2y c2-2z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2r c2-14 c2-12 c2-2s c2-3 c2-4 c2-2t c2-2u c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/wV4JBaq/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-i c2-s c2-2v c2-2w c2-g c2-h c2-2x c2-2y c2-2z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2r c2-14 c2-12 c2-2s c2-3 c2-4 c2-2t c2-2u c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/wA0k7GB/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-i c2-s c2-2v c2-2w c2-g c2-h c2-2x c2-2y c2-2z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-23 c1-24 c1-2c c1-2d c1-6h c1-2p c1-2q c1-7j c1-7k c1-1x c1-26 c1-2s c1-7l c1-2t c1-7m c1-3k c1-7n c1-7o c1-7p x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-25 c2-26 c2-27 c2-28 c2-g c2-29 c2-h c2-2b c2-3 c2-4 c2-2c c2-2d c2-30 c2-2f c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-26 c2-2g c2-2h c2-2i c2-i c2-2j c2-2k c2-31 c2-2m c2-3 c2-4 c2-32 c2-33 c2-34 c2-2n c2-2o c2-35 c2-2q c2-5 c2-36 c2-37 c2-38 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-b c2-c c2-39 c2-g c2-2s c2-10 c2-3 c2-3a c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-h c2-25 c2-3b c2-3c c2-3d c2-10 c2-3e c2-3 c2-4 c2-5 c2-3f c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-3g c2-s c2-3 c2-4 c2-5 c2-3h c2-3i c2-3j c2-3k c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-3l c2-3m c2-s c2-3n c2-3o c2-3p c2-3q c2-15 c2-3r c2-3s c2-3t c2-3u c2-3v c2-3 c2-3a c2-4 c2-m c2-3w c2-1d c2-3x c2-3y c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-45 c2-46 c2-47 c2-48 c2-49 c2-3 c2-3a c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-s c2-3 c2-4 c2-5 c2-3i c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-t c2-2 c2-u c2-v c2-w c2-x c2-y c2-z c2-r c2-10 c2-11 c2-12 c2-c c2-b c2-i c2-s c2-14 c2-15 c2-16 c2-17 c2-18 c2-3 c2-1a c2-1b c2-4 c2-1c c2-1d c2-1e c2-1f c2-5 c2-1g c2-6 c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-7 c2-8 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-q c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-23 c1-24 c1-2c c1-2d c1-5z c1-2p c1-2q c1-1f c1-60 c1-k c1-61 c1-26 c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-23 c1-24 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux">Contact Us</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-23 c1-24 c1-62 c1-45 c1-63 c1-64 c1-1h c1-4 c1-26 c1-2r c1-2u c1-2v c1-2w c1-2x x-d-ux"></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-25 c2-26 c2-27 c2-28 c2-g c2-29 c2-2a c2-2b c2-3 c2-4 c2-2c c2-2d c2-2e c2-2f c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-26 c2-2g c2-2h c2-2i c2-i c2-2j c2-2k c2-2l c2-2m c2-3 c2-4 c2-32 c2-33 c2-34 c2-2n c2-2o c2-2p c2-2q c2-5 c2-36 c2-37 c2-38 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-3c c2-10 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-1 c2-2 c2-b c2-c c2-4a c2-e c2-f c2-g c2-3g c2-3 c2-l c2-k c2-m c2-n c2-o c2-p c2-q x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="dohanois.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="be75c993-d9e8-4388-a3f6-b8778778720b" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="bd14c243-1d9b-11ea-81b0-3417ebe72601" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2l c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input6" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3l c2-3m c2-s c2-3n c2-3o c2-3p c2-3q c2-15 c2-3r c2-3s c2-3t c2-3u c2-3v c2-3 c2-3a c2-4 c2-m c2-3w c2-1d c2-3x c2-3y c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input6" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-45 c2-46 c2-47 c2-48 c2-49 c2-3 c2-3a c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2l c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input7" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3l c2-3m c2-s c2-3n c2-3o c2-3p c2-3q c2-15 c2-3r c2-3s c2-3t c2-3u c2-3v c2-3 c2-3a c2-4 c2-m c2-3w c2-1d c2-3x c2-3y c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input7" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-45 c2-46 c2-47 c2-48 c2-49 c2-3 c2-3a c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2l c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="BodyAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-3l c2-3m c2-s c2-3n c2-3o c2-3p c2-3q c2-15 c2-3r c2-3s c2-3t c2-u c2-v c2-4b c2-3 c2-3a c2-4 c2-m c2-3w c2-1d c2-43 c2-44 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2l c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-10 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-t c2-2 c2-u c2-v c2-w c2-x c2-y c2-z c2-r c2-10 c2-11 c2-12 c2-c c2-b c2-i c2-s c2-14 c2-15 c2-16 c2-17 c2-18 c2-3 c2-1a c2-1b c2-4 c2-1c c2-1d c2-1e c2-1f c2-5 c2-1g c2-6 c2-1i c2-1j c2-1k c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-7 c2-8 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-4c c2-2l c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><p typography="DetailsBeta" data-ux="DetailsMinor" class="x-el x-el-p c2-1 c2-2 c2-b c2-c c2-39 c2-g c2-h c2-3 c2-4d c2-4e c2-m c2-4f c2-4g c2-4h c2-4i x-d-ux">This site is protected by reCAPTCHA and the Google <a rel="noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://policies.google.com/privacy" class="x-el x-el-a c2-4j c2-4k c2-11 c2-b c2-c c2-4l c2-12 c2-3 c2-4m c2-4e c2-4n c2-4o c2-4p c2-4f c2-4g c2-4h c2-4i x-d-ux" data-tccl="ux2.CONTACT.contact2.Form.Default.Link.Default.8.click,click">Privacy Policy</a> and <a rel="noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://policies.google.com/terms" class="x-el x-el-a c2-4j c2-4k c2-11 c2-b c2-c c2-4l c2-12 c2-3 c2-4m c2-4e c2-4n c2-4o c2-4p c2-4f c2-4g c2-4h c2-4i x-d-ux" data-tccl="ux2.CONTACT.contact2.Form.Default.Link.Default.9.click,click">Terms of Service</a> apply.</p></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-2z c1-1f c1-1g c1-65 c1-1i c1-i c1-1x c1-b c1-c c1-1l c1-1m c1-66 c1-1o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-7c c1-14 c1-1t c1-1u c1-x c1-1w c1-1f c1-2q c1-1h c1-2p c1-8n c1-b c1-c c1-7q c1-7r c1-7s c1-1z c1-20 c1-6a c1-22 c1-d c1-7t c1-7u c1-7v c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-2z c1-1f c1-1g c1-65 c1-1i c1-b c1-c c1-1l c1-1m c1-66 c1-1o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_SECTION_INFO_REND" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-67 c1-14 c1-1t c1-1u c1-x c1-1w c1-1k c1-1j c1-1x c1-b c1-c c1-1z c1-20 c1-6a c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-2c c1-2d c1-6h c1-2p c1-2q c1-1f c1-7y c1-b c1-2s c1-2r c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-7y c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-b c1-7b c1-c c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="GridCell" data-aid="CONTACT_SECTION_DETAILS_REND" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1q c1-1r c1-67 c1-14 c1-1t c1-1u c1-x c1-1w c1-1k c1-1j c1-1x c1-b c1-c c1-1z c1-20 c1-6a c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-2c c1-2d c1-6h c1-2p c1-2q c1-1f c1-7y c1-b c1-2s c1-2r c1-2t c1-2u c1-2v c1-2w c1-2x x-d-ux x-d-aid x-d-route">dohanois</h4></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-8o c1-8p c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Divider" class="x-el x-el-div c1-1 c1-2 c1-3 c1-w c1-x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><hr data-ux="DividerHR" class="x-el x-el-hr c1-1 c1-2 c1-62 c1-45 c1-63 c1-1f c1-1h c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-7y c1-b c1-8q c1-8r c1-2t c1-8s c1-8t c1-8u c1-8v x-d-ux x-d-aid x-d-route">Copyright © 2019 dohanois - All Rights Reserved.</p><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-1x c1-8w c1-b c1-c c1-17 c1-d c1-18 c1-e c1-19 c1-f c1-1a c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-8x c1-1t c1-3t c1-1v c1-3s c1-1f c1-2q c1-1h c1-2p c1-8n c1-b c1-c c1-8y c1-8z c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-62 c1-45 c1-63 c1-1f c1-7y c1-90 c1-10 c1-11 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2c c1-2d c1-4f c1-1f c1-1h c1-b c1-8q c1-8r c1-2t c1-8s c1-8t c1-8u c1-8v x-d-ux x-d-aid x-d-route"><span></span></p></div></div><div id="bs-9"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.27.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/5b1622f5b4aedf11/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["lato","default",""],"colors":["#a99677"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme18"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"dohanois"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"dohanois"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/17d6eee626c9d02f/script.js"></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-1.5,"uniqueId":"header_parallax1120","noTransform":true,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax1122","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","style":{"marginTop":"large","width":"auto","@md":{"marginTop":"large"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax1123","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","style":{"marginTop":"large","width":"auto","@md":{"marginTop":"large"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/f87df809b6167478/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-8'] = {"renderMode":"PUBLISH","fonts":["lato","default",""],"colors":["#a99677"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme18"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/fd94adb5cec306cd/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/b258a796f8969ea5/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/2b78239eb8e3a1a7/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/fd7c49f191a31b2a/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/334635b962f70adb/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/a4ecaad11ef8d846/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/be75c993-d9e8-4388-a3f6-b8778778720b/gpub/9893a50852366bce/script.js"></script>
<script type="text/javascript">document.getElementById('page-1109').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"be75c993-d9e8-4388-a3f6-b8778778720b"}),_trfd.push({"pd":"2019-12-13T11:33:40.188Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://www.google.com/recaptcha/api.js?render=6LfjspgUAAAAABsbjG9id6qXQKZkqb6_Hpce6ui_" id="recaptcha-script" async="true" defer="true"></script><div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;" hidden="true"><div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfjspgUAAAAABsbjG9id6qXQKZkqb6_Hpce6ui_&amp;co=aHR0cHM6Ly9kb2hhbm9pcy5nb2RhZGR5c2l0ZXMuY29tOjQ0Mw..&amp;hl=ru&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;size=invisible&amp;cb=bktfuga12nkk" role="presentation" name="a-rvt7p8unbewm" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="256" height="60" frameborder="0"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
