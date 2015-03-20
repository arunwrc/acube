<footer id="footer">
    <section class="container footer-in">
	      <div class="one-third column">
        		<h5 class="subtitle">Latest News</h5>        		
        		<div class="side-list">
					<a href="/home"><img src="<?php echo base_url();?>images/foo-logo.png" width="150" id="img-logo" alt="logo"></a>
			  </div>
      </div>
      <!-- LATASET NEWS end- -->

      <div class="one-third column">
        <h5 class="subtitle">Tags</h5>
        <div class="tagcloud">
        	<a href="">TaxiERP</a><a href="">Accounting Systems</a><a href="">Android</a>
        	<a href="">Web Development</a><a href="">Cloud Computing</a><a href="">Taxi Dispatch Systems</a>
        	<a href="">CRM</a><a href="">ERP</a><a href="">Open CART</a><a href="">Product lifecycle Management</a>
        	<a href="">Open ERP</a><a href="">Restaurant Billing System</a><a href="">Content Management Systems</a>
        	<a href="">Ruby on Rails</a><a href="">Mongo DB</a><a href="">Travel Management</a><a href="">Yii</a>
        </div>
		<br class="clear">
        
      </div>
      <!-- TAG & Partner end -->
	  
	  <div class="one-third column contact-inf">
        <h5 class="subtitle">Contact Info</h5>
     	<span><i class="icomoon-home"></i> # 20, Infpark TBC, JNI STadium, Kaloor, Kochi</span>
     	<span><i class="icomoon-phone"></i> +91 484 606 60 60</span>
     	<span><i class="icomoon-envelop-2"></i> info@acube.co</span>
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
      <div class="footer-navi">© 2015  |  Acube Innovations Pvt Ltd. &nbsp;&nbsp;&nbsp; Estd. 2011</div>
      <div class="socailfollow">
		        	<a href="#" class="facebook"><i class="icomoon-facebook"></i></a>
		        	<a href="#" class="twitter"><i class="icomoon-twitter"></i></a>
		        	<!--<a href="#" class="google"><i class="icomoon-google-plus-2"></i></a>
		        	<a href="#" class="dribble"><i class="icomoon-dribbble"></i></a>
		        	<a href="#" class="pinterest"><i class="icomoon-pinterest-2"></i></a>
		        	<a href="#" class="vimeo"><i class="icomoon-vimeo"></i></a> -->
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