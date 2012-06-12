<!DOCTYPE html>

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

?>
<html <?php language_attributes(); ?>>
<head>
<base href="http://www.delawareonline.com" /> 

<!-- link rel="canoncical" href="http://yoururl.com/page" / -->

<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:image" content="http://www.delawareonline.com/graphics/blogs/buttons/<?php echo $blogpath; ?>.jpg" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<link rel="alternate" type="application/rss+xml" title="delawareonline  RSS" href="http://www.delawareonline.com/section/&template=rss_gd&mime=xml">
<link href="/includes/css/ody/ody-local.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/odygci/p2/ody-styles-min.css"/>
<meta property="fb:admins" content="9310393,100000021897563,1791843026,100003242254842,1830744899,100003120443579,1539860719,100003261541158" />
<meta property="fb:app_id" content="175037755863662" />
<script type="text/javascript" src="/odygel/functions.js"></script>
<script type="text/javascript" src="/odygel/lib/core/core.js"></script>
<script type="text/javascript" src="/odygel/lib/3rdparty/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/odygel/lib/3rdparty/jquery/flxhr-1.0.6/deploy/swfobject.js"></script>
<script type="text/javascript" src="/odygel/lib/3rdparty/jquery/flxhr-1.0.6/deploy/flXHR.js"></script>
<script type="text/javascript" src="/odygel/lib/atypon/api.js"></script>
<script type="text/javascript" src="/odygel/lib/firefly/firefly.js"></script>


<!-- Kevin Tindall, 5/23/2012 -->
<!-- Keeps the comments section of articles from incrementing the EMETA_NCLICK cookie -->
<script>
  if(window.location.hash) {
	var hash = window.location.hash.substring(1);
	var cookies = document.cookie.split(';');
	
	if(hash == 'respond' || hash == 'comments' || hash.indexOf("comment") != -1)
	{


		for(var i=0; i  < cookies.length; i++)
		{
			var theCookie = cookies[i];
			var cookieandValue = theCookie.split('=');
			if(cookieandValue[0].split(' ').join('') == 'EMETA_NCLICK')
			{
				var cookieINT = parseInt(cookieandValue[1]);
				cookieandValue[1] = cookieINT-1;
				var aDate = new Date();
				var aDatePlus7Days = new Date(aDate.getTime() + 86400*7);
				newCookie = cookieandValue[0] + "=" + cookieandValue[1] + "; expires=" + aDatePlus7Days.toGMTString() + "; path=/; domain=delawareonline.com";
				document.cookie = newCookie;
			}
	
		}
	}
      
  }
</script>

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	
	<!-- Temp change domain name -->
<script language="JavaScript" type="text/javascript">
    document.domain="delawareonline.com";
</script>
	

<script type="text/javascript" src="http://widgets.outbrain.com/outbrain.js"></script> 	
	
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<SCRIPT LANGUAGE="JavaScript">
<!--
//configuration
//If OAS_sitepage is set to {SECTION}{pagetype} it means you did not set the value in the .ini file.
var OAS_version,OAS_url,OAS_rns,OAS_listpos ="";
OAS_sitepage='de-wilmington.delawareonline.com/news/front.htm';
OAS_query = ''+'&'+location.search.substring(1);
//-->
</SCRIPT>

	
<!-- Updated by GMTI for ad serving 03262008 -->
<script language="javascript1.1" type="text/javascript" src="http://wilmingt.ur.gcion.com/global/AD/AdtechGlobalSettings.js"></script>
<script language="javascript1.1" type="text/javascript" src="http://wilmingt.ur.gcion.com/AD/AdtechSiteSettings.js"></script>
<script language="javascript1.1" type="text/javascript" src="http://wilmingt.ur.gcion.com/Scripts/AD/Adtechscript.js"></script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body class="ody-skin">
<?php do_action('get_gd_firefly_cobrand_header'); ?>
	<script type=text/javascript>
  window['checkCookie']=(function(){ 
var _={};
for(
	var
		c=document.cookie.split(/\s*;\s*/),
		i=0,
		l=c.length,
		a=c[i].split("=")
	;
	a=i<l&&c[i].split("=")
	;
	i++
)_[a[0]]= a[1]; 
return function (cookieName){return _[cookieName];}
})();
GEL.config.Interstitial= { 
  controlurl: "",
  placementid: parseInt("1273240")
}; 
(function(){ 
GEL.register("dateutil", { path: "dateutil/dateutil.js", depends:[],requires:[]});
if(checkCookie("pre_ad") == 'inter')
	loadBannerLib(); 
else
	GEL.thepage.initializer.add({ 
		name: "qinter", 
		namespace: ["widget.AdBanner", "dateutil"], 
		priority: 1000, 
		callback: interMgr
	}); 
function loadBannerLib(){ 
	var 
		_IMPORTER= GEL.util.importer
		,_lib= _IMPORTER.require("widget.AdBanner")
		,_css= GEL.ement("LINK",{ 
			href:"/gci/gc/interstitial.css",
			rel:"stylesheet" 
		})
	;
	_lib.addElement(_css);
	_lib.addElement(_IMPORTER.require('dateutil')); 
	_lib.setAttacher("inline"); 
	_lib.attach(); 
}
function interMgr(){ 
	var _IC= GEL.config.Interstitial || {}; 
	_IC.id= _IC.id || "inter"; 
	_IC.controlurl= _IC.controlurl || 
		(new GEL.widget.AdBanner.Helios({ 
			attachTo: document.body, 
			keywords: [], 
			keyvalues: {}, 
			placementid: parseInt("1273241"),
			position: "Interstitial",
			loadoninit: false 
		})).getUrl(); 
	GEL.thepage.bannerManager.add(_IC); 
}
})(); 
</script>
<div id="go4-interstitial" class="interstitial gel-hidden"> 
<center class=go4-custom> 
 <div class=header> 
  <div class=logo></div> 
  <a href="#" class="gel-hidden skip">Skip this ad&nbsp;&raquo;</a> 
 </div> 
 <div class=aggit>Advertisement</div> 
 <div class=ad> 
  <script type=text/javascript>
    (function(){ 
 	var _M= GEL.thepage.bannerManager,_O,_I; 
	if(
		checkCookie("pre_ad") != "inter" 
		|| typeof _M != 'object' 
		|| typeof _M.get != "function" 
		|| !(_O= _M.get("inter")) 
	)  return; 
	_M.disable(_O);
	_I= GEL.thepage.inter= 
		new GEL.widget.AdBanner.Interstitial(_O.config); 
	_I.show(); 
})(); 
  </script>
 </div> 
 <p class=redirect>
  You will be redirected to the page you want to view in&nbsp;<span id=ad_countdown></span>&nbsp;seconds.
 </p> 
