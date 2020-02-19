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
					<div class="mb-3 justify-content-center">
							<table class="text-left pl-5 pr-2 text-left" style="width:100%;">
								@foreach($all_data as $row)
								<tr>
									<!-- <th style="width: 5%">1</th> -->
									<td>
										{{ $row->question }}
									</td>
								</tr>
								<tr>
									<td class="pt-2">
										<input type="radio" class="ml-5 mr-5" name="q1">
										{{ $row->choice1 }}
										<input type="radio" class="ml-5 mr-5" name="q1">
										{{ $row->choice2 }}
										<input type="radio" class="ml-5 mr-5" name="q1">
										{{ $row->choice3 }}
										<input type="radio" class="ml-5 mr-5" name="q1">{{ $row->choice4 }}
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								
								@endforeach
							</table>
						</div>
					<!--  -->
					<form method="POST" action="{{URL::to('/save_answer')}}" enctype="multipart/form-data">
						@csrf
						<hr class="border-info ml-5 mr-5 pl-5 pr-5">
						<div class="form-group row pt-2">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Your Name') }}</label>
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
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
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
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>
							<div class="col-md-6">
								<input id="contact" type="contact" class="form-control" name="contact" placeholder="write your contact number" required>
							</div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<input type="submit" name="submit" class="btn btn-primary input-lg" value="submit">
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection