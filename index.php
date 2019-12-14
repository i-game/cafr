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
<link rel="icon" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:16,h:16,m" sizes="16x16"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:24,h:24,m" sizes="24x24"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:32,h:32,m" sizes="32x32"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:48,h:48,m" sizes="48x48"><link rel="icon" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:64,h:64,m" sizes="64x64"><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>gelios</title><meta name="author" content="gelios"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://gelios.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/a937bf49-e4b2-4e9a-992d-e9ad132a182d/favicon/46f5b544-c7c5-46f5-b299-4fdca5e4105f.jpg/:/rs=w:180,h:180,m"><meta property="og:url" content="https://gelios.appspot.com/">
<meta property="og:site_name" content="gelios">
<meta property="og:title" content="Make your Stay Fantastic">
<meta property="og:description" content="Luxury living spaces for your next adventure!">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/98243">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="gelios">
<meta name="twitter:description" content="Make your Stay Fantastic">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/98243">
<meta name="twitter:image:alt" content="gelios">
<meta name="theme-color" content="#e0ddd9"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
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
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWoe5ixi.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWEe5ixi.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWAe5ixi.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5g.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWoe5ixi.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWEe5ixi.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWAe5ixi.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url("https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lW4e5g.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Digitized data copyright 2010-2011, Google Corporation.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhmIqOjjg.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhvIqOjjg.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhnIqOjjg.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhoIqOjjg.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhkIqOjjg.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhlIqOjjg.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhrIqM.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWJ0bbck.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFUZ0bbck.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWZ0bbck.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVp0bbck.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWp0bbck.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFW50bbck.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOX-hpOqc.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOVuhpOqc.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXuhpOqc.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUehpOqc.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXehpOqc.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXOhpOqc.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url("https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/feb2aa9452343dcd/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: "Open Sans", arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { letter-spacing: 0.031em; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { line-height: 1; }
.x .c2-d { margin-left: auto; }
.x .c2-e { margin-right: auto; }
.x .c2-f { margin-top: 0px; }
.x .c2-g { margin-bottom: 0px; }
.x .c2-h { max-width: 100%; }
.x .c2-i { text-align: center; }
.x .c2-j { padding-top: 8px; }
.x .c2-k { padding-bottom: 8px; }
.x .c2-l { padding-left: 16px; }
.x .c2-m { padding-right: 16px; }
.x .c2-n { }
.x .c2-o { border-style: solid; }
.x .c2-p { border-color: rgb(21, 21, 21); }
.x .c2-q { border-top-width: 1px; }
.x .c2-r { border-right-width: 1px; }
.x .c2-s { border-bottom-width: 1px; }
.x .c2-t { border-left-width: 1px; }
.x .c2-u { font-family: "Playfair Display", Georgia, serif; }
.x .c2-v { color: rgb(21, 21, 21); }
.x .c2-w { font-size: 28px; }
.x .c2-x { font-weight: 400; }
.x .c2-13 { display: inline-block; }
.x .c2-14 { width: 100%; }
.x .c2-15 { letter-spacing: 0.023em; }
.x .c2-16 { line-height: 1.2; }
.x .c2-17 { margin-bottom: 16px; }
.x .c2-18 { position: relative; }
.x .c2-19 { font-size: 32px; }
.x .c2-1e { overflow-wrap: normal; }
.x .c2-1f { word-break: normal; }
.x .c2-1g { display: none; }
.x .c2-1h { visibility: hidden; }
.x .c2-1i { position: absolute; }
.x .c2-1j { left: 0px; }
.x .c2-1k { font-size: 22px; }
.x .c2-1p { letter-spacing: 0.214em; }
.x .c2-1q { text-transform: uppercase; }
.x .c2-1r { padding-top: 16px; }
.x .c2-1s { padding-bottom: 16px; }
.x .c2-1t { padding-left: 32px; }
.x .c2-1u { padding-right: 32px; }
.x .c2-1v { background-color: rgb(221, 217, 213); }
.x .c2-1w { border-style: none; }
.x .c2-1x { text-decoration: none; }
.x .c2-1y { cursor: pointer; }
.x .c2-1z { width: auto; }
.x .c2-20 { transition-property: background-color; }
.x .c2-21 { transition-duration: 0.3s; }
.x .c2-22 { transition-timing-function: ease-in-out; }
.x .c2-23 { border-radius: 0px; }
.x .c2-24 { margin-top: 16px; }
.x .c2-25 { color: rgb(22, 21, 21); }
.x .c2-26 { font-weight: 700; }
.x .c2-27 { font-size: 14px; }
.x .c2-28:hover { background-color: rgb(234, 232, 229); }
.x .c2-29:focus { outline: currentcolor none medium; }
.x .c2-2a:active { background-color: rgb(194, 190, 184); }
.x .c2-2q { display: flex; }
.x .c2-2r { box-sizing: border-box; }
.x .c2-2s { flex-direction: row; }
.x .c2-2t { flex-wrap: wrap; }
.x .c2-2u { margin-right: -12px; }
.x .c2-2v { margin-bottom: -24px; }
.x .c2-2w { margin-left: -12px; }
.x .c2-31 { flex-grow: 1; }
.x .c2-32 { flex-shrink: 1; }
.x .c2-33 { flex-basis: 0%; }
.x .c2-34 { padding-top: 0px; }
.x .c2-35 { padding-right: 12px; }
.x .c2-36 { padding-bottom: 24px; }
.x .c2-37 { padding-left: 12px; }
.x .c2-3i { flex-direction: column; }
.x .c2-3j { margin-left: 0px; }
.x .c2-3k { vertical-align: middle; }
.x .c2-3l { align-self: flex-start; }
.x .c2-3m { border-radius: 0px !important; }
.x .c2-3n { justify-content: center; }
.x .c2-3o { letter-spacing: 0.045em; }
.x .c2-3p { line-height: 1.25; }
.x .c2-3q { margin-right: 0px; }
.x .c2-3r { margin-bottom: 24px; }
.x .c2-3s { color: rgb(27, 27, 27); }
.x .c2-3t { background-color: transparent; }
.x .c2-3u { border-color: rgb(226, 226, 226); }
.x .c2-3v { border-top-width: 0px; }
.x .c2-3w { border-right-width: 0px; }
.x .c2-3x { border-left-width: 0px; }
.x .c2-3y { padding-top: 23px; }
.x .c2-3z { padding-left: 0px; }
.x .c2-40 { padding-right: 0px; }
.x .c2-41 { color: rgb(94, 94, 94); }
.x .c2-42::placeholder { color: inherit; }
.x .c2-43:focus + label { font-size: 12px; }
.x .c2-44:focus + label { top: 8px; }
.x .c2-45:focus + label { color: rgb(122, 118, 113); }
.x .c2-46:not([value=""]) + label { font-size: 12px; }
.x .c2-47:not([value=""]) + label { top: 8px; }
.x .c2-48:not([value=""]) + label { color: rgb(122, 118, 113); }
.x .c2-49::-webkit-input-placeholder { color: inherit; }
.x .c2-4b { top: 30%; }
.x .c2-4c { transition: all 0.15s ease 0s; }
.x .c2-4d { pointer-events: none; }
.x .c2-4e { resize: vertical; }
.x .c2-4f { background-color: rgb(224, 221, 217); }
.x .c2-4g { color: rgb(24, 24, 24); }
.x .c2-4h:hover { background-color: rgb(237, 235, 233); }
.x .c2-4i:active { background-color: rgb(198, 193, 187); }
.x .c2-4l { background-position: center center; }
.x .c2-4m { background-size: cover; }
.x .c2-4n { background-blend-mode: normal; }
.x .c2-4o { background-repeat: no-repeat; }
.x .c2-4p { position: fixed; }
.x .c2-4q { bottom: -500px; }
.x .c2-4r { right: 0px; }
.x .c2-4s { z-index: 10000; }
.x .c2-4t { height: auto; }
.x .c2-4u { text-align: left; }
.x .c2-4v { overflow-y: auto; }
.x .c2-4w { transition: all 1s cubic-bezier(0.49, -0.29, 0.4, 1.26) 0s; }
.x .c2-4x { padding-top: 24px; }
.x .c2-4y { padding-right: 24px; }
.x .c2-4z { padding-left: 24px; }
.x .c2-57 { color: rgb(0, 0, 0); }
.x .c2-58 { line-height: 1.5; }
.x .c2-59 a { text-decoration: underline; }
.x .c2-5a { max-height: 300px; }
.x .c2-5b { color: rgb(67, 67, 66); }
.x .c2-5d { font-size: unset; }
.x .c2-5e { font-style: italic; }
.x .c2-5f { text-decoration: line-through; }
.x .c2-5g { text-decoration: underline; }
.x .c2-5h { background-color: rgb(22, 22, 22); }
.x .c2-5i { margin-top: 24px; }
.x .c2-5j { margin-bottom: 4px; }
.x .c2-5k { color: rgb(219, 219, 219); }
.x .c2-5l:hover { background-color: rgb(8, 8, 8); }
.x .c2-5m:active { background-color: rgb(42, 42, 42); }
.x .c2-5t { bottom: 0px; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-r{padding-top:32px}}@media (max-width: 767px){.x .c1-s{padding-bottom:32px}}@media (max-width: 767px){.x .c1-22{width:100%}}@media (max-width: 767px){.x .c1-7j > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-7k  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8e > p > ul{margin-left:0}}@media (max-width: 767px){.x .c1-8f > p > ul{margin-right:0}}@media (max-width: 767px){.x .c1-8g > p > ul{padding-left:24px}}@media (max-width: 767px){.x .c1-98{display:flex}}@media (max-width: 767px){.x .c1-99{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/dee23310d6da2c19/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-y { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-1a { font-size: 38px; }
}
@media (min-width: 768px) {
  .x .c2-1l { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-2b { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-2c { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-2x { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2y { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2z { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-30 { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-38 { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-39 { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-3a { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-3b { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-3c { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-3d { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-3e { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-50 { width: 320px; }
}
@media (min-width: 768px) {
  .x .c2-51 { max-height: 500px; }
}
@media (min-width: 768px) {
  .x .c2-52 { border-radius: 7px; }
}
@media (min-width: 768px) {
  .x .c2-53 { margin-top: 24px; }
}
@media (min-width: 768px) {
  .x .c2-54 { margin-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-55 { margin-bottom: 24px; }
}
@media (min-width: 768px) {
  .x .c2-56 { margin-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-5c { max-height: 140px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/3b9cbdcca5d0d25b/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-z { word-break: break-word; }
}
@media (min-width: 1024px) {
  .x .c2-10 { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-1b { font-size: 38px; }
}
@media (min-width: 1024px) {
  .x .c2-1m { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-2d { padding-top: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-2e { padding-bottom: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-2f { padding-left: 40px; }
}
@media (min-width: 1024px) {
  .x .c2-2g { padding-right: 40px; }
}
@media (min-width: 1024px) {
  .x .c2-2h { transition: all 0.3s ease 0s; }
}
@media (min-width: 1024px) {
  .x .c2-2i { background-color: rgb(221, 217, 213); }
}
@media (min-width: 1024px) {
  .x .c2-2j { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-2k:hover { background-color: rgb(234, 232, 229); }
}
@media (min-width: 1024px) {
  .x .c2-2l:hover { box-shadow: rgba(0, 0, 0, 0.5) 0px 10px 10px -10px; }
}
@media (min-width: 1024px) {
  .x .c2-2m:hover { transform: scale(1.02); }
}
@media (min-width: 1024px) {
  .x .c2-2n:hover { backface-visibility: hidden; }
}
@media (min-width: 1024px) {
  .x .c2-3f { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-3g { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-3h { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-4j { background-color: rgb(224, 221, 217); }
}
@media (min-width: 1024px) {
  .x .c2-4k:hover { background-color: rgb(237, 235, 233); }
}
@media (min-width: 1024px) {
  .x .c2-5n { padding-top: 8px; }
}
@media (min-width: 1024px) {
  .x .c2-5o { padding-bottom: 8px; }
}
@media (min-width: 1024px) {
  .x .c2-5p { padding-left: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-5q { padding-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-5r { background-color: rgb(22, 22, 22); }
}
@media (min-width: 1024px) {
  .x .c2-5s:hover { background-color: rgb(8, 8, 8); }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-1t { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-34 { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-4l { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c1-4v { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-62 { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-9e { font-size: 12px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-11 { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c2-1c { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-1n { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c2-2o { font-size: 14px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-1u { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-35 { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-4m { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-4w { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-63 { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-9f { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-12 { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-1d { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-1o { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c2-2p { font-size: 16px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-playfair-display"><div id="layout-a-937-bf-49-e-4-b-2-4-e-9-a-992-d-e-9-ad-132-a-182-d" class="layout layout-layout layout-layout-layout-27 locale-en-US lang-en"><div data-ux="Page" id="page-8789" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="6399c7ff-9838-4f62-a9a4-e35ed4cce546" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-b c1-c c1-v c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-b c1-c c1-d c1-x c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-15 c1-b c1-c c1-16 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-17 c1-18 c1-19 c1-1a c1-12 c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-1j c1-d c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1v c1-1w c1-1x c1-b c1-c c1-d c1-1y c1-1z c1-20 c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1b c1-21 c1-12 c1-1e c1-c c1-22 c1-23 c1-d c1-24 c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="596f428f-6804-46ac-811b-43b6526bda2a" title="gelios" href="" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.8791.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="gelios" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-z c2-10 c2-11 c2-12 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-13 c2-14 c2-u c2-w c2-y c2-10 c2-11 c2-12 x-d-ux x-d-aid x-d-route">gelios</span></h3></span></div></a></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-37 c1-b c1-c c1-d c1-1z c1-20 c1-e c1-f c1-g x-d-ux"></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-b c1-c c1-d c1-38 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-15 c1-b c1-c c1-16 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-18 c1-1h c1-17 c1-1c c1-1d c1-1e c1-19 c1-1a c1-1f c1-1i c1-b c1-c c1-3c c1-3d c1-3e c1-3f c1-d c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-3h c1-3i c1-3j c1-1a c1-3k c1-19 c1-1i c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-3p c1-3q c1-3j c1-1a c1-3k c1-19 c1-1i c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1b c1-21 c1-12 c1-1e c1-c c1-22 c1-23 c1-d c1-24 c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="596f428f-6804-46ac-811b-43b6526bda2a" title="gelios" href="" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-12 c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.8793.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="gelios" class="x-el x-el-h3 c2-9 c2-2 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-z c2-10 c2-11 c2-12 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-13 c2-14 c2-u c2-w c2-y c2-10 c2-11 c2-12 x-d-ux x-d-aid x-d-route">gelios</span></h3></span></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-3h c1-3i c1-3j c1-1a c1-3k c1-19 c1-1i c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux"></div></div></nav></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-3j c1-3k c1-1g c1-1h c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-3r c1-3s c1-3t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-1b c1-1e c1-1c c1-b c1-c c1-3u c1-3v c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" data-route="hasMedia:mediaData" class="x-el x-el-figure c1-1 c1-2 c1-t c1-36 c1-1g c1-18 c1-1h c1-17 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="https://img1.wsimg.com/isteam/stock/98243/:/rs=h:500,cg:true,m" srcset="https://img1.wsimg.com/isteam/stock/98243/:/rs=h:500,cg:true,m,//img1.wsimg.com/isteam/stock/98243/:/rs=h:750,cg:true,m 1.5x,
https://img1.wsimg.com/isteam/stock/98243/:/rs=h:1000,cg:true,m 2x,
https://img1.wsimg.com/isteam/stock/98243/:/rs=h:1500,cg:true,m 3x" alt="image2" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-12 c1-3w c1-y c1-z c1-1g c1-1h c1-3x c1-3y c1-b c1-c c1-22 c1-3z c1-1j c1-3t c1-40 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/98243/:/rs=h:500,cg:true,m, //img1.wsimg.com/isteam/stock/98243/:/rs=h:750,cg:true,m 1.5x, //img1.wsimg.com/isteam/stock/98243/:/rs=h:1000,cg:true,m 2x, //img1.wsimg.com/isteam/stock/98243/:/rs=h:1500,cg:true,m 3x";i.src="//img1.wsimg.com/isteam/stock/98243/:/rs=h:500,cg:true,m";})()</script></figure></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-2m c1-1b c1-1d c1-1e c1-1c c1-10 c1-11 c1-41 c1-42 c1-43 c1-b c1-c c1-1j c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-d c1-4b c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1e c1-1c c1-4c c1-4 c1-b c1-c c1-4d c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-4e c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" id="tagline-container-3" class="x-el x-el-h1 c2-15 c2-2 c2-a c2-b c2-16 c2-d c2-e c2-f c2-17 c2-14 c2-18 c2-u c2-v c2-19 c2-x c2-1a c2-1b c2-1c c2-1d x-d-ux x-d-aid x-d-route" style=""><span data-ux="Element" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-span c2-13 c2-14 c2-19 c2-u c2-1a c2-1b c2-1c c2-1d x-d-ux x-d-aid x-d-route">Make your Stay Fantastic</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-19 c2-u c2-1a c2-1b c2-1c c2-1d x-d-ux x-d-size x-d-scaler-id" style="display: none;">Make your Stay Fantastic</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-w c2-u c2-y c2-10 c2-11 c2-12 x-d-ux x-d-size x-d-scaler-id" style="display: none;">Make your Stay Fantastic</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-u c2-1l c2-1m c2-1n c2-1o x-d-ux x-d-size x-d-scaler-id" style="display: none;">Make your Stay Fantastic</span></h1></span></div><div typography="BodyAlpha" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-4h c1-4y c1-4z c1-50 c1-51 c1-36 c1-4 c1-4e c1-y c1-z c1-b c1-52 c1-c c1-30 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Luxury living spaces for your next adventure!</span></p></div><div id="bs-4" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#b5b0a3cb-59b2-4501-8348-6ee22dd43b00" target="" data-tccl="ux2.header.cta_button.click,click" data-page="596f428f-6804-46ac-811b-43b6526bda2a" data-section-jump="b5b0a3cb-59b2-4501-8348-6ee22dd43b00" class="x-el x-el-a c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-1v c2-1w c2-13 c2-i c2-1x c2-1y c2-b c2-a c2-h c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-3 c2-25 c2-26 c2-27 c2-28 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-2f c2-2g c2-2h c2-2i c2-2j c2-2k c2-2l c2-2m c2-2n c2-2o c2-2p x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Book Now</a></span></div></div></div></div></div></div></div></section> </div></div></div></div><div id="a65d380a-f744-4f04-a048-1ab68f25ff6b" class="widget widget-introduction widget-introduction-introduction-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-64 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-42 c1-43 c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SplitLayout" data-aid="SPLIT_LAYOUT_RENDERED" class="x-el x-el-div x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux x-d-aid"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-65 c1-66 c1-67 c1-b c1-c c1-3c c1-3d c1-3e c1-3f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/3444/:/" alt="image3" data-ux="Image" data-field-id="image" data-field-route="/imagePivot" class="x-el x-el-img c1-1 c1-2 c1-12 c1-3w c1-y c1-z c1-1g c1-1h c1-3x c1-6d c1-3y c1-b c1-c c1-d c1-6e c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid"></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-4c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="VerticalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-4c c1-3w c1-1b c1-1e c1-6f c1-1w c1-2m c1-6g c1-1f c1-b c1-c c1-6h c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h6 typography="DetailsAlpha" data-ux="Details" data-route="secondaryTitle" data-aid="SECONDARY_TITLE_RENDERED" class="x-el x-el-h6 c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-4h c1-2m c1-b c1-6i c1-5l c1-30 c1-5q c1-5x c1-62 c1-63 x-d-ux x-d-route x-d-aid">Hello</h6><h2 typography="HeadingGamma" data-ux="HeadingMajor" data-route="sectionTitle" data-aid="SECTION_TITLE_RENDERED" class="x-el x-el-h2 c1-2k c1-2 c1-28 c1-29 c1-6j c1-17 c1-18 c1-1g c1-1h c1-2m c1-3j c1-1a c1-3k c1-19 c1-21 c1-6k c1-2z c1-30 c1-1i c1-31 c1-6l c1-6m c1-6n c1-6o c1-6p c1-1p c1-6q c1-1r c1-6r c1-33 c1-34 c1-35 x-d-ux x-d-route x-d-aid">Welcome</h2><div data-ux="HorizontalBox" class="x-el x-el-div x-el c1-1 c1-2 c1-6s c1-4 c1-1b c1-1e c1-6f c1-6t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyBeta" data-ux="Text" data-route="description" data-aid="DESCRIPTION_TEXT" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-1h c1-12 c1-b c1-6u c1-4s c1-30 c1-4t c1-4u c1-4v c1-4w x-d-ux x-d-route x-d-aid x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6v c1-6w c1-b c1-4s c1-4t c1-4u c1-4v c1-4w x-d-ux">This is your Introduction. What do you want your visitors to know about you?</span></p></div></div></div></div></div></div></div></div></section> </div></div></div><div id="ab37cdc0-32db-4296-9e4c-b32ca6319ebb" class="widget widget-gallery widget-gallery-gallery-5"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-6x c1-59 c1-28 c1-29 c1-6y c1-17 c1-18 c1-1g c1-u c1-64 c1-6z c1-b c1-c c1-70 c1-30 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Photo Gallery</span></h2><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2q c2-2r c2-2s c2-2t c2-f c2-2u c2-2v c2-2w c2-3 c2-4 c2-2x c2-2y c2-2z c2-30 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2r c2-31 c2-32 c2-33 c2-h c2-34 c2-35 c2-36 c2-37 c2-3 c2-4 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e c2-5 c2-3f c2-3g c2-3h c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-17 c2-2q c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/3438/:/" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1z c2-3j c2-e c2-f c2-g c2-3k c2-3l c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-17 c2-2q c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/107924/:/" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1z c2-3j c2-e c2-f c2-g c2-3k c2-3l c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-17 c2-2q c2-3i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/9780/:/" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-1z c2-3j c2-e c2-f c2-g c2-3k c2-3l c2-3m c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div></div></section> </div></div></div><div id="b76e9c55-e227-4508-9db0-d304d102e42d" class="widget widget-about widget-about-about-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-6x c1-59 c1-28 c1-29 c1-6y c1-17 c1-18 c1-1g c1-u c1-64 c1-6z c1-b c1-c c1-70 c1-30 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-2m c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-65 c1-66 c1-67 c1-b c1-c c1-3c c1-3d c1-3e c1-3f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1b c1-b c1-c c1-7a c1-7b c1-3l c1-3m c1-3n c1-3o c1-d c1-7c c1-7d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-1c c1-2m c1-1e c1-4 c1-7e c1-7f c1-7g c1-1d c1-41 c1-7h c1-7i c1-b c1-c c1-7j c1-7k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-7l c1-2 c1-28 c1-29 c1-6j c1-17 c1-18 c1-1g c1-1h c1-4 c1-5b c1-5c c1-b c1-6k c1-4s c1-30 c1-4t c1-4u c1-4v c1-4w x-d-ux x-d-aid x-d-route x-d-field-route">Rooms</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-1h c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-1d c1-5b c1-5c c1-b c1-6u c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors more about the rooms in this rental property. How many bedrooms are there? How many people can sleep here?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1b c1-b c1-c c1-7a c1-7b c1-3l c1-3m c1-3n c1-3o c1-d c1-7c c1-7d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-1c c1-2m c1-1e c1-4 c1-7e c1-7f c1-7g c1-1d c1-41 c1-7h c1-7i c1-b c1-c c1-7j c1-7k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-7l c1-2 c1-28 c1-29 c1-6j c1-17 c1-18 c1-1g c1-1h c1-4 c1-5b c1-5c c1-b c1-6k c1-4s c1-30 c1-4t c1-4u c1-4v c1-4w x-d-ux x-d-aid x-d-route x-d-field-route">Amenities</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-1h c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-1d c1-5b c1-5c c1-b c1-6u c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors more about the amenities you offer. Is there television or internet? Is there internet? Gym?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1b c1-b c1-c c1-7a c1-7b c1-3l c1-3m c1-3n c1-3o c1-d c1-7c c1-7d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-1c c1-2m c1-1e c1-4 c1-7e c1-7f c1-7g c1-1d c1-41 c1-7h c1-7i c1-b c1-c c1-7j c1-7k c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-7l c1-2 c1-28 c1-29 c1-6j c1-17 c1-18 c1-1g c1-1h c1-4 c1-5b c1-5c c1-b c1-6k c1-4s c1-30 c1-4t c1-4u c1-4v c1-4w x-d-ux x-d-aid x-d-route x-d-field-route">Rates</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-1h c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-1d c1-5b c1-5c c1-b c1-6u c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about your rental rates. Do you charge by the day or week? Do visitors need to pay a deposit or a cleaning fee?</span></p></div></div></div></div></div></section> </div></div></div><div id="b5b0a3cb-59b2-4501-8348-6ee22dd43b00" class="widget widget-contact widget-contact-contact-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-t c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-6x c1-59 c1-28 c1-29 c1-6y c1-17 c1-18 c1-1g c1-u c1-64 c1-6z c1-b c1-c c1-70 c1-30 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="b5b0a3cb-59b2-4501-8348-6ee22dd43b00-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-2q c2-2r c2-2s c2-2t c2-f c2-2u c2-2v c2-2w c2-3 c2-4 c2-2x c2-2y c2-2z c2-30 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2r c2-31 c2-32 c2-33 c2-h c2-34 c2-35 c2-36 c2-37 c2-3 c2-4 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e c2-5 c2-3f c2-3g c2-3h c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c2-1 c2-2 c2-3n c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-3o c2-2 c2-a c2-b c2-3p c2-3j c2-3q c2-f c2-3r c2-3 c2-3s c2-1k c2-x c2-1l c2-1m c2-1n c2-1o x-d-ux x-d-aid x-d-route x-d-field-route">Make a Reservation</h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="Make a Reservation" formfields="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="gelios.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="a937bf49-e4b2-4e9a-992d-e9ad132a182d" pageid="596f428f-6804-46ac-811b-43b6526bda2a" accountid="e4e2696b-1e8b-11ea-81bb-3417ebe7253b" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-18 c2-3t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-3t c2-3u c2-14 c2-3v c2-3w c2-s c2-3x c2-3y c2-k c2-3z c2-40 c2-23 c2-o c2-3 c2-41 c2-4 c2-x c2-42 c2-29 c2-43 c2-44 c2-45 c2-46 c2-47 c2-48 c2-49 c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-1i c2-4b c2-1j c2-4c c2-4d c2-3 c2-41 c2-4 c2-x c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-18 c2-3t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input5" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-3t c2-3u c2-14 c2-3v c2-3w c2-s c2-3x c2-3y c2-k c2-3z c2-40 c2-23 c2-o c2-3 c2-41 c2-4 c2-x c2-42 c2-29 c2-43 c2-44 c2-45 c2-46 c2-47 c2-48 c2-49 c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input5" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-1i c2-4b c2-1j c2-4c c2-4d c2-3 c2-41 c2-4 c2-x c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="Number of people in your party" class="x-el x-el-div c2-1 c2-2 c2-18 c2-3t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input6" data-aid="Number of people in your party" class="x-el x-el-input c2-1 c2-2 c2-3t c2-3u c2-14 c2-3v c2-3w c2-s c2-3x c2-3y c2-k c2-3z c2-40 c2-23 c2-o c2-3 c2-41 c2-4 c2-x c2-42 c2-29 c2-43 c2-44 c2-45 c2-46 c2-47 c2-48 c2-49 c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input6" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-1i c2-4b c2-1j c2-4c c2-4d c2-3 c2-41 c2-4 c2-x c2-5 c2-6 c2-7 c2-8 x-d-ux">Number of people in your party</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="Preferred Travel Dates" class="x-el x-el-div c2-1 c2-2 c2-18 c2-3t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="BodyAlpha" type="text" data-ux="InputFloatLabel" id="input7" data-aid="Preferred Travel Dates" class="x-el x-el-input c2-1 c2-2 c2-3t c2-3u c2-14 c2-3v c2-3w c2-s c2-3x c2-3y c2-k c2-3z c2-40 c2-23 c2-o c2-3 c2-41 c2-4 c2-x c2-42 c2-29 c2-43 c2-44 c2-45 c2-46 c2-47 c2-48 c2-49 c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input7" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-1i c2-4b c2-1j c2-4c c2-4d c2-3 c2-41 c2-4 c2-x c2-5 c2-6 c2-7 c2-8 x-d-ux">Preferred Travel Dates</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/4" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="BodyAlpha" rows="4" aria-label="Tell us more about your vacation wishes!" data-ux="InputTextArea" placeholder="Tell us more about your vacation wishes!" data-aid="Tell us more about your vacation wishes!" class="x-el x-el-textarea c2-1 c2-2 c2-3t c2-3u c2-14 c2-3v c2-3w c2-s c2-3x c2-1r c2-1s c2-3z c2-40 c2-23 c2-o c2-4e c2-3 c2-41 c2-4 c2-x c2-42 c2-29 c2-49 c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-36 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/5" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-1p c2-1q c2-1r c2-1s c2-1t c2-1u c2-4f c2-1w c2-13 c2-i c2-1x c2-1y c2-b c2-a c2-h c2-14 c2-20 c2-21 c2-22 c2-23 c2-3 c2-4g c2-26 c2-27 c2-4h c2-29 c2-4i c2-2b c2-2c c2-2d c2-2e c2-2f c2-2g c2-2h c2-4j c2-2j c2-4k c2-2l c2-2m c2-2n c2-2o c2-2p x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 0px; height: 0px; visibility: hidden;"></div></form></div></div></div></span></div></div><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-65 c1-66 c1-67 c1-i c1-2m c1-b c1-c c1-3c c1-3d c1-3e c1-3f c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-72 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1g c1-18 c1-1h c1-17 c1-1i c1-b c1-c c1-73 c1-74 c1-75 c1-3l c1-3m c1-3n c1-3o c1-d c1-76 c1-77 c1-78 c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-65 c1-66 c1-67 c1-b c1-c c1-3c c1-3d c1-3e c1-3f c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_SECTION_INFO_REND" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1c c1-1e c1-2m c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-4x c1-1g c1-u c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-b c1-6u c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Let us help you get ready for your get-away!&nbsp;</span></p><p style="margin:0"><span><br></span></p><p style="margin:0"><span>If you have a question about your vacation rental or about our neighborhood services, just ask. We look forward to hearing from you.</span></p></div></div><div data-ux="GridCell" data-aid="CONTACT_SECTION_DETAILS_REND" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-69 c1-1f c1-6a c1-1c c1-1e c1-2m c1-b c1-c c1-3l c1-3m c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-7l c1-2 c1-28 c1-29 c1-6j c1-17 c1-18 c1-1g c1-u c1-b c1-6k c1-4s c1-30 c1-4t c1-4u c1-4v c1-4w x-d-ux x-d-aid x-d-route">gelios</h4></div></div></div></div></div></div></section> </div></div></div><div id="55a73e21-5393-406b-b2d7-3bea182d6a96" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-1f c1-b c1-c c1-s c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-2m c1-96 c1-j c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-97 c1-3j c1-1a c1-3k c1-19 c1-1g c1-18 c1-1h c1-17 c1-1i c1-b c1-c c1-98 c1-99 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="DetailsBeta" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-9a c1-59 c1-28 c1-29 c1-4x c1-1g c1-4h c1-54 c1-b c1-6k c1-9b c1-9c c1-9d c1-9e c1-9f x-d-ux x-d-aid x-d-route">gelios</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-39 c1-3a c1-3b c1-1g c1-18 c1-1h c1-17 c1-1c c1-2m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-1a c1-3k c1-19 c1-b c1-c c1-d c1-9g c1-9h c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-9a c1-59 c1-28 c1-29 c1-4x c1-1g c1-1h c1-b c1-6i c1-9b c1-30 c1-9c c1-9i c1-9d c1-9e c1-9f x-d-ux x-d-aid x-d-route">Copyright © 2019 gelios - All Rights Reserved.</p></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-39 c1-1d c1-3g c1-68 c1-12 c1-3j c1-1a c1-3k c1-19 c1-b c1-c c1-d c1-9g c1-9h c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-9a c1-59 c1-28 c1-29 c1-4x c1-9j c1-1h c1-b c1-6i c1-9b c1-30 c1-9c c1-9k c1-1p c1-9d c1-9e c1-9f x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-9j c1-b c1-70 c1-9b c1-2h c1-9l c1-9m c1-9c c1-9k c1-1p c1-9d c1-9e c1-9f x-d-ux" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.8800.click,click">Website Builder</a></span></p></div></div></div></div><div id="bs-6"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Group" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div id="guacBg8" role="img" data-ux="Background" treatmentdata="[object Object]" class="x-el x-el-div c2-1 c2-2 c2-4l c2-4m c2-4n c2-4o c2-4p c2-5t c2-4r c2-4s c2-14 c2-4t c2-4u c2-4f c2-23 c2-4v c2-4w c2-4x c2-4y c2-36 c2-4z c2-f c2-3q c2-g c2-3j c2-3 c2-4 c2-50 c2-51 c2-52 c2-53 c2-54 c2-55 c2-56 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="Heading" data-aid="FOOTER_COOKIE_TITLE_RENDERED" class="x-el x-el-h4 c2-3o c2-2 c2-a c2-b c2-3p c2-3j c2-3q c2-f c2-g c2-k c2-1k c2-3 c2-57 c2-x c2-1l c2-1m c2-1n c2-1o x-d-ux x-d-aid">Cookie Policy</h4><div typography="BodyAlpha" data-ux="Text" data-aid="FOOTER_COOKIE_MESSAGE_RENDERED" class="x-el x-el-p c2-1 c2-2 c2-a c2-b c2-58 c2-f c2-g c2-59 c2-5a c2-4v c2-3 c2-5b c2-4 c2-x c2-5c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-rt"><p style="margin: 0px;"><span>This website uses cookies. By continuing to use this site, you accept our use of cookies.</span></p></div><a typography="ButtonAlpha" data-ux="Button" data-aid="FOOTER_COOKIE_CLOSE_RENDERED" class="x-el x-el-a c2-1p c2-1q c2-j c2-k c2-4z c2-4y c2-5h c2-1w c2-13 c2-i c2-1x c2-1y c2-b c2-a c2-h c2-14 c2-20 c2-21 c2-22 c2-23 c2-5i c2-5j c2-3 c2-5k c2-26 c2-27 c2-5l c2-29 c2-5m c2-2b c2-2c c2-5n c2-5o c2-5p c2-5q c2-2h c2-5r c2-2j c2-5s c2-2l c2-2m c2-2n c2-2o c2-2p x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Group.Default.Button.Default.10.click,click">Accept &amp; Close</a></div></div></span></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.29.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/34e62078263a89e0/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["playfair-display","default",""],"colors":["#e0ddd9"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"596f428f-6804-46ac-811b-43b6526bda2a":{"isFlyoutMenu":false,"active":true,"pageId":"596f428f-6804-46ac-811b-43b6526bda2a","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"gelios"},"fontPackLogoId":null,"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"maxWidth":"100%"},"logo":{"logoText":"gelios"},"fontPackLogoId":null,"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/91abf330a0ec1434/script.js"></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"children":"Make your Stay Fantastic","widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Book Now","pageId":"596f428f-6804-46ac-811b-43b6526bda2a","widgetId":"b5b0a3cb-59b2-4501-8348-6ee22dd43b00"},"data-aid":"HEADER_CTA_BTN","style":{"width":"auto","marginTop":"small"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"6399c7ff-9838-4f62-a9a4-e35ed4cce546","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/ed8a4d6a8ce367ec/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-5'] = {"renderMode":"PUBLISH","fonts":["playfair-display","default",""],"colors":["#e0ddd9"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"596f428f-6804-46ac-811b-43b6526bda2a":{"isFlyoutMenu":false,"active":true,"pageId":"596f428f-6804-46ac-811b-43b6526bda2a","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/30c3f32e9e97216/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/fd7c49f191a31b2a/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/3e45f5f373e18927/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/a4ecaad11ef8d846/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/a937bf49-e4b2-4e9a-992d-e9ad132a182d/gpub/57f3feacf7681da0/script.js"></script>
<script type="text/javascript">document.getElementById('page-8789').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"a937bf49-e4b2-4e9a-992d-e9ad132a182d"}),_trfd.push({"pd":"2019-12-14T16:14:34.715Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
