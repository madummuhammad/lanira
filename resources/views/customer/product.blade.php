@extends('customer.main')
@section('content')
@include('customer.slider')
<div class="product-section-four mt-150 lg-mt-90">
	<div class="container">
		<div class="products-wrapper mt-60 lg-mt-40">
			<div class="row gx-xl-5">
				@foreach($product as $product)
				<div class="col-xl-4 col-md-6" data-aos="fade-up">
					<div class="product-block-two mb-60 xs-mb-40">
						<div class="img-holder">
							<a href="{{url('product')}}/{{$product->id}}" class="d-flex align-items-center justify-content-center">
								<img src="{{url('image/product')}}/{{$product->photo}}" alt="" class="product-img tran4s">
							</a>
							<div class="tag-one">SALE</div>
						</div> <!-- /.img-holder -->
						<div class="product-meta">
							<div class="d-lg-flex align-items-center justify-content-between">
								<a href="{{url('product')}}/{{$product->id}}" class="product-title">{{$product->name}}</a>
							<!-- 	<ul class="style-none d-flex rating">
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star"></i></li>
								</ul> -->
							</div>
							<!-- <div class="price">$17.99</div> -->
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="page-pagination-one pt-45 lg-pt-30">
				<?php echo $links; ?>
				<!-- <ul class="d-flex align-items-center justify-content-center style-none">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li>...</li>
					<li><a href="#">Last</a></li>
					<li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
@endsection