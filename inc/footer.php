<!--subscribe-area start-->
	<div class="subscribe-area mt-95 sm-mt-75">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="subscribe-form">
						<h3>Subscribe To Our Newletter</h3>
						<p>Get Update</p>
						<?php 
							if (isset($_SERVER['success']) && !empty($_SERVER['success'])) {
						?>
						<p id="sub">Subscribed</p>
						<?php
							}
						 ?>
						<form action="process/subscriber" method="post">
							<input type="email" name="email" placeholder="Your Email" required="required" />
							<button class="btn-common">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--subscribe-area end-->
	
	<!--footer-area start-->
	
	<footer class="footer-area">
		<!--footer-top-->
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget style-2">
							<h4>The Garden</h4>
							<div class="about-widget">
								<p>Hi!, Warm Welcome to Neo Fusion School Of Computer. We are giving a most skillfull computer training from last 12 years with the objective of better Education</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget style-2">
							<h4>Contact Info</h4>
							<div class="contact-info style-3">
								<ul>
									<li><i class="fa fa-home"></i>Neo Fusion, Inacho Bhaktapur</li>
									<li><i class="fa fa-phone"></i>01 6618155</li>
									<li><i class="fa fa-mobile"></i>+977 9843 025 317</li>
									<li><i class="fa fa-envelope"></i>info@neofusionsoc.com</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget style-2">
							<h4>Navigation</h4>
							<div class="fooer-menu">
								<ul class="mr-40">
									<li><a href="all-course">Courses</a></li>
									<li><a href="about">About Us</a></li>
									<li><a href="contact">Contact Us</a></li>
									<li><a href="blog">Blog</a></li>
									<li><a href="trace">Trace Us</a></li>
								</ul>
								<ul>
									<li><a href="service-1">Wedding Photography</a></li>
									<li><a href="service-2">Art Workshop</a></li>
									<li><a href="service-3">Computer Workshop</a></li>
									<li><a href="gallery">Photo Gallery</a></li>
									<li><a href="successgallery">Success Gallery</a></li>
									<li><a href="certificate">Verify Certificate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget style-2">
							<h4>Working Hours</h4>
							<div class="work-hours">
								<ul class="list-none">
									<li>Sunday <span>06:00-20:00</span></li>
									<li>Monday <span>07:00-17:00</span></li>
									<li>Tuesday <span>07:00-17:00</span></li>
									<li>Wednesday <span>07:00-17:00</span></li>
									<li>Thursday <span>07:00-17:00</span></li>
									<li>Friday <span>07:00-17:00</span></li>
									<li>Saturday <span>CLOSE</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer copyright-->
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p><a href="templatespint.net">Templates Point</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--footer-area end-->
  
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<!-- jquery-1.12.0 version -->
	<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- bootstra.min js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- meanmenu js -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- easing js -->
	<script src="assets/js/jquery.easing.min.js"></script>
	<!---venobox-js-->
	<script src="assets/js/venobox.min.js"></script>
	<!---slick-js-->
	<script src="assets/js/slick.min.js"></script>
	<!---waypoints-js-->
	<script src="assets/js/waypoints.js"></script>
	<!---counterup-js-->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!---isotop-js-->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery-ui js -->
	<script src="assets/js/jquery-ui.min.js"></script>
	<!-- jquery.countdown js -->
	<script src="assets/js/jquery.countdown.min.js"></script>
	<!-- plugins js -->
	<script src="assets/js/plugins.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>

</html>
