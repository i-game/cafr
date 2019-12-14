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
<html data-scrapbook-source="https://gotinos.godaddysites.com/" data-scrapbook-create="20191214115327504" lang="en-US">
<head>
<link rel="icon" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:16,h:16,m" sizes="16x16"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:24,h:24,m" sizes="24x24"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:32,h:32,m" sizes="32x32"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:48,h:48,m" sizes="48x48"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:64,h:64,m" sizes="64x64"><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>gotinos</title><meta name="author" content="gotinos"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://gotinos.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/favicon/1364d82a-e6fc-4ada-8219-57165731c88d.jpg/:/rs=w:180,h:180,m"><meta property="og:url" content="https://gotinos.appspot.com/">
<meta property="og:site_name" content="gotinos">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/37493">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="gotinos">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/37493">
<meta name="twitter:image:alt" content="gotinos">
<meta name="theme-color" content="#f5f4dd"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
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
This license can also be found at this permalink: https://www.fontsquirrel.com/license/league-spartan

Copyright (c) September 22 2014, Micah Rich micah@micahrich.com, with Reserved Font Name: "League Spartan".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
@import url("https://img1.wsimg.com/blobby/go/font/LeagueSpartan/league-spartan.css");
@import url("");</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/9470305ab36391e6/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Helvetica, arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { overflow-wrap: break-word; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { line-height: 1.45; }
.x .c2-c { margin-left: 0px; }
.x .c2-d { margin-right: 0px; }
.x .c2-e { margin-top: 0px; }
.x .c2-f { margin-bottom: 0px; }
.x .c2-g { max-width: 100%; }
.x .c2-h { word-break: break-word; }
.x .c2-i { font-family: "League Spartan", arial, helvetica, sans-serif; }
.x .c2-j { color: rgb(27, 27, 27); }
.x .c2-k { font-size: 22px; }
.x .c2-l { font-weight: 400; }
.x .c2-q { display: inline-block; }
.x .c2-r { width: 100%; }
.x .c2-s { letter-spacing: 1px; }
.x .c2-t { text-transform: uppercase; }
.x .c2-u { padding-top: 8px; }
.x .c2-v { padding-bottom: 8px; }
.x .c2-w { padding-left: 12px; }
.x .c2-x { padding-right: 12px; }
.x .c2-y { background-color: rgb(245, 244, 221); }
.x .c2-z { border-style: none; }
.x .c2-10 { text-align: center; }
.x .c2-11 { text-decoration: none; }
.x .c2-12 { cursor: pointer; }
.x .c2-13 { width: auto; }
.x .c2-14 { color: rgb(39, 39, 38); }
.x .c2-15 { font-weight: 700; }
.x .c2-16 { font-size: 14px; }
.x .c2-17:hover { background-color: rgb(255, 255, 255); }
.x .c2-18:focus { outline: currentcolor none medium; }
.x .c2-19:active { background-color: rgb(216, 215, 195); }
.x .c2-1f { margin-top: 8px; }
.x .c2-1g { display: flex; }
.x .c2-1h { box-sizing: border-box; }
.x .c2-1i { flex-direction: row; }
.x .c2-1j { flex-wrap: wrap; }
.x .c2-1k { margin-right: -12px; }
.x .c2-1l { margin-bottom: -24px; }
.x .c2-1m { margin-left: -12px; }
.x .c2-1r { flex-grow: 1; }
.x .c2-1s { flex-shrink: 1; }
.x .c2-1t { flex-basis: 0%; }
.x .c2-1u { padding-top: 0px; }
.x .c2-1v { padding-bottom: 24px; }
.x .c2-26 { margin-bottom: 12px; }
.x .c2-27 { flex-direction: column; }
.x .c2-28 { margin-right: auto; }
.x .c2-29 { vertical-align: middle; }
.x .c2-2a { align-self: flex-start; }
.x .c2-2c { padding-bottom: 0px; }
.x .c2-2e { line-height: 1.75; }
.x .c2-2f { color: rgb(255, 255, 255); }
.x .c2-2g > * { align-self: flex-end; }
.x .c2-2h > * * * button { width: auto; }
.x .c2-2i > * * * button { margin-left: auto; }
.x .c2-2j > * * * button { margin-right: auto; }
.x .c2-2k { justify-content: center; }
.x .c2-2l { align-items: center; }
.x .c2-2m { text-shadow: none; }
.x .c2-2o { margin-bottom: 24px; }
.x .c2-2t { position: relative; }
.x .c2-2u { background-color: rgba(22, 22, 22, 0); }
.x .c2-2v { border-color: rgb(255, 255, 255); }
.x .c2-2w { border-top-width: 1px; }
.x .c2-2x { border-right-width: 1px; }
.x .c2-2y { border-bottom-width: 1px; }
.x .c2-2z { border-left-width: 1px; }
.x .c2-30 { border-radius: 0px; }
.x .c2-31 { padding-top: 23px; }
.x .c2-32 { padding-bottom: 12px; }
.x .c2-33 { padding-left: 8px; }
.x .c2-34 { padding-right: 8px; }
.x .c2-35 { border-bottom-style: solid; }
.x .c2-36 { border-top-style: none; }
.x .c2-37 { border-left-style: none; }
.x .c2-38 { border-right-style: none; }
.x .c2-39 { line-height: 1.71; }
.x .c2-3a::placeholder { color: inherit; }
.x .c2-3b:focus + label { font-size: 12px; }
.x .c2-3c:focus + label { top: 8px; }
.x .c2-3d:focus + label { color: rgb(255, 255, 255); }
.x .c2-3e:not([value=""]) + label { font-size: 12px; }
.x .c2-3f:not([value=""]) + label { top: 8px; }
.x .c2-3g:not([value=""]) + label { color: rgb(255, 255, 255); }
.x .c2-3h::-webkit-input-placeholder { color: inherit; }
.x .c2-3k { position: absolute; }
.x .c2-3l { top: 30%; }
.x .c2-3m { left: 15px; }
.x .c2-3n { transition: all 0.15s ease 0s; }
.x .c2-3o { pointer-events: none; }
.x .c2-3p { display: inline; }
.x .c2-3q { border-bottom-width: 2px; }
.x .c2-3r { padding-bottom: 4px; }
.x .c2-3s { padding-left: 0px; }
.x .c2-3t { padding-right: 0px; }
.x .c2-3u { background-color: transparent; }
.x .c2-3v:hover { color: rgb(255, 255, 255); }
.x .c2-3w:active { color: rgb(255, 255, 255); }
.x .c2-3x > p > span > a { font-family: Helvetica, arial, sans-serif; }
.x .c2-3y > p > span > a { color: rgb(27, 27, 27); }
.x .c2-3z > p > span > a { font-size: 22px; }
.x .c2-40 > p > span > a { font-weight: 400; }
.x .c2-41 > p > span > a { letter-spacing: 1px; }
.x .c2-42 > p > span > a { line-height: 1.45; }
.x .c2-43 > p > span > a { text-transform: none; }
.x .c2-44 > p > span > a:hover { color: rgb(120, 119, 108); }
.x .c2-45 { background-color: rgb(255, 255, 255); }
.x .c2-46 { border-color: rgb(226, 226, 226); }
.x .c2-47 { color: rgb(71, 71, 71); }
.x .c2-48:focus + label { color: rgb(120, 119, 108); }
.x .c2-49:not([value=""]) + label { color: rgb(120, 119, 108); }
.x .c2-4a { left: 8px; }
.x .c2-4b { resize: vertical; }
.x .c2-4c:hover > div { border-color: rgb(146, 145, 131); }
.x .c2-4d { border-radius: 4px; }
.x .c2-4e { z-index: -1; }
.x .c2-4f { opacity: 0; }
.x .c2-4g:disabled ~ div { pointer-events: none; }
.x .c2-4h:disabled ~ div { background-color: rgba(255, 255, 255, 0.7); }
.x .c2-4i:disabled ~ div { border-color: rgba(226, 226, 226, 0.7); }
.x .c2-4j:disabled ~ * { cursor: default; }
.x .c2-4k:checked ~ div { border-color: rgb(146, 145, 131); }
.x .c2-4l:checked ~ div::after { content: ""; }
.x .c2-4m:checked ~ div::after { display: block; }
.x .c2-4n:checked ~ div::after { top: 3px; }
.x .c2-4o:checked ~ div::after { left: 7px; }
.x .c2-4p:checked ~ div::after { width: 4px; }
.x .c2-4q:checked ~ div::after { height: 8px; }
.x .c2-4r:checked ~ div::after { transform: rotate(45deg); }
.x .c2-4s:checked ~ div::after { border-color: rgb(146, 145, 131); }
.x .c2-4t:checked ~ div::after { border-style: solid; }
.x .c2-4u:checked ~ div::after { position: absolute; }
.x .c2-4v:checked ~ div::after { border-top-width: 0px; }
.x .c2-4w:checked ~ div::after { border-right-width: 2px; }
.x .c2-4x:checked ~ div::after { border-bottom-width: 2px; }
.x .c2-4y:checked ~ div::after { border-left-width: 0px; }
.x .c2-4z { left: 0px; }
.x .c2-50 { min-width: 19px; }
.x .c2-51 { height: 19px; }
.x .c2-52 { border-color: rgba(119, 119, 119, 0.5); }
.x .c2-53 { border-radius: 2px; }
.x .c2-54 { border-style: solid; }
.x .c2-55 { box-shadow: 0px 1px 3px; }
.x .c2-56 { color: rgb(89, 89, 89); }
.x .c2-57 { line-height: inherit; }
.x .c2-58 { position: static; }
.x .c2-59 { margin-left: 8px; }
.x .c2-5a { vertical-align: top; }
.x .c2-5b { text-align: left; }
.x .c2-5c { border-color: rgb(120, 120, 108); }
.x .c2-5d { color: rgb(120, 119, 108); }
.x .c2-5e:hover { color: rgb(108, 107, 96); }
.x .c2-5f:active { color: rgb(120, 119, 108); }
.x .c2-5g { background-position: center center; }
.x .c2-5h { background-size: cover; }
.x .c2-5i { background-blend-mode: normal; }
.x .c2-5j { background-repeat: no-repeat; }
.x .c2-5k { position: fixed; }
.x .c2-5l { bottom: -500px; }
.x .c2-5m { right: 0px; }
.x .c2-5n { z-index: 10000; }
.x .c2-5o { height: auto; }
.x .c2-5p { border-radius: 0px; }
.x .c2-5q { overflow-y: auto; }
.x .c2-5r { transition: all 1s cubic-bezier(0.49, -0.29, 0.4, 1.26) 0s; }
.x .c2-5s { padding-top: 24px; }
.x .c2-5t { padding-right: 24px; }
.x .c2-5u { padding-left: 24px; }
.x .c2-62 { color: rgb(19, 19, 18); }
.x .c2-63 > p > span > a { color: rgb(19, 19, 18); }
.x .c2-64 > p > span > a:hover { color: rgb(22, 22, 22); }
.x .c2-65 a { text-decoration: underline; }
.x .c2-66 { max-height: 300px; }
.x .c2-68 { font-size: unset; }
.x .c2-69 { font-style: italic; }
.x .c2-6a { text-decoration: line-through; }
.x .c2-6b { text-decoration: underline; }
.x .c2-6c { padding-top: 4px; }
.x .c2-6d { background-color: rgb(22, 22, 22); }
.x .c2-6e { margin-top: 24px; }
.x .c2-6f { margin-bottom: 4px; }
.x .c2-6g { color: rgb(219, 219, 219); }
.x .c2-6h:hover { background-color: rgb(8, 8, 8); }
.x .c2-6i:active { background-color: rgb(42, 42, 42); }
.x .c2-6j { bottom: 0px; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px) {
  .x .c1-o { padding-top: 56px; }
}
@media (max-width: 767px) {
  .x .c1-p { padding-bottom: 56px; }
}
@media (max-width: 767px) {
  .x .c1-24 { width: 100%; }
}
@media (max-width: 767px) {
  .x .c1-3r { min-height: unset; }
}
@media (max-width: 767px) {
  .x .c1-63 { height: 280px; }
}
@media (max-width: 767px) {
  .x .c1-64 { width: 280px; }
}
@media (max-width: 767px) {
  .x .c1-69 { display: block; }
}
@media (max-width: 767px) {
  .x .c1-6u > :nth-child(n) { margin-bottom: 24px; }
}
@media (max-width: 767px) {
  .x .c1-6v > :last-child { margin-bottom: 0px !important; }
}
@media (max-width: 767px) {
  .x .c1-96 { font-size: 14px; }
}
@media (max-width: 767px) {
  .x .c1-c7 { display: flex; }
}
@media (max-width: 767px) {
  .x .c1-c8 { flex-direction: column; }
}
@media (max-width: 767px) {
  .x .c2-3j { font-size: 14px; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/74f2a26d1eda6e65/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-m { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-1a { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1b { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1o { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1p { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-1q { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1w { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-1x { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-1y { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-1z { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-20 { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-21 { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-22 { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2b { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2d { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-5v { width: 320px; }
}
@media (min-width: 768px) {
  .x .c2-5w { max-height: 500px; }
}
@media (min-width: 768px) {
  .x .c2-5x { border-radius: 7px; }
}
@media (min-width: 768px) {
  .x .c2-5y { margin-top: 24px; }
}
@media (min-width: 768px) {
  .x .c2-5z { margin-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-60 { margin-bottom: 24px; }
}
@media (min-width: 768px) {
  .x .c2-61 { margin-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-67 { max-height: 140px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/e91d32b324751496/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-n { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-1c { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-23 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-24 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-25 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2n { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2p { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2q { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2r { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2s { margin-bottom: 0px; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-1a { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-2u { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-4x { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-5f { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-65 { height: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-66 { max-height: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-67 { width: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-68 { max-width: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-6q { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-c2 { font-size: 12px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-o { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c2-1d { font-size: 14px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-1b { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-2v { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-4y { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-5g { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-6r { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-c3 { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-p { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c2-1e { font-size: 16px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-league-spartan"><div id="layout-09-aceea-6-bc-97-4-bb-1-9-f-26-eb-241-e-3-eeba-1" class="layout layout-layout layout-layout-layout-30 locale-en-US lang-en"><div data-ux="Page" id="page-2473" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-m c1-n c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-4 c1-3 c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-13 c1-14 c1-d c1-15 c1-16 c1-17 c1-18 c1-19 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-1v c1-11 c1-1w c1-1x c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-22 c1-23 c1-z c1-c c1-24 c1-25 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="gotinos" href="" class="x-el x-el-a c1-1 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2475.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="gotinos" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-q c2-r c2-i c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route">gotinos</span></h3></span></div></a></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-2x c1-2y c1-2z c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1f c1-30 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1x c1-34 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-22 c1-23 c1-z c1-c c1-24 c1-25 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="gotinos" href="" class="x-el x-el-a c1-1 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2477.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="gotinos" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-q c2-r c2-i c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route">gotinos</span></h3></span></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-31 c1-32 c1-33 c1-1f c1-35 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></nav><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><svg data-ux="SVG" class="x-el x-el-svg c1-1 c1-2 c1-37 c1-38 c1-39 c1-3a c1-3b c1-t c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><g fill="currentColor" fill-rule="evenodd" width="53" height="24"><path d="M26.5 24L53 0H0z"></path></g></svg></div></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg2479" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="accent" treatment="Fit" data-ht="Fit" overlayalpha="30" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-b c1-c c1-3i c1-3j c1-3k c1-d c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.3) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/37493/:/rs=w:1900,h:960,cg:true,m/cr=w:1900,h:960,a:cc/fx-gs&quot;); opacity: 1;"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-3l c1-3m c1-z c1-4 c1-2w c1-10 c1-11 c1-3n c1-b c1-c c1-12 c1-2x c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-2o c1-1l c1-2n c1-36 c1-3p c1-1n c1-3q c1-b c1-c c1-3r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-3s c1-3t c1-10 c1-3m c1-11 c1-3l c1-1f c1-36 c1-1n c1-3u c1-37 c1-b c1-c c1-3v c1-3w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1f c1-3x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-3l c1-3m c1-z c1-1f c1-3y c1-1n c1-36 c1-1s c1-31 c1-3s c1-1x c1-4 c1-10 c1-11 c1-3n c1-b c1-c c1-12 c1-3j c1-3z c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-40 c1-1n c1-4 c1-1h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-s c1-1f c1-3y c1-35 c1-41 c1-42 c1-4 c1-43 c1-44 c1-t c1-45 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="HeadingDelta" data-ux="Text" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-46 c1-2 c1-28 c1-29 c1-2m c1-1j c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-b c1-4d c1-2r c1-2h c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><h1 typography="HeadingAlpha" originaltext="A New Way to Use Your Phone" data-ux="Heading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-28 c1-4r c1-4s c1-2n c1-2o c1-4t c1-47 c1-4c c1-23 c1-4d c1-4u c1-2h c1-4v c1-4w c1-4x c1-4y x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div id="bs-3" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-z c2-q c2-10 c2-11 c2-12 c2-a c2-9 c2-g c2-13 c2-3 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-5h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-5i c1-z c1-10 c1-3m c1-11 c1-3l c1-5j c1-5k c1-b c1-c c1-5l c1-5m c1-3i c1-5n c1-3j c1-5o c1-1y c1-20 c1-5p c1-5q c1-5r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-1n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/ip/static/themeFocus/foreground_generic_circle_v2.png/:/" alt="image1" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-56 c1-v c1-w c1-1j c1-1l c1-5s c1-5t c1-5u c1-b c1-c c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-d c1-e c1-65 c1-66 c1-67 c1-68 c1-f c1-g x-d-ux x-d-aid x-d-ht"></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-2w c1-b c1-c c1-69 c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1f c1-3x c1-36 c1-6a c1-6b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-3y c1-36 c1-s c1-42 c1-6c c1-6d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-s c1-1f c1-3y c1-36 c1-1x c1-42 c1-4 c1-6e c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="HeadingDelta" data-ux="Text" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-46 c1-2 c1-28 c1-29 c1-2m c1-6f c1-6g c1-48 c1-49 c1-4a c1-4b c1-b c1-4d c1-2r c1-2h c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><h1 typography="HeadingAlpha" originaltext="A New Way to Use Your Phone" data-ux="Heading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-28 c1-29 c1-4s c1-2n c1-2o c1-6f c1-6g c1-23 c1-4d c1-4u c1-2h c1-4v c1-4w c1-4x c1-4y x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div id="bs-4" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-z c2-q c2-10 c2-11 c2-12 c2-a c2-9 c2-g c2-13 c2-1f c2-3 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-2o c1-1l c1-2n c1-36 c1-3p c1-1n c1-3q c1-b c1-c c1-3r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-3m c1-11 c1-3l c1-5j c1-5k c1-b c1-c c1-3i c1-5n c1-3j c1-5o c1-1y c1-20 c1-5p c1-5q c1-5r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-1n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/ip/static/themeFocus/foreground_generic_circle_v2.png/:/" alt="image2" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-56 c1-v c1-w c1-1j c1-1l c1-5s c1-5t c1-5u c1-b c1-c c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-d c1-e c1-65 c1-66 c1-67 c1-68 c1-f c1-g x-d-ux x-d-aid x-d-ht"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-3s c1-z c1-10 c1-3m c1-11 c1-3l c1-1f c1-36 c1-1n c1-6h c1-6i c1-3y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/37493/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc/fx-gs',document.getElementById('guacBg2479'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.3) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-6j c1-2n c1-2o c1-1j c1-6i c1-m c1-1x c1-23 c1-6k c1-6l c1-2h c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Our App</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1x c1-6s c1-6t c1-2n c1-2o c1-b c1-c c1-6u c1-6v c1-6w c1-6x c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-6y c1-6z c1-70 c1-b c1-c c1-1o c1-1p c1-71 c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-53 c1-11 c1-52 c1-1f c1-72 c1-6t c1-b c1-c c1-73 c1-74 c1-1y c1-75 c1-20 c1-76 c1-d c1-77 c1-78 c1-e c1-f c1-g x-d-ux"><div id="guacBg2480" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-1n c1-1x c1-36 c1-4 c1-79 c1-7a c1-7b c1-42 c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-1s c1-b c1-c c1-6u c1-6v c1-d c1-7k c1-7l c1-7m c1-7n c1-7o c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-3c c1-7c c1-3e c1-3f c1-3g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-23 c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-7p c1-1j c1-1l c1-1s c1-b c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-53 c1-11 c1-52 c1-1f c1-72 c1-6t c1-b c1-c c1-73 c1-74 c1-1y c1-75 c1-20 c1-76 c1-d c1-77 c1-78 c1-e c1-f c1-g x-d-ux"><div id="guacBg2481" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-1n c1-1x c1-36 c1-4 c1-79 c1-7a c1-7b c1-42 c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-1s c1-b c1-c c1-6u c1-6v c1-d c1-7k c1-7l c1-7m c1-7n c1-7o c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-3c c1-7c c1-3e c1-3f c1-3g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-23 c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-7p c1-1j c1-1l c1-1s c1-b c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-53 c1-11 c1-52 c1-1f c1-72 c1-6t c1-b c1-c c1-73 c1-74 c1-1y c1-75 c1-20 c1-76 c1-d c1-77 c1-78 c1-e c1-f c1-g x-d-ux"><div id="guacBg2482" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-1n c1-1x c1-36 c1-4 c1-79 c1-7a c1-7b c1-42 c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7q c1-1s c1-b c1-c c1-6u c1-6v c1-d c1-7r c1-7l c1-7s c1-7n c1-7t c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-3c c1-7c c1-3e c1-3f c1-3g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-23 c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-7p c1-1j c1-1l c1-1s c1-b c1-2q c1-2r c1-2h c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-5"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-6j c1-2n c1-2o c1-1j c1-6i c1-m c1-1x c1-23 c1-6k c1-6l c1-2h c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-1l c2-1m c2-3 c2-4 c2-1n c2-1o c2-1p c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-x c2-1v c2-w c2-3 c2-4 c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-5 c2-23 c2-24 c2-25 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-26 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/W1YKdjD/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-13 c2-c c2-28 c2-e c2-f c2-29 c2-2a c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-26 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/wV4JBaq/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-13 c2-c c2-28 c2-e c2-f c2-29 c2-2a c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-26 c2-1g c2-27 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/jaEpYJA/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-13 c2-c c2-28 c2-e c2-f c2-29 c2-2a c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg2483" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-82 c1-7c c1-3e c1-3f c1-3g c1-83 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-guac-image="loaded" style="background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:1900,h:480,cg:true,m/cr=w:1900,h:480,a:cc/fx-gs&quot;); opacity: 1;"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-84 c1-b c1-c c1-d c1-85 c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-6j c1-2n c1-2o c1-1j c1-86 c1-1x c1-23 c1-6k c1-3a c1-2h c1-6m c1-6p c1-6q c1-6r x-d-ux x-d-aid x-d-route">Subscribe</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-f c2-1m c2-3 c2-4 c2-1n c2-1o c2-2b c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-x c2-2c c2-w c2-3 c2-4 c2-1w c2-1x c2-1y c2-1z c2-20 c2-2d c2-22 c2-5 c2-23 c2-24 c2-25 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-2e c2-e c2-26 c2-10 c2-3 c2-2f c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-f c2-2g c2-2h c2-2i c2-2j c2-1g c2-27 c2-2k c2-2l c2-10 c2-2m c2-3 c2-4 c2-5 c2-2n c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2o c2-r c2-3 c2-4 c2-5 c2-2p c2-2q c2-2r c2-2s c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2u c2-2v c2-r c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-3 c2-2f c2-16 c2-l c2-39 c2-3a c2-18 c2-3b c2-3c c2-3d c2-3e c2-3f c2-3g c2-3h c2-3i c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3k c2-3l c2-3m c2-3n c2-3o c2-3 c2-2f c2-16 c2-l c2-39 c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-r c2-3 c2-4 c2-5 c2-2q c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button rel="" tccltracking="click" typography="NavBeta" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-s c2-t c2-11 c2-9 c2-a c2-3p c2-12 c2-2v c2-37 c2-38 c2-36 c2-3q c2-35 c2-3r c2-3s c2-3t c2-3u c2-3 c2-2f c2-16 c2-l c2-b c2-3v c2-3w c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/Qzw90G5/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc/fx-gs',document.getElementById('guacBg2483'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"]})</script></div> </div></div></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-s c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-6j c1-2n c1-2o c1-1j c1-6i c1-m c1-1x c1-23 c1-6k c1-6l c1-2h c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1h c2-1i c2-1j c2-e c2-1k c2-f c2-1m c2-3 c2-4 c2-1n c2-1o c2-2b c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1r c2-1s c2-1t c2-g c2-1u c2-x c2-2c c2-w c2-3 c2-4 c2-1w c2-1x c2-1y c2-1z c2-20 c2-2d c2-22 c2-5 c2-23 c2-24 c2-25 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-2k c2-10 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-s c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-2o c2-3 c2-j c2-k c2-l c2-3x c2-3y c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="gotinos.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="09aceea6-bc97-4bb1-9f26-eb241e3eeba1" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="e9d8ed83-1e67-11ea-81b6-3417ebe72595" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-f c2-2g c2-2h c2-2i c2-2j c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1v c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-2t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-45 c2-46 c2-r c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-3 c2-47 c2-16 c2-l c2-39 c2-3a c2-18 c2-3b c2-3c c2-48 c2-3e c2-3f c2-49 c2-3h c2-3i c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3k c2-3l c2-4a c2-3n c2-3o c2-3 c2-47 c2-16 c2-l c2-39 c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1v c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-2t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-45 c2-46 c2-r c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-3 c2-47 c2-16 c2-l c2-39 c2-3a c2-18 c2-3b c2-3c c2-48 c2-3e c2-3f c2-49 c2-3h c2-3i c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3k c2-3l c2-4a c2-3n c2-3o c2-3 c2-47 c2-16 c2-l c2-39 c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1v c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-45 c2-46 c2-r c2-2w c2-2x c2-2y c2-2z c2-30 c2-u c2-32 c2-33 c2-34 c2-35 c2-4b c2-36 c2-37 c2-38 c2-3 c2-47 c2-16 c2-l c2-39 c2-3a c2-18 c2-3h c2-3i c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2o c2-1g c2-2k c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><label data-ux="InputCheckbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-label c2-1 c2-2 c2-1g c2-2k c2-2l c2-2t c2-3 c2-4 c2-4c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" data-ux="InputCheckbox" type="checkbox" data-aid="CONTACT_FORM_EMAIL_OPT_IN" class="x-el x-el-input c2-1 c2-2 c2-45 c2-46 c2-r c2-2w c2-2x c2-2y c2-2z c2-4d c2-u c2-v c2-33 c2-34 c2-35 c2-3k c2-4e c2-4f c2-3 c2-47 c2-16 c2-l c2-39 c2-3a c2-18 c2-4g c2-4h c2-4i c2-4j c2-4k c2-4l c2-4m c2-4n c2-4o c2-4p c2-4q c2-4r c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-4y c2-3h c2-3i c2-3j c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid"><div data-ux="Element" class="x-el x-el-div c2-1 c2-2 c2-q c2-4z c2-50 c2-51 c2-52 c2-53 c2-54 c2-55 c2-56 c2-12 c2-2t c2-2w c2-2x c2-2y c2-2z c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></div><p typography="BodyAlpha" data-ux="Text" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-57 c2-e c2-f c2-q c2-58 c2-12 c2-59 c2-5a c2-5b c2-3 c2-j c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux">Sign up for our email list for updates, promotions, and more.</p></label></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1v c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-10 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button rel="" tccltracking="click" typography="NavBeta" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-s c2-t c2-11 c2-9 c2-a c2-3p c2-12 c2-5c c2-37 c2-38 c2-36 c2-3q c2-35 c2-3r c2-3s c2-3t c2-3u c2-3 c2-5d c2-16 c2-l c2-b c2-5e c2-5f c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 0px; height: 0px; visibility: hidden;"></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-6y c1-6z c1-70 c1-b c1-c c1-1o c1-1p c1-71 c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-5i c1-z c1-10 c1-53 c1-1d c1-52 c1-b c1-c c1-7u c1-7v c1-7w c1-1y c1-1z c1-7x c1-21 c1-d c1-7y c1-7z c1-80 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6h c1-1x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-46 c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-8e c1-b c1-2q c1-2r c1-2h c1-4e c1-9i c1-4g c1-4h c1-4i c1-4j c1-4k c1-9j c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-87 c1-1j c1-8e c1-ar c1-as c1-at c1-au c1-av c1-aw c1-ax c1-ay c1-az c1-b0 c1-b1 c1-b2 c1-b3 c1-b4 c1-b5 c1-b6 c1-b7 c1-b8 c1-b9 c1-ba c1-bb c1-bc c1-bd c1-be c1-bf c1-bg c1-bh c1-bi c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-bj c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><svg data-ux="SVG" class="x-el x-el-svg c1-1 c1-2 c1-37 c1-38 c1-39 c1-bk c1-t c1-bl c1-bm c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><g fill="currentColor" fill-rule="evenodd" width="53" height="24"><path d="M26.5 24L53 0H0z"></path></g></svg></div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-bn c1-bo c1-bp c1-bq c1-8l c1-br c1-b c1-c c1-o c1-p c1-d c1-bs c1-bt c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-2o c1-1l c1-2n c1-1n c1-1x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-bu c1-1t c1-1u c1-z c1-10 c1-3m c1-11 c1-3l c1-b c1-c c1-d c1-bv c1-bw c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-bx c1-4z c1-28 c1-29 c1-7p c1-1j c1-1l c1-b c1-aj c1-by c1-2h c1-bz c1-c0 c1-c1 c1-c2 c1-c3 x-d-ux x-d-aid x-d-route">Copyright © 2019 gotinos - All Rights Reserved.</p></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-bu c1-1t c1-1u c1-z c1-10 c1-3m c1-11 c1-3l c1-b c1-c c1-d c1-bv c1-bw c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-bx c1-4z c1-28 c1-29 c1-7p c1-c4 c1-1l c1-b c1-aj c1-by c1-2h c1-bz c1-c5 c1-85 c1-c1 c1-c2 c1-c3 x-d-ux x-d-aid x-d-route"><span> </span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1x c1-c4 c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-c6 c1-10 c1-3m c1-11 c1-3l c1-1j c1-2o c1-1l c1-2n c1-3n c1-b c1-c c1-c7 c1-c8 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><div id="bs-6"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Group" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div id="guacBg6" role="img" data-ux="Background" treatmentdata="[object Object]" class="x-el x-el-div c2-1 c2-2 c2-5g c2-5h c2-5i c2-5j c2-5k c2-6j c2-5m c2-5n c2-r c2-5o c2-5b c2-y c2-5p c2-5q c2-5r c2-5s c2-5t c2-1v c2-5u c2-e c2-d c2-f c2-c c2-3 c2-4 c2-5v c2-5w c2-5x c2-5y c2-5z c2-60 c2-61 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="Heading" data-aid="FOOTER_COOKIE_TITLE_RENDERED" class="x-el x-el-h4 c2-s c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-v c2-k c2-3 c2-62 c2-l c2-3x c2-63 c2-3z c2-40 c2-41 c2-42 c2-43 c2-64 c2-m c2-n c2-o c2-p x-d-ux x-d-aid">Cookie Policy</h4><div typography="BodyAlpha" data-ux="Text" data-aid="FOOTER_COOKIE_MESSAGE_RENDERED" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-2e c2-e c2-f c2-65 c2-66 c2-5q c2-3 c2-62 c2-4 c2-l c2-67 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-rt"><p style="margin: 0px;"><span>This website uses cookies. By continuing to use this site, you accept our use of cookies.</span></p></div><a typography="ButtonAlpha" data-ux="Button" data-aid="FOOTER_COOKIE_CLOSE_RENDERED" class="x-el x-el-a c2-s c2-t c2-6c c2-3r c2-w c2-x c2-6d c2-z c2-q c2-10 c2-11 c2-12 c2-a c2-9 c2-g c2-13 c2-6e c2-6f c2-3 c2-6g c2-15 c2-16 c2-6h c2-18 c2-6i c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer3.Group.Default.Button.Default.8.click,click">Accept &amp; Close</a></div></div></span></div></section></div> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.29.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/54df607d39889e45/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["league-spartan","default",""],"colors":["#f5f4dd"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme30"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"wordBreak":"break-word"},"logo":{"logoText":"gotinos"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"wordBreak":"break-word"},"logo":{"logoText":"gotinos"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","style":{"paddingVertical":"xsmall","paddingHorizontal":"small"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","style":{"marginTop":"xsmall","paddingVertical":"xsmall","paddingHorizontal":"small"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/ed8a4d6a8ce367ec/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-5'] = {"renderMode":"PUBLISH","fonts":["league-spartan","default",""],"colors":["#f5f4dd"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme30"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/64afd881494a23ee/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/a7ac51904ab82889/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/47a2534f145f7335/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e5191b3e1218ae2e/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/8e0e1ed6b3f39a1a/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/a4ecaad11ef8d846/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/09aceea6-bc97-4bb1-9f26-eb241e3eeba1/gpub/229a3f1a4b9b8c05/script.js"></script>
<script type="text/javascript">document.getElementById('page-2473').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"09aceea6-bc97-4bb1-9f26-eb241e3eeba1"}),_trfd.push({"pd":"2019-12-14T11:52:50.501Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
