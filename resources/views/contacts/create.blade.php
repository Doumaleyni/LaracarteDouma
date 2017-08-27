@extends('layouts.default', ['title' => 'Contact'])

@section('content')

	<div class="container">
		<div class="row">	
			<div class="Col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> 
				<h1>Get In Touch</h1>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:leynidouma@gmail.com"> ask for help</a></p>
				<form action="#" method="POST">

					<div class="form-group">
						<label for="name" class="controle-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="email" class="controle-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="message" class="controle-label">Message</label>
						<textarea  type="text" name="message" rows="10" class="form-control" required="required"> </textarea>
					</div>

					<div class="form-group">
					<button class="btn btn-primary btn-block"> Submit Enquiry &raquo;</button>	
					</div>
				</form>
			</div>
		</div>
	</div>
@stop