<<<<<<< HEAD
<?php //header('Access-Control-Allow-Origin: *'); ?>
<!-- This header necessary using CORS http://www.nczonline.net/blog/2010/05/25/cross-domain-ajax-with-cross-origin-resource-sharing/ -->

<style>.url-textfield{display:none !important;}</style>
<style media="screen">@import url("http://new2dev.mta.info/sites/all/themes/adaptivetheme/at_core/css/at.layout.css?n212hk");
@import url("http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/global.base.css?n212hk");
@import url("http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/global.styles.css?n212hk");</style>
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/default/files/adaptivetheme/mtadaptive_files/mtadaptive.responsive.layout.css?n212hk" media="only screen" />
<style>@import url("http://new2dev.mta.info/sites/default/files/adaptivetheme/mtadaptive_files/mtadaptive.menutoggle.css?n212hk");</style>
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.custom.css?n212hk" media="only screen" />
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.smartphone.portrait.css?n212hk" media="only screen and (max-width:320px)" />
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.smartphone.landscape.css?n212hk" media="only screen and (min-width:321px) and (max-width:480px)" />
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.tablet.portrait.css?n212hk" media="only screen and (min-width:481px) and (max-width:768px)" />
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.tablet.landscape.css?n212hk" media="only screen and (min-width:769px) and (max-width:1023px)" />
<link type="text/css" rel="stylesheet" href="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/responsive.desktop.css?n212hk" media="only screen and (min-width:1024px)" />
<!--[if lte IE 7]>
<style media="screen">@import url("http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/ie-lte-7.css?n212hk");</style>
<![endif]-->
<!--[if IE 8]>
<style media="screen">@import url("http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/css/ie8.css?n212hk");</style>
<![endif]-->














<script src="http://new2dev.mta.info/misc/jquery.js?v=1.4.4"></script>
<script src="http://new2dev.mta.info/misc/jquery.once.js?v=1.2"></script>
<script src="http://new2dev.mta.info/misc/drupal.js?n212hk"></script>
<script src="http://new2dev.mta.info/misc/ui/jquery.ui.core.min.js?v=1.8.7"></script>
<script src="http://new2dev.mta.info/misc/ui/jquery.ui.widget.min.js?v=1.8.7"></script>
<script src="http://new2dev.mta.info/misc/jquery.cookie.js?v=1.0"></script>

<script src="http://new2dev.mta.info/sites/all/modules/contrib/context_breakpoint/context_breakpoint.js?n212hk"></script>

<script src="http://new2dev.mta.info/sites/all/libraries/jscrollpane/jquery.jscrollpane.min.js?n212hk"></script>
<script src="http://new2dev.mta.info/sites/all/modules/contrib/scrollbar/scrollbar.js?n212hk"></script>

<script src="http://new2dev.mta.info/sites/all/themes/adaptivetheme/mtadaptive/scripts/windowwidth.js?n212hk"></script>

