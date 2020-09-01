@extends('home-master')



@section('content')

<div class="banner">
	<div class="home-banner-img">
		<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
	</div>
</div>


<div class="container">
	<div class="row inner-position">
		<div class="col-md-3 mb-4">
			<div class="home-card text-center">
				<div class="home-card-img mx-auto">
					<img src="{{url('public/images/2.png')}}" class="img-fluid" alt="">
				</div>
				<div class="home-card-detail">
					<h4>Dr.Yuba Raj Khatiwada</h4>
					<span>Finance Minister</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="home-card text-center">
				<div class="home-card-img mx-auto">
					<img src="{{url('public/images/2.png')}}" class="img-fluid" alt="">
				</div>
				<div class="home-card-detail">
					<h4>Gopinath Mainali</h4>
					<span>Financial Computroller General</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="home-card text-center">
				<div class="home-card-img mx-auto">
					<img src="{{url('public/images/2.png')}}" class="img-fluid" alt="">
				</div>
				<div class="home-card-detail">
					<h4>Bhupal Baral</h4>
					<span>Spokesperson</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="home-card text-center">
				<div class="home-card-img mx-auto">
					<img src="{{url('public/images/2.png')}}" class="img-fluid" alt="">
				</div>
				<div class="home-card-detail">
					<h4>Niraj K.C</h4>
					<span>Information Officer</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="topic inner-background">
		<p>
			Recent Updates
			<small>|</small>
			<span>Revenue Distribution (Excise Duty) upto 2077 Asar 20</span>
		</p>
	</div>
</div>

<div class="container ma-t">
	<div class="row">
		<div class="col-md-8 ">
			<div class="fcgo-about">
				<div class="title">
					<h2>Welcome to Financial Comptroller General Office</h2>
				</div>
				<div class="content">
					<p>Financial Comptroller General Office (FCGO) is the main government agency responsible for the treasury operation of Government of Nepal. This office is under the Ministry of Finance and is headed by Financial Comptroller General who is a special class officer of Government of Nepal .FCGO is responsible for overseeing all government expenditure against budget, tracking revenue collection and other receipts and preparation of consolidated financial statements of the government. Its responsibility also includes ensuring maintenance of basic accounts keeping of the government through the accounting personnel and staff recruited and administered by it.</p>
				</div>
			</div>

			<div class="fcgo-publish ma-t">
				<div class="title">
					<h2>Publications</h2>
				</div>
				<div class="publish-list">
					<div class="row publish-card">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<div class="date">
								<span>000-00-00</span>
							</div>
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8">
							<div class="content">
								<p>Reveneue Distribution (Excise Duty) upto 2077 Asar 20</p>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2">
							<div class="download">
								<span>DOWNLOAD</span>
							</div>
						</div>
					</div>
					<div class="row publish-card">
						<div class="col-sm-2 col-md-2">
							<div class="date">
								<span>000-00-00</span>
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<div class="content">
								<p>Second PEFA Assement Report, 2015</p>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="download">
								<span>DOWNLOAD</span>
							</div>
						</div>
					</div>
					<div class="row publish-card">
						<div class="col-sm-2 col-md-2">
							<div class="date">
								<span>000-00-00</span>
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<div class="content">
								<p>Royalti Last Year</p>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="download">
								<span>DOWNLOAD</span>
							</div>
						</div>
					</div>
					<div class="row publish-card">
						<div class="col-sm-2 col-md-2">
							<div class="date">
								<span>000-00-00</span>
							</div>
						</div>
						<div class="col-sm-8 col-md-8">
							<div class="content">
								<p>Daily Budgetary Comparative Analysis</p>
							</div>
						</div>
						<div class="col-sm-2 col-md-2">
							<div class="download">
								<span>DOWNLOAD</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="tabs" class="ma-t">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-notice-tab" data-toggle="tab" href="#nav-notice" role="tab" aria-controls="nav-notice" aria-selected="true">Notices</a>
						<a class="nav-item nav-link" id="nav-circular-tab" data-toggle="tab" href="#nav-circular" role="tab" aria-controls="nav-circular" aria-selected="false">Circulars</a>
						<a class="nav-item nav-link" id="nav-publish-tab" data-toggle="tab" href="#nav-publish" role="tab" aria-controls="nav-publish" aria-selected="false">Publications</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0 mt-3" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-notice" role="tabpanel" aria-labelledby="nav-notice-tab">
						<div class="content">
							<div class="row tabs-row">
								<div class="col-8 col-md-9">
									<p><span>1. Revenue Distribution (VAT) upto 2077 Asar 20</span></p>
								</div>
								<div class="col-4 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-8 col-md-9">
									<p><span>2. Revenuw Distribution (Excise Duty) upto Asar 20</span></p>
								</div>
								<div class="col-4 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-8 col-md-9">
									<p><span>3. TSA-DECS User Manual</span></p>
								</div>
								<div class="col-4 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-8 col-md-9">
									<p><span>4. Public Assets Management System</span></p>
								</div>
								<div class="col-4 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-8 col-md-9">
									<p><span>5. Lakha Nirdeshika 2073</span></p>
								</div>
								<div class="col-4 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-circular" role="tabpanel" aria-labelledby="nav-circular-tab">
						<div class="content">
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>1. Revenue Distribution (VAT) upto 2077 Asar 20</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>2. Revenuw Distribution (Excise Duty) upto Asar 20</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>3. TSA-DECS User Manual</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>4. Public Assets Management System</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-publish" role="tabpanel" aria-labelledby="nav-publish-tab">
						<div class="content">
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>1. Revenue Distribution (VAT) upto 2077 Asar 20</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>2. Revenuw Distribution (Excise Duty) upto Asar 20</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
							<div class="row tabs-row">
								<div class="col-sm-9 col-md-9">
									<p><span>3. TSA-DECS User Manual</span></p>
								</div>
								<div class="col-sm-3 col-md-3">
									<p><small>View Detail</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 home-sidebar">
			<div class="title">
				<h2>Report</h2>
			</div>	
			<ul class="home-sidebar-list">
				<li><a href="#">1. Revenue Distribution (VAT) upto 2077 Asar 20</a></li>
				<li><a href="#">2. Revenuw Distribution (Excise Duty) upto Asar 20</a></li>
				<li><a href="#">3. TSA-DECS User Manual</a></li>
				<li><a href="#">4. Public Assets Management System</a></li>
				<li><a href="#">5. Lakha Nirdeshika 2073</a></li>
			</ul>
		</div>
	</div>
</div>


@endsection