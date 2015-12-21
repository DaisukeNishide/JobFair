@extends('app')

@section('header')
	@parent
  <div class="jumbotron">
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<h2>NST Pictures Philippines Inc.</h2>
      		<p>PHP Developers want to use various latest technologies.</p>
      	</div>
      </div>
    </div>
  </div>
@stop

@section('content')
	<div class="row">
		<div class="col-md-4">
			<div>
				<div>
					<h4>Job Category</h4>
					<ul>
						<li><a href="#">Developer</a></li>
						<li><a href="#">Designer</a></li>
						<li><a href="#">Marketer</a></li>
						<li><a href="#">Others</a></li>
					</ul>
				</div>
				<div>
					<h4>Job Area</h4>
					<ul>
						<li><a href="#">Manila</a></li>
						<li><a href="#">Cebu</a></li>
						<li><a href="#">Davao</a></li>
						<li><a href="#">Dumaguete</a></li>
						<li><a href="#">Bohol</a></li>
					</ul>
				</div>
				<div>
					<h4>Employment Style</h4>
					<ul>
						<li><a href="#">OJT</a></li>
						<li><a href="#">Internship</a></li>
						<li><a href="#">Fresh Graduate</a></li>
						<li><a href="#">Job Change</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div>
				<article>
					<div>
						<img class="img-thumbnail" src="http://placehold.it/60x60">
					</div>
					<div>
						<p>NST Pictures Philippines</p>
						<h3><a href="#">PHP Developers want to use various latest technologies.</a></h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut eleifend nisi. Fusce mollis neque sed odio interdum, vitae consequat lorem vestibulum.
						</p>
						<div>
							<div>
								<img src="http://placehold.it/498x200">
							</div>
						</div>
					</div>
				</article>

			</div>
		</div>
	</div>
@stop

@section('footer')
	@parent
@stop