<script src="http://new2dev.mta.info/sites/all/themes/adaptivetheme/at_core/scripts/menu-toggle.js?n212hk"></script>
<script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"mtadaptive","theme_token":"_XH5JHrPELMptDMapbofaZRLaRXGJc080xDwB8hWPJ0","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/ui\/jquery.ui.core.min.js":1,"misc\/ui\/jquery.ui.widget.min.js":1,"misc\/jquery.cookie.js":1,"misc\/ui\/jquery.ui.datepicker.min.js":1,"\/sites\/all\/libraries\/wvega-timepicker\/jquery.timepicker.js":1,"misc\/ui\/jquery.ui.accordion.min.js":1,"sites\/all\/modules\/contrib\/context_breakpoint\/context_breakpoint.js":1,"sites\/all\/modules\/custom\/servicestatus\/servicestatus.js":1,"sites\/all\/modules\/custom\/servicestatus\/jquery.cookie.js":1,"misc\/progress.js":1,"sites\/all\/libraries\/colorbox\/jquery.colorbox-min.js":1,"sites\/all\/modules\/contrib\/colorbox\/js\/colorbox.js":1,"sites\/all\/modules\/contrib\/colorbox\/styles\/default\/colorbox_style.js":1,"sites\/all\/libraries\/jscrollpane\/jquery.mousewheel.js":1,"sites\/all\/libraries\/jscrollpane\/mwheelIntent.js":1,"sites\/all\/libraries\/jscrollpane\/jquery.jscrollpane.min.js":1,"sites\/all\/modules\/contrib\/scrollbar\/scrollbar.js":1,"http:\/\/tripplanner.mta.info\/MyTrip\/js\/uiFunctions.js":1,"http:\/\/Tripplanner.mta.info\/MyTrip\/js\/JSON.js":1,"http:\/\/Tripplanner.mta.info\/MyTrip\/js\/CookieFunctions.js":1,"http:\/\/Tripplanner.mta.info\/MyTrip\/js\/tripplanner_ext.js":1,"\/sites\/all\/modules\/custom\/tripplanner_mta3\/landmarks.js":1,"http:\/\/dev.virtualearth.net\/mapcontrol\/mapcontrol.ashx?v=6.3":1,"http:\/\/advisory.mtanyct.info\/token\/bingToken.js":1,"sites\/all\/modules\/contrib\/views_slideshow\/js\/views_slideshow.js":1,"sites\/all\/modules\/contrib\/quicktabs\/js\/quicktabs.js":1,"sites\/all\/modules\/contrib\/views_accordion\/views-accordion.js":1,"sites\/all\/libraries\/jcarousel\/lib\/jquery.jcarousel.min.js":1,"sites\/all\/modules\/contrib\/views_slideshow_jcarousel\/js\/views_slideshow_jcarousel.js":1,"sites\/all\/modules\/contrib\/vscc\/js\/vscc.js":1,"sites\/all\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/all\/libraries\/json2\/json2.js":1,"sites\/all\/modules\/contrib\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/scripts\/accordioncustom.js":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/scripts\/windowwidth.js":1,"sites\/all\/themes\/adaptivetheme\/at_core\/scripts\/matchMedia.js":1,"sites\/all\/themes\/adaptivetheme\/at_core\/scripts\/matchMedia.addListener.js":1,"sites\/all\/themes\/adaptivetheme\/at_core\/scripts\/menu-toggle.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"misc\/ui\/jquery.ui.accordion.css":1,"modules\/book\/book.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/contrib\/google_appliance\/theme\/google_appliance.css":1,"modules\/node\/node.css":1,"sites\/all\/modules\/custom\/servicestatus\/service_status_style.css":1,"sites\/all\/modules\/custom\/tripplanner_mta3\/tripplanner_mta3.css":1,"sites\/all\/modules\/custom\/tripplanner_mta3\/tripplanner_jquery_timepicker_mta3.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/ckeditor.css":1,"sites\/all\/modules\/contrib\/colorbox\/styles\/default\/colorbox_style.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jscrollpane\/jquery.jscrollpane.css":1,"sites\/all\/modules\/contrib\/views_slideshow\/views_slideshow.css":1,"sites\/all\/modules\/contrib\/quicktabs\/css\/quicktabs.css":1,"sites\/all\/modules\/contrib\/views_accordion\/views-accordion.css":1,"sites\/all\/libraries\/jcarousel\/skins\/tango\/skin.css":1,"sites\/all\/modules\/contrib\/vscc\/vscc.css":1,"sites\/all\/modules\/contrib\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"0":1,"sites\/all\/themes\/adaptivetheme\/at_core\/css\/at.layout.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/global.base.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/global.styles.css":1,"public:\/\/adaptivetheme\/mtadaptive_files\/mtadaptive.responsive.layout.css":1,"public:\/\/adaptivetheme\/mtadaptive_files\/mtadaptive.menutoggle.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.custom.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.smartphone.portrait.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.smartphone.landscape.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.tablet.portrait.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.tablet.landscape.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/responsive.desktop.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/ie-lte-7.css":1,"sites\/all\/themes\/adaptivetheme\/mtadaptive\/css\/ie8.css":1}},"colorbox":{"opacity":"0.85","current":"{current} of {total}","previous":"\u00ab Prev","next":"Next \u00bb","close":"Close","maxWidth":"98%","maxHeight":"98%","fixed":true},"context_breakpoint":{"settings":{"save_resolution":false,"breakpoints_in_url":false,"admin_disable_reload":false},"contexts":{"agencytablet":{"autoreload":0,"breakpoints":{"custom.user.tablet_landscape":{"min-width":769,"max-width":1199}}},"basicpage":{"autoreload":0,"breakpoints":{"custom.user.tablet_landscape":{"min-width":769,"max-width":1199}}},"basicpage-noleft-tablet":{"autoreload":0,"breakpoints":{"custom.user.tablet_landscape":{"min-width":769,"max-width":1199}}},"lirrtablet":{"autoreload":0,"breakpoints":{"custom.user.tablet_landscape":{"min-width":769,"max-width":1199}}},"tablet-homepage":{"autoreload":0,"breakpoints":{"custom.user.tablet_landscape":{"min-width":769,"max-width":1199}}},"bandt":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"basic-page":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"basicpage-noleft":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"longisland":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"mnr":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"mta_homepage":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"nyct_homepage":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"nyct_subway_homepage":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"sir_homepage":{"autoreload":0,"breakpoints":{"custom.user.desktop":{"min-width":1200}}},"smartphone-display":{"autoreload":0,"breakpoints":{"breakpoints.theme.mtadaptive.smalltouch_portrait_media_query":{"max-width":320}}},"tablet-homepage-portrait":{"autoreload":0,"breakpoints":{"custom.user.tablet_portrait":{"min-width":481,"max-width":768}}}},"is_admin":false},"scrollbar":{"element":"#quicktabs-container-special_service_notices22","showArrows":"false","mouseWheelSpeed":"10","arrowButtonSpeed":"10","arrowRepeatFreq":"100","horizontialGutter":"5","verticalGutter":"5","verticalDragMinHeight":"0","verticalDragMaxHeight":"99999","verticalDragMinWidth":"0","verticalDragMaxWidth":"99999","horizontialDragMinHeight":"0","horizontialDragMaxHeight":"99999","horizontialDragMinWidth":"0","horizontialDragMaxWidth":"99999","arrowScrollOnHover":"false","verticalArrowPositions":"split","horizontialArrowPositions":"split","autoReinitialise":"false","autoReinitialiseDelay":"500"},"quicktabs":{"qt_schedules_fares_tolls":{"name":"schedules_fares_tolls","tabs":[{"bid":"block_delta_576","hide_title":1},{"bid":"block_delta_576","hide_title":1},{"bid":"block_delta_573","hide_title":1},{"bid":"block_delta_574","hide_title":1},{"bid":"block_delta_575","hide_title":1}],"scrollbar":{"element":"#quicktabs-container-special_service_notices22","showArrows":"false","mouseWheelSpeed":"10","arrowButtonSpeed":"10","arrowRepeatFreq":"100","horizontialGutter":"5","verticalGutter":"5","verticalDragMinHeight":"0","verticalDragMaxHeight":"99999","verticalDragMinWidth":"0","verticalDragMaxWidth":"99999","horizontialDragMinHeight":"0","horizontialDragMaxHeight":"99999","horizontialDragMinWidth":"0","horizontialDragMaxWidth":"99999","arrowScrollOnHover":"false","verticalArrowPositions":"split","horizontialArrowPositions":"split","autoReinitialise":"false","autoReinitialiseDelay":"500"}}},"views_accordion":{"views-accordion-accordion_menu_v1-block":{"collapsible":1,"rowstartopen":false,"animated":"slide","autoheight":1,"event":"click","fillspace":0,"navigation":0,"clearstyle":0,"grouping":0,"display":"block","viewname":"accordion_menu_v1","usegroupheader":0,"header":".views-accordion-header"}},"viewsSlideshow":{"news_rotator_v2-block_3":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter"],"transitionEnd":[]},"paused":0}},"viewsSlideshowPager":{"news_rotator_v2-block_3":{"bottom":{"type":"viewsSlideshowJcarouselPager"}}},"viewsSlideshowJCarouselPager":{"news_rotator_v2-block_3":{"bottom":{"carouselObj":"","moveOnChange":1,"orientation":"0","scroll":"2","visible":"2","wrap":"both","animation":"slow"}}},"viewsSlideshowControls":{"news_rotator_v2-block_3":{"bottom":{"type":"vsccControls"}}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_news_rotator_v2-block_3":{"num_divs":6,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"news_rotator_v2-block_3","effect":"fade","transition_advanced":0,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":1,"pause_on_click":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}","advanced_options_choices":0,"advanced_options_entry":""}},"adaptivetheme":{"mtadaptive":{"layout_settings":{"bigscreen":"three-col-grail","tablet_landscape":"three-col-grail","tablet_portrait":"one-col-stack","smalltouch_landscape":"one-col-vert","smalltouch_portrait":"one-col-stack"},"media_query_settings":{"bigscreen":"only screen and (min-width:1024px)","tablet_landscape":"only screen and (min-width:769px) and (max-width:1023px)","tablet_portrait":"only screen and (min-width:481px) and (max-width:768px)","smalltouch_landscape":"only screen and (min-width:321px) and (max-width:480px)","smalltouch_portrait":"only screen and (max-width:320px)"},"menu_toggle_settings":{"menu_toggle_tablet_portrait":"false","menu_toggle_tablet_landscape":"false"}}}});</script>
<script type="text/javascript">Drupal.behaviors.contextBreakpoint.preInit();</script>
<!--[if lt IE 9]>
<script src="http://new2dev.mta.info/sites/all/themes/adaptivetheme/at_core/scripts/html5.js?n212hk"></script>
<script src="http://new2dev.mta.info/sites/all/themes/adaptivetheme/at_core/scripts/respond.js?n212hk"></script>
<![endif]-->


