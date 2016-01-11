@extends('app')
@section('header')
	@parent
@stop

@section('content')
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	      		<h2>CoverPhoto</h2>
	      		<p><a href="">Change coverphoto</a></p>
	      	</div>
		</div>
	</div>
</div>

	<div class="container">
		<div class="row">
			<div class="col-md-2">
						<img class="img-thumbnail" src="http://placehold.it/120x120">
	      	</div>
	      	<div class="col-md-10">
	      		<h2>Yosei Yamagishi</h2>
	      		<p>"I wanna be Iron man"</p>
	      		<div class="row">
	      			<div class="col-md-2">
	      				<p># Osaka</p>
	      			</div>
	      			<div class="col-md-2">
	      				<button type="button" class="btn btn-default">
	      						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
	      				</button>
	      			</div>
	      		</div>
	      		
	      	</div>
		</div>
	</div>
<hr>
<article>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- CompleteRate -->
				<div class="well">
					<div class="row">
						<div class="col-md-4">
							CompleteRate:
						</div>
						<div class="col-md-8">
							<div class="progress">
		        				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span>60%</div>
		     				</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<button type="button" class="btn btn-default">	
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Add professional career
						</button>
						<button type="button" class="btn btn-default">	
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Input introduce
						</button>
					</div>
				</div>

				<!-- Introduce -->
				<div class="">
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<h2>Introduce</h2>
							</div>
							<div class="">
								<button class="btn btn-default">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit
								</button>
								<select class="form-control">
									<option>Share</option>
									<option>選択肢２</option>
									<option>選択肢３</option>
								</select>
							</div>
							<div class="">
								<p>Hello everyone! My name is Yosei Yamagishi. I'm a graduate student!</p>
								<p>....</p>
								<p>...</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Education -->
				<div class="">
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<h2>Education</h2>
							</div>
							<div class="">
								<button class="btn btn-default">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
								</button>
								<select class="form-control">
									<option>Share</option>
									<option>選択肢２</option>
									<option>選択肢３</option>
								</select>
							</div>
							<div class="">
								<p>Osaka Prefecture Univercity</p>
								<p>Yao High School</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Carrier -->
				<div class="">
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<h2>Carrier</h2>
							</div>
							<div class="">
								<button class="btn btn-default">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
								</button>
								<select class="form-control">
									<option>Share</option>
									<option>選択肢２</option>
									<option>選択肢３</option>
								</select>
							</div>
							<div class="">
								<p>Exite Inc.</p>
								<p>DAISUKE Inc.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Skill -->
				<div class="">
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<h2>Skill</h2>
							</div>
							<div class="">
								<button class="btn btn-default">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
								</button>
								<select class="form-control">
									<option>Share</option>
									<option>選択肢２</option>
									<option>選択肢３</option>
								</select>
							</div>
							<div class="">
								<p>C++</p>
								<p>PHP</p>
								<p>Laravel</p>
								<p>Photoshop</p>
								<p>Edge Animation</p>
							</div>
						</div>
					</div>
				</div>
	      	</div><!-- .col-8 end-->

	      	<div class="col-md-4">
	      		<!-- Contact -->
	      		<div class="row">
	      			<div class="col-md-12">
		      			<div class="panel panel-default">
		      				<div class="panel-heading">
		      					<h3 class="panel-title">Contact</h3>
		      					<button class="btn btn-default btn-sm">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit
								</button>
		      				</div>
		      				<div class="panel-body">
		      					<address>
			      					<p>Name: Yosei Yamagishi</p>
				      				<p>Phone Number: 080000000</p>
				      				<p>Adress: NewYork</p>
		      					</address>
			      			</div>
		      			</div>
	      			</div>
	      		</div>

	      		<!-- Rnking -->
	      		<div class="row">
	      			<div class="col-md-12 text-center">
	      					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-circle" alt="Generic placeholder thumbnail">
							<h4>FobFair Ranking</h4>
							<span class="text-muted">What's FobFair Ranking?</span>
	      			</div>
	      		</div>

	      		<!-- MakeHistory -->
	      		<div class="row">
	      			<div class="col-md-12 text-center">
	      				<div class="well">
	      					<p>make your history</p>
	      					<p>by using your photos</p>
	      				</div>
	      			</div>
	      		</div>

			</div><!-- .col-4 end-->
		</div>
	</div>
</article>
<hr>
@stop

@section('footer')
	@parent
@stop