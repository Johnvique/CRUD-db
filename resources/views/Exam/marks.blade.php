@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-4">
		<div class="card">
			<div class="card-header text-center text-success bg-default">
				<h3>Project Functionality</h3></div>
				<div class="card-body">
					<p>This is the first Laravel Project of a simple Registration form indicating an example of Database CRUD formula.<p>
			   				</div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center text-success bg-default">
					<h3><u>Simple Registration Form</u></h3></div>
					<div class="card-body">
					<form method="post" action="{{url('Exam')}}">
						{{csrf_field()}}
						<div class="form-group">
						<label for="name">Username</label>
						<input type="text" class="form-control" name="user" id="name" placeholder="Indicate your names" required="">	
						</div>
						<div class="form-group">
						<label for="DOB">Date Of Birth</label>
						<input type="date" class="form-control" name="dob" id="DOB" placeholder="Indicate your DOB" required="">	
						</div>
						<div class="form-group">
						<label for="number">Phone Number</label>
						<input type="text" class="form-control" name="phone" id="number" placeholder="Show you phone number" required="">	
						</div>
						<div class="form-group">
						<label for="mail">Email Adress</label>
						<input type="text" class="form-control" name="email" id="mail" placeholder="Write your email adress" required="">	
						</div>
						<div class="form-group">
						<label for="pword">Password</label>
						<input type="password" class="form-control" name="pass" id="pword" placeholder="Indicate your password" required="">	
						</div>
						<button type="submit" class="btn btn-danger">Resset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
			</div>

		<div class="col-md-4">
		<div class="card">
			<div class="card-header text-center text-primary bg-default">
				<h3></h3></div>
				<div class="card-body">
				</div>
		</div>
		</div>
	</div>
</div>











@endsection