<script type="text/javascript">
$(document).ready(function() {
$(".at-menu-toggle ul[class*=menu]:nth-of-type(1)").wrap('<div class="menu-toggle" />');
});

</script>







<meta charset="utf-8" />
<meta base href="http://new2dev.mta.info" />


  <div id="skip-link" class="nocontent">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div id="page-wrapper">
  <div id="page" class="page at-mt">

    
    <div id="header-wrapper">
      <div class="container clearfix">
        <header id="header" class="clearfix" role="banner">

                      <!-- start: Branding -->
            <div id="branding" class="branding-elements clearfix">

                              <div id="logo">
                  <a href="/" title="Home page" class="active"><img class="site-logo" typeof="foaf:Image" src="http://new2dev.mta.info/sites/default/files/mta_logo_top_0.png" alt="MTA" /></a>                </div>
              
                              <!-- start: Site name and Slogan hgroup -->
                <hgroup class="element-invisible" id="name-and-slogan">

                                      <h1 class="element-invisible" id="site-name"><a href="/" title="Home page" class="active">MTA</a></h1>
                  
                  
                </hgroup><!-- /end #name-and-slogan -->
              

            </div><!-- /end #branding -->
          
        <div class="region region-header"><div class="region-inner clearfix"><nav id="block-menu-menu-topbar-links" class="block block-menu no-title"  role="navigation"><div class="block-inner clearfix">  
  
  <ul class="menu clearfix"><li class="first leaf menu-depth-1 menu-item-468"><a href="http://web.mta.info/accessibility" title="">Accessibility</a></li><li class="leaf menu-depth-1 menu-item-469"><a href="http://assistive.usablenet.com/tt/new.mta.info/mta" title="">Text-only</a></li><li class="leaf menu-depth-1 menu-item-4976"><a href="http://web.mta.info/selfserve" title="">Customer Self-Service</a></li><li class="last leaf menu-depth-1 menu-item-470"><a href="http://web.mta.info/faqs.htm" title="">Contact Us</a></li></ul>
  </div></nav><div id="block-google-appliance-ga-block-search-form" class="block block-google-appliance no-title" ><div class="block-inner clearfix">  
  
  <div class="block-content content"><form action="/" method="post" id="google-appliance-block-form--2" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search Google Appliance</h2>
    <div class="form-item form-type-textfield form-item-search-keys">
  <label class="element-invisible" for="edit-search-keys--2">Enter the terms you wish to search for. </label>
 <input type="text" id="edit-search-keys--2" name="search_keys" value="" size="15" maxlength="128" class="form-text" />
</div>
<div class="url-textfield"><div class="form-item form-type-textfield form-item-url">
  <label for="edit-url--2">Leave this field blank </label>
 <input autocomplete="off" type="text" id="edit-url--2" name="url" value="" size="20" maxlength="128" class="form-text" />
</div>
</div><div class="form-actions form-wrapper" id="edit-actions--2"><input type="submit" id="edit-submit--2" name="op" value="Search" class="form-submit" /></div><input type="hidden" name="form_build_id" value="form-euTFfu0mB5gf8qvavdj2sp6vG8_8o_ugCYB3IzbVVDI" />
<input type="hidden" name="form_id" value="google_appliance_block_form" />
<input type="hidden" name="honeypot_time" value="1394131270" />
  
