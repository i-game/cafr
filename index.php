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
<link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:16,h:16,m" sizes="16x16"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:24,h:24,m" sizes="24x24"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:32,h:32,m" sizes="32x32"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:48,h:48,m" sizes="48x48"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:64,h:64,m" sizes="64x64"><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>agromatika</title><meta name="author" content="agromatika"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://a124.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/favicon/f0d59cb9-9c1c-4296-8bf6-f5456a8d2017.jpg/:/rs=w:180,h:180,m"><meta property="og:url" content="https://agromatika.appspot.com/">
<meta property="og:site_name" content="agromatika">
<meta property="og:title" content="Welcome to agromatika">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/lbbrKgj">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="agromatika">
<meta name="twitter:description" content="Welcome to agromatika">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/lbbrKgj">
<meta name="twitter:image:alt" content="agromatika">
<meta name="theme-color" content="#4b4d50"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
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
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/85ddffe7abd53df8/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
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
.x .c2-s { display: flex; }
.x .c2-t { box-sizing: border-box; }
.x .c2-u { flex-direction: row; }
.x .c2-v { flex-wrap: wrap; }
.x .c2-w { flex-grow: 1; }
.x .c2-x { flex-shrink: 1; }
.x .c2-y { flex-basis: 0%; }
.x .c2-z { padding-top: 0px; }
.x .c2-10 { padding-right: 0px; }
.x .c2-11 { padding-bottom: 0px; }
.x .c2-12 { padding-left: 0px; }
.x .c2-13 { margin-left: -4px; }
.x .c2-14 { margin-right: -4px; }
.x .c2-15 { flex-basis: 50%; }
.x .c2-16 { max-width: 50%; }
.x .c2-17 { padding-top: 4px; }
.x .c2-18 { padding-right: 4px; }
.x .c2-19 { padding-bottom: 4px; }
.x .c2-1a { padding-left: 4px; }
.x .c2-1d { margin-left: auto; }
.x .c2-1e { margin-right: auto; }
.x .c2-1f { vertical-align: middle; }
.x .c2-1g { cursor: pointer; }
.x .c2-1h { height: auto; }
.x .c2-1i { margin-right: -12px; }
.x .c2-1j { margin-left: -12px; }
.x .c2-1o { padding-right: 12px; }
.x .c2-1p { padding-left: 12px; }
.x .c2-20 { line-height: 1.75; }
.x .c2-21 { margin-bottom: 12px; }
.x .c2-22 { text-align: center; }
.x .c2-23 > * { align-self: flex-end; }
.x .c2-24 > * * * button { width: auto; }
.x .c2-25 > * * * button { margin-left: auto; }
.x .c2-26 > * * * button { margin-right: auto; }
.x .c2-27 { flex-direction: column; }
.x .c2-28 { justify-content: center; }
.x .c2-29 { align-items: center; }
.x .c2-2a { text-shadow: none; }
.x .c2-2c { margin-bottom: 24px; }
.x .c2-2h { position: relative; }
.x .c2-2i { background-color: rgb(255, 255, 255); }
.x .c2-2j { border-color: rgb(226, 226, 226); }
.x .c2-2k { border-top-width: 1px; }
.x .c2-2l { border-right-width: 1px; }
.x .c2-2m { border-bottom-width: 1px; }
.x .c2-2n { border-left-width: 1px; }
.x .c2-2o { border-radius: 0px; }
.x .c2-2p { padding-top: 23px; }
.x .c2-2q { padding-bottom: 12px; }
.x .c2-2r { padding-left: 8px; }
.x .c2-2s { padding-right: 8px; }
.x .c2-2t { border-bottom-style: solid; }
.x .c2-2u { border-top-style: none; }
.x .c2-2v { border-left-style: none; }
.x .c2-2w { border-right-style: none; }
.x .c2-2x { color: rgb(71, 71, 71); }
.x .c2-2y { font-size: 14px; }
.x .c2-2z { line-height: 1.71; }
.x .c2-30::placeholder { color: inherit; }
.x .c2-31:focus { outline: currentcolor none medium; }
.x .c2-32:focus + label { font-size: 12px; }
.x .c2-33:focus + label { top: 8px; }
.x .c2-34:focus + label { color: rgb(75, 77, 80); }
.x .c2-35:not([value=""]) + label { font-size: 12px; }
.x .c2-36:not([value=""]) + label { top: 8px; }
.x .c2-37:not([value=""]) + label { color: rgb(75, 77, 80); }
.x .c2-38::-webkit-input-placeholder { color: inherit; }
.x .c2-3f { position: absolute; }
.x .c2-3g { top: 30%; }
.x .c2-3h { left: 15px; }
.x .c2-3i { transition: all 0.15s ease 0s; }
.x .c2-3j { pointer-events: none; }
.x .c2-3k { letter-spacing: 1px; }
.x .c2-3l { text-transform: uppercase; }
.x .c2-3m { text-decoration: none; }
.x .c2-3n { display: inline; }
.x .c2-3o { border-color: rgb(75, 77, 80); }
.x .c2-3p { border-bottom-width: 2px; }
.x .c2-3q { padding-left: 0px; }
.x .c2-3r { padding-right: 0px; }
.x .c2-3s { background-color: transparent; }
.x .c2-3t { color: rgb(75, 77, 80); }
.x .c2-3u:hover { color: rgb(75, 77, 80); }
.x .c2-3v:active { color: rgb(75, 77, 80); }
.x .c2-3w > p > span > a { font-family: Helvetica, arial, sans-serif; }
.x .c2-3x > p > span > a { color: rgb(27, 27, 27); }
.x .c2-3y > p > span > a { font-size: 22px; }
.x .c2-3z > p > span > a { font-weight: 400; }
.x .c2-40 > p > span > a { letter-spacing: 1px; }
.x .c2-41 > p > span > a { line-height: 1.45; }
.x .c2-42 > p > span > a { text-transform: none; }
.x .c2-43 > p > span > a:hover { color: rgb(75, 77, 80); }
.x .c2-45 { padding-bottom: 24px; }
.x .c2-46 { left: 8px; }
.x .c2-47 { padding-top: 8px; }
.x .c2-48 { resize: vertical; }
.x .c2-49 { display: block; }
.x .c2-4b { white-space: nowrap; }
.x .c2-4c { text-transform: inherit; }
.x .c2-4d { line-height: 1.5; }
.x .c2-4e:hover { border-color: rgb(75, 77, 80); }
.x .c2-4f { color: inherit; }
.x .c2-4g { transition: transform 0.33s ease-in-out 0s; }
.x .c2-4h { transform: rotate(0deg); }
.x .c2-4i { left: 4px; }
.x .c2-4j { background-position: center center; }
.x .c2-4k { background-size: cover; }
.x .c2-4l { background-blend-mode: normal; }
.x .c2-4m { background-repeat: no-repeat; }
.x .c2-4n { position: fixed; }
.x .c2-4o { bottom: -500px; }
.x .c2-4p { right: 0px; }
.x .c2-4q { z-index: 10000; }
.x .c2-4r { text-align: left; }
.x .c2-4s { background-color: rgb(75, 77, 80); }
.x .c2-4t { border-radius: 0px; }
.x .c2-4u { overflow-y: auto; }
.x .c2-4v { transition: all 1s cubic-bezier(0.49, -0.29, 0.4, 1.26) 0s; }
.x .c2-4w { padding-top: 24px; }
.x .c2-4x { padding-right: 24px; }
.x .c2-4y { padding-left: 24px; }
.x .c2-56 { padding-bottom: 8px; }
.x .c2-57 { color: rgb(255, 255, 255); }
.x .c2-58 > p > span > a { color: rgb(255, 255, 255); }
.x .c2-59 > p > span > a:hover { color: rgb(255, 255, 255); }
.x .c2-5a a { text-decoration: underline; }
.x .c2-5b { max-height: 300px; }
.x .c2-5d { font-size: unset; }
.x .c2-5e { font-weight: 700; }
.x .c2-5f { font-style: italic; }
.x .c2-5g { text-decoration: line-through; }
.x .c2-5h { text-decoration: underline; }
.x .c2-5i { border-style: none; }
.x .c2-5j { width: auto; }
.x .c2-5k { margin-top: 24px; }
.x .c2-5l { margin-bottom: 4px; }
.x .c2-5m { color: rgb(48, 48, 48); }
.x .c2-5n:hover { background-color: rgb(255, 255, 255); }
.x .c2-5o:active { background-color: rgb(226, 226, 226); }
.x .c2-5q { bottom: 0px; }</style>
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
  .x .c1-54 { height: 280px; }
}
@media (max-width: 767px) {
  .x .c1-55 { width: 280px; }
}
@media (max-width: 767px) {
  .x .c1-5a { display: block; }
}
@media (max-width: 767px) {
  .x .c1-6b > :nth-child(n) { margin-bottom: 12px; }
}
@media (max-width: 767px) {
  .x .c1-6c > :last-child { margin-bottom: 0px !important; }
}
@media (max-width: 767px) {
  .x .c1-90 { font-size: 14px; }
}
@media (max-width: 767px) {
  .x .c1-9h { text-align: center; }
}
@media (max-width: 767px) {
  .x .c1-ai { display: flex; }
}
@media (max-width: 767px) {
  .x .c1-aj { flex-direction: column; }
}
@media (max-width: 767px) {
  .x .c2-3a { font-size: 14px; }
}
@media (max-width: 767px) {
  .x .c2-44 { text-align: center; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/f6901541efa8634c/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-m { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-1k { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1l { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1m { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1q { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-1r { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-1s { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-1t { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1u { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-1v { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1w { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-3b { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-4z { width: 320px; }
}
@media (min-width: 768px) {
  .x .c2-50 { max-height: 500px; }
}
@media (min-width: 768px) {
  .x .c2-51 { border-radius: 7px; }
}
@media (min-width: 768px) {
  .x .c2-52 { margin-top: 24px; }
}
@media (min-width: 768px) {
  .x .c2-53 { margin-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-54 { margin-bottom: 24px; }
}
@media (min-width: 768px) {
  .x .c2-55 { margin-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-5c { max-height: 140px; }
}
@media (min-width: 768px) {
  .x .c2-5p { width: auto; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/67d5a662b1f7296/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-n { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-1b { flex-basis: 33.3333%; }
}
@media (min-width: 1024px) {
  .x .c2-1c { max-width: 33.3333%; }
}
@media (min-width: 1024px) {
  .x .c2-1x { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-1y { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-1z { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2b { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2d { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2e { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2f { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2g { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-3c { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-4a { width: 100%; }
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
  .x .c1-4f { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-56 { height: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-57 { max-height: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-58 { width: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-59 { max-width: 600px; }
}
@media (min-width: 1280px) {
  .x .c1-5q { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-93 { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-ae { font-size: 12px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-o { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c2-3d { font-size: 14px; }
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
  .x .c1-4g { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-5r { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-94 { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-af { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-p { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c2-3e { font-size: 16px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-league-spartan"><div id="layout-9-e-9-bd-054-14-cc-4-a-35-8-f-45-5-dbc-632-f-6-ce-7" class="layout layout-layout layout-layout-layout-30 locale-en-US lang-en"><div data-ux="Page" id="page-9601" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="7984367e-5615-49fd-ae89-2304476cf5a2" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-m c1-n c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-t c1-4 c1-3 c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-13 c1-14 c1-d c1-15 c1-16 c1-17 c1-18 c1-19 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-1v c1-11 c1-1w c1-1x c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-22 c1-23 c1-z c1-c c1-24 c1-25 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="fa37cb43-aad2-4648-8c6f-0195eb63c46b" title="agromatika" href="" class="x-el x-el-a c1-1 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.9603.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="agromatika" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-q c2-r c2-i c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route">agromatika</span></h3></span></div></a></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2w c1-b c1-c c1-2x c1-2y c1-2z c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1f c1-30 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1x c1-34 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-22 c1-23 c1-z c1-c c1-24 c1-25 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="fa37cb43-aad2-4648-8c6f-0195eb63c46b" title="agromatika" href="" class="x-el x-el-a c1-1 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-2k c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.9605.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="agromatika" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-q c2-r c2-i c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route">agromatika</span></h3></span></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-31 c1-32 c1-33 c1-1f c1-35 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></nav><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><svg data-ux="SVG" class="x-el x-el-svg c1-1 c1-2 c1-37 c1-38 c1-39 c1-3a c1-3b c1-t c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><g fill="currentColor" fill-rule="evenodd" width="53" height="24"><path d="M26.5 24L53 0H0z"></path></g></svg></div></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg9607" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="accent" treatment="Fit" data-ht="Fit" overlayalpha="30" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-3c c1-3d c1-3e c1-3f c1-3g c1-3h c1-b c1-c c1-3i c1-3j c1-3k c1-d c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.3) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/lbbrKgj/:/rs=w:1900,h:960,cg:true,m/cr=w:1900,h:960,a:cc/fx-gs&quot;); opacity: 1;"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-3l c1-3m c1-z c1-4 c1-2w c1-10 c1-11 c1-3n c1-b c1-c c1-12 c1-2x c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-2o c1-1l c1-2n c1-36 c1-3p c1-1n c1-3q c1-b c1-c c1-3r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-3s c1-3t c1-10 c1-3m c1-11 c1-3l c1-1f c1-36 c1-1n c1-3u c1-37 c1-b c1-c c1-3v c1-3w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1f c1-3x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-3l c1-3m c1-z c1-1f c1-3y c1-1n c1-36 c1-1s c1-31 c1-3s c1-1x c1-4 c1-10 c1-11 c1-3n c1-b c1-c c1-12 c1-3j c1-3z c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-40 c1-1n c1-4 c1-1h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-s c1-1f c1-3y c1-35 c1-41 c1-42 c1-4 c1-43 c1-44 c1-t c1-45 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" originaltext="Welcome to agromatika" data-ux="Heading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-28 c1-46 c1-47 c1-2n c1-2o c1-48 c1-49 c1-4a c1-23 c1-4b c1-4c c1-2h c1-4d c1-4e c1-4f c1-4g x-d-ux x-d-aid x-d-route">Welcome to agromatika</h1></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-4h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-4i c1-z c1-10 c1-3m c1-11 c1-3l c1-4j c1-4k c1-b c1-c c1-4l c1-4m c1-3i c1-4n c1-3j c1-4o c1-1y c1-20 c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-1n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/ip/static/themeFocus/foreground_generic_circle_v2.png/:/" alt="image1" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-4s c1-v c1-w c1-1j c1-1l c1-4t c1-4u c1-4v c1-b c1-c c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-d c1-e c1-56 c1-57 c1-58 c1-59 c1-f c1-g x-d-ux x-d-aid x-d-ht"></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-2w c1-b c1-c c1-5a c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1f c1-3x c1-36 c1-5b c1-5c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-3y c1-36 c1-s c1-42 c1-5d c1-5e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-s c1-1f c1-3y c1-36 c1-1x c1-42 c1-4 c1-5f c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" originaltext="Welcome to agromatika" data-ux="Heading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-28 c1-29 c1-47 c1-2n c1-2o c1-5g c1-5h c1-23 c1-4b c1-4c c1-2h c1-4d c1-4e c1-4f c1-4g x-d-ux x-d-aid x-d-route">Welcome to agromatika</h1></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-2o c1-1l c1-2n c1-36 c1-3p c1-1n c1-3q c1-b c1-c c1-3r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-3m c1-11 c1-3l c1-4j c1-4k c1-b c1-c c1-3i c1-4n c1-3j c1-4o c1-1y c1-20 c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-1n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/ip/static/themeFocus/foreground_generic_circle_v2.png/:/" alt="image2" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-4s c1-v c1-w c1-1j c1-1l c1-4t c1-4u c1-4v c1-b c1-c c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-d c1-e c1-56 c1-57 c1-58 c1-59 c1-f c1-g x-d-ux x-d-aid x-d-ht"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-3s c1-z c1-10 c1-3m c1-11 c1-3l c1-1f c1-36 c1-1n c1-5i c1-5j c1-3y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/lbbrKgj/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc/fx-gs',document.getElementById('guacBg9607'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.3) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div></div><div id="a7c7e777-512d-4fa0-9fd5-3acf58b02003" class="widget widget-about widget-about-about-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-5k c1-2n c1-2o c1-1j c1-5j c1-m c1-1x c1-23 c1-5l c1-2g c1-2h c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-5s c1-5t c1-5u c1-b c1-c c1-1o c1-1p c1-5v c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-5x c1-5y c1-b c1-c c1-1y c1-1z c1-5z c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-5s c1-1l c1-5u c1-36 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-60 c1-36 c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/0/image" class="x-el x-el-div c1-1 c1-2 c1-63 c1-1x c1-b c1-c c1-d c1-64 c1-65 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/2842/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcset="https://img1.wsimg.com/isteam/stock/2842/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,//img1.wsimg.com/isteam/stock/2842/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
https://img1.wsimg.com/isteam/stock/2842/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
https://img1.wsimg.com/isteam/stock/2842/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image3" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED0" class="x-el x-el-img c1-1 c1-2 c1-z c1-4s c1-v c1-w c1-1j c1-1l c1-4t c1-66 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-1f c1-67 c1-1n c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-4 c1-68 c1-1n c1-1x c1-69 c1-6a c1-b c1-c c1-6b c1-6c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4><p typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-6m c1-1j c1-1l c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">Say something interesting about your business here.</p></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-5x c1-5y c1-b c1-c c1-1y c1-1z c1-5z c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-7f c1-3o c1-1j c1-5s c1-1l c1-5u c1-36 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-60 c1-36 c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/1/image" class="x-el x-el-div c1-1 c1-2 c1-63 c1-1x c1-b c1-c c1-d c1-64 c1-65 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/51894/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcset="https://img1.wsimg.com/isteam/stock/51894/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,//img1.wsimg.com/isteam/stock/51894/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
https://img1.wsimg.com/isteam/stock/51894/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
https://img1.wsimg.com/isteam/stock/51894/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image4" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED1" class="x-el x-el-img c1-1 c1-2 c1-z c1-4s c1-v c1-w c1-1j c1-1l c1-4t c1-66 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-1f c1-67 c1-1n c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-4 c1-68 c1-1n c1-1x c1-69 c1-6a c1-b c1-c c1-6b c1-6c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4><p typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-6m c1-1j c1-1l c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">What's something exciting your business offers? Say it here.</p></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-5x c1-5y c1-b c1-c c1-1y c1-1z c1-5z c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-5s c1-1l c1-5u c1-36 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-60 c1-36 c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/2/image" class="x-el x-el-div c1-1 c1-2 c1-63 c1-1x c1-b c1-c c1-d c1-64 c1-65 c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/103313/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcset="https://img1.wsimg.com/isteam/stock/103313/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,//img1.wsimg.com/isteam/stock/103313/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
https://img1.wsimg.com/isteam/stock/103313/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
https://img1.wsimg.com/isteam/stock/103313/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image5" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED2" class="x-el x-el-img c1-1 c1-2 c1-z c1-4s c1-v c1-w c1-1j c1-1l c1-4t c1-66 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-1f c1-67 c1-1n c1-b c1-c c1-61 c1-62 c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-3y c1-4 c1-68 c1-1n c1-1x c1-69 c1-6a c1-b c1-c c1-6b c1-6c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-1l c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4><p typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-6m c1-1j c1-1l c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">Give customers a reason to do business with you.</p></div></div></div></div></div></div></section> </div></div></div><div id="228ce65e-a641-401f-b8de-fdc35998d290" class="widget widget-gallery widget-gallery-gallery-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-7g c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-5k c1-2n c1-2o c1-1j c1-5j c1-m c1-1x c1-23 c1-5l c1-2g c1-2h c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-s c2-t c2-u c2-v c2-e c2-d c2-f c2-c c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-y c2-g c2-z c2-10 c2-11 c2-12 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-13 c2-14 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div id="bricks-container-3" style="position: relative; width: 1239px; height: 624px;"><div data-ux="GridCell" data-aid="GALLERY_IMAGE0_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 0px; left: 0px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/103313/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/103313/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/103313/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/103313/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/103313/:/rs=w:1110,m,cg:true 3x" alt="image7" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div><div data-ux="GridCell" data-aid="GALLERY_IMAGE1_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 0px; left: 413px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/13293/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/13293/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/13293/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/13293/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/13293/:/rs=w:1110,m,cg:true 3x" alt="image8" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div><div data-ux="GridCell" data-aid="GALLERY_IMAGE2_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 0px; left: 826px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/18375/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/18375/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/18375/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/18375/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/18375/:/rs=w:1110,m,cg:true 3x" alt="image9" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div><div data-ux="GridCell" data-aid="GALLERY_IMAGE3_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 278px; left: 0px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/18376/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/18376/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/18376/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/18376/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/18376/:/rs=w:1110,m,cg:true 3x" alt="image10" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE3_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div><div data-ux="GridCell" data-aid="GALLERY_IMAGE4_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 278px; left: 413px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/18381/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/18381/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/18381/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/18381/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/18381/:/rs=w:1110,m,cg:true 3x" alt="image11" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE4_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div><div data-ux="GridCell" data-aid="GALLERY_IMAGE5_CELL_RENDERED" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-r c2-3 c2-4 c2-5 c2-1b c2-1c c2-6 c2-7 c2-8 x-d-ux x-d-aid" style="position: absolute; top: 278px; left: 826px;" data-packed=""><img src="https://img1.wsimg.com/isteam/stock/18382/:/rs=w:370,m,cg:true" srcset="https://img1.wsimg.com/isteam/stock/18382/:/rs=w:370,m,cg:true,//img1.wsimg.com/isteam/stock/18382/:/rs=w:555,m,cg:true 1.5x,
https://img1.wsimg.com/isteam/stock/18382/:/rs=w:740,m,cg:true 2x,
https://img1.wsimg.com/isteam/stock/18382/:/rs=w:1110,m,cg:true 3x" alt="image12" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE5_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-r c2-1d c2-1e c2-e c2-f c2-1f c2-1g c2-1h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route x-d-aid"></div></div></div></div></div></div></span></div></div></section> </div></div></div><div id="f3269dcf-21bf-4dd9-be35-5f025d2dfd51" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-5k c1-2n c1-2o c1-7r c1-7s c1-1x c1-23 c1-5l c1-2g c1-2h c1-5m c1-7t c1-5p c1-5q c1-5r x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="f3269dcf-21bf-4dd9-be35-5f025d2dfd51-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-s c2-t c2-u c2-v c2-e c2-1i c2-f c2-1j c2-3 c2-4 c2-1k c2-1l c2-1m c2-1n c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-t c2-w c2-x c2-y c2-g c2-z c2-1o c2-11 c2-1p c2-3 c2-4 c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-5 c2-1x c2-1y c2-1z c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-20 c2-e c2-21 c2-22 c2-3 c2-j c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-f c2-23 c2-24 c2-25 c2-26 c2-s c2-27 c2-28 c2-29 c2-22 c2-2a c2-3 c2-4 c2-5 c2-2b c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2c c2-r c2-3 c2-4 c2-5 c2-2d c2-2e c2-2f c2-2g c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2i c2-2j c2-r c2-2k c2-2l c2-2m c2-2n c2-2o c2-2p c2-2q c2-2r c2-2s c2-2t c2-2u c2-2v c2-2w c2-3 c2-2x c2-2y c2-l c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3f c2-3g c2-3h c2-3i c2-3j c2-3 c2-2x c2-2y c2-l c2-2z c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-r c2-3 c2-4 c2-5 c2-2e c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button rel="" tccltracking="click" typography="NavBeta" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-3k c2-3l c2-3m c2-9 c2-a c2-3n c2-1g c2-3o c2-2v c2-2w c2-2u c2-3p c2-2t c2-19 c2-3q c2-3r c2-3s c2-3 c2-3t c2-2y c2-l c2-b c2-3u c2-3v c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="b33dc2d3-d8e7-45e4-b32d-d288d57f7698" class="widget widget-contact widget-contact-contact-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-j c1-k c1-l c1-b c1-c c1-o c1-p c1-d c1-q c1-r c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-5s c1-1l c1-5u c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-4i c1-z c1-10 c1-5w c1-11 c1-5y c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-route="sectionTitle" data-aid="CONTACT_SECTION_TITLE_REND" class="x-el x-el-h2 c1-1 c1-2 c1-28 c1-29 c1-5k c1-2n c1-2o c1-1j c1-5j c1-m c1-1x c1-23 c1-5l c1-2g c1-2h c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r x-d-ux x-d-route x-d-aid"><span data-ux="Element" class="">Contact Us</span></h2></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-3o c1-1j c1-5s c1-1l c1-5u c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-9f c1-9g c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><div id="b33dc2d3-d8e7-45e4-b32d-d288d57f7698-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-3k c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-2c c2-3 c2-j c2-k c2-l c2-3w c2-3x c2-3y c2-3z c2-40 c2-41 c2-42 c2-43 c2-44 c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="a124.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="9e9bd054-14cc-4a35-8f45-5dbc632f6ce7" pageid="fa37cb43-aad2-4648-8c6f-0195eb63c46b" accountid="54a06413-1e89-11ea-81b6-3417ebe72595" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-f c2-23 c2-24 c2-25 c2-26 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-45 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-2h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-2i c2-2j c2-r c2-2k c2-2l c2-2m c2-2n c2-2o c2-2p c2-2q c2-2r c2-2s c2-2t c2-2u c2-2v c2-2w c2-3 c2-2x c2-2y c2-l c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3f c2-3g c2-46 c2-3i c2-3j c2-3 c2-2x c2-2y c2-l c2-2z c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-45 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-2h c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input6" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-2i c2-2j c2-r c2-2k c2-2l c2-2m c2-2n c2-2o c2-2p c2-2q c2-2r c2-2s c2-2t c2-2u c2-2v c2-2w c2-3 c2-2x c2-2y c2-l c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input6" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3f c2-3g c2-46 c2-3i c2-3j c2-3 c2-2x c2-2y c2-l c2-2z c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-45 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-2i c2-2j c2-r c2-2k c2-2l c2-2m c2-2n c2-2o c2-47 c2-2q c2-2r c2-2s c2-2t c2-48 c2-2u c2-2v c2-2w c2-3 c2-2x c2-2y c2-l c2-2z c2-30 c2-31 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-45 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-22 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button rel="" tccltracking="click" typography="NavBeta" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-3k c2-3l c2-3m c2-9 c2-a c2-49 c2-1g c2-3o c2-2v c2-2w c2-2u c2-3p c2-2t c2-19 c2-3q c2-3r c2-3s c2-3 c2-3t c2-2y c2-l c2-b c2-3u c2-3v c2-3b c2-4a c2-3c c2-3d c2-3e x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 0px; height: 0px; visibility: hidden;"></div></form></div></span></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1s c1-1t c1-1u c1-z c1-10 c1-5w c1-11 c1-5y c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-9f c1-9g c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1x c1-5i c1-b c1-c c1-9n c1-1o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-63 c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route">Better yet, see us in person!</h4><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-6m c1-1j c1-63 c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">We love our customers, so feel free to visit during normal business hours.</p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-63 c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route">agromatika</h4></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9o c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-6d c1-2 c1-28 c1-29 c1-2m c1-2n c1-2o c1-1j c1-63 c1-b c1-2q c1-2r c1-2h c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-route x-d-aid x-d-field-route">Hours</h4><div data-ux="Block" data-aid="CONTACT_HOURS_REND" data-route="structuredHours" data-field-route="/hours" class="x-el x-el-div c1-1 c1-2 c1-63 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><table style="border-spacing: 0px; text-align: left; display: inline-table;"><tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor: pointer;"><td><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-20 c2-e c2-f c2-3 c2-j c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid">Today</p></td><td><p typography="BodyAlpha" data-ux="ContentText" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-20 c2-e c2-f c2-4b c2-1a c2-3 c2-j c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux"><span rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" class="x-el x-el-span c2-1 c2-4c c2-3m c2-9 c2-a c2-3n c2-1g c2-3 c2-3t c2-4 c2-l c2-4d c2-3u c2-4e c2-3v c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-tccl="ux2.CONTACT.contact1.Content.Default.Link.Default.7.click,click">Closed</span></p></td><td><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-20 c2-e c2-f c2-3 c2-j c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><span rel="" typography="LinkAlpha" data-ux="Link" class="x-el x-el-span c2-1 c2-4c c2-3m c2-9 c2-a c2-3n c2-1g c2-3 c2-3t c2-4 c2-l c2-4d c2-3u c2-4e c2-3v c2-5 c2-6 c2-7 c2-8 x-d-ux" data-tccl="ux2.CONTACT.contact1.Group.Default.Link.Default.8.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="8px" height="8px" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-4f c2-q c2-4g c2-4h c2-2h c2-4i c2-c c2-d c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><path fill-rule="evenodd" d="M18.605 7l-6.793 7.024-6.375-7.002L4 8.467 11.768 17l.485-.501L20 8.489z"></path></svg></span></p></td></tr></table></span></div></div><div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-6m c1-1j c1-1l c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-b c1-2q c1-c c1-2h c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"></div></div></div></div></div></div></div></div></section> </div></div></div><div id="7440954b-5b9e-433d-99db-00cd4bcece53" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-36 c1-9z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><svg data-ux="SVG" class="x-el x-el-svg c1-1 c1-2 c1-37 c1-38 c1-39 c1-a0 c1-t c1-a1 c1-a2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><g fill="currentColor" fill-rule="evenodd" width="53" height="24"><path d="M26.5 24L53 0H0z"></path></g></svg></div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-a3 c1-k c1-l c1-a4 c1-8a c1-a5 c1-b c1-c c1-o c1-p c1-d c1-a6 c1-a7 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-a8 c1-99 c1-28 c1-29 c1-a9 c1-1j c1-63 c1-b c1-aa c1-ab c1-2h c1-ac c1-ad c1-ae c1-af x-d-ux x-d-aid x-d-route">Copyright © 2019 agromatika - All Rights Reserved.</p><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1x c1-ag c1-b c1-c c1-12 c1-d c1-15 c1-e c1-1a c1-f c1-1b c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-ah c1-10 c1-3m c1-11 c1-3l c1-1j c1-2o c1-1l c1-2n c1-3n c1-b c1-c c1-ai c1-aj c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-ak c1-8c c1-al c1-1j c1-63 c1-am c1-v c1-w c1-5b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-a8 c1-99 c1-28 c1-29 c1-a9 c1-1j c1-1l c1-b c1-aa c1-ab c1-2h c1-ac c1-ad c1-ae c1-af x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-b c1-2g c1-ab c1-2h c1-2i c1-2j c1-2k c1-2l c1-ac c1-ad c1-ae c1-af x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.9614.click,click">Website Builder</a></span></p></div></div><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Group" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div id="guacBg9" role="img" data-ux="Background" treatmentdata="[object Object]" class="x-el x-el-div c2-1 c2-2 c2-4j c2-4k c2-4l c2-4m c2-4n c2-5q c2-4p c2-4q c2-r c2-1h c2-4r c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-45 c2-4y c2-e c2-d c2-f c2-c c2-3 c2-4 c2-4z c2-50 c2-51 c2-52 c2-53 c2-54 c2-55 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="Heading" data-aid="FOOTER_COOKIE_TITLE_RENDERED" class="x-el x-el-h4 c2-3k c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-56 c2-k c2-3 c2-57 c2-l c2-3w c2-58 c2-3y c2-3z c2-40 c2-41 c2-42 c2-59 c2-m c2-n c2-o c2-p x-d-ux x-d-aid">Cookie Policy</h4><div typography="BodyAlpha" data-ux="Text" data-aid="FOOTER_COOKIE_MESSAGE_RENDERED" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-20 c2-e c2-f c2-5a c2-5b c2-4u c2-3 c2-57 c2-4 c2-l c2-5c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-rt"><p style="margin: 0px;"><span>This website uses cookies. By continuing to use this site, you accept our use of cookies.</span></p></div><a typography="ButtonAlpha" data-ux="Button" data-aid="FOOTER_COOKIE_CLOSE_RENDERED" class="x-el x-el-a c2-3k c2-3l c2-17 c2-19 c2-1p c2-1o c2-2i c2-5i c2-q c2-22 c2-3m c2-1g c2-a c2-9 c2-g c2-5j c2-5k c2-5l c2-3 c2-5m c2-5e c2-2y c2-5n c2-31 c2-5o c2-5p c2-3b c2-3c c2-3d c2-3e x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer1.Group.Default.Button.Default.11.click,click">Accept &amp; Close</a></div></div></span></div></section></div> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.29.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/54df607d39889e45/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["league-spartan","default",""],"colors":["#4b4d50"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"fa37cb43-aad2-4648-8c6f-0195eb63c46b":{"isFlyoutMenu":false,"active":true,"pageId":"fa37cb43-aad2-4648-8c6f-0195eb63c46b","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme30"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"wordBreak":"break-word"},"logo":{"logoText":"agromatika"},"fontPackLogoId":null,"widgetId":"7984367e-5615-49fd-ae89-2304476cf5a2","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"7984367e-5615-49fd-ae89-2304476cf5a2","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"wordBreak":"break-word"},"logo":{"logoText":"agromatika"},"fontPackLogoId":null,"widgetId":"7984367e-5615-49fd-ae89-2304476cf5a2","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"7984367e-5615-49fd-ae89-2304476cf5a2","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/252e645f48943f01/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-3'] = {"renderMode":"PUBLISH","fonts":["league-spartan","default",""],"colors":["#4b4d50"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"fa37cb43-aad2-4648-8c6f-0195eb63c46b":{"isFlyoutMenu":false,"active":true,"pageId":"fa37cb43-aad2-4648-8c6f-0195eb63c46b","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme30"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/504f25eed2bcea19/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/b258a796f8969ea5/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/d66a636e11bd1d4b/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/9f8029ec36e41427/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/2855668a78558165/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/aa39344f13a22583/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/b0cf853e6310b8ec/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/a4ecaad11ef8d846/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/9e9bd054-14cc-4a35-8f45-5dbc632f6ce7/gpub/86025933e88a3905/script.js"></script>
<script type="text/javascript">document.getElementById('page-9601').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"9e9bd054-14cc-4a35-8f45-5dbc632f6ce7"}),_trfd.push({"pd":"2019-12-14T15:53:07.977Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
