@extends('layouts.app')

@section('content')
	<div id="buyTokenPage">
		<section class="banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-5">
						<div class="card">
							<h4 class="card-header fw-mediun">Sale</h4>
							<div class="card-body">
								<img src="{{ asset('img/icon-coin.png') }}" class="icon">
								<div class="mb-4">
									<label class="form-label">Remaining amount of tokens: ~0</label>
									<input type="text" class="form-control input-cmc">
								</div>
								<div class="mb-4">
									<label class="form-label">Total BNB assets: ~0</label>
									<input type="text" class="form-control input-ftx">
								</div>
								<div class="d-grid">
									<a href="#" class="btn btnGrad">BUY NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>		
@endsection
