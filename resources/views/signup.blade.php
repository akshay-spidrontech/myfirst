<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<title>Signup::</title>
	{{-- validation --}}
<script>
    $(document).ready(function () {
    $('#signupform').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                digits: true,    
            },
            imagename: {
                required: true,
                extension: "jpeg|png|jpg"
            },
        },
        messages:{
        	 name: "Please enter your name .",
        	 email:{
        	 	required:"Please enter your email",
        	 	email:"Email not in format",
        	 },
        	 mobile:{
        	 	required:"Please enter mobile no.",
        	 }
        }
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
		<div style="text-align: center;margin-top: 20px;">
			 <h4>Signup Form</h4>
		</div>
		<form action="{{url('/signup')}}" method="post" enctype="multipart/form-data" 
		id="signupform" name="signupform">
		<table class="table">
			{{csrf_field()}}
			 <tr>
			 	<td>Name : </td> 
			 	<td><input type="text" name="name" class="form-control"></td>	
			 </tr> 
			 <tr>
			 	<td>Email : </td>
			 	<td><input type="text" name="email" class="form-control"></td> 	
			 </tr>
			  <tr>
			 	<td>Mobile : </td>
			 	<td><input type="text" name="mobile" class="form-control"></td> 	
			 </tr> 
			 <tr>
			 	<td>City : </td> 
			 	<td>
			 		<select class="form-control" name="city"> 
			 		  <option value="select City" disabled>Select City</option>	
					  <option value="Mumbai">Mumbai</option>
					  <option value="Pune">Pune</option>
					  <option value="Satara">Satara</option>
					  <option value="Latur">Latur</option>
					</select>
			    </td>	
			 </tr> 
			 <tr>
			 	<td>Photo : </td> 
			 	<td><input type="file" name="imagename"></td>	
			 </tr> 
			 <tr>
			 	<td></td>
			 	<td>
			 		<input type="Submit" name="subbtn" value="Register" class="btn btn-success">
			 	</td> 	
			 </tr> 	
	    </table>
	    </form>
    </div>
	
</body>
</html>