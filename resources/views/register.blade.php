<!DOCTYPE html>
<html>
<head>
	<title>Register::</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
      	 $(document).ready(function(){
      	 	$('#registerform').validate({
					rules: {
						fname:{
							required:true,
                            lettersonly:true,
						},
						lname:{
							required:true,
                            lettersonly:true,
						},
			            email: {
			                required: true,
			                email:true,
			            },
			            password: {
			                required: true,
			            },
			            confirm_password:{
			            	required:true,
			            	equalTo : "#password"
			            },

			        },
			        messages:{
			        	fname:{
                            required:"Please enter first name .",
			        	},
			        	lname:{
                            required:"Please enter last name .",
			        	},
			        	email:{
			        	 	required:"Please enter email Id .",
			        	}, 
			        	password:{
			        	 	required:"Please enter your password.",
			        	 	
			        	},
			        	confirm_password:{
                            required:"Please enter password again.", 
                            equalTo:"confirm password doesn\'t match",
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
		<div>
			 <h3>Register Form</h3>
		</div>	
		<form action="{{url('/storereg')}}" method="POST" id="registerform">
			<table class="table">
				{{csrf_field()}}
				<tr>
					<td>First Name</td>
					<td><input type="text" name="fname" id="fname" class="form-control"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lname" class="form-control"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" class="form-control"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password" class="form-control"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm_password" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="regbtn" value="Reister" class="btn btn-success"></td>
				</tr>
			</table>
	    </form>
    </div>
</body>
</html>