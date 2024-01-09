			
			<?php $__env->startSection('content'); ?>
			<div class="product-details-one mt-180">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 order-lg-2">
							<div class="tab-content product-img-tab-content h-100">
								<div class="tab-pane fade show active h-100" id="img1" role="tabpanel" >
									<a class="fancybox w-100 d-flex" data-fancybox="" href="<?php echo e(url('image/product')); ?>/<?php echo e($product->photo); ?>" tabindex="-1">
										<img src="<?php echo e(url('image/product')); ?>/<?php echo e($product->photo); ?>" alt="" class="m-auto">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-1 order-lg-1">
							<ul class="nav nav-tabs flex-lg-column product-img-tab" id="myTab" role="tablist">
								<li class="nav-item">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#img1" type="button" role="tab"  aria-selected="true"><img src="<?php echo e(url('image/product')); ?>/<?php echo e($product->photo); ?>" alt="" class="m-auto"></button>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 order-lg-3">
							<div class="product-info ps-xxl-5 md-mt-50">
								<div class="stock-tag"><?php echo e($product->type_product); ?></div>
								<h3 class="product-name"><?php echo e($product->name); ?></h3>
						<!-- 		<ul class="style-none d-flex align-items-center rating">
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star"></i></li>
									<li><a href="#">(2 Customer Reviews)</a></li>
								</ul> -->
								<!-- <div class="price">$49.00 - $53.00</div> -->
								<!-- <p class="availability">38 Piece Available  </p> -->
								<p class="description-text">
									<?php echo $product->deskripsi ?>
								</p>
							<!-- 	<ul class="product-feature style-none">
									<li>Free delivery available</li>
									<li>Use promo-code and save up to 25%</li>
								</ul> -->
								<div class="customize-order">
									<div class="row">
										<div class="col-xxl-11">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="quantity mt-25">
														<h6>Quantity</h6>
														<div class="button-group">
															<ul class="style-none d-flex align-items-center">
																<li><button class="value-decrease">-</button></li>
																<li><input type="number" min="1" max="22" value="1" disabled="" class="product-value val"></li>
																<li><button class="value-increase">+ </button></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="color-selection mt-25">
														<h6>Colors</h6>
														<ul class="style-none d-flex align-items-center color-custome-input">
															<li>
																<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
																<label style="background:#9CD2FF;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color02" class="color-check-btn">
																<label style="background:#FF9153;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color03" class="color-check-btn">
																<label style="background:#5FF2BE;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color04" class="color-check-btn">
																<label style="background:#9A82FF;"></label>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-xl-5 col-md-6 col-sm-4">
													<div class="size-selection mt-25">
														<h6>Size</h6>
														<ul class="style-none d-flex align-items-center size-custome-input">
															<li>
																<input type="radio" name="size" value="small" class="size-check-btn">
																<label>S</label>
															</li>
															<li>
																<input type="radio" name="size" value="medium" class="size-check-btn">
																<label>M</label>
															</li>
															<li>
																<input type="radio" name="size" value="large" class="size-check-btn">
																<label>L</label>
															</li>
															<li>
																<input type="radio" name="size" value="extra large" class="size-check-btn">
																<label>XL</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- /.customize-order -->
								<div class="button-group mt-30 d-sm-flex align-items-center">
									<a href="#" class="theme-btn-seven mt-15 me-sm-4 d-block">Add To Cart</a>
									<a href="#" class="theme-btn-nine mt-15 d-block">Add To wishlist</a>
								</div>
							</div> <!-- /.product-info -->
						</div>
					</div>
				</div>
			</div>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\laniralaravel\resources\views/customer/productdetail.blade.php ENDPATH**/ ?>