</div>
</div></form></div>
  </div></div></div></div>
        </header>
      </div>
    </div>

          <div id="nav-wrapper">
        <div class="container clearfix">
          <div id="menu-bar" class="nav clearfix"><nav id="block-menu-block-3" class="block block-menu-block no-title menu-wrapper menu-bar-wrapper clearfix at-menu-toggle"  role="navigation">  
  
  <div class="menu-block-wrapper menu-block-3 menu-name-menu-new-site-main-menu parent-mlid-0 menu-level-1">
  <ul class="menu clearfix"><li class="first expanded menu-mlid-8395 menu-depth-1 menu-item-8395"><a href="/nyct-subways" title="">Subways</a><ul class="menu clearfix"><li class="first expanded menu-mlid-8402 menu-depth-2 menu-item-8402"><a href="/nyct-subways" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-8404 menu-depth-3 menu-item-8404"><a href="/nyc-transit/schedules">Schedules</a></li><li class="leaf menu-mlid-9522 menu-depth-3 menu-item-9522"><a href="http://web.mta.info/nyct/fare/FaresatAGlance.htm" title="">Fares</a></li><li class="leaf menu-mlid-9524 menu-depth-3 menu-item-9524"><a href="http://www.mta.info/maps/submap.html " title="">Map  </a></li><li class="leaf menu-mlid-9526 menu-depth-3 menu-item-9526"><a href="http://mymtaalerts.com/LoginC.aspx" title="">Get Email/Text Alerts</a></li><li class="leaf menu-mlid-9527 menu-depth-3 menu-item-9527"><a href="http://www.mta.info/nyct/paratran/guide.htm" title="">Access-A-Ride </a></li><li class="leaf menu-mlid-9528 menu-depth-3 menu-item-9528"><a href="http://travel.mtanyct.info/serviceadvisory/default.aspx" title="">Planned Service Changes</a></li><li class="leaf menu-mlid-9529 menu-depth-3 menu-item-9529"><a href="http://web.mta.info/nyct/service/airport.htm" title="">Airport Information</a></li><li class="leaf menu-mlid-9530 menu-depth-3 menu-item-9530"><a href="http://web.mta.info/metrocard/tourism/mc_promotions.htm" title="">Deals &amp; Trips</a></li><li class="leaf menu-mlid-9531 menu-depth-3 menu-item-9531"><a href="http://new2dev.mta.info/nyct" title="">Visit our Main Page </a></li><li class="last leaf has-children menu-mlid-9726 menu-depth-3 menu-item-9726"><a href="/nyc-transit/metrocard">MetroCard</a></li></ul></li><li class="expanded menu-mlid-8403 menu-depth-2 menu-item-8403"><a href="/nyct-subways" title="">Just For You</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9566 menu-depth-3 menu-item-9566"><a href="/nyc-transit/seniors">Seniors</a></li><li class="leaf menu-mlid-9536 menu-depth-3 menu-item-9536"><a href="http://www.mta.info/accessibility" title="">Customers with Disabilities</a></li><li class="leaf menu-mlid-9573 menu-depth-3 menu-item-9573"><a href="/mta-headquarters/mobile-users" title="">Mobile Users</a></li><li class="leaf menu-mlid-9719 menu-depth-3 menu-item-9719"><a href="http://web.mta.info/mta/sports/" title="">Sports Fans</a></li><li class="leaf menu-mlid-9571 menu-depth-3 menu-item-9571"><a href="http://web.mta.info/mta/realestate/ad_tele.html" title="">Advertisers</a></li><li class="leaf menu-mlid-9572 menu-depth-3 menu-item-9572"><a href="http://web.mta.info/mta/employment/" title="">Careers</a></li><li class="last leaf menu-mlid-9539 menu-depth-3 menu-item-9539"><a href="http://www.mta.info/mta/phone.htm" title="">Call 511: for voice-activated travel information</a></li></ul></li><li class="last leaf menu-mlid-8478 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_5 view-dom-id-b649109e890f232571404b1d3b54fdf5">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="http://www.mta.info/nyct/service/events/HongKongDragonBoatFestivalinFlushingMeadows2013.htm"><a href="/news/2013/08/07/take-7-train-dragon-boat-festival-weekend"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/dragonboat_new.jpg?itok=MqWKkMq_" width="438" height="220" alt="" /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="http://www.mta.info/nyct/service/events/HongKongDragonBoatFestivalinFlushingMeadows2013.htm"><p>Take the 7 to the Dragon Boat Festival This Weekend</p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="expanded menu-mlid-8396 menu-depth-1 menu-item-8396"><a href="/nyct" title="">Buses</a><ul class="menu clearfix"><li class="first expanded menu-mlid-9541 menu-depth-2 menu-item-9541"><a href="/nyct" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9542 menu-depth-3 menu-item-9542"><a href="http://tripplanner.mta.info/MyTrip/ui_web/point2point/Default.aspx" title="">Schedules </a></li><li class="leaf menu-mlid-9543 menu-depth-3 menu-item-9543"><a href="http://web.mta.info/nyct/fare/FaresatAGlance.htm" title="">Fares</a></li><li class="leaf menu-mlid-9544 menu-depth-3 menu-item-9544"><a href="http://web.mta.info/metrocard/index.html" title="">MetroCard </a></li><li class="leaf menu-mlid-9545 menu-depth-3 menu-item-9545"><a href="http://bustime.mta.info/" title="">Bus TIme </a></li><li class="leaf menu-mlid-9546 menu-depth-3 menu-item-9546"><a href="http://mymtaalerts.com/LoginC.aspx" title="">Get Email/Text Alerts</a></li><li class="leaf menu-mlid-9547 menu-depth-3 menu-item-9547"><a href="http://www.mta.info/nyct/paratran/guide.htm" title="">Access-A-Ride </a></li><li class="leaf menu-mlid-9548 menu-depth-3 menu-item-9548"><a href="http://travel.mtanyct.info/serviceadvisory/busplanwork.aspx" title="">Planned Service Changes </a></li><li class="leaf menu-mlid-9549 menu-depth-3 menu-item-9549"><a href="http://web.mta.info/nyct/service/airport.htm" title="">Airport Information </a></li><li class="leaf menu-mlid-9550 menu-depth-3 menu-item-9550"><a href="http://web.mta.info/metrocard/tourism/mc_promotions.htm" title="">Deals &amp; Trips </a></li><li class="last leaf menu-mlid-9551 menu-depth-3 menu-item-9551"><a href="http://new.mta.info/nyct" title="">Visit our Main Page </a></li></ul></li><li class="expanded menu-mlid-9552 menu-depth-2 menu-item-9552"><a href="/nyct" title="">Just For You</a><ul class="menu clearfix"><li class="first leaf has-children menu-mlid-9720 menu-depth-3 menu-item-9720"><a href="/nyc-transit/seniors" title="">Seniors</a></li><li class="leaf menu-mlid-9556 menu-depth-3 menu-item-9556"><a href="http://www.mta.info/accessibility" title="">Customers with Disabilities</a></li><li class="leaf menu-mlid-9721 menu-depth-3 menu-item-9721"><a href="/mta-headquarters/mobile-users" title="">Mobile Users</a></li><li class="leaf menu-mlid-9585 menu-depth-3 menu-item-9585"><a href="http://web.mta.info/mta/employment/" title="">Careers </a></li><li class="last leaf menu-mlid-9584 menu-depth-3 menu-item-9584"><a href="http://web.mta.info/mta/realestate/ad_tele.html" title="">Advertisers </a></li></ul></li><li class="last leaf menu-mlid-9715 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_5 view-dom-id-b649109e890f232571404b1d3b54fdf5">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="http://www.mta.info/nyct/service/events/HongKongDragonBoatFestivalinFlushingMeadows2013.htm"><a href="/news/2013/08/07/take-7-train-dragon-boat-festival-weekend"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/dragonboat_new.jpg?itok=MqWKkMq_" width="438" height="220" alt="" /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="http://www.mta.info/nyct/service/events/HongKongDragonBoatFestivalinFlushingMeadows2013.htm"><p>Take the 7 to the Dragon Boat Festival This Weekend</p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="expanded menu-mlid-8397 menu-depth-1 menu-item-8397"><a href="/lirr" title="">Long Island Rail Road</a><ul class="menu clearfix"><li class="first expanded menu-mlid-9455 menu-depth-2 menu-item-9455"><a href="/lirr" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9477 menu-depth-3 menu-item-9477"><a href="/lirr/schedules-fares">Schedules</a></li><li class="leaf menu-mlid-8975 menu-depth-3 menu-item-8975"><a href="/lirr/fares-ticket-information">Fares</a></li><li class="leaf menu-mlid-9457 menu-depth-3 menu-item-9457"><a href="http://wx3.lirr.org/lirr/TrainTime/" title="">TrainTime</a></li><li class="leaf menu-mlid-9199 menu-depth-3 menu-item-9199"><a href="/lirr/lirr-map">Map</a></li><li class="leaf menu-mlid-9458 menu-depth-3 menu-item-9458"><a href="http://www.mta.info/lirr/News/PlannedService.htm" title="">Planned Service Changes</a></li><li class="leaf menu-mlid-8983 menu-depth-3 menu-item-8983"><a href="http://www.mymtaalerts.com/LoginC.aspx" title="">Get Email/Text Alerts</a></li><li class="leaf menu-mlid-8986 menu-depth-3 menu-item-8986"><a href="/lirr/deals-getaways" title="">Long Island Getaways</a></li><li class="leaf menu-mlid-9459 menu-depth-3 menu-item-9459"><a href="/lirr" title="">Visit our Main page</a></li><li class="last leaf menu-mlid-8982 menu-depth-3 menu-item-8982"><a href="http://www.coocoo.com/lirr" title="">CooCoo</a></li></ul></li><li class="expanded menu-mlid-9456 menu-depth-2 menu-item-9456"><a href="/lirr" title="">Just For You</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9460 menu-depth-3 menu-item-9460"><a href="http://www.mta.info/lirr/Travel/SeniorGuide/" title="">Seniors</a></li><li class="leaf menu-mlid-8978 menu-depth-3 menu-item-8978"><a href="/lirr/accessibility" title="">Customers with Disabilities</a></li><li class="leaf menu-mlid-9462 menu-depth-3 menu-item-9462"><a href="/mta-headquarters/mobile-users">Mobile Users</a></li><li class="leaf menu-mlid-9463 menu-depth-3 menu-item-9463"><a href="http://web.mta.info/lirr/Travel/" title="">Regional Travelers </a></li><li class="leaf menu-mlid-9464 menu-depth-3 menu-item-9464"><a href="http://web.mta.info/mta/sports/" title="">Sports Fans</a></li><li class="leaf menu-mlid-9465 menu-depth-3 menu-item-9465"><a href="http://web.mta.info/mta/realestate/ad_tele.html " title="">Advertisers</a></li><li class="last leaf menu-mlid-9466 menu-depth-3 menu-item-9466"><a href="http://web.mta.info/mta/employment/ " title="">Careers </a></li></ul></li><li class="last leaf menu-mlid-9257 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_2 view-dom-id-9bfb9178576948c5012c22abd78bde29">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="/node/%5Bnid%5D"><a href="/news/2013/07/10/lirr-provides-extra-service-all-star-game-events"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/lirr_36003_4_0.jpg?itok=UfQqcFHs" width="438" height="220" alt="" /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="/node/%5Bnid%5D"><p>All-Star Service to All-Star Game &amp; Events</p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="expanded menu-mlid-8398 menu-depth-1 menu-item-8398"><a href="/mnr" title="">Metro-North Railroad</a><ul class="menu clearfix"><li class="first expanded menu-mlid-9467 menu-depth-2 menu-item-9467"><a href="/mnr" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-8560 menu-depth-3 menu-item-8560"><a href="/metro-north/mta-metro-north-railroad-schedules">Schedules</a></li><li class="leaf menu-mlid-8559 menu-depth-3 menu-item-8559"><a href="/metro-north/fares-ticket-information" title="">Fares</a></li><li class="leaf menu-mlid-8561 menu-depth-3 menu-item-8561"><a href="https://ec0.mta.info/mnr/Cvar_MR/index.cfm" title="">Mail &amp; Ride</a></li><li class="leaf menu-mlid-8547 menu-depth-3 menu-item-8547"><a href="/metro-north/mnr-map" title="">Map</a></li><li class="leaf menu-mlid-8571 menu-depth-3 menu-item-8571"><a href="http://www.mymtaalerts.com/LoginC.aspx" title="">Get Email/Text Alerts</a></li><li class="leaf menu-mlid-8575 menu-depth-3 menu-item-8575"><a href="/metro-north/destination-deals-getaways" title="">Metro North Getaways!</a></li><li class="leaf menu-mlid-9469 menu-depth-3 menu-item-9469"><a href="http://as0.mta.info/mnr/mstations/default.cfm" title="">TrainTime</a></li><li class="last leaf menu-mlid-9470 menu-depth-3 menu-item-9470"><a href="/mnr" title="">Visit our Main page</a></li></ul></li><li class="expanded menu-mlid-9468 menu-depth-2 menu-item-9468"><a href="/mnr" title="">Just For You</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9594 menu-depth-3 menu-item-9594"><a href="http://www.mta.info/lirr/Travel/SeniorGuide/" title="">Seniors</a></li><li class="leaf menu-mlid-9595 menu-depth-3 menu-item-9595"><a href="/metro-north/accessibility" title="">Customers with Disabilities </a></li><li class="leaf menu-mlid-9471 menu-depth-3 menu-item-9471"><a href="/mta-headquarters/mobile-users" title="">Mobile Users</a></li><li class="leaf menu-mlid-9472 menu-depth-3 menu-item-9472"><a href="http://web.mta.info/mta/sports/" title="">Sports Fans</a></li><li class="leaf menu-mlid-9473 menu-depth-3 menu-item-9473"><a href="http://web.mta.info/mta/realestate/ad_tele.html" title="">Advertisers</a></li><li class="last leaf menu-mlid-9474 menu-depth-3 menu-item-9474"><a href="http://web.mta.info/mta/employment/" title="">Careers</a></li></ul></li><li class="last leaf menu-mlid-9476 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_4 view-dom-id-ac0ee8207920234885f6a1821cd47c2a">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="/node/%5Bnid%5D"><a href="/news/2013/08/26/pearl-wisdom-don%E2%80%99t-miss-norwalk-oyster-fest"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/oyster.jpg?itok=0vuwh1Rb" width="438" height="220" alt="" /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="/node/%5Bnid%5D"><p>Oyster Festival Logo </p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="expanded menu-mlid-8594 menu-depth-1 menu-item-8594"><a href="/sir" title="">Staten Island Railway</a><ul class="menu clearfix"><li class="first expanded menu-mlid-8593 menu-depth-2 menu-item-8593"><a href="/sir" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9603 menu-depth-3 menu-item-9603"><a href="http://web.mta.info/nyct/service/pdf/sircur.pdf" title="">Schedules</a></li><li class="leaf menu-mlid-9604 menu-depth-3 menu-item-9604"><a href="http://www.mta.info/nyct/sir/sirfare.htm" title="">Fares</a></li><li class="leaf menu-mlid-8649 menu-depth-3 menu-item-8649"><a href="/staten-island-railway/system-map" title="">System Map</a></li><li class="leaf menu-mlid-9202 menu-depth-3 menu-item-9202"><a href="/staten-island-railway/mta-staten-island-railway-strip-map" title="">Strip map: Bus Transfers and Parking</a></li><li class="leaf menu-mlid-9605 menu-depth-3 menu-item-9605"><a href="http://www.mta.info/nyct/service/subsrvnsir.htm" title="">Planned Service Changes</a></li><li class="leaf menu-mlid-9606 menu-depth-3 menu-item-9606"><a href="http://www.nyc.gov/html/dot/html/ferrybus/staten-island-ferry.shtml" title="">Staten Island Ferry Information </a></li><li class="last leaf menu-mlid-9608 menu-depth-3 menu-item-9608"><a href="http://new.mta.info/sir" title="">Visit our Main Page</a></li></ul></li><li class="expanded menu-mlid-9607 menu-depth-2 menu-item-9607"><a href="/sir" title="">Just for You</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9609 menu-depth-3 menu-item-9609"><a href="http://www.mta.info/lirr/Travel/SeniorGuide/" title="">Seniors</a></li><li class="leaf menu-mlid-9611 menu-depth-3 menu-item-9611"><a href="http://web.mta.info/accessibility/" title="">Customers with Disabilities</a></li><li class="leaf menu-mlid-9722 menu-depth-3 menu-item-9722"><a href="/mta-headquarters/mobile-users" title="">Mobile Users</a></li><li class="leaf menu-mlid-9612 menu-depth-3 menu-item-9612"><a href="http://web.mta.info/mta/sports/" title="">Sports Fans </a></li><li class="last leaf menu-mlid-9613 menu-depth-3 menu-item-9613"><a href="http://web.mta.info/mta/employment/" title="">Careers </a></li></ul></li><li class="last leaf menu-mlid-9712 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_2 view-dom-id-9bfb9178576948c5012c22abd78bde29">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="/node/%5Bnid%5D"><a href="/news/2013/07/10/lirr-provides-extra-service-all-star-game-events"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/lirr_36003_4_0.jpg?itok=UfQqcFHs" width="438" height="220" alt="" /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="/node/%5Bnid%5D"><p>All-Star Service to All-Star Game &amp; Events</p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="expanded menu-mlid-9710 menu-depth-1 menu-item-9710"><a href="/bandt" title="">Bridges &amp; Tunnels</a><ul class="menu clearfix"><li class="first expanded menu-mlid-8549 menu-depth-2 menu-item-8549"><a href="/bandt" title="">Popular Links</a><ul class="menu clearfix"><li class="first leaf menu-mlid-8545 menu-depth-3 menu-item-8545"><a href="/bridges-tunnels/crossing-charges-%E2%80%94-effective-2am-march-3-2013" title="">Crossing Charges</a></li><li class="leaf menu-mlid-9618 menu-depth-3 menu-item-9618"><a href="http://mta.info/bandt/ezpass/" title="">E-ZPass Information</a></li><li class="leaf menu-mlid-8548 menu-depth-3 menu-item-8548"><a href="/bridges-tunnels/tolls-mail-henry-hudson-bridge" title="">Henry Hudson Bridge Toll</a></li><li class="leaf menu-mlid-9619 menu-depth-3 menu-item-9619"><a href="http://mymtaalerts.com/LoginC.aspx" title="">Get Email/Text Alerts </a></li><li class="leaf menu-mlid-9723 menu-depth-3 menu-item-9723"><a href="http://traveltime.mta.info/traveltime/index_pc.html" title="">Drive Time</a></li><li class="last leaf menu-mlid-9724 menu-depth-3 menu-item-9724"><a href="/sir" title="">Visit our Main Page</a></li></ul></li><li class="expanded menu-mlid-8550 menu-depth-2 menu-item-8550"><a href="/bandt" title="">Just for You</a><ul class="menu clearfix"><li class="first leaf menu-mlid-9621 menu-depth-3 menu-item-9621"><a href="http://web.mta.info/accessibility/rail.htm" title="">Customers with Disabilities </a></li><li class="leaf menu-mlid-8552 menu-depth-3 menu-item-8552"><a href="/bridges-tunnels/truckcommercial-vehicle-information" title="">Truckers</a></li><li class="leaf menu-mlid-9622 menu-depth-3 menu-item-9622"><a href="http://webcam.mta.info/mta3/index.jsp" title="">Commuters</a></li><li class="leaf has-children menu-mlid-9725 menu-depth-3 menu-item-9725"><a href="/mta-headquarters/mobile-users" title="">Mobile Users</a></li><li class="last leaf menu-mlid-8553 menu-depth-3 menu-item-8553"><a href="/bridges-tunnels/job-vacancy-notices" title="">Careers</a></li></ul></li><li class="last leaf menu-mlid-9713 menu-views"><div class="view view-news-rotator-v3 view-id-news_rotator_v3 view-display-id-block_3 view-dom-id-8a2212f99b7c21dec83e5f31acd8c3b0">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  <div class="views-field views-field-field-rotator-horizontal-image">        <div class="field-content"><a href="/node/%5Bnid%5D"><a href="/news/2013/08/02/henry-hudson-upper-level-permanent-lane-closure-lifted"><img typeof="foaf:Image" class="image-style-rotator-horizontal" src="http://new2dev.mta.info/sites/default/files/styles/rotator_horizontal/public/mta/images/rotator_horizontal/img_0033.jpg?itok=G-HhDEqY" width="438" height="220" alt="New roadway ready for striping " title="Henry Hudson UpNew roadway ready for striping " /></a></a></div>  </div>  
  <div class="views-field views-field-field-news-rotator-caption">        <div class="field-content"><a href="/node/%5Bnid%5D"><p>Henry Hudson Upper Level Permanent Lane Closure Lifted </p>
