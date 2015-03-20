<footer id="footer">
    <section class="container footer-in">
	      <div class="one-third column">
        		<h5 class="subtitle">Latest News<span><a href="">-VIEW ALL</a></span></h5>        		
        		<div class="side-list">
					<ul>
					  <li>
					  <a href="#"><img src="<?php echo base_url();?>images/blog-line1.jpg" alt=""></a>
					  <h5><a href="#">Blog Post Title Example</a></h5>
					  <p>8 Comments</p>
					  </li>
					  <li>
					  <a href="#"><img src="<?php echo base_url();?>images/blog-line2.jpg" alt=""></a>
					  <h5><a href="#">Blog Post Title Example</a></h5>
					  <p>8 Comments</p>
					  </li>
					  <li><a href="#"><img src="<?php echo base_url();?>images/blog-line3.jpg" alt=""></a>
					  <h5><a href="#">Blog Post Title Example</a></h5>
					  <p>8 Comments</p>
					  </li>
					  <li><a href="#"><img src="<?php echo base_url();?>images/blog-line4.jpg" alt=""></a>
					  <h5><a href="#">Blog Post Title Example</a></h5>
					  <p>8 Comments</p>
					  </li>
					</ul>
			  </div>
      </div>
      <!-- LATASET NEWS end- -->

      <div class="one-third column">
        <h5 class="subtitle">Tags</h5>
        <div class="tagcloud">
        	<a href="">Features</a><a href="">Inspiration</a><a href="">Showcase</a>
        	<a href="">Graphic Design</a><a href="">Illustration</a><a href="">Design</a>
        	<a href="">Web Design</a><a href="">Video</a><a href="">ART</a><a href="">New Work</a>
        	<a href="">Animation</a><a href="">Photoshop</a><a href="">Digital Painting</a>
        	<a href="">CG</a><a href="">Howto</a>
        </div>
		<br class="clear">
        <div class="partner-website">
	        <h5 class="subtitle">Partner Websites</h5>
	        <a href=""><i class="icomoon-arrow-right-17"></i>Cube Development Services</a>
	        <a href=""><i class="icomoon-arrow-right-17"></i>New Energy Corporation</a>
	        <a href=""><i class="icomoon-arrow-right-17"></i>MNKY Web Design Agency</a>
	        <a href=""><i class="icomoon-arrow-right-17"></i>Green Business Association</a>
	        <a href=""><i class="icomoon-arrow-right-17"></i>Bright Idia Photography</a>
        </div>
      </div>
      <!-- TAG & Partner end -->
	  
	  <div class="one-third column contact-inf">
        <h5 class="subtitle">Contact Info</h5>
     	<span><i class="icomoon-home"></i> 2013 Main St New York, NY 10044</span>
     	<span><i class="icomoon-phone"></i> +1 234 5678</span>
     	<span><i class="icomoon-envelop-2"></i> info@yoursite.com</span>
     	<form class="frmContact" action="#">
		   <input type="text" name="txtName" id="txtName" value="" placeholder="Your Name..."/>
		   <input type="text" name="txtEmail" id="txtEmail" value="" placeholder="Your Email Address..."/>
		  <textarea name="txtText" id="txtText" placeholder="Your Message..."></textarea>
			<button type="button" class="btnSend">SEND MESSAGE</button>
			<div class="spanMessage"></div>
		</form>
      </div>
      <!-- Contact info end -->
    </section>
    <!-- end-footer-in -->
    <section class="footbot">
	<div class="container">
      <div class="footer-navi">© 2013 <a href="">Florida Studio</a> All Rights Reserved.</div>
      <div class="socailfollow">
		        	<a href="#" class="facebook"><i class="icomoon-facebook"></i></a>
		        	<a href="#" class="twitter"><i class="icomoon-twitter"></i></a>
		        	<a href="#" class="google"><i class="icomoon-google-plus-2"></i></a>
		        	<a href="#" class="dribble"><i class="icomoon-dribbble"></i></a>
		        	<a href="#" class="pinterest"><i class="icomoon-pinterest-2"></i></a>
		        	<a href="#" class="vimeo"><i class="icomoon-vimeo"></i></a>
		        	<a href="#" class="youtube"><i class="icomoon-youtube"></i></a>
        </div>
	  </div>
	  <!-- footer-navigation /end -->
    </section>
    <!-- end-footbot -->
  </footer>
<!-- end-footer -->
<span id="scroll-top"><a class="scrollup"><i class="icomoon-arrow-up"></i></a></span>
</div><!-- end-wrap -->

<!-- End Document
================================================== -->
<script src="<?php echo base_url();?>js/jquery.jcarousel.min.js"></script>
<script src="<?php echo base_url();?>layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#layerslider').layerSlider({
skinsPath : '<?php echo base_url();?>layerslider/skins/',
skin : 'florida',
navStartStop        : false,
thumbnailNavigation : 'hover',
hoverPrevNext : true,
responsive : true,
responsiveUnder : 1200,
thumbnailNavigation : false,
sublayerContainer : 1200
});
});		
</script>
<script type="text/javascript" src="<?php echo base_url();?>js/doubletaptogo.js" ></script>
<script defer src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-alert.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-tab.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/florida-custom.js" ></script>
<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.sticky.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easy-pie-chart.js"></script>-->

</body>
</html>