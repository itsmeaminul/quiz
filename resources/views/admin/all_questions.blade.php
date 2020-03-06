@extends('layouts.admin_layout')
@section('content')
<div class="card">
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
		<h2 class="font-weight-bold text-info">All Questions</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>ID</th>
							<th>Question-1</th>
							<th>Question2</th>
							<th>Question3</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($show_all_data))
						@foreach($show_all_data as $row)
						<tr>
							<td>{{$row->question_id}}</td>
							<td>{{$row->question1}}<br>
								A. {{$row->a1}} | B. {{$row->b1}} <br> C. {{$row->c1}} | D. {{$row->d1}}
							</td>
							<td>{{$row->question2}}<br>
								A. {{$row->a2}} | B. {{$row->b2}} <br> C. {{$row->c2}} | D. {{$row->d2}}
							</td>
							<td>{{$row->question3}}<br>
								A. {{$row->a3}} | B. {{$row->b3}} <br> C. {{$row->c3}} | D. {{$row->d3}}
							</td>
							<td>
								<!-- <a href="{{URL::to('/question_edit/'.$row->question_id)}}" id="edit">
									<button class="btn btn-outline-warning mb-2">&nbsp Edit &nbsp</button>
								</a> -->
								<a href="{{URL::to('/question_delete/'.$row->question_id)}}" id="delete">
									<button class="btn btn-outline-danger mt-3">Delete</button>
								</a>
							</td>
						</tr>
						@endforeach
						@else
						<div>No data available</div>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection