@extends('layouts.layout')
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 pb-3">
			<div class="card justify-content-left">
				<div class="card-header text-center h3">Let's Play QUIZ</div>
				<div class="card-body">
					
					<!--  -->
					<form method="POST" action="{{URL::to('/save_answer')}}" enctype="multipart/form-data">
						@csrf
						
						<div class="form-group row pt-2">
							<label for="name" class="col-md-4 col-form-label text-md-right">Your Name</label>
							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="write your full name" required autocomplete="name" autofocus>
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="write your e-mail address" required autocomplete="email">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Contact Number</label>
							<div class="col-md-6">
								<input id="contact" type="contact" class="form-control" name="contact" placeholder="write your contact number" required>
							</div>
						</div>
						<hr class="border-info ml-5 mr-5 pl-5 pr-5">
						
						<!--  -->
						<div class="mb-3 justify-content-center pl-5">
							<table class="text-left pl-5 pr-2 text-left" style="width:100%;">
								@foreach($all_data as $row)
								<tr>
									<!-- <th style="width: 5%">1</th> -->
									<td>
										1. {{ $row->question1 }}
									</td>
								</tr>
								<tr>
									<td class="pt-2 pl-5">
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer1a" name="answer1" value="A">
											<label class="custom-control-label mr-5" for="answer1a">{{ $row->a1 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer1b" name="answer1" value="B">
											<label class="custom-control-label" for="answer1b">{{ $row->b1 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer1c" name="answer1" value="C">
											<label class="custom-control-label" for="answer1c">{{ $row->c1 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer1d" name="answer1" value="D">
											<label class="custom-control-label" for="answer1d">{{ $row->d1 }}
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<!-- <th style="width: 5%">1</th> -->
									<td>
										2. {{ $row->question2 }}
									</td>
								</tr>
								<tr>
									<td class="pt-2 pl-5">
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer2a" name="answer2" value="A">
											<label class="custom-control-label mr-5" for="answer2a">{{ $row->a2 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer2b" name="answer2" value="B">
											<label class="custom-control-label" for="answer2b">{{ $row->b2 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer2c" name="answer2" value="C">
											<label class="custom-control-label" for="answer2c">{{ $row->c2 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer2d" name="answer2" value="D">
											<label class="custom-control-label" for="answer2d">{{ $row->d2 }}
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<!-- <th style="width: 5%">1</th> -->
									<td>
										3. {{ $row->question3 }}
									</td>
								</tr>
								<tr>
									<td class="pt-2 pl-5">
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer3a" name="answer3" value="A">
											<label class="custom-control-label mr-5" for="answer3a">{{ $row->a3 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer3b" name="answer3" value="B">
											<label class="custom-control-label" for="answer3b">{{ $row->b3 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer3c" name="answer3" value="C">
											<label class="custom-control-label" for="answer3c">{{ $row->c3 }}
											</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="answer3d" name="answer3" value="D">
											<label class="custom-control-label" for="answer3d">{{ $row->d3 }}
											</label>
										</div>
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								
								@endforeach
							</table>
						</div>
						<hr class="border-info ml-5 mr-5 pl-5 pr-5">
						<!--  -->
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<input type="submit" name="submit" class="btn btn-primary input-lg" value="SUBMIT YOUR ANSWER">
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection