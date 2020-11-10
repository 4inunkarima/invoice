@extends('layouts.app')
@section('content')
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
                    <div class="row">
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Total Invoice</h3>
									<hr>
                                    <p>{{ $showCounts }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Lunas</h3>
									<hr>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Customer</h3>
									<hr>
								</div>
							</div>
						</div>
                        <!-- <div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Proses</h3>
									<hr>
                                    <p>0</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