</a></div>  </div>  </div>
    </div>
  
  
  
  
  
  
</div></li>
</ul></li><li class="last leaf menu-mlid-9714 menu-depth-1 menu-item-9714"><a href="/visitors">Visitors to New York</a></li></ul></div>

  </nav></div>        </div>
      </div>
    
    
          <div id="messages-help-wrapper">
        <div class="container clearfix">
          <div id="messages"></div>                  </div>
      </div>
=======
<!-- This header necessary using CORS http://www.nczonline.net/blog/2010/05/25/cross-domain-ajax-with-cross-origin-resource-sharing/ -->
<?php
header('Access-Control-Allow-Origin: *');
?>
<div id="topbar">
				<div id="branding">
					<a href="http://www.mta.info"><img alt="Metropolitan Transportation Authority logo" 
src="/sites/all/themes/mta/images/mta_info.gif"></a>
				</div>
				<div id="middle-header">
								</div>
				<div id="search">

			  <div class="region region-header-right">
    <div class="block block-menu contextual-links-region" id="block-menu-menu-topbar-links">

    <div class="contextual-links-wrapper contextual-links-processed"><a href="#" class="contextual-links-trigger">Configure</a><ul class="contextual-links"><li 
class="menu-list first"><a href="/admin/structure/menu/manage/menu-topbar-links/list?destination=node/239061">List links</a></li>
<li class="menu-edit"><a href="/admin/structure/menu/manage/menu-topbar-links/edit?destination=node/239061">Edit menu</a></li>
<li class="block-configure last"><a href="/admin/structure/block/manage/menu/menu-topbar-links/configure?destination=node/239061">Configure block</a></li>
</ul></div>
  <div class="content">
    <ul class="menu"><li class="first leaf"><a title="" href="http://web.mta.info/accessibility">Accessibility</a></li>
