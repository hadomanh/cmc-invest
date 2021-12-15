@extends('layouts.app')

@section('content')
	<div id="investPage">
		<section class="p-0">
			<img src="{{ asset('img/banner-invest.jpg') }}" class="w-100">
		</section>
		<section class="overview d-none">
			<div class="container text-center">
				<h5 class="text text-uppercase">ANTEX PUBLIC SALE IS COMING!</h5>
				<h2 class="text sectionHeading text-uppercase">Public sale round event Count Down</h2>
				<div id="countdown"></div>
				<div class="text fs-4 fst-italic">We will hold double initial Dex offering and a initial<br>Exchange offering on 20th November 2021 on the following platforms:</div>
				<div class="row justify-content-center text-end">
					<div class="col-auto">
						<div><span class="fw-bold">DODO</span> – only for Whitelist winner - Allocation : $100,000</div>
						<div><span class="fw-bold">CMC</span> Launchpad - Allocation : $150,000</div>
						<div><span class="fw-bold">CMC Launch</span> - FCFS, Allocation : $50,000</div>
					</div>
				</div>
				<div class="notice fw-bold d-flex align-items-center">
					<div class="col-auto"><img src="{{ asset('img/icon-bell.png') }}"></div>
					<div class="col">More detailed information will be announced at our official social channels. Stay tuned!.</div>
				</div>
				<div class="fs-4 fst-italic">Whitelist Now Open: <i class="fab fa-twitter-square text-blue"></i></div>
			</div>
		</section>
		<section class="startSale">
			<div class="container">
				<div class="row">
					<div class="col-md-6 info">
						<h5 class="text textPink text-uppercase text-center">CMCCHAIN PUBLIC SALE IS COMING!</h5>
						<h3 class="text text-center text-uppercase">Public sale round event Count Down</h3>
						<h5 class="text text-center text-blue">We will hold double initial Dex offering and a initial Exchange offering on 20th November 2021 on the following platforms:</h5>
						<table class="table">
							<tbody>
								<tr>
									<th>Seed Round</th>
									<td>3%</td>
									<td>1.500.000.000</td>
									<td>rate</td>
									<td>0,0002</td>
									<td>=</td>
									<td>300.000$</td>
								</tr>
								<tr>
									<th>Private sale</th>
									<td>7%</td>
									<td>3.500.000.000</td>
									<td>rate</td>
									<td>0.00026</td>
									<td>=</td>
									<td>910.000$</td>
								</tr>
								<tr>
									<th>Pre-sale</th>
									<td>11%</td>
									<td>5.500.000.000</td>
									<td>rate</td>
									<td>0.00036</td>
									<td>=</td>
									<td>1.980.000$</td>
								</tr>
								<tr>
									<th>Public sale</th>
									<td>1%</td>
									<td>500.000.000</td>
									<td>rate</td>
									<td>0.0005</td>
									<td>=</td>
									<td>250.000 $</td>
								</tr>

							</tbody>
						</table>
						<div class="notice bg-white fw-medium d-flex align-items-center">
							<div class="col-auto"><img src="{{ asset('img/icon-bell.png') }}"></div>
							<div class="col text-blue">More detailed information will be announced at our official social channels. Stay tuned!.</div>
						</div>
						<h5 class="text-blue text">Whitelist Now Open: <i class="fab fa-twitter-square text-blue"></i></h5>
						<div class="row align-items-center">
							<div class="col-md-6 d-grid">
								<a href="#" class="btn btnOutlineBlue sm">White Paper</a>
							</div>
							<div class="col-md-6 d-grid">
								<a href="#" class="btn btnGrad sm">Connect Wallet</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="circle">
							<div class="inner">
								<h5>Starting time</h5>
								<div id="countdown-1"></div>
								<div class="progress">
									<div class="progress-bar bgGradPurple" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
								<div class="d-flex justify-content-between">
									<div>2125004.30 CMCchain</div>
									<div>3,500,000 CMCchain</div>
								</div>
								<div class="rate">Tokens Exchange rate<br>1CMCchain = 0.9$</div>
								<a href="#" class="btn btnOutlineRed">Buy Tokens</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bgGradBlue useCase">
			<div class="container">
				<h2 class="sectionHeading underline">Token Use Cases</h2>
				<div class="row">
					<div class="col-md-6 item">
						<div class="inner">
							<h6>Privilege Partner</h6>
							<div>Higher level gets higher privilege benefits. The VIP level in USD wallet is determined by the holding amount of $CMCchain token</div>
						</div>
					</div>
					<div class="col-md-6 item">
						<div class="inner">
							<h6>Discount service fees on CMCLock, CMCLaunch</h6>
							<div>Developer/Project Owner need to pay the services fees in $CMCchain when they use services on CMC Lock, CMC Launch platforms -> Holding $CMCchain to get discount service fees</div>
						</div>
					</div>
					<div class="col-md-6 item">
						<div class="inner">
							<h6>Crypto Earn</h6>
							<div>$CMCchain is utilized like a reward token for Saving, Farming, Staking applicants in USD wallet</div>
						</div>
					</div>				
					<div class="col-md-6 item">
						<div class="inner">
							<h6>CMCchain token will be used to pay fees for Developer / Project owner support services on the CMCchain - Blockchain wallet</h6>
						</div>
					</div>
					<div class="col-md-6 item">
						<div class="inner">
							<h6>Privilege participation in AntLaunch Launchpad</h6>
							<div>$CMCchain token will help the investor to participate in IDOV and being the first list to purchase token on ILO</div>
						</div>
					</div>
					<div class="col-md-6 item">
						<div class="inner">
							<h6>DEX</h6>
							<div>Use $CMCchain for paying transaction services</div>
							<div>Use $CMCchain for farming</div>
							<div>Use $CMCchain for pools</div>
							<div>Use $CMCchain to distribute reward</div>
						</div>
					</div>
					<div class="col-md-6 item">
						<div class="inner">
							<h6>Governance</h6>
							<div>$CMCchain holders can participate in proposing, voting, managing projects in the CMCEx ecosystem.</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tokenomics">
			<div class="container">
				<h2 class="sectionHeading underline">CMCCHAIN Tokenomics</h2>
				<div class="mw-700 text-center">
					<div>Our mission is to build a trusted, friendly and stable blockchain financial ecosystem.</div>
					<div>The following token utilization is to demonstrate how we are preparing for a long term:</div>
				</div>		
				<div class="row keyMetrics">
					<div class="col-md-6">
						<h4 class="text-uppercase">Key Metrics</h4>
						<ul class="list-unstyled">
							<li>
								<span class="fw-medium label">Token symbol:</span>
								<span>CMCCHAIN</span>
							</li>
							<li>
								<span class="fw-medium label">Total Supply:</span>
								<span>100,000,000,000</span>
							</li>
							<li>
								<span class="fw-medium label">Blockchain:</span>
								<span>CMCchain Smart Chain</span>
							</li>
							<li>
								<span class="fw-medium label">Auditor:</span>
								<span>CertiK</span>
							</li>
							<li>
								<span class="fw-medium label">Contract:</span>
								<span class="textPink">0xCA1aCAB14e85F30996aC83c64fF93Ded7586977C</span>
							</li>
							<li>
								<span class="fw-medium label">Token type:</span>
								<span>Utility, Governance</span>
							</li>
						</ul>
					</div>
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/icon-coin-1.jpg') }}">
					</div>
				</div>
				<div class="row chart align-items-center">
					<div class="col-md-6">
						<img src="{{ asset('img/icon-tokenomic.png') }}">
					</div>
					<div class="col-md-6">
						<div class="total">
							<h4 class="text-uppercase">Total amount of 100,000,000,000</h4>
							<div class="row">
								<div class="col-md-6">
									<ul class="list-unstyled">
										<li class="c1">Developer: 5%</li>
										<li class="c2">Technical: 15%</li>
										<li class="c3">Airdrop-bounty: 2%</li>
										<li class="c4">Marketing: 16.8%</li>
										<li class="c5">Ecosystem: 16%</li>
										<li class="c6">Advisor: 2%</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list-unstyled">
										<li class="c7">Reserve Funding: 10%</li>
										<li class="c8">Seed Round: 5%</li>
										<li class="c9">Private Sale: 11%</li>
										<li class="c10">Pre-Sale: 16%</li>
										<li class="c11">Public Sale: 1.2%</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bgLightBlue">
			<div class="container">
				<h2 class="sectionHeading underline text-uppercase">Fundraising</h2>
				<div class="saleRound">
					<h4 class="text-uppercase">Sales Rounds</h4>
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th>Date</th>
								<th>Round</th>
								<th>Token Price ($)</th>
								<th>Token Allocation</th>
								<th>Token Amount (CMCCHAIN)</th>
								<th>Raised ($)</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Aug 2021</td>
								<td>Seed round</td>
								<td>0.0001</td>
								<td>5%</td>
								<td>5,000,000,000</td>
								<td>500,000</td>
								<td>Closed</td>
							</tr>
							<tr>
								<td>Aug 2021</td>
								<td>Private Sale</td>
								<td>0.00013</td>
								<td>11%</td>
								<td>11,000,000,000</td>
								<td>1,430,000</td>
								<td>Closed</td>
							</tr>
							<tr>
								<td>Oct 2021</td>
								<td>Pre - Sale</td>
								<td>0.00018</td>
								<td>16%</td>
								<td>16,000,000,000</td>
								<td>2,880,000</td>
								<td>Closed</td>
							</tr>
							<tr>
								<td>Nov 2021</td>
								<td>Public Sale</td>
								<td>0.00025</td>
								<td>1.2%</td>
								<td>1,200,000,000</td>
								<td>300,000</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="saleRound">
					<h4 class="text-uppercase">Sales Rounds</h4>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Round</th>
								<th>Vesting</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Seed Round</td>
								<td>12 months vesting, 10% release at TGE (Token Generation Event), then unlock with a given rate in each month</td>
							</tr>
							<tr>
								<td>Private Sale</td>
								<td>10 months vesting, 15% release at TGE (Token Generation Event), then unlock with a given rate in each month</td>
							</tr>
							<tr>
								<td>Pre - Sale</td>
								<td>9 months vesting, 15% release at TGE (Token Generation Event), then unlock with a given rate in each month</td>
							</tr>
							<tr>
								<td>Public Sale</td>
								<td>100% release at TGE (Token Generation Event)</td>
							</tr>
							<tr>
								<td>Develop</td>
								<td>3 years vesting, lock in first 2 years, unlock in 3rd year - equivalently in 12 months</td>
							</tr>
							<tr>
								<td>Technical</td>
								<td>18 months vesting, lock in first 6 months, then unlock equivalently in 12 months</td>
							</tr>
							<tr>
								<td>Advisor</td>
								<td>2 years vesting, lock in first 1 years, unlock in 2nd year - equivalently in 12 months</td>
							</tr>
							<tr>
								<td>Ecosystem</td>
								<td>3 years vesting, equivalently in every month</td>
							</tr>
							<tr>
								<td>Marketing</td>
								<td>2 years vesting, lock in first 1 years, then unlock equivalently in 12 months</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<section class="bgDark investorsMap">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-7 text-center">
						<img src="{{ asset('img/icon-coin-investor.png') }}" width="500">
					</div>
					<div class="col-md-5">
						<h4>CMC Coin Investors Map</h4>
						<p class="fs-5 my-4 text-blue">We accept transactions around the world with supporting any type of currencies*</p>
						<ul class="list-unstyled">
							<li class="c1">36% ArtifiHulk Soft Group</li>
							<li class="c2">29% Robotic Crypto Mechanics Ltd</li>
							<li class="c3">17% Singular Reserve Token Inc</li>
							<li class="c4">12% FrontRange Coin Company</li>
							<li class="c5">6% OneSource Coin Development Group</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
