@extends('layouts.app')
@section('content')
	<section class="login_box_area p_120 ">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 ">
                    <div class="row my-3">
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>{{ __('dashboard.invoice_total') }}</h3> 
									<hr>
									<p>{{ $showInvoice }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>{{ __('dashboard.transaction') }}</h3>
									<hr>
									<p> {{ $showTransaksi }} </p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-center">
								<div class="card-body">
									<h3>{{ __('dashboard.customer') }}</h3>
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
									labels:["{{ __('dashboard.label_customer') }}", "{{ __('dashboard.label_invoice') }}", "{{ __('dashboard.label_transaksi') }}"],
								datasets:[{
									label:'Diagram Peningkatan',
									data:[{!! json_encode($showCustomer) !!}, {!! json_encode($showInvoice) !!}, {!! json_encode($showTransaksi) !!}
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

