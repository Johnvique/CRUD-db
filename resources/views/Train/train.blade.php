@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header text-center text-default bg-info">
         <h3>About Us</h3>
		<p>Mtaani_Tech is a coding group registered under Andela Learning Community that is specifically meant to exploit coding talent amongst the youths who are interested in turning the today's world into global village through two-tier technology.We are well equiped with members who are knowledgeable in varieties of programming languages that enhance their ability to develope Responsive and Interractive Websites,Systems and Software Applications.</p>
	  </div>
   </div>
</div>
	<div class="col-md-4">
	  <div class="card">
		<div class="card-header text-center text-default bg-primary">
			<h4>Bursary form</h4></div>
			<form method="post" action="{{url('Train')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" name="username" required="">
				</div>
				<div class="form-group">
					<label for="first_name">First Name:</label>
					<input type="text" class="form-control" id="first_name" name="first_name" required="">
				</div>
				<div class="form-group">
					<label for="last_name">Last Name:</label>
					<input type="text" class="form-control" id="last_name" name="last_name" required="">
				</div>
				<div class="form-group">
					<label for="email">Email Adress:</label>
					<input type="text" class="form-control" id="email" name="email" required="">
				</div>
				<div class="form-group">
					<label for="dob">Date Of Birth:</label>
					<input type="date" class="form-control" id="dob" name="dob" required="">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required="">
				</div>
				<button type="submit" class="btn btn-primary">Sign up</button>
				<button type="submit" class="btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header text-center text-default bg-info">
			<h3>Our Services</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		   </div>
	     </div>
       </div>
    </div>
</div>
@endsection