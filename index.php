<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index.php");
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en-US" class=" js flexbox flexboxlegacy canvas canvastext no-touch hashchange history draganddrop rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio svg inlinesvg svgclippaths js_active  vc_desktop  vc_transform  vc_transform ">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Glintz">
    <meta property="og:description" content="Photography website">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    
    <title>Glintz Photography – Photography | Portrait | Storytelling | Events</title>

<!-- <script src="./Solene – Wedding Photography Theme_files/saved_resource" async="" type="text/javascript"><script src="./Solene – Wedding Photography Theme_files/saved_resource(1)" async=""></script></script><script type="text/javascript" async="" src="./Solene – Wedding Photography Theme_files/f.txt"></script><script type="text/javascript" async="" src="./Solene – Wedding Photography Theme_files/analytics.js.download"></script><script src="./Solene – Wedding Photography Theme_files/1821624764800433" async=""></script><script async="" src="./Solene – Wedding Photography Theme_files/fbevents.js.download"></script><script async="" src="./Solene – Wedding Photography Theme_files/gtm.js.download"></script><script data-cfasync="false" data-pagespeed-no-defer="" type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
//]]>
</script>
<link rel="dns-prefetch" href="https://export.qodethemes.com/">
<link rel="dns-prefetch" href="https://maps.googleapis.com/">
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.6"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings); var _Hasync= _Hasync|| [];_Hasync.push(['Histats.start', '1,4524396,4,0,0,0,00010000']);_Hasync.push(['Histats.fasi', '1']);_Hasync.push(['Histats.track_hits', '']);(function() {var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;hs.src = ('//s10.histats.com/js15_as.js');(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);})();
		</script><script src="./Solene – Wedding Photography Theme_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script><script type="text/javascript" async="" src="./Solene – Wedding Photography Theme_files/js15_as.js.download"></script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" href="./Solene – Wedding Photography Theme_files/58f2c.css" media="all">
<link rel="stylesheet" id="rabbit_css-css" href="./Solene – Wedding Photography Theme_files/rbt-modules.css" type="text/css" media="all">
<link rel="stylesheet" href="./Solene – Wedding Photography Theme_files/edd85.css" media="all"> -->
<style id="rs-plugin-settings-inline-css" type="text/css">
#rs-demo-id {}
#rev_slider_1_1_wrapper .wedding.tparrows {
	cursor:pointer;
	background:transparent;
	position:absolute;
	display:block;
	z-index:1000;
  color:#ffffff;
  width: 45px;
  height: 96px;
}

#rev_slider_1_1_wrapper .wedding.tparrows svg line{
  transition: .4s ease-out;
}

#rev_slider_1_1_wrapper .wedding.tparrows svg line:first-child{
   transform: translateY(0);
}

#rev_slider_1_1_wrapper .wedding.tparrows svg line:nth-child(2){
  transform: translateY(100%);
  transition-delay: 0s;
}

#rev_slider_1_1_wrapper .wedding.tparrows:hover svg line:first-child{
  transform: translateY(-100%);
}

#rev_slider_1_1_wrapper .wedding.tparrows:hover svg line:nth-child(2){
  transform: translateY(0);
  transition-delay: .4s;
}

#rev_slider_1_1_wrapper .wedding.tparrows:before {
  display:none;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-leftarrow{
 	margin-top: -170px;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-rightarrow{
 	margin-top: 170px;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-rightarrow svg{
 	transform: scaleY(-1);
}

rs-slides {
    counter-reset: section;
}

rs-slide {
    counter-increment: section;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-leftarrow:after {
    content: '/ ' counter(section);
    display: block;
  	line-height: 61px;
    padding-left: 5px;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-rightarrow:after {
    display: none;
}

#rev_slider_1_1_wrapper .wedding.tparrows.tp-leftarrow:after,
.slide-index  {
    font-size: 12px;
    letter-spacing: .1em;
    font-weight: 500;
    cursor: default;
  	pointer-events: none;
}
.slide-index {
    position: absolute;
  	color:#ffffff;
    display: flex;
    height: 100%;
    width: 100%;
    margin-left: -47px;
    justify-content: flex-end;
  	align-items: flex-end;
    top: 50px;
}

rs-sbg-px:after {
  counter-increment: section;
  opacity: 0;
  z-index: -30;
  position: absolute;
}

.tp-rightarrow .slide-index {
    display: none;
}

#rev_slider_1_1_wrapper .wedding .tp-bullet {
  padding: 25px;
  background:transparent;
  height: 6px;
  width: 6px;
  line-height: 1px;
}

#rev_slider_1_1_wrapper .wedding .tp-bullet .eltdf-svg-circle {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
    fill: none;
    color: rgba(255, 255, 255, 0.6);
    stroke: currentColor;
    -webkit-transition: all .8s cubic-bezier(.45,0,.14,1.03),color .01s ease-out;
    -o-transition: all .8s cubic-bezier(.45,0,.14,1.03),color .01s ease-out;
    transition: all .8s cubic-bezier(.45,0,.14,1.03),color .01s ease-out;
    -webkit-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    transform: rotate(-135deg);
    will-change: transform;
}

#rev_slider_1_1_wrapper .wedding .tp-bullet .eltdf-svg-circle circle {
    stroke-dasharray: 160;
    stroke-dashoffset: 160;
    stroke-width: 1;
    -webkit-transition: all .8s cubic-bezier(.45,0,.14,1.03);
    -o-transition: all .8s cubic-bezier(.45,0,.14,1.03);
    transition: all .8s cubic-bezier(.45,0,.14,1.03);
}

.eltdf-ms-explorer #rev_slider_1_1_wrapper .wedding .tp-bullet .eltdf-svg-circle circle {
  opacity:0;
}

#rev_slider_1_1_wrapper .wedding .tp-bullet:hover .eltdf-svg-circle,
#rev_slider_1_1_wrapper .wedding .tp-bullet.selected .eltdf-svg-circle {
    color: #ffffff;
}


#rev_slider_1_1_wrapper .wedding .tp-bullet:hover .eltdf-svg-circle circle,
#rev_slider_1_1_wrapper .wedding .tp-bullet.selected .eltdf-svg-circle circle {
    stroke-dashoffset: 10;
}

.eltdf-ms-explorer #rev_slider_1_1_wrapper .wedding .tp-bullet:hover .eltdf-svg-circle circle,
.eltdf-ms-explorer #rev_slider_1_1_wrapper .wedding .tp-bullet.selected .eltdf-svg-circle circle{
  opacity:1;
}


#rev_slider_1_1_wrapper .wedding .tp-bullet:after {
  	content: '';
 	display: block;
    vertical-align: middle;
    width: 6px;
    height: 6px;
    position: relative;
    width: 6px;
    height: 6px;
    top: -3px;
    left: -3px;
    background-color: rgba(255, 255, 255, 0.6);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: background-color .2s ease-out;
    -o-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
}

#rev_slider_1_1_wrapper .wedding .tp-bullet:hover:after,
#rev_slider_1_1_wrapper .wedding .tp-bullet.selected:after{
	  background-color: #ffffff;
}

</style>

