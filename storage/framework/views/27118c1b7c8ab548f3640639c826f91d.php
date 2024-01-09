<div class="hero-banner-six">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<div class="carousel-item <?php if($key==0): ?> active <?php endif; ?>">
				<img src="<?php echo e(url('image/sliders/')); ?>/<?php echo e($slider->gambar); ?>" class="d-block w-100" alt="<?php echo e(url('assets/')); ?>/<?php echo e($slider->gambar); ?>">
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div><?php /**PATH C:\xampp8.1\htdocs\laniralaravel\resources\views/customer/slider.blade.php ENDPATH**/ ?>