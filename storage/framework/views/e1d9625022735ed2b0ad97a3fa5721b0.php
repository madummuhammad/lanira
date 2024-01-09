<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta property="og:site_name" content="vCamp">
	<meta property="og:type" content="website">
	<meta name='og:image' content='images/assets/ogg.png'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#202020">
	<meta name="msapplication-navbutton-color" content="#202020">
	<meta name="apple-mobile-web-app-status-bar-style" content="#202020">
	<title>Lanira</title>
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo e(url('assets')); ?>/images/fav-icon/icon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets')); ?>/css/responsive.css" media="all">
</head>

<body>
	<div class="main-page-wrapper">
		<section>
			<div id="preloader">
				<div id="ctn-preloader" class="ctn-preloader">
					<div class="animation-preloader">
						<div class="icon">
							<!-- <img src="<?php echo e(url('assets')); ?>/images/logo/vCamp.svg" alt="" class="m-auto d-block">  -->
							<span></span>
						</div>
						<div class="txt-loading mt-4">
							<span data-text-preloader="C" class="letters-loading">
								C
							</span>
							<span data-text-preloader="A" class="letters-loading">
								A
							</span>
							<span data-text-preloader="M" class="letters-loading">
								M
							</span>
							<span data-text-preloader="P" class="letters-loading">
								P
							</span>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<header class="theme-main-menu sticky-menu theme-menu-one">
			<div class="inner-content">
				<div class="d-flex align-items-center justify-content-end">
					<!-- <div class="logo logo-xl"><a href="index.html">
						<img src="<?php echo e(url('assets')); ?>/images/logo/vCamp_09.svg" alt="">
					</a>
				</div> -->
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="d-block d-lg-none">
								<div class="logo">
									<a href="index.html">
										<img src="<?php echo e(url('assets')); ?>/images/logo/vCamp_01.png" alt="" width="127">
									</a>
								</div>
							</li>
							<li class="nav-item active dropdown mega-dropdown">
								<a class="nav-link" href="<?php echo e(url('/')); ?>" role="button" aria-expanded="false">Home</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="right-widget d-flex align-items-center">
					<div class="d-none d-sm-block">
						<a href="<?php echo e(url('login')); ?>" class="d-flex align-items-center login-btn">
							<img src="<?php echo e(url('assets')); ?>/images/icon/icon_01.svg" alt="">
							<span>login</span>
						</a>
					</div>
					<div class="cart-group-wrapper md-space-fix">
						<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							<img src="<?php echo e(url('assets')); ?>/images/icon/icon_71.svg" alt="" class="m-auto">
							<span class="item-count">02</span>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<ul class="style-none cart-product-list">
								<li class="d-flex align-items-center selected-item">
									<a href="#" class="item-img d-flex align-items-center justify-content-center">
										<img src="<?php echo e(url('assets')); ?>/images/shop/img_18.png" alt="">
									</a>
									<div class="item-info">
										<a href="#" class="name">Rolex Watch</a>
										<div class="price">$38.00 <span class="quantity">x 1</span></div>
									</div>
								</li>
								<li class="d-flex align-items-center selected-item">
									<a href="#" class="item-img d-flex align-items-center justify-content-center">
										<img src="<?php echo e(url('assets')); ?>/images/shop/img_19.png" alt="">
									</a>
									<div class="item-info">
										<a href="#" class="name">Vibrant Shoe.</a>
										<div class="price">$125.00 <span class="quantity">x 1</span></div>
									</div>
								</li>
							</ul>
							<div class="subtotal d-flex justify-content-between align-items-center">
								<div class="title">Subtotal</div>
								<div class="total-price">$163.00</div>
							</div>
							<ul class="style-none button-group">
								<li><a href="cart.html" class="view-cart">View Cart</a></li>
								<li><a href="checkout.html" class="checkout">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php echo $__env->yieldContent('content'); ?>
	<footer class="vcamp-footer-two pt-130 lg-pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-2 mb-40">
					<div class="logo"><a href="index.html"><img src="<?php echo e(url('assets')); ?>/images/logo/vCamp_01.png" alt="" width="127"></a></div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 mb-40">
					<h5 class="title">Links</h5>
					<ul class="footer-list style-none">
						<li><a href="index.html">Home</a></li>
						<li><a href="pricingV1.html">Pricing</a></li>
						<li><a href="about-usV1.html">About us</a></li>
						<li><a href="serviceV2.html">Service</a></li>
						<li><a href="serviceV3.html">Features</a></li>
						<li><a href="blogV4.html">Blog</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
					<h5 class="title">Legal</h5>
					<ul class="footer-list style-none">
						<li><a href="faqV1.html">Terms of use</a></li>
						<li><a href="faqV1.html">Terms & conditions</a></li>
						<li><a href="faqV1.html">Privacy policy</a></li>
						<li><a href="faqV1.html">Cookie policy</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 mb-40">
					<div class="newsletter">
						<h5 class="title">Newslettert</h5>
						<p>Join over <span>68,000</span> people getting our emails</p>
						<form action="#">
							<input type="email" placeholder="Enter your email">
							<button>Sign Up</button>
						</form>
						<div class="info">We only send interesting and relevant emails.</div>
					</div> <!-- /.newsletter -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="bottom-footer">
				<div class="row">
					<div class="col-lg-4 order-lg-1 mb-15">
						<ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
							<li><a href="faqV1.html">Privacy & Terms.</a></li>
							<li><a href="contactV1.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-4 order-lg-3 mb-15">
						<ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-4 order-lg-2 mb-15">
						<p class="copyright text-center">Copyright @2022 vcamp inc.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<button class="scroll-top">
		<i class="bi bi-arrow-up-short"></i>
	</button>
	<script src="<?php echo e(url('assets')); ?>/vendor/jquery.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/aos-next/dist/aos.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/slick/slick.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/jquery.counterup.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/jquery.waypoints.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/validator.js"></script>
	<script src="<?php echo e(url('assets')); ?>/js/theme.js"></script>
	<script src="<?php echo e(url('assets')); ?>/vendor/selectize.js/selectize.min.js"></script>

	<!-- Theme js -->
	<script src="<?php echo e(url('assets')); ?>/js/theme.js"></script>
</div>
</body>
</html><?php /**PATH C:\xampp8.1\htdocs\laniralaravel\resources\views/customer/main.blade.php ENDPATH**/ ?>