jQuery(document).ready(function($){$('#nav-wrap').prepend('<div id="menu-icon"><i class="icomoon-menu-6"></i> Menu - <span class="mn-clk">Navigation</span></div>');$("#menu-icon").on("click",function(){$("#nav").slideToggle();$(this).toggleClass("active");});});jQuery(document).ready(function($){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var msViewportStyle=document.createElement("style");msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"));document.getElementsByTagName("head")[0].appendChild(msViewportStyle);jQuery('ul#nav').addClass('ie10mfx');}});jQuery(document).ready(function($){  var deviceAgent=navigator.userAgent.toLowerCase();  var agentID=deviceAgent.match(/(iphone|ipod|ipad)/);  if(agentID){    var width=$(window).width();if(width>768){if(jQuery('#nav li:has(ul)').length)
{jQuery('#nav li:has(ul)').doubleTapToGo();}}
 
  }
else{jQuery('#nav li:has(ul)').doubleTapToGo();}});(function(){var $container=$('.acc-container'),$trigger=$('.acc-trigger');$container.hide();$trigger.first().addClass('active').next().show();var fullWidth=$container.outerWidth(true);$trigger.css('width',fullWidth);$container.css('width',fullWidth);$trigger.on('click',function(e){if($(this).next().is(':hidden')){$trigger.removeClass('active').next().slideUp(300);$(this).toggleClass('active').next().slideDown(300);}
e.preventDefault();});$(window).on('resize',function(){fullWidth=$container.outerWidth(true)
$trigger.css('width',$trigger.parent().width());$container.css('width',$container.parent().width());});})();jQuery(document).ready(function(){jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('.scrollup').fadeIn();}else{jQuery('.scrollup').fadeOut();}});jQuery('.scrollup').click(function(){jQuery("html, body").animate({scrollTop:0},700);return false;});});jQuery(document).ready(function(){jQuery("button.btnSend").click(function(){var form=jQuery(this).closest('form');jQuery.ajax({type:'POST',url:'php/contact.php',data:jQuery(form).serialize(),success:function(response){if(parseInt(response)>0)
{if(jQuery(form).find("#spanMessage").length)
jQuery("#spanMessage").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Well done!</strong> Your message has been sent.</div>');else
alert('Well done! Your message has been sent');}
else{if(jQuery(form).find("#spanMessage").length)
jQuery("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error! </strong> Somthing Wrong</div>');else
alert('Somthing wrong!');}}});});});jQuery(document).ready(function(){jQuery('.search-text-box').click(function(){jQuery(this).animate({width:'140px',},240,function(){jQuery('.search-text-box').delay(100).queue(function(next){jQuery('.search-text-box').css('color','#444');next();});});});jQuery(document).click(function(ev){var myID=ev.target.id;if(myID!='search-box'){jQuery('.search-text-box').animate({width:'1px',},200,function(){jQuery('.search-text-box').css('color','transparent');});}});});jQuery(document).ready(function(){if(jQuery('#our-clients').length){jQuery('#our-clients').jcarousel();}
if(jQuery('#latest-projects').length){jQuery('#latest-projects').jcarousel({scroll:1});}});jQuery(document).ready(function(){if(jQuery('.pie').length)
{jQuery('.pie').easyPieChart({barColor:'#ff9900',trackColor:'#f2f2f2',scaleColor:false,lineWidth:20,animate:1000,onStep:function(value){this.$el.find('span').text(~~value+1);}});}});initProgress('.progress');function initProgress(el){jQuery(el).each(function(){var pData=jQuery(this).data('progress');progress(pData,jQuery(this));});}
function progress(percent,$element){var progressBarWidth=0;(function myLoop(i,max){progressBarWidth=i*$element.width()/100;setTimeout(function(){$element.find('div').find('small').html(i+'%');$element.find('div').width(progressBarWidth);if(++i<=max)myLoop(i,max);},10)})(0,percent);}
jQuery(document).ready(function(){var width=$(window).width();if(width>768){if(jQuery("#sticker").length)
{jQuery("#sticker").sticky({topSpacing:0,getWidthFrom:jQuery('#boxed-wrap')});}}});jQuery(window).scroll(function(){var width=$(window).width();if(width<768){if(jQuery("#sticker").length)
{jQuery("#sticker").css("position","relative"),jQuery(".is-sticky").css("position","relative"),jQuery(".is-sticky").css("height","auto");}}});jQuery(document).ready(function(){var width=$(window).width();if(width>768){if(jQuery("#sticker").length)
{jQuery("#side-nav").sticky({topSpacing:0});}}});jQuery(document).ready(function(){if(jQuery('.flexslider').length){jQuery('.flexslider').flexslider({animation:"slide",start:function(slider){jQuery('body').removeClass('loading');}});}});jQuery(document).ready(function($){var lightboxArgs={animation_speed:'fast',overlay_gallery:true,autoplay_slideshow:false,slideshow:5000,theme:'pp_default',opacity:0.8,show_title:false,social_tools:"",deeplinking:false,allow_resize:true,counter_separator_label:'/',default_width:940,default_height:529};if(jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').length){jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').prettyPhoto(lightboxArgs);}
if(jQuery("a[rel^='prettyPhoto']").length){jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000,autoplay_slideshow:false});}});jQuery(window).load(function(){if(jQuery('#pin-content').length){jQuery('#pin-content').masonry({itemSelector:'.pin-box',}).imagesLoaded(function(){jQuery('#pin-content').data('masonry');});}});jQuery(document).ready(function(){$window=jQuery(window);$('section[data-type="background"]').each(function(){var $bgobj=jQuery(this);jQuery(window).scroll(function(){var yPos=-($window.scrollTop()/$bgobj.data('speed'));var coords='50% '+yPos+'px';$bgobj.css({backgroundPosition:coords});});});});document.createElement("article");document.createElement("section");