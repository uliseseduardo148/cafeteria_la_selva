@extends('layouts.clientes')

@section('content')

<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Contact</h1>
			</div>
		</div>
	</div>
</div>
<!-- End All Pages -->

<!-- Start Contact -->
<div class="contact-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Contacto</h2>
					<p>Envíanos tu mensaje, respondemos a la brevedad</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			{!! Form::open(['action' => ['EmailController@contact'],'method' => 'POST']) !!}

					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Ingrese su nombre">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Correo" id="email" class="form-control" name="email" required data-error="Ingrese su correo">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="4" data-error="Escriba su mensaje" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Enviar mensaje</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!-- End Contact -->

@endsection