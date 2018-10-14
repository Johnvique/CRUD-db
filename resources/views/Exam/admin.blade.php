@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-6">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>Date of Birth</th>
					<th>Phone Number</th>
					<th>Email Adress</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
				<tr>
					<td>{{$student->user}}</td>
					<td>{{$student->dob}}</td>
					<td>{{$student->phone}}</td>
					<td>{{$student->email}}</td>
					<td>{{$student->pass}}</td>
					<td style="color: #990100"><a href="delete/{{$student->id}}">delete</a></td>
				</tr>
				@endforeach
			</tbody>
			
		</table>	
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>
@endsection