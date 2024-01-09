			@extends('customer.main')
			@section('content')
			<div class="user-data-page clearfix d-md-flex">
				<div class="illustration-wrapper d-none d-md-flex align-items-center justify-content-between flex-column" style="background: #F9F5F0;;">
					<div class="row">
						<div class="col-xxl-8 col-xl-11 m-auto">
					
						</div>
					</div>
					<div class="illustration-holder">
		
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<form action="{{url('login')}}" class="user-data-form mt-50 lg-mt-50" method="POST">

						<h2 class="font-recoleta">Silahkan Login! </h2>
						<p class="header-info pt-20 pb-20 lg-pb-10">Belum punya akun? <a href="sign-up.html">Registrasi</a></p>
						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-20">
									<label>Email</label>
									<input type="email" placeholder="rshdkabir@gmail.com">
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-25">
									<label>Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id">
									<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_67.svg" alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<button class="theme-btn-one w-100 mt-30 mb-50">Login</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->

			@endsection