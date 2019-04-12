<!DOCTYPE html>
<html>
<head>
	<title>Login::</title>
	<!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script>
      	 $(document).ready(function(){
      	 	$('#loginform').validate({
					rules: {
			            email: {
			                required: true,
			                email:true,
			            },
			            password: {
			                required: true,
			           }
			        },
			        messages:{
			        	 email: "Please enter email Id .",
			        	 password:{
			        	 	required:"Please enter your password  ",
			        	 	
			        	 },
			        },
			});        
      	 });
      </script>
      <style>
		 label.error{
	       color: red !important;
	     }
      </style>
</head>
<body>
	<div class="container">
		<br><br>
		{{-- @if(isset(Auth::User()->email))
		  <script>
		  	  window.location='/';
		  </script>	
		@endif --}}
		@if(session('alert'))
		    <div class="alert alert-success alert-dismissible">
		    	<button type="button" class="close" data-dismiss="alert">&times;</button>
		        {{ session('alert') }}
		    </div>
        @endif
		<div>
			 <h3>Login Form</h3>
		</div>	
		<form action="{{url('/login')}}" method="POST" id="loginform">
			<table class="table">
				{{csrf_field()}}
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" class="form-control"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="logbtn" value="Login" class="btn btn-primary"></td>
				</tr>
			</table>
	    </form>
    </div>

</body>
</html>