<li class="leaf"><a title="" href="http://assistive.usablenet.com/tt/new.mta.info/mta">Text-only</a></li>
<li class="leaf"><a title="" href="http://web.mta.info/selfserve">Customer Self-Service</a></li>
<li class="last leaf"><a title="" href="http://web.mta.info/faqs.htm">FAQs/Contact Us</a></li>
</ul>  </div>
</div>
<div class="block block-google-appliance contextual-links-region" id="block-google-appliance-ga-block-search-form">

    <div class="contextual-links-wrapper contextual-links-processed"><a href="#" class="contextual-links-trigger">Configure</a><ul class="contextual-links"><li 
class="block-configure first last"><a href="/admin/structure/block/manage/google_appliance/ga_block_search_form/configure?destination=node/239061">Configure block</a></li>
</ul></div>
  <div class="content">
    <form accept-charset="UTF-8" id="google-appliance-block-form" method="post" action="/"><div><div class="container-inline">
      <h2 class="element-invisible">Search Google Appliance</h2>
    <div class="form-item form-type-textfield form-item-search-keys">
  <label for="edit-search-keys" class="element-invisible">Enter the terms you wish to search for. </label>
 <input type="text" class="form-text" maxlength="128" size="15" value="" name="search_keys" id="edit-search-keys">
