@extends('layouts.admin_layout')
@section('content')
<div class="container">
      <div class="container text-center">
	<div class="row ">
		<div class="col-md-10 mb-2">
			<div class="card border-info">
				<div class="card-header h3 font-weight-bold">SET QUESTION</div>
				<div class="card-body">
					<p class="alert-success text-center">
						<?php
						$exception = Session::get('exception');
						if($exception){
						echo $exception;
						Session::put('exception',null);
						}
						?>
					</p>
					<form name="add-notice-form" onsubmit="return validform()" method="post" action="{{URL::to('/save_question')}}">
						{{ csrf_field() }}
						<div class="form-group">
							<input type="text" class="form-control col-md-2 mb-2" name="question_id" placeholder="write Question ID here" required="">
							<label class="d-flex justify-content-start h5 font-weight-bold">Question-1</label>
							<input type="text" class="form-control col-md-10 mb-3" name="question1" placeholder="write Question 1 here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="a1" placeholder="write option A here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="b1" placeholder="write option B here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="c1" placeholder="write option C here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="d1" placeholder="write option D here" required="">
						</div><br>
						<div class="form-group">
							<label class="d-flex justify-content-start h5 font-weight-bold">Question-2</label>
							<input type="text" class="form-control col-md-10 mb-3" name="question2" placeholder="write Question 2 here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="a2" placeholder="write option A here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="b2" placeholder="write option B here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="c2" placeholder="write option C here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="d2" placeholder="write option D here" required="">
						</div><br>
						<div class="form-group">
							<label class="d-flex justify-content-start h5 font-weight-bold">Question-3</label>
							<input type="text" class="form-control col-md-10 mb-3" name="question3" placeholder="write Question 3 here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="a3" placeholder="write option A here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="b3" placeholder="write option B here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="c3" placeholder="write option C here" required="">
							<input type="text" class="form-control col-md-4 mb-2" name="d3" placeholder="write option D here" required="">
						</div>

						
						<div class="offset-md-5 rounded mx-auto d-block d-flex justify-content-center">
							<button type="submit" class="col-md-4 btn btn-info font-weight-bold">ADD</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection