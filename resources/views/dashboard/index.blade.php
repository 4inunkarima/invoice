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
									<p> {{ $showLunas }} </p>
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
						<div class="container col-md-10">
						<canvas id="customers"></canvas>
						</div>
						<script>
							let customers = document.getElementById('customers').getContext('2d');
							Chart.defaults.global.defaultFontFamily = 'Geometr706 BlkCn BT';
							Chart.defaults.global.defaultFontSize = 15;
							Chart.defaults.global.defaultFontColor = 'black';
							let massPopChart = new Chart(customers, {
								type: 'doughnut',
								data:{
									labels:['Customer', 'Invoice', 'Lunas'],
								datasets:[{
									label:'Diagram Peningkatan',
									data:[{!! json_encode($showCustomer) !!}, {!! json_encode($showInvoice) !!}, {!! json_encode($showLunas) !!}
									],
									backgroundColor:[
										'rgba(255, 99, 132, 0.6)',
										'rgba(54, 162, 235, 0.6)',
										'rgba(255, 206, 86, 0.6)',
									],
									borderWidth:1,
									borderColor:'grey',
									hoverBorderWidth:3,
									hoverBorderColor:'#000'
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