</div>
<div id="edit-actions" class="form-actions form-wrapper"><input type="submit" class="form-submit" value="Search" name="op" id="edit-submit"></div><input type="hidden" 
value="form-Na6gmtCAPxAu3HaDba-NIztNInC_SSZo9XV2zPMHfP4" name="form_build_id">
<input type="hidden" value="CmySCHCdqhupjlGGH-b8zDCJ0OztCOY2wxXpVPDQkwc" name="form_token">
<input type="hidden" value="google_appliance_block_form" name="form_id">
  
</div>
</div></form>  </div>
</div>
  </div>
  <div id="navbar">  <div class="region region-navbar">
    <div class="block block-superfish contextual-links-region" id="block-superfish-1">

    <div class="contextual-links-wrapper contextual-links-processed"><a href="#" class="contextual-links-trigger">Configure</a><ul class="contextual-links"><li 
class="superfish-list first"><a href="/admin/structure/menu/manage/main-menu/list?destination=node/239061">List links</a></li>
<li class="superfish-edit"><a href="/admin/structure/menu/manage/main-menu/edit?destination=node/239061">Edit menu</a></li>
<li class="block-configure last"><a href="/admin/structure/block/manage/superfish/1/configure?destination=node/239061">Configure block</a></li>
</ul></div>
  <div class="content">
    <ul class="menu sf-menu sf-main-menu sf-horizontal sf-style-default sf-total-items-8 sf-parent-items-2 sf-single-items-6 superfish-processed sf-js-enabled" 
