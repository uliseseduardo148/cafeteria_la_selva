@extends('layouts.clientes')

@section('content')

<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="images/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvnido a Cafe la selva <br> </strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.html">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="images/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
					<h4>Little Story</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
						feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
						luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a
						pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem
						pulvinar.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/about-img.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead ">
					" If you're not the one cooking, stay out of the way and compliment the chef. "
				</p>
				<span class="lead">Michael Strahan</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Algo de lo que tenemos</h2>
					<p>Tenemos disponible lo siguiente</p>
				</div>
			</div>
		</div>

		<div class="row inner-menu-box">
			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Productos</a>
				</div>
			</div>

			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">

							@foreach($products as $pro)
							<div class="col-lg-4 col-md-6 special-grid dinner">
								<div class="gallery-single fix">
									<img src="/images/{{ $pro->image_path }}" class="img-fluid" alt="{{ $pro->image_path }}">
									<div class="why-text">
										<h4>{{ $pro->name }}</h4>
										<p>{{ $pro->description }}</p>
										<h5>{{ $pro->price }}</h5>
									</div>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nuestros productos</h2>
						<p>Ofrecemos los siguientes cafés</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					@foreach($products as $pro)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="/images/{{ $pro->image_path }}">
							<img class="img-fluid" src="/images/{{ $pro->image_path }}" alt="{{ $pro->image_path }}">
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong>
								</h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
									tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
									semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
									nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong>
								</h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
									tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
									semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
									nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong>
								</h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
									tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
									semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
									nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

	<!-- Modal -->
	<div class="modal fade" id="cafeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Bienvenido a café la selva</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Nuestra calidad nos distingue
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	@endsection