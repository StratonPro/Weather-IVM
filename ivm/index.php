<?php include("html.php"); ?>

<!-- <meta name="generator" content="Straton" /> -->
<!-- <meta name="keywords" content="Straton"> /> -->
<!-- header('x-powered-by: Straton'); -->

<!-- 
//////////////////////////////////////////////////////

Straton plc.
straton.pro

Weather Forecasting Agency

//////////////////////////////////////////////////////
 -->

<!DOCTYPE html>
	<head>

    <!-- Standard Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta description, aim for about 150 characters-->
    <meta http-equiv='content-language' content='en-gb'>
    <meta http-equiv="cleartype" content="on" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Straton®"/>
    <meta name="generator" content="straton.pro">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />

     <title>straton.pro : Weather Agency | v1.0</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Theme Style -->
    <link rel="stylesheet" type="text/css"  href="css/leaflet.css">
    <link href="weathermap.css" rel="stylesheet">
    
    <!-- Resources -->           
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,500italic' rel="stylesheet">
    <link href='css/owm_styles.css' rel="stylesheet">
    
    <script src="js/leaflet.js"></script>
    <script src="//code.jquery.com/jquery-1.9.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Array.from,Array.assign,fetch&flags=always,gated"></script>
    <script src='js/bundle_owm_preload.js'></script>

        
  </head>
    
  <body>
  

<div id="logo"><a href="https://straton.pro" target="_blank"><img src="logo.png"></a></div>

       
<style rel="stylesheet">


/*  css */
.leaflet-top{
    top: 0;
}
.global-map{position:fixed;top:48pt;left:0px;right:0px;bottom:0px}
    
.leaflet-fade-anim .leaflet-tile {
        will-change: inherit;
    }
    
.weather-layer-container__cities {
  display: inline-block;
  vertical-align: top;
  width: 100%;
  position: relative; }

.weather-layer-container__label {
  display: inline-block !important;
  width: 100%;
  vertical-align: top;
  background-color: #e0e0e0;
  color: #222222;
  padding-left: 34px !important; }
.weather-layer-container__label:before {
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    border: 1px solid #777;
    top: 6px;
    left: 15px; }

.weather-layer-container__checkbox {
  display: none; }

.weather-layer-container__checkbox:checked + .weather-layer-container__label:before {
  content: '';
  position: absolute;
  width: 15px;
  height: 15px;
  border: 1px solid #777;
  background: url(img/icon-check-yes.svg) 50% 50% no-repeat;
  top: 6px;
  left: 15px; }
  
  .leaflet-iconLayers-layerCell{
      background: none !important;
  } */
    
</style>


<div class='global-map' id='map'></div>


<script src="weathermap.js"></script>
                 
<script src="https://cdn.ravenjs.com/3.6.1/raven.min.js"></script>
<script src='js/bundle_owm_postload.js'></script>
<script src='js/postload_scripts_js.js'></script>

<script>
$(document).bind("contextmenu",function(e){
  return false;
    });
</script>



          
    </body>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JWDNGENTXF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JWDNGENTXF');
</script>

</html>