id="superfish-1"><li class="first odd sf-item-1 sf-depth-1 sf-total-children-6 sf-parent-children-0 sf-single-children-6 menuparent" id="menu-221-1"><a class="sf-depth-1 
menuparent" title="" href="http://www.mta.info">Home</a><ul style="top: -99999em;" class="sf-hidden"><li class="first odd sf-item-1 sf-depth-2 sf-no-children" 
id="menu-400-1"><a class="sf-depth-2" title="" href="http://www.mta.info">MTA Home</a></li><li class="middle even sf-item-2 sf-depth-2 sf-no-children" id="menu-401-1"><a 
class="sf-depth-2" title="" href="/nyct">NYC Subways and Buses</a></li><li class="middle odd sf-item-3 sf-depth-2 sf-no-children" id="menu-402-1"><a class="sf-depth-2" 
href="/lirr">Long Island Rail Road</a></li><li class="middle even sf-item-4 sf-depth-2 sf-no-children" id="menu-403-1"><a class="sf-depth-2" href="/mnr">Metro-North 
Railroad</a></li><li class="middle odd sf-item-5 sf-depth-2 sf-no-children" id="menu-404-1"><a class="sf-depth-2" href="/bandt">Bridges and Tunnels</a></li><li class="last 
even sf-item-6 sf-depth-2 sf-no-children" id="menu-405-1"><a class="sf-depth-2" title="" href="http://www.mta.info/capital">MTA Capital Program</a></li></ul></li><li 
class="middle even sf-item-2 sf-depth-1 sf-no-children" id="menu-399-1"><a class="sf-depth-1" title="" href="http://www.mta.info/schedules">Schedules</a></li><li 
class="middle odd sf-item-3 sf-depth-1 sf-no-children" id="menu-414-1"><a class="sf-depth-1" title="" href="http://www.mta.info/fares">Fares &amp; Tolls</a></li><li 
class="middle even sf-item-4 sf-depth-1 sf-no-children" id="menu-415-1"><a class="sf-depth-1" title="" href="http://www.mta.info/maps">Maps</a></li><li class="middle odd 
sf-item-5 sf-depth-1 sf-no-children" id="menu-416-1"><a class="sf-depth-1" title="" href="http://www.mta.info/service">Planned Service Changes</a></li><li class="middle 
even sf-item-6 sf-depth-1 sf-no-children" id="menu-417-1"><a class="sf-depth-1" title="" href="http://www.mta.info/about">MTA Info</a></li><li class="middle odd sf-item-7 
sf-depth-1 sf-no-children" id="menu-418-1"><a class="sf-depth-1" title="" href="http://www.mta.info/business">Doing Business With Us</a></li><li class="last even sf-item-8 
sf-depth-1 sf-total-children-9 sf-parent-children-0 sf-single-children-9 menuparent" id="menu-419-1"><a class="sf-depth-1 menuparent" title="" 
href="http://www.mta.info/accountability">Transparency</a><ul style="top: -99999em;" class="sf-hidden"><li class="first odd sf-item-1 sf-depth-2 sf-no-children" 
id="menu-420-1"><a class="sf-depth-2" title="" href="http://www.mta.info/accountability">Main Page</a></li><li class="middle even sf-item-2 sf-depth-2 sf-no-children" 
id="menu-421-1"><a class="sf-depth-2" title="" href="http://www.mta.info/mta/boardmaterials.html">Board Materials</a></li><li class="middle odd sf-item-3 sf-depth-2 
sf-no-children" id="menu-422-1"><a class="sf-depth-2" title="" href="http://www.mta.info/mta/budget/">Budget Info</a></li><li class="middle even sf-item-4 sf-depth-2 
sf-no-children" id="menu-423-1"><a class="sf-depth-2" title="" href="http://www.mta.info/capital/">Capital Program Info</a></li><li class="middle odd sf-item-5 sf-depth-2 
sf-no-children" id="menu-428-1"><a class="sf-depth-2" title="" href="http://www.mta.info/capitaldashboard/CPDHome.html">Capital Program Dashboard</a></li><li class="middle 
even sf-item-6 sf-depth-2 sf-no-children" id="menu-424-1"><a class="sf-depth-2" title="" href="http://www.mta.info/mta/leadership/">MTA Leadership</a></li><li class="middle 
odd sf-item-7 sf-depth-2 sf-no-children" id="menu-425-1"><a class="sf-depth-2" title="" href="http://www.mta.info/persdashboard/performance14.html">Performance 
Indicators</a></li><li class="middle even sf-item-8 sf-depth-2 sf-no-children" id="menu-426-1"><a class="sf-depth-2" title="" href="http://www.mta.info/news/">Press 
Releases and News</a></li><li class="last odd sf-item-9 sf-depth-2 sf-no-children" id="menu-427-1"><a class="sf-depth-2" title="" 
href="http://www.mta.info/mta/news/hearings/">Public Hearings</a></li></ul></li></ul>  </div>
</div>
  </div>
</div>
			
				</div>
			 </div>
>>>>>>> jimcurrent