</center> 
</div> 

	<div class="ody-custom">
		<div id="modalouter" class="modal-outer-inactive"></div>
		<div class="main-container">
			<!-- HEADER -->
			<div id="fb-root"></div>
<script type="text/javascript">
try {
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '175037755863662', // App ID
		  channelUrl : document.location.protocol + '//www.delawareonline.com/odygci/facebook/channel.html', // Channel File
		  status     : true, // check login status
		  cookie     : true, // enable cookies to allow the server to access the session
		  oauth      : true,
		  xfbml      : true  // parse XFBML
		});
		// Additional initialization code here
		// Share Tools
		FB.Event.subscribe('edge.create', function(href, widget) {
			var _vt = GEL.thepage.viewTracker;
			if (widget.dom.getAttribute("ref")) {
				_vt.providers.sitecat.trackLink("sharethis:facebook:like:" + widget.dom.getAttribute("ref"));
				}
		});
		FB.Event.subscribe('edge.remove', function(href, widget) {
			var _vt = GEL.thepage.viewTracker;
			if (widget.dom.getAttribute("ref")) {
				_vt.providers.sitecat.trackLink("sharethis:facebook:unlike:" + widget.dom.getAttribute("ref"));
				}
		});
	  };
	  // Load the SDK Asynchronously
	  (function(d){
		 var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		 js = d.createElement('script'); js.id = id; js.async = true;
		 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		 d.getElementsByTagName('head')[0].appendChild(js);
	   }(document));
 } catch (e) {}
</script>
		<!-- ody_topnavigationmenu.pbo -->
<!-- @ody_adposnavbar:  -->
<script type="text/javascript">
GEL.thepage.initializer.addInitRoutine({ 
	name: "trackSeatGeek",
	namespace: ["legacy.GDNpostload"],
	priority: 200,
	callback: inittrackSeatGeek
});
</script>
</div>

<script type="text/javascript"> 
(function(){ 
	var _id;
	if((id=GEL.env.url.qsv.nav)){
		var a= "mega,tab,on".split(","),n= GEL.ement("tab"+id); 
		a.push(_id); 
		for(var i=0,l=a.length;i < l; i++)
			n.addClassName(a[i]); 
	}
	GEL.thepage.initializer.addInitRoutine({ 
		name: "Nav", 
		namespace: "widget.NavigationWidget",
		callback: initNav, 
		priority: 15
	}); 
})();
</script> 

			
			<!-- LAUNCHPAD SF -->
			<div class="leaderboard-container-top">
				<div>
	<div class="ad_launchpad_SF">
	<banner
		 position=launchpad_SF 
	></banner>
		<div class="advertisement">ADVERTISEMENT</div>
	</div>
</div>

			</div>

			<div class="content-container">
				<div class="container"> 
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	 

	<div id="main">
