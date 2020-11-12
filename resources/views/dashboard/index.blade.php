@extends('layouts.app')
@section('content')
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="row">
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Total Invoice</h3>
									<hr>
									<p>{{ $showInvoice }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Lunas</h3>
									<hr>
									<p> {{$showLunas}} </p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>Customer</h3>
									<hr>
									<p>{{ $showCustomer }}</p>
								</div>
							</div>
						</div>
						<div class="container">
						<canvas id="customers"></canvas>
						</div>
						<script>
							let customers = document.getElementById('customers').getContext('2d');
							let massPopChart = new Chart(customers, {
								type: 'bar',
								data:{
									labels:['Januari', 'Februari', 'Maret', 'April', 'Mei'],
								datasets:[{
									label:'Total Customer',
									data:[
										10,
										20,
										30,
										40,
										50
									]
								}]
								}
							}
							);
						</script>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

