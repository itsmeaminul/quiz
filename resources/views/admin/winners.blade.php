@extends('layouts.admin_layout')
@section('content')
@extends('layouts.admin_layout')
@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="font-weight-bold text-info">Lucky Winners</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>Name</th>
							<th>E-mail</th>
							<th>Contact No.</th>
							<th>Answers</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($show_all_data))
						@foreach($show_all_data as $row)
						<tr>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->contact}}</td>
							<td>1({{$row->answer1}}) | 2({{$row->answer2}}) | 3({{$row->answer3}})</td>
							<td>
								<a href="" id="delete">
									<button class="btn btn-outline-danger">Delete</button>
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

@endsection