<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" href="./Solene – Wedding Photography Theme_files/5384c.css" media="all">
<style id="solene-elated-woo-inline-css" type="text/css">
.page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-container > .eltdf-container-inner, .page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-full-width > .eltdf-full-width-inner { padding: 0 0 0 0;}@media only screen and (max-width: 1024px) {.page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-container > .eltdf-container-inner, .page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-full-width > .eltdf-full-width-inner { padding: 0 0 0 0;}}.page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-container > .eltdf-container-inner, .page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-full-width > .eltdf-full-width-inner { padding: 0 0 0 0;}@media only screen and (max-width: 1024px) {.page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-container > .eltdf-container-inner, .page-id-17 .eltdf-content .eltdf-content-inner > .eltdf-full-width > .eltdf-full-width-inner { padding: 0 0 0 0;}}.page-id-17 .eltdf-page-header .eltdf-menu-area { background-color: rgba(255, 255, 255, 0);}.eltdf-st-loader .eltdf-rotate-circles > div, .eltdf-st-loader .pulse, .eltdf-st-loader .double_pulse .double-bounce1, .eltdf-st-loader .double_pulse .double-bounce2, .eltdf-st-loader .cube, .eltdf-st-loader .rotating_cubes .cube1, .eltdf-st-loader .rotating_cubes .cube2, .eltdf-st-loader .stripes > div, .eltdf-st-loader .wave > div, .eltdf-st-loader .two_rotating_circles .dot1, .eltdf-st-loader .two_rotating_circles .dot2, .eltdf-st-loader .five_rotating_circles .container1 > div, .eltdf-st-loader .five_rotating_circles .container2 > div, .eltdf-st-loader .five_rotating_circles .container3 > div, .eltdf-st-loader .atom .ball-1:before, .eltdf-st-loader .atom .ball-2:before, .eltdf-st-loader .atom .ball-3:before, .eltdf-st-loader .atom .ball-4:before, .eltdf-st-loader .clock .ball:before, .eltdf-st-loader .mitosis .ball, .eltdf-st-loader .lines .line1, .eltdf-st-loader .lines .line2, .eltdf-st-loader .lines .line3, .eltdf-st-loader .lines .line4, .eltdf-st-loader .fussion .ball, .eltdf-st-loader .fussion .ball-1, .eltdf-st-loader .fussion .ball-2, .eltdf-st-loader .fussion .ball-3, .eltdf-st-loader .fussion .ball-4, .eltdf-st-loader .wave_circles .ball, .eltdf-st-loader .pulse_circles .ball { background-color: #84847c;}.eltdf-st-loader .eltdf-solene-spinner .eltdf-solene-spinner-text .eltdf-solene-spinner-title { color: #84847c;}.eltdf-st-loader .eltdf-solene-spinner .eltdf-solene-spinner-background { background-image: url(https://solene.qodeinteractive.com/wp-content/uploads/2020/01/landing-background-img.jpg);}.eltdf-st-loader .eltdf-solene-spinner .eltdf-solene-spinner-image-holder { background-image: url()}
</style>
<!-- MY CSS -->
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<link rel="stylesheet" href="./Solene – Wedding Photography Theme_files/a5130.css" media="all">
<link rel="stylesheet" id="solene-elated-google-fonts-css" href="./Solene – Wedding Photography Theme_files/css" type="text/css" media="all">
<link rel="stylesheet" href="./Solene – Wedding Photography Theme_files/36f66.css" media="all">
<script src="./Solene – Wedding Photography Theme_files/2044c.js.download"></script>

<script src="./Solene – Wedding Photography Theme_files/f1253.js.download"></script>
<meta name="generator" content="WordPress 5.3.6">
<meta name="generator" content="WooCommerce 3.9.1">
<link rel="alternate" type="application/json+oembed" href="">


<script data-cfasync="false" data-pagespeed-no-defer="" type="text/javascript">//<![CDATA[
	var dataLayer_content = {"pagePostType":"frontpage","pagePostType2":"single-page","pagePostAuthor":"admin"};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLJLSX7');//]]>
</script>

<link rel="icon" href="images/glintz-logo-black.png" sizes="32x32">
<link rel="icon" href="images/glintz-logo-black.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="images/glintz-logo-black.png">
<meta name="msapplication-TileImage" content="images/glintz-logo-black.png">
<script type="text/javascript">function setREVStartSize(e){			
			try {								
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
				e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
				if(e.layout==="fullscreen" || e.l==="fullscreen") 						
					newh = Math.max(e.mh,window.innerHeight);				
				else{					
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
					e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
										
					var nl = new Array(e.rl.length),
						ix = 0,						
						sl;					
					e.tabw = e.tabhide>=pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
					e.tabh = e.tabhide>=pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
					for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
					sl = nl[0];									
					for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
					var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					

					newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
				}			
				
				if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
				document.getElementById(e.c).height = newh;
				window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
			} catch(e){
				console.log("Failure at Presize of Slider:" + e)
			}					   
		  };</script>
<style type="text/css" id="wp-custom-css">
			.postid-1329 .eltdf-mobile-header .eltdf-mobile-logo-wrapper a {
    height: 60px !important;
}		</style>
<style type="text/css" data-type="vc_custom-css">@media only screen and (min-width: 769px) and (max-width: 1024px) {   

    .eltdf-portfolio-list-holder.eltdf-four-columns.eltdf-no-space .eltdf-item-space {
        width: 50%;
    }

    .eltdf-portfolio-list-holder.eltdf-four-columns.eltdf-no-space .eltdf-item-space:nth-child(3n+1) {
        clear: none;
    }

    .eltdf-portfolio-list-holder.eltdf-four-columns.eltdf-no-space .eltdf-item-space:nth-child(2n+1) {
        clear: both;
    }
}

@media only screen and (max-width: 680px) {
    .eltdf-portfolio-list-holder.eltdf-pl-masonry.eltdf-two-columns.eltdf-no-space .eltdf-outer-space .eltdf-item-space {
        margin-bottom: 34px;
    }
}

rs-fullwidth-wrap .eltdf-social-icon-widget-holder:after {
    top: 1px;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1579780501344{padding-top: 112px !important;}.vc_custom_1575284206394{margin-right: 0px !important;margin-left: 0px !important;padding-top: 100px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1576063397961{padding-top: 85px !important;padding-bottom: 56px !important;}.vc_custom_1575294415993{padding-top: 130px !important;padding-bottom: 125px !important;}.vc_custom_1579249777159{padding-top: 92px !important;padding-bottom: 82px !important;background-color: #757b66 !important;}.vc_custom_1574263484956{padding-bottom: 70px !important;}.vc_custom_1575293319816{padding-top: 130px !important;padding-bottom: 60px !important;}.vc_custom_1578930670219{padding-top: 130px !important;padding-bottom: 70px !important;}.vc_custom_1579532734729{margin-top: -66% !important;}.vc_custom_1578928754412{margin-top: -253px !important;}.vc_custom_1579536243979{margin-top: -68px !important;}.vc_custom_1579536290083{margin-top: -348px !important;}.vc_custom_1579260377492{margin-top: -240px !important;}.vc_custom_1574437400720{padding-left: 0px !important;}.vc_custom_1574437407461{padding-right: 0px !important;}.vc_custom_1574762097168{margin-top: -160px !important;}.vc_custom_1574263574299{margin-top: -65px !important;}.vc_custom_1574260946124{margin-top: -195px !important;}.vc_custom_1579257187847{padding-top: 150px !important;padding-bottom: 60px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1579256039881{margin-top: -20px !important;}.vc_custom_1578930577396{margin-top: -353px !important;}.vc_custom_1576075003221{padding-bottom: 53px !important;}.vc_custom_1574257497047{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-color: #e1e1e1 !important;border-left-style: solid !important;border-right-color: #e1e1e1 !important;border-right-style: solid !important;border-top-color: #e1e1e1 !important;border-top-style: solid !important;border-bottom-color: #e1e1e1 !important;border-bottom-style: solid !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style>#rev_slider_1_1_wrapper { height: 600px }</style><style>.fluidvids {width: 100%; max-width: 100%; position: relative;}.fluidvids-item {position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;}</style><style type="text/css">@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-5842 { padding: 0 43% 56% 0 !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-5842 { padding: 0 51% 54.5% 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-5842 { padding: 0px 38% 55% 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5842 { padding: 0px 0% 55% 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-4896 { padding: 35px 0 0 0 !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-4896 { padding: 0 0 0 0 !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-4896 { padding: 27px 0 0 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-4896 { padding: 0px 0 0 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-4896 { padding: 167px 0 47px 0 !important; } }</style><style type="text/css">@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-4028 { padding: 200px 0 0 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-2251 { padding: 0 19% 390px !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-2251 { padding: 2px 0% 302px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-2251 { padding: 2px 5% 256px !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-2251 { padding: 0 0% 175px !important; } }</style><style type="text/css">@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-6472 { padding: 50px 0 0 !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-6472 { padding: 140px 0 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-6472 { padding: 185px 0 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-6472 { padding: 265px 0 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-5160 { padding: 0 30% 0 0 !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-5160 { padding: 70px 73% 0 6% !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-5160 { padding: 0 30% 0 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-5160 { padding: 0 30% 0 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5160 { padding: 200px 0 0 !important; } }</style><style type="text/css">@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5661 { padding: 0 0 0 65px !important; } }</style><style type="text/css">@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-9135 { padding: 0 0 0 22px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-9135 { padding: 0 0 0 22px !important; } }</style><style type="text/css">@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-3635 { padding: 0 0 0 80px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-3635 { padding: 0 0 0 80px !important; } }</style><style type="text/css">@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-5266 { padding: 0 0 0 110px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-5266 { padding: 0 0 0 110px !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5266 { padding: 0 65px 0 0 !important; } }</style><style type="text/css">@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-8921 { padding: 40px 0 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-3676 { padding: 230px 0 50px 4.4% !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-3676 { padding: 213px 0 70px 9.7% !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-3676 { padding: 131px 0 172px 11.8% !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-3676 { padding: 107px 0 150px 11% !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-3676 { padding: 181px 10% 128px !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-1949 { padding: 175px 1.4% 110px !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-1949 { padding: 130px 7.3% 115px !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-1949 { padding: 116px 0% 110px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-1949 { padding: 116px 0% 110px !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-1949 { padding: 100px 0% 105px !important; } }</style><style type="text/css">@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-6456 { padding: 210px 10% 215px !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-6456 { padding: 210px 9% 215px !important; } }</style><style type="text/css">@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5465 { padding: 0 15% 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-9451 { padding: 0 60% 0 0 !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-9451 { padding: 0px 68% 0 6% !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-9451 { padding: 0 30% 0 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-9451 { padding: 0 9% 0 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-9451 { padding: 200px 0 0 !important; } }</style><style type="text/css">@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-6189 { padding: 200px 0 0 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 1400px) and (max-width: 1600px) {.eltdf-eh-item-content.eltdf-eh-custom-4725 { padding: 60px 0 0 !important; } }@media only screen and (min-width: 1025px) and (max-width: 1399px) {.eltdf-eh-item-content.eltdf-eh-custom-4725 { padding: 60px 0 0 !important; } }@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-4725 { padding: 101px 0 0 !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-4725 { padding: 131px 0 0 !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-4725 { padding: 353px 0 0 !important; } }</style><style type="text/css">@media only screen and (min-width: 769px) and (max-width: 1024px) {.eltdf-eh-item-content.eltdf-eh-custom-5857 { padding: 2.5% 16% 60px !important; } }@media only screen and (min-width: 681px) and (max-width: 768px) {.eltdf-eh-item-content.eltdf-eh-custom-5857 { padding: 2.5% 16% 60px !important; } }@media only screen and (max-width: 680px) {.eltdf-eh-item-content.eltdf-eh-custom-5857 { padding: 34px 8% 60px !important; } }</style>


<script type="text/javascript" charset="UTF-8" src="./Solene – Wedding Photography Theme_files/common.js.download"></script>
<script type="text/javascript" charset="UTF-8" src="./Solene – Wedding Photography Theme_files/util.js.download"></script>
<script src="./Solene – Wedding Photography Theme_files/f(1).txt"></script>
<script async="" defer="" src="./Solene – Wedding Photography Theme_files/saved_resource(2)" id="dtspv_5ed4"></script>
<script src="./Solene – Wedding Photography Theme_files/dataBeacons.min.js.download"></script>

</head>





<body class="home page-template page-template-full-width page-template-full-width-php page page-id-17 theme-solene solene-core-1.0 woocommerce-js solene-ver-1.0 eltdf-smooth-page-transitions eltdf-grid-1300 eltdf-content-is-behind-header eltdf-wide-dropdown-menu-content-in-grid eltdf-light-header eltdf-sticky-header-on-scroll-down-up eltdf-dropdown-animate-height eltdf-header-standard eltdf-menu-area-shadow-disable eltdf-menu-area-in-grid-shadow-disable eltdf-menu-area-border-disable eltdf-menu-area-in-grid-border-disable eltdf-logo-area-border-disable eltdf-logo-area-in-grid-border-disable eltdf-header-vertical-shadow-disable eltdf-header-vertical-border-disable eltdf-side-menu-slide-from-right eltdf-woocommerce-columns-3 eltdf-woo-normal-space eltdf-woo-pl-info-below-image woo-rating-stars-disabled eltdf-woo-single-thumb-below-image eltdf-woo-single-has-pretty-photo eltdf-default-mobile-header eltdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-6.1 vc_responsive eltdf-chrome eltdf-sticky-header-appear" itemscope="" itemtype="https://schema.org/WebPage">




<div class="eltdf-wrapper">
  <div class="eltdf-cover"></div>
    <div class="eltdf-wrapper-inner">





<header class="eltdf-page-header" style="background: #fff">
  <div class="eltdf-menu-area eltdf-menu-center">
    <div class="eltdf-vertical-align-containers">
      <div class="eltdf-position-left">
        <div class="eltdf-position-left-inner">
          <div class="eltdf-logo-wrapper">
            <a itemprop="url" href="index.php" style="height: 81px;">
              <img itemprop="image" class="eltdf-normal-logo" src="./images/glintz-logo-black.png" width="180" height="163" alt="logo">
              <img itemprop="image" class="eltdf-dark-logo" src="./images/glintz-logo-black.png" width="180" height="163" alt="dark logo"> 
              <img itemprop="image" class="eltdf-light-logo" src="./images/glintz-logo-black.png" width="180" height="178" alt="light logo"> 
            </a>
          </div>
        </div>
      </div>

      <div class="eltdf-position-center">
        <div class="eltdf-position-center-inner">
          <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
            <ul id="menu-main-menu" class="clearfix">
              <li id="nav-menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow"><a href="index.php" class=" current  no_link" onclick="JavaScript: return false;" style="color: #000"><span class="item_outer"><span class="item_text">Home</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>
              <li id="nav-menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="about-us.php" class=" no_link" style="color: #000"><span class="item_outer"><span class="item_text">About Us</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>
              <li id="nav-menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=" no_link"><span class="item_outer"><span class="item_text" style="color: #000">portfolio</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                <div class="second" style="height: 0px;">
                    <div class="inner">
                        <ul>
                            <li id="nav-menu-item-974" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="portraits.php" class="">
                                    <span class="item_outer"><span class="item_text">Portraits</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="wedding.php" class="">
                                    <span class="item_outer"><span class="item_text">Weddings</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="events.php" class="">
                                    <span class="item_outer"><span class="item_text">Events</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="documentary.php" class="">
                                    <span class="item_outer"><span class="item_text">Documentary</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="projects.php" class="">
                                    <span class="item_outer"><span class="item_text">Projects</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              </li>
              <li id="nav-menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="academy.php" class=" no_link" style="color: #000"><span class="item_outer"><span class="item_text">Academy</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>
              <li id="nav-menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="contact.php" class=" no_link" style="color: #000"><span class="item_outer"><span class="item_text">Contact</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>
            </ul>
          </nav>
        </div>
      </div>


<div class="eltdf-position-right"><div class="eltdf-position-right-inner">
<div class="eltdf-shopping-cart-holder" style="margin: 0 21px 0 0">
		<div class="eltdf-shopping-cart-inner">
			<a itemprop="url" class="eltdf-header-cart eltdf-header-cart-predefined" href="#">

</a><div class="eltdf-sc-dropdown">
	<div class="eltdf-sc-dropdown-inner">
		<p class="eltdf-empty-cart">No products in the cart.</p>	</div>
</div>		</div>
		
		
</div>
<a class="eltdf-side-menu-button-opener eltdf-icon-has-hover eltdf-side-menu-button-opener-predefined" href="javascript:void(0)">
<span class="eltdf-side-menu-icon">
<span class="eltdf-sa-label" style="color: #000"> Info</span>
<span class="eltdf-hm-label" style="color: #000">Menu</span>
<span class="eltdf-hm-lines" style="color: #000">
    <span class="eltdf-hm-line eltdf-line-1" style="background: red"></span>
    <span class="eltdf-hm-line eltdf-line-2" style="background: red"></span>
</span> 
</span>
</a>
</div>
</div>
</div>
</div>
<div class="eltdf-sticky-header header-appear">
  <div class="eltdf-sticky-holder eltdf-menu-center">
    <div class="eltdf-vertical-align-containers">
      <div class="eltdf-position-left">
        <div class="eltdf-position-left-inner">
          <div class="eltdf-logo-wrapper">
            <a itemprop="url" href="#" style="height: 62px;">
            <img itemprop="image" class="eltdf-normal-logo" src="./images/glintz-logo-black.png" width="219" height="124" alt="logo">
            <img itemprop="image" class="eltdf-dark-logo" src="./images/glintz-logo-black.png" width="180" height="163" alt="dark logo">
            <img itemprop="image" class="eltdf-light-logo" src="./images/glintz-logo-black.png" width="180" height="178" alt="light logo"> </a>
          </div>
        </div>
      </div>

      <div class="eltdf-position-center">
        <div class="eltdf-position-center-inner">
          <nav class="eltdf-main-menu eltdf-drop-down eltdf-sticky-nav">
            <ul id="menu-main-menu-1" class="clearfix">

              <li id="sticky-nav-menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub narrow"><a href="index.php" class=" current  no_link"><span class="item_outer"><span class="item_text">Home</span></a></li>

              <li id="sticky-nav-menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="about-us.php" class=" no_link"><span class="item_outer"><span class="item_text">About Us</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>


              <li id="nav-menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=" no_link" onclick="JavaScript: return false;"><span class="item_outer"><span class="item_text">portfolio</span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a>
                <div class="second" style="height: 0px;">
                    <div class="inner">
                        <ul>
                            <li id="nav-menu-item-974" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="portraits.php" class="">
                                    <span class="item_outer"><span class="item_text">Portraits</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="wedding.php" class="">
                                    <span class="item_outer"><span class="item_text">Weddings</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="events.php" class="">
                                    <span class="item_outer"><span class="item_text">Events</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="documentary.php" class="">
                                    <span class="item_outer"><span class="item_text">Documentary</span></span>
                                </a>
                            </li>
                            <li id="nav-menu-item-973" class="menu-item menu-item-type-post_type menu-item-object-proofing-gallery ">
                                <a href="projects.php" class="">
                                    <span class="item_outer"><span class="item_text">Projects</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              </li>
              <li id="sticky-nav-menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide"><a href="academy.php"><span class="item_outer"><span class="item_text">Academy</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>

              <li id="sticky-nav-menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide"><a href="contact.php" class=" no_link" ><span class="item_outer"><span class="item_text">Contact</span><span class="plus"></span><i class="eltdf-menu-arrow fa fa-angle-down"></i></span></a></li>
            </ul>
          </nav>
        </div>
      </div>



      <div class="eltdf-position-right">
        <div class="eltdf-position-right-inner">
          <div class="eltdf-shopping-cart-holder" style="margin: 0 21px 0 0">
		        <div class="eltdf-shopping-cart-inner">
              <a itemprop="url" class="eltdf-header-cart eltdf-header-cart-predefined" href="#"></a>
              <div class="eltdf-sc-dropdown">
                <div class="eltdf-sc-dropdown-inner">
		              <p class="eltdf-empty-cart">No products in the cart.</p>
                </div>
              </div>		
            </div>
		      </div>
          <a class="eltdf-side-menu-button-opener eltdf-icon-has-hover eltdf-side-menu-button-opener-predefined" href="javascript:void(0)">
            <span class="eltdf-side-menu-icon">
              <span class="eltdf-sa-label"> Info</span>
              <span class="eltdf-hm-label">Menu</span>
                <span class="eltdf-hm-lines">
                  <span class="eltdf-hm-line eltdf-line-1" style="background: red"></span>
                  <span class="eltdf-hm-line eltdf-line-2" style="background: red"></span>
                </span> 
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</header>



<header class="eltdf-mobile-header eltdf-animate-mobile-header mobile-header-appear" style="margin-bottom: 70px;">
    <div class="eltdf-mobile-header-inner">
        <div class="eltdf-mobile-header-holder">
            <div class="eltdf-grid">
                <div class="eltdf-vertical-align-containers">
                    <div class="eltdf-position-left">
                        <div class="eltdf-position-left-inner">
                            <div class="eltdf-mobile-logo-wrapper">
                                <a itemprop="url" href="index.php" style="height: 40px">
                                    <img itemprop="image" src="./images/glintz-logo-black.png" width="140" height="81" alt="Mobile Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="eltdf-position-right">
                        <div class="eltdf-position-right-inner">
                            <div class="eltdf-shopping-cart-holder">
                            	<div class="eltdf-shopping-cart-inner">
                                    <a itemprop="url" class="eltdf-header-cart eltdf-header-cart-predefined" href="#"></a>
                                    <div class="eltdf-sc-dropdown">
                                        <div class="eltdf-sc-dropdown-inner">
                            		        <p class="eltdf-empty-cart">No products in the cart.</p>
                                        </div>
                                    </div>
                                </div>		
                            </div>
                            <div class="eltdf-mobile-menu-opener eltdf-mobile-menu-opener-predefined">
                                <a href="javascript:void(0)">
                                    <span class="eltdf-mobile-menu-icon">
                                        <span class="eltdf-hm-label">Menu</span>
                                        <span class="eltdf-hm-lines">
                                            <span class="eltdf-hm-line eltdf-line-1" style="background: red"></span>
                                            <span class="eltdf-hm-line eltdf-line-2" style="background: red"></span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="eltdf-mobile-nav" role="navigation" aria-label="Mobile Menu" style="">
            <div class="eltdf-grid">
                <ul id="menu-main-menu-2" class="">
                  <li id="mobile-menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children eltdf-active-item has_sub"><h6><a href="index.php"><span>Home</span></a></h6><span class="mobile_arrow"></span></li>

                  <li id="mobile-menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="about-us.php"><h6><span>About Us</span></h6></a></li>

                  <li id="mobile-menu-item-90" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><h6><span>Portfolio</span></h6><span class="mobile_arrow"><i class="eltdf-sub-arrow ion-ios-arrow-forward"></i></span>
                    <ul class="sub_menu">
                        <li id="mobile-menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="portraits.php" class=""><span>Portraits</span></a></li>
                        <li id="mobile-menu-item-1257" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="wedding.php" class=""><span>Weddings</span></a></li>
                        <li id="mobile-menu-item-1232" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="events.php" class=""><span>Events</span></a></li>
                        <li id="mobile-menu-item-1805" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="documentary.php" class=""><span>Documentary</span></a></li>
                    </ul>
                </li>

                  <li id="mobile-menu-item-30" style="display:none" class=" dropdown"><h6><span>Academy</span></h6>
                    <ul class="sub_menu dropdown-toggle">
                        
                    </ul>
                  </li>

                  <li id="mobile-menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="academy.php"><h6><span>Academy</span></h6></a></li>

                  <li id="mobile-menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="contact.php"><h6><span>Contact</span></h6></a></li>
                </ul>
            </li>
        </ul> 
    </div>
</nav>
</div>
</header>






<a id="eltdf-back-to-top" href="#" class="on">
<span>
<svg class="eltdf-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg> <svg class="eltdf-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg> <svg class="eltdf-back-to-top-arrow" x="0px" y="0px" width="12.771px" height="19.503px" viewBox="8.563 4.497 12.771 19.503" enable-background="new 8.563 4.497 12.771 19.503" xml:space="preserve">
<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="14.962" y1="23.433" x2="14.962" y2="5.058"></line>
<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="14.962" y1="23.433" x2="14.962" y2="5.058"></line>
<polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" points="9.155,10.865 14.962,5.058   20.769,10.865 "></polyline>
</svg>
</span>
</a>






<div class="eltdf-container">
    <div class="eltdf-container-inner clearfix">
        <div class="eltdf-portfolio-single-holder eltdf-ps-slider-layout">
            <div class="eltdf-ps-image-holder">
                <div class="eltdf-ps-image-inner eltdf-owl-slider owl-loaded owl-drag" style="visibility: visible;">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-4400px, 0px, 0px); transition: all 0.6s ease 0s; width: 12100px;"><div class="owl-item cloned" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="CONCERTS (5)" data-rel="prettyPhoto[single_pretty_photo]" href="./events.php">
                                <img itemprop="image" src="./images/slider/CONCERTS (5).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="DETAIL 3" data-rel="prettyPhoto[single_pretty_photo]" href="#">
                                <img itemprop="image" src="./images/slider/DETAIL 3.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="DETAIL WEDDING RING" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/DETAIL WEDDING RING.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE  4TOMI& OLUMIDE WHITE (15)" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE  4TOMI& OLUMIDE WHITE (15).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 1 weddingg (1)" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 1 weddingg (1).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 2 WHITENVINTAGE (4)" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 2 WHITENVINTAGE (4).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="COUPLE" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 3.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 5 MODELLING, MODEL PORTRAIT, FASHION PORTRAIT, BEAUTY, WOMEN PORTRAIT, EDITORIAL, COMMERCIAL PORTRAIT, COMMERCIAL PHOTOGRAPHER, ADVERTISING PORTRAIT  (1)" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 5 MODELLING, MODEL PORTRAIT, FASHION PORTRAIT, BEAUTY, WOMEN PORTRAIT, EDITORIAL, COMMERCIAL PORTRAIT, COMMERCIAL PHOTOGRAPHER, ADVERTISING PORTRAIT  (1).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 6 DOCUMENTARY, CHILDREN, DISPLACED KIDS, GIRL CHILD" data-rel="prettyPhoto[single_pretty_photo]" href="./documentary.php">
                                <img itemprop="image" src="./images/slider/SLIDE 6 DOCUMENTARY, CHILDREN, DISPLACED KIDS, GIRL CHILD.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 7 WEDDING BRIDE (1)" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 7 WEDDING BRIDE (1).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 8 WEDDING DAY, COUPLE PORTRAIT SESSION, WEDDING PORTRAIT, COUPLE ON BEACH, LAGOS WEDDING" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 8 WEDDING DAY, COUPLE PORTRAIT SESSION, WEDDING PORTRAIT, COUPLE ON BEACH, LAGOS WEDDING.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 8 WEDDING RECEPTION, DANCE, COUPLE DANCE, NIGERIAN WEDDING" data-rel="prettyPhoto[single_pretty_photo]" href="./wedding.php">
                                <img itemprop="image" src="./images/slider/SLIDE 8 WEDDING RECEPTION, DANCE, COUPLE DANCE, NIGERIAN WEDDING.jpg" alt="m">
                                </a>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1100px;">
                            <div class="eltdf-ps-image">
                                <a itemprop="image" title="SLIDE 9 PORTRAITS (7)" data-rel="prettyPhoto[single_pretty_photo]" href="./portrait.php">
                                <img itemprop="image" src="./images/slider/SLIDE 9 PORTRAITS (7).jpg" alt="m">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><span class="eltdf-prev-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.479px" height="15.292px" viewBox="0 4.375 45.479 15.292" enable-background="new 0 4.375 45.479 15.292" xml:space="preserve">
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="44.639" y1="12" x2="0.639" y2="12"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                    <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" points="7.639,19 0.639,12 7.639,5 "></polyline>
                    </svg></span></button><button type="button" role="presentation" class="owl-next"><span class="eltdf-next-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.479px" height="15.292px" viewBox="0 4.375 45.479 15.292" enable-background="new 0 4.375 45.479 15.292" xml:space="preserve">
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                    <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" points="37.639,5 44.639,12 37.639,19 "></polyline>
                    </svg></span></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</div>
</div>













<!-- ICONIC PHOTOS -->
<div class="eltdf-row-grid-section-wrapper " style="background-color:#f4f0ed"><div class="eltdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1579780501344"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5842" data-1025-1399="0 43% 56% 0" data-769-1024="0 51% 54.5% 0" data-681-768="0px 38% 55% 0" data-680="0px 0% 55% 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-5842" style="padding: 0 49% 54.5% 0">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h1>Signature</h1>
</div>
</div>
<div class="vc_empty_space" style="height: 14px"><span class="vc_empty_space_inner"></span></div><div class="eltdf-section-title-holder   eltdf-section-title-appeared" style="padding: 0 20% 0 0">
<div class="eltdf-st-inner">
<h3 class="eltdf-st-subtitle" style="line-height: 32px;text-transform: none;font-style: italic;color: #72726c">
<span>Our style is clean, simple, and sincere to communicate essence</span>
</h3>
</div>
</div> </div>
</div>
</div></div></div></div></div></div></div></div><div class="eltdf-row-grid-section-wrapper "><div class="eltdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1579532734729"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-4896" data-1400-1600="35px 0 0 0" data-1025-1399="0 0 0 0" data-769-1024="27px 0 0 0" data-681-768="0px 0 0 0" data-680="167px 0 47px 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-4896" style="padding: 35px 0 0 0">
<div class="eltdf-portfolio-list-holder eltdf-grid-list eltdf-grid-masonry-list eltdf-pl-masonry eltdf-two-columns eltdf-no-space eltdf-disable-bottom-space eltdf-pl-standard eltdf-pip-disabled    eltdf-pl-pag-no-pagination  eltdf-pl-has-animation    " data-type="masonry" data-number-of-columns="two" data-space-between-items="no" data-number-of-items="-1" data-image-proportions="full" data-enable-fixed-proportions="no" data-enable-padding="yes" data-disable-padding-on-mobile="yes" data-enable-image-shadow="no" data-category="interior" data-orderby="date" data-order="ASC" data-item-style="standard" data-enable-title="yes" data-title-tag="h3" data-enable-category="yes" data-enable-count-images="yes" data-enable-excerpt="no" data-excerpt-length="20" data-pagination-type="no-pagination" data-filter="no" data-filter-order-by="name" data-enable-article-animation="yes" data-portfolio-slider-on="no" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="yes" data-enable-pagination="yes" data-main-title-tag="h3" data-target="_self" data-max-num-pages="0" data-next-page="2">
<div class="eltdf-pl-inner eltdf-outer-space eltdf-masonry-list-wrapper clearfix" style="position: relative; height: 1660.92px; opacity: 1;">
<div class="eltdf-masonry-grid-sizer"></div>
<div class="eltdf-masonry-grid-gutter"></div>
<article class="eltdf-pl-item eltdf-item-space  post-353 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-interior portfolio-tag-photo eltdf-item-show eltdf-item-shown" style="padding: 190px 7% 0px 0px; position: absolute; left: 0%; top: 0px;">
<div class="eltdf-pl-item-inner">
<div class="eltdf-pli-image">
<img width="800" height="979" src="./images/wedding6.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px"></div>
<div class="eltdf-pli-text-holder">
<div class="eltdf-pli-text-wrapper">
<div class="eltdf-pli-text">
<div class="eltdf-pli-category-holder">
<a itemprop="url" class="eltdf-pli-category" href="#">Pre wedding</a>
</div>
<h3 itemprop="name" class="eltdf-pli-title entry-title">
Bridal Bouquet	</h3>
</div>
</div>
</div>
<a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
</div>
</article><article class="eltdf-pl-item eltdf-item-space  post-360 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-interior portfolio-tag-photo eltdf-item-show eltdf-item-shown" style="padding: 0px 0px 0px 15%; position: absolute; left: 50%; top: 0px;">
<div class="eltdf-pl-item-inner">
<div class="eltdf-pli-image">
<img width="800" height="1010" src="./images/wedding1.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px"></div>
<div class="eltdf-pli-text-holder">
<div class="eltdf-pli-text-wrapper">
<div class="eltdf-pli-text">
<div class="eltdf-pli-category-holder">
<a itemprop="url" class="eltdf-pli-category" href="#">Traditional wedding</a>
</div>
<h3 itemprop="name" class="eltdf-pli-title entry-title">
Love and culture</h3>
</div>
</div>
</div>
<a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
</div>
</article><article class="eltdf-pl-item eltdf-item-space  post-366 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-interior portfolio-tag-photo eltdf-item-show eltdf-item-shown" style="padding: 120px 0px 57px 7%; position: absolute; left: 50%; top: 601px;">
<div class="eltdf-pl-item-inner">
<div class="eltdf-pli-image">
<img width="800" height="963" src="./images/signature-portrait.jpg" class="attachment-full size-full wp-post-image" alt="m"  sizes="(max-width: 800px) 100vw, 800px"></div>
<div class="eltdf-pli-text-holder">
<div class="eltdf-pli-text-wrapper">
<div class="eltdf-pli-text">
<div class="eltdf-pli-category-holder">
<a itemprop="url" class="eltdf-pli-category" href="#">Portraits</a>
</div>
<h3 itemprop="name" class="eltdf-pli-title entry-title">
Album Cover</h3>
</div>
</div>
</div>
<a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
</div>
</article><article class="eltdf-pl-item eltdf-item-space  post-365 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-interior portfolio-tag-photo eltdf-item-show eltdf-item-shown" style="padding: 120px 15% 57px 0px; position: absolute; left: 0%; top: 884px;">
<div class="eltdf-pl-item-inner">
<div class="eltdf-pli-image">
<img width="800" height="1007" src="./images/traditional2.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px"></div>
<div class="eltdf-pli-text-holder">
<div class="eltdf-pli-text-wrapper">
<div class="eltdf-pli-text">
<div class="eltdf-pli-category-holder">
<a itemprop="url" class="eltdf-pli-category" href="#">Portrait</a>
</div>
<h3 itemprop="name" class="eltdf-pli-title entry-title">
Royal Prince</h3>
</div>
</div>
</div>
<a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
</div>
</article> </div>
</div> </div>
</div>
</div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs"><div class="vc_column-inner vc_custom_1578928754412"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-4028" data-680="200px 0 0 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-4028" style="padding: 0 14% 0 0">
<div class="wpb_single_image wpb_content_element vc_align_center">
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="228" height="131" src="./Solene – Wedding Photography Theme_files/h1-img-15.png" class="vc_single_image-img attachment-full" alt="d"></div>
</figure>
</div>
</div>
</div>
</div></div></div></div></div></div>
<!-- AUTHENTIC PHOTOS SECTION -->









<!--  VIDEO SECTION -->
<div class="eltdf-row-grid-section-wrapper eltdf-content-aligment-center" style="background-color:#f4f0ed">
  <div class="eltdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
              <div class="eltdf-eh-item" data-item-class="eltdf-eh-custom-2251" data-1025-1399="0 19% 390px" data-769-1024="2px 0% 302px" data-681-768="2px 5% 256px" data-680="0 0% 175px">
                <div class="eltdf-eh-item-inner">
                  <div class="eltdf-eh-item-content eltdf-eh-custom-2251" style="padding: 0 19% 437px">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                      <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1579536243979">
                          <div class="wpb_wrapper">
                            <div class="eltdf-section-title-holder   eltdf-section-title-appeared">
                              <div class="eltdf-st-inner">
                                <span class="eltdf-st-separator" style="color: #e1d9cf;height: 136px"></span>
                                <h3 class="eltdf-st-title" style="color: #72726c">
                                hiring us means you trust us to keep to our promise of delivering a remarkable and unforgettable memory of your project</h3>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="eltdf-row-grid-section-wrapper eltdf-content-aligment-center">
  <div class="eltdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="eltdf-row-grid-section-wrapper ">
              <div class="eltdf-row-grid-section">
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1579536290083">
                      <div class="wpb_wrapper">
                        <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                          <div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-6472" data-1025-1399="50px 0 0" data-769-1024="140px 0 0" data-681-768="185px 0 0" data-680="265px 0 0">
                            <div class="eltdf-eh-item-inner">
                              <div class="eltdf-eh-item-content eltdf-eh-custom-6472">
                                <div class="eltdf-video-button-holder  eltdf-vb-has-img">
                                  <div class="eltdf-video-button-image">
                                    <!-- <img width="1302" height="696" src="./images/videopic.jpg" class="attachment-full size-full" alt="d" sizes="(max-width: 1302px) 100vw, 1302px"> -->
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/XeBd5ANLuvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                  <!-- <a class="eltdf-video-button-play" style="color: #ffffff" href="https://www.youtube.com/watch?v=XeBd5ANLuvo&t=16s" data-rel="prettyPhoto[video_button_pretty_photo_412]">
                                    <span class="eltdf-video-button-play-inner">
                                      <img src="https://img.icons8.com/android/64/000000/play.png" height="30px" width="30px" />
                                      <span class="eltdf-vb-label">
                                        <span>play</span>
                                        <span>video</span>
                                      </span>
                                      <svg class="eltdf-svg-circle">
                                        <circle cx="50%" cy="50%" r="45%"></circle>
                                      </svg>
                                      <svg class="eltdf-svg-circle">
                                        <circle cx="50%" cy="50%" r="45%"></circle>
                                      </svg>
                                    </span>
                                  </a> -->
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF VIDEO SECTION -->





<!-- NUMBERS SECTION -->
<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner vc_custom_1579260377492"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5160" data-1400-1600="0 30% 0 0" data-1025-1399="70px 73% 0 6%" data-769-1024="0 30% 0 0" data-681-768="0 30% 0 0" data-680="200px 0 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-5160" style="padding: 0 43% 0 0">
<div class="wpb_single_image wpb_content_element vc_align_center">
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="118" src="./Solene – Wedding Photography Theme_files/landing-img-17.png" class="vc_single_image-img attachment-full" alt="d"></div>
</figure>
</div>
</div>
</div>
</div></div></div></div></div>


<!-- <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="eltdf-row-grid-section-wrapper eltdf-content-aligment-center"><div class="eltdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1575284206394"><div class="eltdf-content-aligment-left wpb_column vc_column_container vc_col-sm-4 vc_col-lg-1/5"><div class="vc_column-inner vc_custom_1574437400720"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5661" data-680="0 0 0 65px">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-5661">
<div class="eltdf-counter-holder " style="opacity: 1;">
<div class="eltdf-counter-inner">
<span class="eltdf-counter eltdf-zero-counter" style="color: #ececea">123</span>
<h6 class="eltdf-counter-title">
cup of coffe </h6>
</div>
</div> </div>
</div>
</div></div><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-counter-holder " style="opacity: 1;">
<div class="eltdf-counter-inner">
<span class="eltdf-counter eltdf-zero-counter" style="color: #ececea">743</span>
<h6 class="eltdf-counter-title">
new couples </h6>
</div>
</div><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-9135" data-769-1024="0 0 0 22px" data-681-768="0 0 0 22px">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-9135">
<div class="eltdf-counter-holder " style="opacity: 1;">
<div class="eltdf-counter-inner">
<span class="eltdf-counter eltdf-zero-counter" style="color: #ececea">573</span>
<h6 class="eltdf-counter-title">
best bouquets </h6>
</div>
</div> </div>
</div>
</div></div><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-1/5"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-3635" data-769-1024="0 0 0 80px" data-681-768="0 0 0 80px">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-3635">
<div class="eltdf-counter-holder " style="opacity: 1;">
<div class="eltdf-counter-inner">
<span class="eltdf-counter eltdf-zero-counter" style="color: #ececea">283</span>
<h6 class="eltdf-counter-title">
tasty cakes </h6>
</div>
</div> </div>
</div>
</div></div><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div></div><div class="eltdf-content-aligment-right wpb_column vc_column_container vc_col-sm-4 vc_col-lg-1/5"><div class="vc_column-inner vc_custom_1574437407461"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5266" data-769-1024="0 0 0 110px" data-681-768="0 0 0 110px" data-680="0 65px 0 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-5266">
<div class="eltdf-counter-holder " style="opacity: 1;">
<div class="eltdf-counter-inner">
<span class="eltdf-counter eltdf-zero-counter" style="color: #ececea">954</span>
<h6 class="eltdf-counter-title">
ceremonies </h6>
</div>
</div> </div>
</div>
</div></div><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div></div></div></div></div></div></div> -->
<!-- END OF NUMBERS -->






<!-- TEAM MEMBERS SECTION -->
<div class="vc_row wpb_row vc_row-fluid vc_custom_1576063397961 eltdf-content-aligment-center">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="eltdf-section-title-holder   eltdf-section-title-appeared">
                    <div class="eltdf-st-inner">
                        <h2 class="eltdf-st-title">Our Photography Team </h2>
                        <h3 class="eltdf-st-subtitle" style="text-transform: none;font-style: italic;color: #84847c">
                            <span>Meet our team</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="eltdf-row-grid-section-wrapper ">
    <div class="eltdf-row-grid-section">
        <div class="vc_row wpb_row vc_row-fluid vc_column-gap-1">
            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="eltdf-team-holder eltdf-team-info-below-image">
                            <div class="eltdf-team-inner">
                                <div class="eltdf-team-image">
                                    <img width="800" height="1142" src="./images/tpj4s.jpg" class="" alt="d" sizes="(max-width: 800px) 100vw, 800px">
                                    <div class="eltdf-team-hover-image">
                                        <img width="800" height="1142" src="./images/tpj4.jpg" class="attachment-full size-full" alt="m" sizes="(max-width: 800px) 100vw, 800px">
                                    </div>
                                        <!-- <a class="eltdf-team-link" href="" target="_self"></a> -->
                                    </div>
                                <div class="eltdf-team-info">
                                    <span class="eltdf-team-position" style="color: #84847c">Creative Director</span>
                                    <h3 class="eltdf-team-name" style="font-size: 17px">Temitope Jalekun</h3>
                                    <div class="eltdf-team-textual-social-holder">
                                        <a class="eltdf-team-icon" href="https://www.instagram.com/temitopejalekun" target="_blank">IN</a>
                                        <a class="eltdf-team-icon" href="https://twitter.com/adedoyintp" target="_blank">TW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 32px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="eltdf-team-holder eltdf-team-info-below-image">
                            <div class="eltdf-team-inner">
                                <div class="eltdf-team-image " style="margin-top: 40px">
                                    <img width="800" height="1142" src="./images/IMG_20210711_101013s.jpg" class="first-team-photo" alt="d" sizes="(max-width: 800px) 100vw, 800px">
                                    <div class="eltdf-team-hover-image">
                                        <img width="800" height="1142" src="./images/IMG_20210711_101013.jpg" class="attachment-full size-full" alt="m"> </div>
                                        <!-- <a class="eltdf-team-link" href="" target="_self"></a> -->
                                    </div>
                                <div class="eltdf-team-info">
                                    <span class="eltdf-team-position" style="color: #84847c">Photographer</span>
                                    <h3 class="eltdf-team-name" style="font-size: 17px">Leonard Ikediuba</h3>
                                    <div class="eltdf-team-textual-social-holder">
                                        <!-- <a class="eltdf-team-icon" href="https://www.facebook.com/glintz_photography" target="_blank">FB</a>
                                        <a class="eltdf-team-icon" href="https://www.instagram.com/glintz_photography" target="_blank">IN</a>
                                        <a class="eltdf-team-icon" href="https://twitter.com/glintz_photography" target="_blank">TW</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 32px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                            <div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-8921" data-680="40px 0 0">
                                <div class="eltdf-eh-item-inner">
                                    <div class="eltdf-eh-item-content eltdf-eh-custom-8921">
                                        <div class="eltdf-team-holder eltdf-team-info-below-image">
                                            <div class="eltdf-team-inner">
                                                <div class="eltdf-team-image">
                                                    <img width="800" height="1142" src="./images/GLI_0736es.jpg" class="" alt="d" sizes="(max-width: 800px) 100vw, 800px">
                                                    <div class="eltdf-team-hover-image">
                                                        <img width="900" height="1242" src="./images/GLI_0736e.jpg" class="l" alt="m"> </div>
                                                        <!-- <a class="eltdf-team-link" href="" target="_self"></a> -->
                                                    </div>
                                                <div class="eltdf-team-info">
                                                    <span class="eltdf-team-position" style="color: #84847c">Retoucher</span>
                                                    <h3 class="eltdf-team-name" style="font-size: 17px">Funmi Awopetu</h3>
                                                    <div class="eltdf-team-textual-social-holder">
                                                        <!-- <a class="eltdf-team-icon" href="https://www.facebook.com/glintz_photography" target="_blank">FB</a>
                                                        <a class="eltdf-team-icon" href="https://www.instagram.com/glintz_photography" target="_blank">IN</a>
                                                        <a class="eltdf-team-icon" href="https://twitter.com/glintz_photography" target="_blank">TW</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 32px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF TEAM MEMBERS SECTION -->


<!--brands-->
<!-- Total / Headies / Gordons Gin / Ekiti state Government -->



<!-- FASHION/SPRING/EVENTS/WEDDING SECTION -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
          <div class="eltdf-eh-item" data-item-class="eltdf-eh-custom-3676" data-1400-1600="230px 0 50px 4.4%" data-1025-1399="213px 0 70px 9.7%" data-769-1024="131px 0 172px 11.8%" data-681-768="107px 0 150px 11%" data-680="181px 10% 128px">
            <div class="eltdf-eh-item-inner">
              <div class="eltdf-eh-item-content eltdf-eh-custom-3676" style="padding: 315px 0 125px 15.8%">
                <div class="eltdf-ils-holder eltdf-ils-split ">
                  <div class="eltdf-ils-content-holder">
                    <a itemprop="url" class="eltdf-ils-item-link eltdf-active" data-index="0" href="portrait.php" target="_self">
                    <span class="eltdf-ils-item-title" style="font-size: 30px">Portrait</span>
                    </a>
                    <a itemprop="url" class="eltdf-ils-item-link" data-index="1" href="wedding.php" target="_self">
                    <span class="eltdf-ils-item-title" style="font-size: 30px">Wedding</span>
                    </a>
                    <a itemprop="url" class="eltdf-ils-item-link" data-index="2" href="events.php" target="_self">
                    <span class="eltdf-ils-item-title" style="font-size: 30px">Events</span>
                    </a>
                    <a itemprop="url" class="eltdf-ils-item-link" data-index="3" href="documentary.php" target="_self">
                    <span class="eltdf-ils-item-title" style="font-size: 30px">Documentary</span>
                    </a>
                  </div>
                  <div class="eltdf-ils-item-images-holder">
                    <div class="eltdf-ils-item-image eltdf-active">
                      <img width="1300" height="718" src="./images/portrait1.jpg" class="attachment-full size-full" alt="d" sizes="(max-width: 1300px) 100vw, 1300px">
                    </div>
                    <div class="eltdf-ils-item-image">
                      <img width="1300" height="718" src="./images/wedding4.jpg" class="attachment-full size-full" alt="d" sizes="(max-width: 1300px) 100vw, 1300px">
                    </div>
                    <div class="eltdf-ils-item-image">
                      <img width="1300" height="718" src="./images/event1.jpg" class="attachment-full size-full" alt="d" sizes="(max-width: 1300px) 100vw, 1300px">
                    </div>
                    <div class="eltdf-ils-item-image">
                      <img width="1300" height="718" src="./images/documentary.jpg" class="attachment-full size-full" alt="d" sizes="(max-width: 1300px) 100vw, 1300px">
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
</div>
<!-- END OF FASHION/SPRING/EVENTS/WEDDING -->






<!-- CLIENT SECTION -->
<div class="vc_row wpb_row vc_row-fluid" style="margin-top: 5%;">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="vc_row wpb_row vc_inner vc_row-fluid" style="background-color:#f4f0ed">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                  <div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-1949" data-1400-1600="175px 1.4% 110px" data-1025-1399="130px 7.3% 115px" data-769-1024="116px 0% 110px" data-681-768="116px 0% 110px" data-680="100px 0% 105px">
                    <div class="eltdf-eh-item-inner">
                      <div class="eltdf-eh-item-content eltdf-eh-custom-1949" style="padding: 179px 13.7% 115px">
                        <div class="eltdf-clients-grid-holder eltdf-grid-list eltdf-disable-bottom-space eltdf-five-columns eltdf-tiny-space  eltdf-cc-hover-switch-images">
                          <div class="eltdf-cg-inner eltdf-outer-space" style="margin-top: 10%;">
                            <div class="eltdf-cc-item eltdf-item-space eltdf-cci-has-link">
                              <img itemprop="image" class="eltdf-cc-image" src="./images/total-logo.png" alt="d" style="width: 50%;">
                            </div>
                            <div class="eltdf-cc-item eltdf-item-space eltdf-cci-has-link" width="10px">
                              <img itemprop="image" class="eltdf-cc-image" src="./images/gordons.png" alt="d" style="width: 50%;">
                            </div>
                            <div class="eltdf-cc-item eltdf-item-space eltdf-cci-has-link">
                              <img itemprop="image" class="eltdf-cc-image" src="./images/so-fresh.png" alt="d" style="width: 50%;">
                            </div>
                            <div class="eltdf-cc-item eltdf-item-space eltdf-cci-has-link">
                              <img itemprop="image" class="eltdf-cc-image" src="./images/ekiti-logo.png" alt="d" style="width: 50%;">
                            </div>
                            <div class="eltdf-cc-item eltdf-item-space eltdf-cci-has-link">
                              <img itemprop="image" class="eltdf-cc-image" src="./images/OLD LAGOS BLACK.png" alt="d" >
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF CLIENT SECTION -->











<!-- BLOG -->
<div class="eltdf-row-grid-section-wrapper ">
  <div class="eltdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1575294415993">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1574762097168">
          <div class="wpb_wrapper">
            <div class="eltdf-section-title-holder   eltdf-section-title-appeared" style="text-align: center">
              <div class="eltdf-st-inner">
                <span class="eltdf-st-separator" style="color: #cececa;height: 135px"></span>
                <h2 class="eltdf-st-title">
                Read our Blog </h2>
                <h3 class="eltdf-st-subtitle" style="text-transform: none;font-style: italic;color: #84847c">
                <span>
                Stories of love, people, places and culture</span>
                </h3>
              </div>
            </div>
            <div class="vc_empty_space" style="height: 57px">
              <span class="vc_empty_space_inner"></span>
            </div>
            <div class="eltdf-blog-list-holder eltdf-grid-list eltdf-bl-standard eltdf-four-columns eltdf-disable-bottom-space eltdf-large-space eltdf-bl-pag-no-pagination" data-type="standard" data-number-of-posts="3" data-number-of-columns="three" data-space-between-items="large" data-category="photography" data-orderby="date" data-order="ASC" data-image-size="full" data-title-tag="h3" data-excerpt-length="15" data-post-info-section="yes" data-post-info-image="yes" data-post-info-author="yes" data-post-info-date="no" data-post-info-category="yes" data-post-info-comments="no" data-post-info-like="no" data-post-info-share="no" data-pagination-type="no-pagination" data-max-num-pages="1" data-next-page="2">
              <div class="eltdf-bl-wrapper eltdf-outer-space">
                <ul class="eltdf-blog-list">
                  <li class="eltdf-bl-item eltdf-item-space">
                    <div class="eltdf-bli-inner">
                      <div class="eltdf-post-image">
                        <?php
                            $query5 = "SELECT * FROM portfolio limit 1";
                            $runquery5= mysqli_query($db,$query5);
                            while($data5=mysqli_fetch_array($runquery5)){
                        ?>
                      <a itemprop="url" href="first-blog.php">
                        <img width="1100" height="1294" src="assets/img/<?=$data5['projectpic']?>" class="attachment-full size-full" alt="d" sizes="(max-width: 1100px) 100vw, 1100px">
                      </a>
                      <?php
                        }
                      ?>
                      </div>
                      <div class="eltdf-bli-content">
                        <!-- <div class="eltdf-bli-info">
                          <div class="eltdf-post-info-category">
                            <a href="#" rel="category tag">Photography</a>
                          </div>
                          <div class="eltdf-post-info-author">
                            <a itemprop="author" class="eltdf-post-info-author-link" href="#">Anna Smith </a>
                          </div>
                        </div>-->
                        <?php
                          $query5 = "SELECT * FROM headers";
                          $queryrun5= mysqli_query($db,$query5);
                          while($data5=mysqli_fetch_array($queryrun5)){
                        ?>
                        <h3 itemprop="name" class="entry-title eltdf-post-title">
                        <a itemprop="url" href="#">
                        <?=$data5['campaignstwos'];?></a>
                        </h3>
                        
                        <div class="eltdf-bli-excerpt">
                          <div class="eltdf-post-excerpt-holder">
                            <p itemprop="description" class="eltdf-post-excerpt" title="<?=$data5['campaignstwo']?>"><?php echo substr($data5['campaignstwo'], 0, 70) . "..."; ?></p>
                          </div>
                          <?php
                            }
                          ?>
                          <div class="eltdf-post-read-more-button">
                            <a itemprop="url" href="first-blog.php" target="_self" class="eltdf-btn eltdf-btn-medium eltdf-btn-simple eltdf-blog-list-button">
                              <span class="eltdf-btn-text">Read More</span> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="eltdf-bl-item eltdf-item-space">
                    <div class="eltdf-bli-inner">
                      <div class="eltdf-post-image">
                        <?php
                            $query5 = "SELECT * FROM ui_design limit 1";
                            $runquery5= mysqli_query($db,$query5);
                            while($data5=mysqli_fetch_array($runquery5)){
                        ?>
                      <a itemprop="url" href="second-blog.php">
                        <img width="1100" height="1294" src="assets/img/<?=$data5['projectpic']?>" class="attachment-full size-full" alt="d" sizes="(max-width: 1100px) 100vw, 1100px">
                      </a>
                      <?php
                        }
                      ?>
                      </div>
                      <div class="eltdf-bli-content">
                        <!-- <div class="eltdf-bli-info">
                          <div class="eltdf-post-info-category">
                            <a href="#" rel="category tag">Photography</a>
                          </div>
                          <div class="eltdf-post-info-author">
                            <a itemprop="author" class="eltdf-post-info-author-link" href="#">Anna Smith </a>
                        </div>
                      </div> -->
                        <?php
                          $query5 = "SELECT * FROM headers";
                          $queryrun5= mysqli_query($db,$query5);
                          while($data5=mysqli_fetch_array($queryrun5)){
                        ?>
                      <h3 itemprop="name" class="entry-title eltdf-post-title">
                        <a itemprop="url" href="#"><?=$data5['campaignsthrees'];?> </a>
                      </h3>
                      <div class="eltdf-bli-excerpt">
                        <div class="eltdf-post-excerpt-holder">
                          <p itemprop="description" class="eltdf-post-excerpt" title="<?=$data5['campaignsthree']?>"><?php echo substr($data5['campaignsthree'], 0, 70) . "..."; ?></p>
                        </div>
                        <?php
                            }
                          ?>
                        <div class="eltdf-post-read-more-button">
                          <a itemprop="url" href="second-blog.php" target="_self" class="eltdf-btn eltdf-btn-medium eltdf-btn-simple eltdf-blog-list-button">
                            <span class="eltdf-btn-text">Read More</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="eltdf-bl-item eltdf-item-space">
                  <div class="eltdf-bli-inner">
                    <div class="eltdf-post-image">
                        <?php
                            $query5 = "SELECT * FROM works limit 1";
                            $runquery5= mysqli_query($db,$query5);
                            while($data5=mysqli_fetch_array($runquery5)){
                        ?>
                      <a itemprop="url" href="third-blog.php">
                        <img width="1100" height="1294" src="assets/img/<?=$data5['projectpic']?>" class="attachment-full size-full" alt="d" sizes="(max-width: 1100px) 100vw, 1100px">
                      </a>
                      <?php
                        }
                      ?>
                    </div>
                    <div class="eltdf-bli-content">
                      <!-- <div class="eltdf-bli-info">
                        <div class="eltdf-post-info-category">
                          <a href="#" rel="category tag">Photography</a>
                        </div>
                        <div class="eltdf-post-info-author">
                          <a itemprop="author" class="eltdf-post-info-author-link" href="#">Anna Smith</a>
                      </div>
                    </div> -->
                    <?php
                        $query5 = "SELECT * FROM headers";
                        $queryrun5= mysqli_query($db,$query5);
                        while($data5=mysqli_fetch_array($queryrun5)){
                    ?>
                    <h3 itemprop="name" class="entry-title eltdf-post-title">
                      <a itemprop="url" href="#"><?=$data5['campaignsfours'];?></a>
                    </h3>
                    <div class="eltdf-bli-excerpt">
                      <div class="eltdf-post-excerpt-holder">
                        <p itemprop="description" class="eltdf-post-excerpt" title="<?=$data5['campaignsfour']?>"><?php echo substr($data5['campaignsfour'], 0, 70) . "..."; ?></p>
                      </div>
                      <?php
                            }
                          ?>
                      <div class="eltdf-post-read-more-button">
                        <a itemprop="url" href="third-blog.php" target="_self" class="eltdf-btn eltdf-btn-medium eltdf-btn-simple eltdf-blog-list-button">
                            <span class="eltdf-btn-text">Read More</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="eltdf-bl-item eltdf-item-space">
                  <div class="eltdf-bli-inner">
                    <div class="eltdf-post-image">
                        <?php
                            $query5 = "SELECT * FROM forthblog limit 1";
                            $runquery5= mysqli_query($db,$query5);
                            while($data5=mysqli_fetch_array($runquery5)){
                        ?>
                      <a itemprop="url" href="forth-blog.php">
                        <img width="1100" height="1294" src="assets/img/<?=$data5['projectpic']?>" class="attachment-full size-full" alt="d" sizes="(max-width: 1100px) 100vw, 1100px">
                      </a>
                      <?php
                        }
                      ?>
                    </div>
                    <div class="eltdf-bli-content">
                      <!-- <div class="eltdf-bli-info">
                        <div class="eltdf-post-info-category">
                          <a href="#" rel="category tag">Photography</a>
                        </div>
                        <div class="eltdf-post-info-author">
                          <a itemprop="author" class="eltdf-post-info-author-link" href="#">Anna Smith</a>
                      </div>
                    </div> -->
                    <?php
                        $query5 = "SELECT * FROM headers";
                        $queryrun5= mysqli_query($db,$query5);
                        while($data5=mysqli_fetch_array($queryrun5)){
                    ?>
                    <h3 itemprop="name" class="entry-title eltdf-post-title">
                      <a itemprop="url" href="#"><?=$data5['campaignsfives'];?></a>
                    </h3>
                    <div class="eltdf-bli-excerpt">
                      <div class="eltdf-post-excerpt-holder">
                        <p itemprop="description" class="eltdf-post-excerpt" title="<?=$data5['campaignsfive']?>"><?php echo substr($data5['campaignsfive'], 0, 70) . "..."; ?></p>
                      </div>
                      <?php
                            }
                          ?>
                      <div class="eltdf-post-read-more-button">
                        <a itemprop="url" href="forth-blog.php" target="_self" class="eltdf-btn eltdf-btn-medium eltdf-btn-simple eltdf-blog-list-button">
                            <span class="eltdf-btn-text">Read More</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div></div>
<!-- END OF BLOG -->




<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-c39dde32-9eb4-40d0-a62b-41c830b90953"></div>



<!-- PARALLAX -->
<div data-parallax-bg-image="images/GLI_8296.jpg" data-parallax-bg-speed="1" class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex eltdf-parallax-row-holder eltdf-content-aligment-center" style="background-image: url(images/GLI_8296.jpg); background-position: cover; background-size: 100% 150%;">
  <div class="wpb_column vc_column_container vc_col-sm-12" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
          <div class="eltdf-eh-item   eltdf-horizontal-alignment-center " data-item-class="eltdf-eh-custom-6456" data-681-768="210px 10% 215px" data-680="210px 9% 215px">
            <div class="eltdf-eh-item-inner">
              <div class="eltdf-eh-item-content eltdf-eh-custom-6456" style="padding: 210px 0 215px">
                <div class="eltdf-section-title-holder   eltdf-section-title-appeared">
                  <div class="eltdf-st-inner">
                    <h1 class="eltdf-st-title" style="color: #ffffff; font-size: 40px;">Let's document these moments together!</h1>
                    <h3 class="eltdf-st-subtitle" style="margin-top: 19px;text-transform: none;font-style: italic;color: #ffffff">
                    </h3>
                  </div>
                </div>
                <div class="vc_empty_space" style="height: 42px">
                  <span class="vc_empty_space_inner"></span>
                </div>
                <!-- <a itemprop="url" href="#" target="_self" style="color: #ffffff;border-color: rgba(255,255,255,0.6)" class="eltdf-btn eltdf-btn-large eltdf-btn-outline eltdf-btn-custom-hover-color" data-hover-color="#ffffff">
                  <span class="eltdf-btn-outline-horizontal-lines" style="color: #ffffff"></span>
                  <span class="eltdf-btn-outline-vertical-lines" style="color: #ffffff"></span>
                  <span class="eltdf-btn-text">Read more</span>
                </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF PARALLAX -->







<!-- FOUR SECTION -->

<!-- END OF FOUR SECTIONS -->







<!-- TESTIMONIAL SECTION -->
<div class="eltdf-row-grid-section-wrapper ">
    <div class="eltdf-row-grid-section">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="eltdf-testimonials-holder clearfix eltdf-testimonials-standard ">
                            <div class="eltdf-testimonials eltdf-owl-slider eltdf-slider-has-both-nav owl-loaded owl-drag" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="yes" data-enable-pagination="yes" style="visibility: visible;">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-3300px, 0px, 0px); transition: all 0.6s ease 0s; width: 7700px;">
                                        <div class="owl-item cloned" style="width: 1100px;">
                                            <div class="eltdf-testimonial-content" id="eltdf-testimonials-91">
                                                <div class="eltdf-testimonial-image">
                                                    <img width="638" height="434" src="./images/Client feedback Mrs Toimlola Ojo.png" class="attachment-638x434 size-638x434 wp-post-image" alt="d" sizes="(max-width: 638px) 100vw, 638px">
                                                </div>
                                                <div class="eltdf-testimonial-text-holder">
                                                    <!-- <span class="eltdf-testimonial-date">December 01,2019</span> -->
                                                     <p class="eltdf-testimonial-text">Choosing Glintz Photography was one of the best decisions we made when choosing Vendors for our wedding. 
                                                    The service, temperament of the photographer and support, customer service and delivery were all top notch. 
                                                    The pictures and videos were beautifully captured. 
                                                    I must specifically commend the ability of Glintz to keep the bride & groom happy, calm and engaged.
                                                    It is very clear; he is very passionate about photography. 
                                                    I would recommend and use again!!”
                                                    </p>
                                                    <h6 class="eltdf-testimonial-author">
                                                    <span class="eltdf-testimonials-author-name">TOMI + OLUMIDE</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 1100px;">
                                            <div class="eltdf-testimonial-content" id="eltdf-testimonials-86">
                                                <div class="eltdf-testimonial-image">
                                                    <img width="638" height="434" src="./images/TRADITIONAL  (6).jpg" class="attachment-638x434 size-638x434 wp-post-image" alt="d" sizes="(max-width: 638px) 100vw, 638px">
                                                </div>
                                                <div class="eltdf-testimonial-text-holder">
                                                    <!-- <span class="eltdf-testimonial-date">November 19, 2019</span> -->
                                                    <p class="eltdf-testimonial-text">I am glad I stumbled upon Glintz photography! He was instantly able to make me, my family and friends at ease and capture the best moments. We love our wedding pictures and videos and would not hesitate to recommend Glintz to anyone who wants a truly professional experience.</p>
                                                    <h6 class="eltdf-testimonial-author">
                                                    <span class="eltdf-testimonials-author-name">TAOFIQAT & LAOLU</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="owl-item" style="width: 1100px;">
                                            <div class="eltdf-testimonial-content" id="eltdf-testimonials-92">
                                                <div class="eltdf-testimonial-image">
                                                    <img width="638" height="434" src="./Solene – Wedding Photography Theme_files/h1-testimonials-img-1-768x522.jpg" class="attachment-638x434 size-638x434 wp-post-image" alt="d" sizes="(max-width: 638px) 100vw, 638px">
                                                </div>
                                                <div class="eltdf-testimonial-text-holder">
                                                    <span class="eltdf-testimonial-date">October 12,2019</span>
                                                    <p class="eltdf-testimonial-text">Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi at vero eos et vitae feugiat magna, ut ligula</p>
                                                    <h6 class="eltdf-testimonial-author">
                                                    <span class="eltdf-testimonials-author-name">Gloria+Nate</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 1100px;">
                                            <div class="eltdf-testimonial-content" id="eltdf-testimonials-93">
                                                <div class="eltdf-testimonial-image">
                                                    <img width="638" height="434" src="./Solene – Wedding Photography Theme_files/h1-testimonials-img-3-768x522.jpg" class="attachment-638x434 size-638x434 wp-post-image" alt="d" sizes="(max-width: 638px) 100vw, 638px">
                                                </div>
                                                <div class="eltdf-testimonial-text-holder">
                                                    <span class="eltdf-testimonial-date">December 01,2019</span>
                                                    <p class="eltdf-testimonial-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis vitae feugiat magna, ut mattis ligula praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi</p>
                                                    <h6 class="eltdf-testimonial-author">
                                                    <span class="eltdf-testimonials-author-name">Emma+Mike</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span class="eltdf-prev-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.479px" height="15.292px" viewBox="0 4.375 45.479 15.292" enable-background="new 0 4.375 45.479 15.292" xml:space="preserve">
                                		<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="44.639" y1="12" x2="0.639" y2="12"></line>
                                		<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                        				<polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" points="7.639,19 0.639,12 7.639,5 "></polyline>
                        				</svg></span></button><button type="button" role="presentation" class="owl-next"><span class="eltdf-next-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.479px" height="15.292px" viewBox="0 4.375 45.479 15.292" enable-background="new 0 4.375 45.479 15.292" xml:space="preserve">
                        				<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                        				<line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" x1="0.639" y1="12" x2="44.639" y2="12"></line>
                                		<polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" points="37.639,5 44.639,12 37.639,19 "></polyline>
                                		</svg></span></button>
                                    </div>
                                    <div class="owl-dots">
                                    <button role="button" class="owl-dot"><span></span><svg class="eltdf-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg></button><button role="button" class="owl-dot active"><span></span><svg class="eltdf-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg></button><button role="button" class="owl-dot"><span></span><svg class="eltdf-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF TESTIMONIAL -->






<!-- PRICING PLAN -->
<!-- <div class="vc_row wpb_row vc_row-fluid vc_custom_1575293319816 eltdf-content-aligment-center"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 "><div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5465" data-680="0 15% 0">
<div class="eltdf-eh-item-inner">
<div class="eltdf-eh-item-content eltdf-eh-custom-5465">
<div class="eltdf-section-title-holder   eltdf-section-title-appeared">
<div class="eltdf-st-inner">
<h2 class="eltdf-st-title">
Pricing Plans </h2>
<h3 class="eltdf-st-subtitle" style="text-transform: none;font-style: italic;color: #84847c">
<span>
Alienum phaedrum torquatos </span>
</h3>
</div>
</div> </div>
</div>
</div></div></div></div></div></div><div class="eltdf-row-grid-section-wrapper "><div class="eltdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="eltdf-pricing-tables eltdf-grid-list eltdf-disable-bottom-space clearfix eltdf-three-columns eltdf-medium-space"><div class="eltdf-pt-wrapper eltdf-outer-space"><div class="eltdf-price-table eltdf-item-space  ">
<div class="eltdf-pt-inner" style="color: #afafa5">
<ul>
<li class="eltdf-pt-title-holder">
<span class="eltdf-pt-title" style="color: #4d504a">Standard</span>
</li>
<li class="eltdf-pt-prices">
<sup class="eltdf-pt-value">$</sup>
<span class="eltdf-pt-price" style="color: #afafa5">291</span>
<span class="eltdf-pt-mark">Month</span>
</li>
<li class="eltdf-pt-content">
<ul>
<li>Relaxing masage</li>
<li>Manicure &amp; Pedicure</li>
<li>Body Polish</li>
<li>Face Treatment</li>
</ul>
</li>
<li class="eltdf-pt-button">
<a itemprop="url" href="#" target="_self" class="eltdf-btn eltdf-btn-large eltdf-btn-solid"> <span class="eltdf-btn-text">SEND</span> </a> </li>
</ul>
</div>
</div><div class="eltdf-price-table eltdf-item-space  eltdf-pt-active-item">
<div class="eltdf-pt-inner">
<ul>
<li class="eltdf-pt-title-holder">
<span class="eltdf-pt-title" style="color: #4d504a">pREMIUM</span>
</li>
<li class="eltdf-pt-prices">
<sup class="eltdf-pt-value">$</sup>
<span class="eltdf-pt-price" style="color: #afafa5">391</span>
<span class="eltdf-pt-mark">Month</span>
</li>
<li class="eltdf-pt-content">
<ul>
<li>Face Treatment</li>
<li>Relaxing masage</li>
<li>Body Polish</li>
<li>Manicure &amp; Pedicure</li>
</ul>
</li>
<li class="eltdf-pt-button">
<a itemprop="url" href="#" target="_self" class="eltdf-btn eltdf-btn-large eltdf-btn-outline"> <span class="eltdf-btn-outline-horizontal-lines"></span> <span class="eltdf-btn-outline-vertical-lines"></span> <span class="eltdf-btn-text">SEND</span> </a> </li>
</ul>
</div>
</div><div class="eltdf-price-table eltdf-item-space  ">
<div class="eltdf-pt-inner" style="color: #afafa5">
<ul>
<li class="eltdf-pt-title-holder">
<span class="eltdf-pt-title" style="color: #4d504a">Premium</span>
</li>
<li class="eltdf-pt-prices">
<sup class="eltdf-pt-value">$</sup>
<span class="eltdf-pt-price" style="color: #afafa5">491</span>
<span class="eltdf-pt-mark">Month</span>
</li>
<li class="eltdf-pt-content">
<ul>
<li>Relaxing masage</li>
<li>Face Treatment</li>
<li>Body Polish</li>
<li>Manicure &amp; Pedicure</li>
</ul>
</li>
<li class="eltdf-pt-button">
<a itemprop="url" href="#" target="_self" class="eltdf-btn eltdf-btn-large eltdf-btn-solid"> <span class="eltdf-btn-text">SEND</span> </a> </li>
</ul>
</div>
</div></div></div></div></div></div></div></div></div> -->
<!-- END OF PRICING PLANS -->










<!-- FOUR PICTURES SECTION -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner vc_custom_1574260946124">
      <div class="wpb_wrapper">
        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1579257187847 vc_row-has-fill" style="background-color:#f4f0ed">
          <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="eltdf-elements-holder eltdf-one-column eltdf-responsive-mode-768 ">
                  <div class="eltdf-eh-item" data-item-class="eltdf-eh-custom-9451" data-1400-1600="0 60% 0 0" data-1025-1399="0px 68% 0 6%" data-769-1024="0 30% 0 0" data-681-768="0 9% 0 0" data-680="200px 0 0">
                    <div class="eltdf-eh-item-inner">
                      <div class="eltdf-eh-item-content eltdf-eh-custom-9451" style="padding: 0 22% 0 0">
                        <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1579256039881">
                          <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                              <img width="143" height="112" src="./Solene – Wedding Photography Theme_files/landing-img-18.png" class="vc_single_image-img attachment-full" alt="d">
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
            <div class="vc_column-inner">
              <div class="wpb_wrapper"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="eltdf-portfolio-list-holder eltdf-grid-list eltdf-pl-gallery eltdf-four-columns eltdf-no-space eltdf-disable-bottom-space eltdf-pl-gallery-overlay eltdf-pip-disabled  eltdf-pl-pag-no-pagination" data-type="gallery" data-number-of-columns="four" data-space-between-items="no" data-number-of-items="4" data-image-proportions="full" data-enable-fixed-proportions="no" data-enable-padding="no" data-disable-padding-on-mobile="yes" data-enable-image-shadow="no" data-category="memory" data-orderby="date" data-order="ASC" data-item-style="gallery-overlay" data-enable-title="yes" data-title-tag="h3" data-enable-category="yes" data-enable-count-images="yes" data-enable-excerpt="no" data-excerpt-length="20" data-pagination-type="no-pagination" data-filter="no" data-filter-order-by="name" data-enable-article-animation="no" data-portfolio-slider-on="no" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="yes" data-enable-pagination="yes" data-main-title-tag="h3" data-target="_self" data-max-num-pages="1" data-next-page="2">
          <div class="eltdf-pl-inner eltdf-outer-space  clearfix">
            <article class="eltdf-pl-item eltdf-item-space  post-1069 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-memory portfolio-tag-selebration">
              <div class="eltdf-pl-item-inner">
                <div class="eltdf-pli-image">
                  <img width="800" height="1017" src="./images/portraits2.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px">
                </div>
                <div class="eltdf-pli-text-holder">
                  <div class="eltdf-pli-text-wrapper">
                    <div class="eltdf-pli-text">
                      <div class="eltdf-pli-category-holder">
                        <a itemprop="url" class="eltdf-pli-category" href="#">Memory</a>
                      </div>
                      <h3 itemprop="name" class="eltdf-pli-title entry-title">Capture Moment</h3>
                    </div>
                  </div>
                </div>
                <a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
              </div>
            </article>
            <article class="eltdf-pl-item eltdf-item-space  post-1071 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-memory portfolio-tag-selebration">
              <div class="eltdf-pl-item-inner">
                <div class="eltdf-pli-image">
                  <img width="800" height="1017" src="./images/portraits3.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px">
                </div>
                <div class="eltdf-pli-text-holder">
                  <div class="eltdf-pli-text-wrapper">
                    <div class="eltdf-pli-text">
                      <div class="eltdf-pli-category-holder">
                        <a itemprop="url" class="eltdf-pli-category" href="#">Memory</a>
                      </div>
                        <h3 itemprop="name" class="eltdf-pli-title entry-title">Now &amp; Forever</h3>
                    </div>
                  </div>
                </div>
                <a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
              </div>
            </article>
            <article class="eltdf-pl-item eltdf-item-space  post-1074 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-memory portfolio-tag-selebration">
              <div class="eltdf-pl-item-inner">
                <div class="eltdf-pli-image">
                  <img width="800" height="1017" src="./images/celebrate.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px"></div>
                    <div class="eltdf-pli-text-holder">
                      <div class="eltdf-pli-text-wrapper">
                        <div class="eltdf-pli-text">
                          <div class="eltdf-pli-category-holder">
                            <a itemprop="url" class="eltdf-pli-category" href="#">Memory</a>
                          </div>
                          <h3 itemprop="name" class="eltdf-pli-title entry-title">Let’s Celebrate</h3>
                        </div>
                      </div>
                    </div>
                    <a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
                  </div>
                </article>
                <article class="eltdf-pl-item eltdf-item-space  post-1076 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-memory portfolio-tag-selebration">
                  <div class="eltdf-pl-item-inner">
                    <div class="eltdf-pli-image">
                      <img width="800" height="1017" src="./images/portraits6.jpg" class="attachment-full size-full wp-post-image" alt="m" sizes="(max-width: 800px) 100vw, 800px">
                    </div>
                    <div class="eltdf-pli-text-holder">
                      <div class="eltdf-pli-text-wrapper">
                        <div class="eltdf-pli-text">
                          <div class="eltdf-pli-category-holder">
                            <a itemprop="url" class="eltdf-pli-category" href="#">Memory</a>
                          </div>
                          <h3 itemprop="name" class="eltdf-pli-title entry-title">Birthday Portrait</h3>
                        </div>
                      </div>
                    </div>
                    <a itemprop="url" class="eltdf-pli-link eltdf-block-drag-link" href="#" target="_self"></a>
                  </div>
                </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--END OF FOUR PICTURES SECTION-->









<!-- CONTACT FORM -->
<div class="vc_row wpb_row vc_row-fluid eltdf-content-aligment-right">
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
        <div class="vc_column-inner">
            <div class="wpb_wrapper"></div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
        <div class="vc_column-inner">
            <div class="wpb_wrapper"></div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-xs">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                    <div class="eltdf-eh-item   eltdf-horizontal-alignment-right " data-item-class="eltdf-eh-custom-6189" data-680="200px 0 0 0">
                        <div class="eltdf-eh-item-inner">
                            <div class="eltdf-eh-item-content eltdf-eh-custom-6189" style="padding: 140px 0 0 63%">
                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="239" height="224" src="./Solene – Wedding Photography Theme_files/h1-img-16.png" class="vc_single_image-img attachment-full" alt="d">
                                       </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="eltdf-row-grid-section-wrapper eltdf-content-aligment-center">
    <div class="eltdf-row-grid-section">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1578930670219">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1578930577396">
                    <div class="wpb_wrapper">
                        <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                            <div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-4725" data-1400-1600="60px 0 0" data-1025-1399="60px 0 0" data-769-1024="101px 0 0" data-681-768="131px 0 0" data-680="353px 0 0">
                                <div class="eltdf-eh-item-inner">
                                    <div class="eltdf-eh-item-content eltdf-eh-custom-4725">
                                        <div class="eltdf-section-title-holder   eltdf-section-title-appeared">
                                            <div class="eltdf-st-inner">
                                                <h2 class="eltdf-st-title">Get in Touch </h2>
                                                <h3 class="eltdf-st-subtitle" style="text-transform: none;font-style: italic;color: #84847c">
                                                    <!-- <span>Follow our latest stories. </span> -->
                                                    <span>To hire us</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 67px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="eltdf-row-grid-section-wrapper ">
                            <div class="eltdf-row-grid-section">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1576075003221">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1574257497047">
                                            <div class="wpb_wrapper">
                                                <div class="eltdf-elements-holder   eltdf-one-column  eltdf-responsive-mode-768 ">
                                                    <div class="eltdf-eh-item    " data-item-class="eltdf-eh-custom-5857" data-769-1024="2.5% 16% 60px" data-681-768="2.5% 16% 60px" data-680="34px 8% 60px">
                                                        <div class="eltdf-eh-item-inner">
                                                            <div class="eltdf-eh-item-content eltdf-eh-custom-5857" style="padding: 2.5% 16% 6.2%">
                                                                <div role="form" class="wpcf7" id="wpcf7-f13-p17-o1" lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response"></div>
                                                                        <form action="include/message.php" method="post" role="form" class="wpcf7-form" novalidate="novalidate">
                                                                            <div style="display: none;">
                                                                                <input type="hidden" name="_wpcf7" value="13">
                                                                                <input type="hidden" name="_wpcf7_version" value="5.1.6">
                                                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f13-p17-o1">
                                                                                <input type="hidden" name="_wpcf7_container_post" value="17">
                                                                            </div>
                                                                            <div class="eltdf-custom-cf">
                                                                                <div class="eltdf-grid-list eltdf-two-columns eltdf-normal-space clearfix">
                                                                                    <div class="eltdf-outer-space">
                                                                                        <div class="eltdf-item-space">
                                                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                                                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="full name">
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="eltdf-item-space">
                                                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="e-mail">
                                                                                            </span>
                                                                                        </div>
                                                                                         <div class="eltdf-item-space">
                                                                                            <span class="wpcf7-form-control-wrap your-date">
                                                                                                <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject">
                                                                                            </span>
                                                                                         </div>
                                                                                    </div>
                                                                                </div>
                                                                                <p><span class="wpcf7-form-control-wrap your-message">
                                                                                    <textarea name="message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="tell us more"></textarea></span>
                                                                                </p>
                                                                                <p>
                                                                                    <button type="submit" class="wpcf7-form-control wpcf7-submit eltdf-btn eltdf-btn-large eltdf-btn-solid"><span class="eltdf-btn-text">Send</span></button><span class="ajax-loader"></span><br>

                                                                                    <!-- <p><a href="">view our Price List</a></p> -->
                                                                                </p>
                                                                            </div>
                                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                        </form>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT FORM -->








<!-- FOLLOW ME ON INSTAGRAM -->
<div class="eltdf-content-bottom">
    <div class="eltdf-content-bottom-inner eltdf-full-width">
        <div class="widget eltdf-custom-font-widget">
            <h2 class="eltdf-custom-font-holder  eltdf-cf-5427" style="font-family: Cormorant Garamond,serif;text-align: center;color: #4d504a;margin: 7px 0 0 0" data-item-class="eltdf-cf-5427">Follow Us on Instagram</h2>
        </div>
        <div class="widget eltdf-custom-font-widget">
            <h3 class="eltdf-custom-font-holder  eltdf-cf-8315   " style="font-style: italic;letter-spacing: 0px;text-transform: lowercase;text-align: center;color: #84847c;margin: 0 0 56px 0" data-item-class="eltdf-cf-8315">@ glintz_photography <br>@ glintz_studios</h3>
        </div>
        <div class="widget widget_eltdf_instagram_widget">
            <!-- <ul class="eltdf-instagram-feed clearfix eltdf-col-6 eltdf-instagram-gallery eltdf-large-space">
                <li>
                    <a href="https://www.instagram.com/p/CHIJQzPFVeA/" target="_blank">
                    <img src="./images/slider2.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CHIJOLXljFS/" target="_blank">
                    <img src="./images/slider3.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CHIJMt5FnQn/" target="_blank">
                    <img src="./images/slider4.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CHIJEOvFgpT/" target="_blank">
                    <img src="./images/slider5.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CHIJCQklRxQ/" target="_blank">
                    <img src="./images/slider6.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CHIJApyF1Tb/" target="_blank">
                    <img src="./images/slider7.jpg" alt=""> </a>
                </li>
            </ul> -->
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-2cfe4e2b-64d0-431b-a343-973fae233446"></div>
        </div>
    </div>
</div>
<!-- END FOLLOW ME ON INSTAGRAM -->







<footer class="eltdf-page-footer ">
    
    <div class="eltdf-footer-top-holder">
      <div class="eltdf-footer-top-inner eltdf-grid">
        <div class="eltdf-grid-row eltdf-footer-top-alignment-center">
          <div class="eltdf-column-content eltdf-grid-col-4">
            <div class="widget eltdf-separator-widget">
              <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
                <div class="eltdf-separator" style="border-color: #ffffff;border-style: solid;width: 1px;border-bottom-width: 1px;margin-top: 19px"></div>
              </div>
            </div>
            <div id="text-3" class="widget eltdf-footer-column-1 widget_text">
              <div class="textwidget">
                <p><span style="font-size: 22px; font-family: Cormorant Garamond; color: #4d504a; font-weight: 400; letter-spacing: .15em;">FOLLOW US</span></p>
              </div>
            </div>
            <div class="widget eltdf-social-icons-group-widget text-align-center">
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#afafa5" style="color: #84847c;;font-size: 18px;margin: -44px 0 -30px 0;" href="https://web.facebook.com/glintzmedia" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/24/000000/facebook-new.png" height="20px" width="20px"/>
                </a>
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#afafa5" style="color: #84847c;;font-size: 18px;margin: -44px 0 -30px 0;" href="https://www.instagram.com/glintz_photography/" target="_blank">
                    <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" height="20px" width="20px"/>
                </a>
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#afafa5" style="color: #84847c;;font-size: 18px;margin: -44px 0 -30px 0;" href="https://twitter.com/glintzmedia" target="_blank">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/twitter.png" height="20px" width="20px"/>
                </a>
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#afafa5" style="color: #84847c;;font-size: 18px;margin: -44px 0 -30px 0;" href="https://www.youtube.com/channel/UCMdqsviB8dCvgYGTLPBgVaQ" target="_blank">
                    <img src="https://img.icons8.com/material-outlined/24/000000/youtube--v2.png" height="20px" width="20px"/>
                </a>
            </div>
            <div id="text-4" class="widget eltdf-footer-column-1 widget_text">
              <div class="textwidget">
                <p><span style="font-size: 20px; font-family: Cormorant Garamond; color: #84847c; font-style: italic;"><a href="mailto:info@glintzphotography.org;">info@glintzphotography.org</a></span></p>
              </div>
            </div>
          </div>
      <div class="eltdf-column-content eltdf-grid-col-4">
        <div class="widget eltdf-separator-widget">
          <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-color: #ffffff;border-style: solid;width: 1px;border-bottom-width: 1px;margin-top: 20px"></div>
          </div>
        </div>
        <div class="widget eltdf-stamp-widget eltdf-complex-widget">
          <div class="eltdf-stamp-holder eltdf-stamp-appeared eltdf-appear eltdf-init eltdf-animate-stamp" style="color: #4d504a;font-size: 11px" data-appearing-delay="0">
            <div class="eltdf-stamp-image-holder">
              <img width="144" height="113" src="./images/glintz-logo-black.png" class="attachment-full size-full" alt="m">
            </div>
            <!-- <div class="eltdf-s-text" data-count="42">
              <span class="eltdf-s-character" style="transform: rotate(-90deg) translateZ(0px); transition-delay: 0ms;">-</span>
              <span class="eltdf-s-character" style="transform: rotate(-81.4286deg) translateZ(0px); transition-delay: 14.2857ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(-72.8571deg) translateZ(0px); transition-delay: 28.5714ms;">W</span>
              <span class="eltdf-s-character" style="transform: rotate(-64.2857deg) translateZ(0px); transition-delay: 42.8571ms;">e</span>
              <span class="eltdf-s-character" style="transform: rotate(-55.7143deg) translateZ(0px); transition-delay: 57.1429ms;">d</span>
              <span class="eltdf-s-character" style="transform: rotate(-47.1429deg) translateZ(0px); transition-delay: 71.4286ms;">d</span>
              <span class="eltdf-s-character" style="transform: rotate(-38.5714deg) translateZ(0px); transition-delay: 85.7143ms;">i</span>
              <span class="eltdf-s-character" style="transform: rotate(-30deg) translateZ(0px); transition-delay: 100ms;">n</span>
              <span class="eltdf-s-character" style="transform: rotate(-21.4286deg) translateZ(0px); transition-delay: 114.286ms;">g</span>
              <span class="eltdf-s-character" style="transform: rotate(-12.8571deg) translateZ(0px); transition-delay: 128.571ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(-4.28571deg) translateZ(0px); transition-delay: 142.857ms;">-</span>
              <span class="eltdf-s-character" style="transform: rotate(4.28571deg) translateZ(0px); transition-delay: 157.143ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(12.8571deg) translateZ(0px); transition-delay: 171.429ms;">P</span>
              <span class="eltdf-s-character" style="transform: rotate(21.4286deg) translateZ(0px); transition-delay: 185.714ms;">h</span>
              <span class="eltdf-s-character" style="transform: rotate(30deg) translateZ(0px); transition-delay: 200ms;">o</span>
              <span class="eltdf-s-character" style="transform: rotate(38.5714deg) translateZ(0px); transition-delay: 214.286ms;">t</span>
              <span class="eltdf-s-character" style="transform: rotate(47.1429deg) translateZ(0px); transition-delay: 228.571ms;">o</span>
              <span class="eltdf-s-character" style="transform: rotate(55.7143deg) translateZ(0px); transition-delay: 242.857ms;">g</span>
              <span class="eltdf-s-character" style="transform: rotate(64.2857deg) translateZ(0px); transition-delay: 257.143ms;">r</span>
              <span class="eltdf-s-character" style="transform: rotate(72.8571deg) translateZ(0px); transition-delay: 271.429ms;">a</span>
              <span class="eltdf-s-character" style="transform: rotate(81.4286deg) translateZ(0px); transition-delay: 285.714ms;">p</span>
              <span class="eltdf-s-character" style="transform: rotate(90deg) translateZ(0px); transition-delay: 300ms;">h</span>
              <span class="eltdf-s-character" style="transform: rotate(98.5714deg) translateZ(0px); transition-delay: 314.286ms;">y</span>
              <span class="eltdf-s-character" style="transform: rotate(107.143deg) translateZ(0px); transition-delay: 328.571ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(115.714deg) translateZ(0px); transition-delay: 342.857ms;">-</span>
              <span class="eltdf-s-character" style="transform: rotate(124.286deg) translateZ(0px); transition-delay: 357.143ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(132.857deg) translateZ(0px); transition-delay: 371.429ms;">s</span>
              <span class="eltdf-s-character" style="transform: rotate(141.429deg) translateZ(0px); transition-delay: 385.714ms;">t</span>
              <span class="eltdf-s-character" style="transform: rotate(150deg) translateZ(0px); transition-delay: 400ms;">u</span>
              <span class="eltdf-s-character" style="transform: rotate(158.571deg) translateZ(0px); transition-delay: 414.286ms;">d</span>
              <span class="eltdf-s-character" style="transform: rotate(167.143deg) translateZ(0px); transition-delay: 428.571ms;">i</span>
              <span class="eltdf-s-character" style="transform: rotate(175.714deg) translateZ(0px); transition-delay: 442.857ms;">o</span>
              <span class="eltdf-s-character" style="transform: rotate(184.286deg) translateZ(0px); transition-delay: 457.143ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(192.857deg) translateZ(0px); transition-delay: 471.429ms;">-</span>
              <span class="eltdf-s-character" style="transform: rotate(201.429deg) translateZ(0px); transition-delay: 485.714ms;"> </span>
              <span class="eltdf-s-character" style="transform: rotate(210deg) translateZ(0px); transition-delay: 500ms;">s</span>
              <span class="eltdf-s-character" style="transform: rotate(218.571deg) translateZ(0px); transition-delay: 514.286ms;">o</span>
              <span class="eltdf-s-character" style="transform: rotate(227.143deg) translateZ(0px); transition-delay: 528.571ms;">l</span>
              <span class="eltdf-s-character" style="transform: rotate(235.714deg) translateZ(0px); transition-delay: 542.857ms;">e</span>
              <span class="eltdf-s-character" style="transform: rotate(244.286deg) translateZ(0px); transition-delay: 557.143ms;">n</span>
              <span class="eltdf-s-character" style="transform: rotate(252.857deg) translateZ(0px); transition-delay: 571.429ms;">e</span>
            </div> -->
            <a itemprop="url" class="eltdf-stamp-link" href="#" target="_self"></a>
          </div>
        </div>
      </div>
      <div class="eltdf-column-content eltdf-grid-col-4">
        <div class="widget eltdf-separator-widget">
          <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-color: #ffffff;border-style: solid;width: 1px;border-bottom-width: 1px;margin-top: 19px"></div>
          </div>
        </div>
        <div id="text-5" class="widget eltdf-footer-column-3 widget_text">
          <div class="textwidget">
            <p><span style="font-size: 22px; font-family: Cormorant Garamond; color: #4d504a; font-weight: 400; letter-spacing: .15em;">NEWSLETTER</span></p>
            <p><span style="margin-top: -1px; margin-bottom: -10px; font-size: 20px; font-family: Cormorant Garamond; color: #84847c; font-style: italic;">Follow our latest stories.</span></p>
          </div>
        </div>
        <div class="widget eltdf-contact-form-7-widget ">
          <div role="form" class="wpcf7" id="wpcf7-f15-o2" lang="en-US" dir="ltr">
            <div class="screen-reader-response"></div>
            <form action="#" method="post" class="wpcf7-form">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="15">
                <input type="hidden" name="_wpcf7_version" value="5.1.6">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15-o2">
                <input type="hidden" name="_wpcf7_container_post" value="0">
              </div>
              <div class="eltdf-nl-custom-style">
                <span class="wpcf7-form-control-wrap your-email">
                    <input type="email" name="your-email" value="" size="40" class="" placeholder="e-mail">
                </span>
                <button type="submit" class="wpcf7-form-control wpcf7-submit eltdf-btn eltdf-btn-large eltdf-btn-solid">
                    <img src="https://img.icons8.com/wired/64/000000/email.png"/>
                </button>
                <span class="ajax-loader"></span>
              </div>
              <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="eltdf-footer-bottom-holder">
  <div class="eltdf-footer-bottom-inner eltdf-grid">
    <div class="eltdf-grid-row eltdf-footer-bottom-alignment-center">
      <div class="eltdf-grid-col-4"></div>
      <div class="eltdf-grid-col-4">
        <div id="text-6" class="widget eltdf-footer-bottom-column-2 widget_text">
          <div class="textwidget">
            <p><span style="font-size: 18px; font-family: Cormorant Garamond; color: #4d504a; font-style: italic; font-weight: 400;">© 2021 Copyright Glintz Photography – Developed by <a href="https://instagram.com/oprime.ng" target="_blank" >Oprime Technologies</a></span></p>
          </div>
        </div>
      </div>
      <div class="eltdf-grid-col-4"></div>
    </div>
  </div>
</div> 
</footer>
</div> 
</div> 
<section class="eltdf-side-menu ps ps--active-y">
    <a class="eltdf-close-side-menu eltdf-close-side-menu-predefined" href="#">
        <span class="eltdf-hm-label">Close</span><span class="eltdf-hm-lines"><span class="eltdf-hm-line eltdf-line-1"></span><span class="eltdf-hm-line eltdf-line-2"></span></span> 
    </a>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 39px"></div>
        </div>
    </div>
    <div id="media_image-6" class="widget eltdf-sidearea widget_media_image">
        <a href="#">
            <img width="96" height="91" src="./images/glintz-logo-white.png" class="image wp-image-2893  attachment-full size-full" alt="m" style="max-width: 100%; height: auto;">
        </a>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: -6px"></div>
        </div>
    </div>
    <div id="text-10" class="widget eltdf-sidearea widget_text">
        <div class="textwidget">
            <p><span style="font-weight: 400;">We are a multimedia Brand, set up to document, tell African stories of love, places, people and their culture through creative visuals(still and motion pictures).</span></p>
        </div>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 28px"></div>
        </div>
    </div>
    <div class="widget eltdf-custom-font-widget">
        <h2 class="eltdf-custom-font-holder  eltdf-cf-4174   " style="font-family: Cormorant Garamond;font-size: 22px;line-height: 24px;font-weight: 300;letter-spacing: .15em;text-transform: uppercase;text-align: center;color: #ffffff;margin: 0 0 0 0" data-item-class="eltdf-cf-4174">Instagram </h2>
    </div>
    <div class="widget eltdf-custom-font-widget">
        <h2 class="eltdf-custom-font-holder  eltdf-cf-4115   " style="font-family: Cormorant Garamond,serif;font-size: 21px;line-height: 1.772727272727273em;font-weight: 400;font-style: italic;letter-spacing: 0px;text-transform: lowercase;text-align: center;color: #afafa5;margin: 0 0 0px 0" data-item-class="eltdf-cf-4115">@ glintz_photography <br>@ glintz_studios</h2>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 16px"></div>
        </div>
    </div>
    <div id="eltdf_instagram_widget-5" class="widget eltdf-sidearea widget_eltdf_instagram_widget">
        <!-- <ul class="eltdf-instagram-feed clearfix eltdf-col-3 eltdf-instagram-gallery eltdf-tiny-space">
            <li>
                <a href="https://www.instagram.com/p/CHIJQzPFVeA/" target="_blank">
                <img src="./images/slider2.jpg" alt=""> </a>
            </li>
            <li>
                <a href="https://www.instagram.com/p/CHIJOLXljFS/" target="_blank">
                <img src="./images/slider3.jpg" alt=""> </a>
            </li>
            <li>
                <a href="https://www.instagram.com/p/CHIJMt5FnQn/" target="_blank">
                <img src="./images/slider4.jpg" alt=""> </a>
            </li>
            <li>
                <a href="https://www.instagram.com/p/CHIJEOvFgpT/" target="_blank">
                <img src="./images/slider5.jpg" alt=""> </a>
            </li>
            <li>
                <a href="https://www.instagram.com/p/CHIJCQklRxQ/" target="_blank">
                <img src="./images/slider6.jpg" alt=""> </a>
            </li>
            <li>
                <a href="https://www.instagram.com/p/CHIJApyF1Tb/" target="_blank">
                <img src="./images/slider7.jpg" alt=""> </a>
            </li>
        </ul> -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-2cfe4e2b-64d0-431b-a343-973fae233446"></div>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 184px"></div>
        </div>
    </div>
    <div class="widget eltdf-custom-font-widget"><h2 class="eltdf-custom-font-holder  eltdf-cf-6123   " style="font-family: Cormorant Garamond;font-size: 22px;line-height: 24px;font-weight: 300;letter-spacing: .15em;text-transform: uppercase;text-align: center;color: #ffffff;margin: 0 0 0px 0" data-item-class="eltdf-cf-6123">Follow Us </h2>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 12px"></div>
        </div>
    </div>
    <div class="widget eltdf-social-icons-group-widget text-align-center">
        <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#ffffff" style="font-size: 15px" href="https://web.facebook.com/glintzmedia" target="_blank">
            <img src="https://img.icons8.com/ios-glyphs/24/000000/facebook-new.png" height="20px" width="20px"/>
        </a>
        <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#ffffff" style="font-size: 15px" href="https://www.instagram.com/glintz_photography/" target="_blank">
            <img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" height="20px" width="20px"/>
        </a>
        <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#ffffff" style="font-size: 15px" href="https://twitter.com/glintzmedia" target="_blank">
            <img src="https://img.icons8.com/ios-glyphs/30/000000/twitter.png" height="20px" width="20px"/>
        </a>
        <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#ffffff" style="font-size: 15px" href="https://www.youtube.com/channel/UCMdqsviB8dCvgYGTLPBgVaQ" target="_blank">
            <img src="https://img.icons8.com/material-outlined/24/000000/youtube--v2.png" height="20px" width="20px"/>
        </a>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 2px"></div>
        </div>
    </div>
    <div class="widget eltdf-custom-font-widget">
        <h2 class="eltdf-custom-font-holder  eltdf-cf-9598   " style="font-family: Cormorant Garamond,serif;font-size: 21px;line-height: 1.772727272727273em;font-weight: 400;font-style: italic;letter-spacing: 0px;text-transform: capitalize;text-align: center;color: #afafa5" data-item-class="eltdf-cf-9598">
            <a class="eltdf-cf-title-link" href="mailto:info@glintzphotography.org" target="_self">info@glintzphotography.org </a>
        </h2>
    </div>
    <div class="widget eltdf-separator-widget">
        <div class="eltdf-separator-holder clearfix  eltdf-separator-center eltdf-separator-normal">
            <div class="eltdf-separator" style="border-style: solid;margin-top: 3px"></div>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 600px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 351px;"></div>
    </div>
</section><div class="rbt-toolbar" data-theme="Solene" data-featured="" data-button-position="20%" data-button-horizontal="right" data-button-alt="no"></div>


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLJLSX7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/html" id="wpb-modifications"></script><link href="./Solene – Wedding Photography Theme_files/css(1)" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}
		</script>

<script src="./Solene – Wedding Photography Theme_files/0fef6.js.download"></script>
<script type="text/javascript" src="./Solene – Wedding Photography Theme_files/rbt-modules.js.download"></script>
<script src="./Solene – Wedding Photography Theme_files/63c68.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script src="./Solene – Wedding Photography Theme_files/63a69.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_f596244724bbf51b050a0d095029c9b4","fragment_name":"wc_fragments_f596244724bbf51b050a0d095029c9b4","request_timeout":"5000"};
/* ]]> */
</script>
<script src="./Solene – Wedding Photography Theme_files/d8b1c.js.download"></script>
<script type="text/javascript">
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script src="./Solene – Wedding Photography Theme_files/864c2.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script src="./Solene – Wedding Photography Theme_files/7573f.js.download"></script>
<script type="text/javascript" src="./Solene – Wedding Photography Theme_files/js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var eltdfGlobalVars = {"vars":{"eltdfAddForAdminBar":0,"eltdfElementAppearAmount":-50,"eltdfAjaxUrl":"https:\/\/wp-admin\/admin-ajax.php","sliderNavPrevArrow":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"\n\t\t\t\t\t width=\"45.479px\" height=\"15.292px\" viewBox=\"0 4.375 45.479 15.292\" enable-background=\"new 0 4.375 45.479 15.292\"\n\t\t\t\t\t xml:space=\"preserve\">\n\t\t\t\t<line fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"44.639\" y1=\"12\" x2=\"0.639\" y2=\"12\"\/>\n\t\t\t\t<line fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"0.639\" y1=\"12\" x2=\"44.639\" y2=\"12\"\/>\n\t\t\t\t<polyline fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" points=\"7.639,19 0.639,12 7.639,5 \"\/>\n\t\t\t\t<\/svg>","sliderNavNextArrow":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"\n\t\t\t\t\t width=\"45.479px\" height=\"15.292px\" viewBox=\"0 4.375 45.479 15.292\" enable-background=\"new 0 4.375 45.479 15.292\"\n\t\t\t\t\t xml:space=\"preserve\">\n\t\t\t\t<line fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"0.639\" y1=\"12\" x2=\"44.639\" y2=\"12\"\/>\n\t\t\t\t<line fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"0.639\" y1=\"12\" x2=\"44.639\" y2=\"12\"\/>\n\t\t\t\t<polyline fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" points=\"37.639,5 44.639,12 37.639,19 \"\/>\n\t\t\t\t<\/svg>","ppExpand":"Expand the image","ppNext":"Next","ppPrev":"Previous","ppClose":"Close","eltdfStickyHeaderHeight":0,"eltdfStickyHeaderTransparencyHeight":100,"eltdfTopBarHeight":0,"eltdfLogoAreaHeight":0,"eltdfMenuAreaHeight":130,"eltdfMobileHeaderHeight":70}};
var eltdfPerPageVars = {"vars":{"eltdfMobileHeaderHeight":70,"eltdfStickyScrollAmount":1300,"eltdfHeaderTransparencyHeight":0,"eltdfHeaderVerticalWidth":0}};
/* ]]> */
</script>
<script src="./Solene – Wedding Photography Theme_files/c54c3.js.download"></script>


<script async="" type="text/javascript" src="./Solene – Wedding Photography Theme_files/0.php"></script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1821624764800433");</script>
<script type="text/javascript" id="">fbq("track","PageView");</script>
<script src="./Solene – Wedding Photography Theme_files/tag.min.js.download" async="" defer=""></script>
<img src="./Solene – Wedding Photography Theme_files/lj_match">
<img src="./Solene – Wedding Photography Theme_files/57333">


</body>
</html>