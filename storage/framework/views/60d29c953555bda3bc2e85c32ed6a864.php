
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('customer.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="product-section-one mt-180 lg-mt-100">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-6 col-sm-8">
				<div class="title-style-six text-center text-sm-start xs-pb-20">
					<h2 class="title">Ready Stok</h2>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
				<ul class="slider-arrows product-slider-arrow-one d-flex style-none">
					<li class="prev_p1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
					<li class="next_p1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="box-layout mt-90 lg-mt-40">
		<div class="product_slider_one product_slider_space" id="product_slider_one">
			<?php $__currentLoopData = $ready_stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="item">
				<div class="product-block-one">
					<a href="<?php echo e(url('product')); ?>/<?php echo e($product->id); ?>" class="d-flex align-items-center justify-content-center h-100"><img src="<?php echo e(url('image/product')); ?>/<?php echo e($product->photo); ?>" alt="" class="product-img tran4s">
					</a>
					<a href="<?php echo e(url('product')); ?>/<?php echo e($product->id); ?>" class="category-tag"><?php echo e($product->name); ?></a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>

<div class="product-section-one mt-180 lg-mt-100">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-6 col-sm-8">
				<div class="title-style-six text-center text-sm-start xs-pb-20">
					<h2 class="title">Pre Order</h2>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
				<ul class="slider-arrows product-slider-arrow-one d-flex style-none">
					<li class="prev_pc1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
					<li class="next_pc1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="box-layout mt-90 lg-mt-40">
		<div class="product_slider_one product_slider_space" id="product_slider_custom_1">
			<?php $__currentLoopData = $po; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="item">
				<div class="product-block-one">
					<a href="<?php echo e(url('product')); ?>/<?php echo e($product->id); ?>" class="d-flex align-items-center justify-content-center h-100"><img src="<?php echo e(url('image/product')); ?>/<?php echo e($product->photo); ?>" alt="" class="product-img tran4s"></a>
					<a href="<?php echo e(url('product')); ?>/<?php echo e($product->id); ?>" class="category-tag"><?php echo e($product->name); ?></a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>
<div class="shop-new-collection-section mt-180 lg-mt-100">
	<div class="box-layout">
		<div class="row gx-xl-5">
			<div class="col-md-6" data-aos="fade-right">
				<div class="banner-text-meta" style="background:#FFFBE6;">
					<!-- <img src="<?php echo e(url('assets')); ?>/images/shop/img_07.png" alt="" class="promo-img"> -->
					<!-- <div class="fancy-text">35% Off</div> -->
					<h3>Ready Stok</h3>
					<a href="<?php echo e(url('brand/ready_stock')); ?>" class="theme-btn-eight ripple-btn">Lihat Semua</a>
				</div>
			</div>
			<div class="col-md-6" data-aos="fade-left">
				<div class="banner-text-meta sm-mt-20" style="background:#EFFAFF;">
					<!-- <img src="<?php echo e(url('assets')); ?>/images/shop/img_08.png" alt="" class="promo-img"> -->
					<!-- <div class="fancy-text">Vacations Offer</div> -->
					<h3>Pre Order</h3>
					<a href="<?php echo e(url('brand/po')); ?>" class="theme-btn-eight ripple-btn">Lihat Semua</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\laniralaravel\resources\views/customer/home.blade.php ENDPATH**/ ?>