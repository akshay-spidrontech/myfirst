<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<title>ADD EMPLOYEE::</title>
	<script>
		$(document).ready(function(){
			$('#msg').hide();
			$("#subbtn").click(function(event) {
			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
			$('#addempform').validate({
					rules: {
			            name: {
			                required: true
			            },
			            designation: {
			                required: true,
			           }
			        },
			        messages:{
			        	 name: "Please enter your name .",
			        	 designation:{
			        	 	required:"Please enter your designation",
			        	 	
			        	 },
			        },
			    submitHandler: function(form) {
			    	var name = $("#name").val();
					var designation = $("#designation").val();
			        $.ajax({
			        	type: "POST",
			            url: "<?php url('/addemployee') ?>",
			            data: $(form).serialize(),
			            success: function(response) {
			                $('#msg').show();
	                        $('#msg').html("Add employee successfully");
	                        $('#msg').fadeOut(3000);
			            }            
			        });
			    }
			});	
			});
            
		});
	</script>
</head>
<body>
	<div class="container">
		<div style="text-align: center;margin-top: 20px;">
			 <h4>ADD EMPLOYEE FORM</h4>
		</div>
		<div> 
			<p id="msg" class="alert alert-success"></p>
		</div>
		<form name="addempform" id="addempform" method="POST">
		<table class="table">
			 <input type="hidden" id="token" value="{{csrf_token()}}">
			 <tr>
			 	<td>Name : </td> 
			 	<td><input type="text" name="name" id="name" class="form-control"></td>	
			 </tr> 
			 <tr>
			 	<td>Designation : </td>
			 	<td><input type="text" name="designation" id="designation" class="form-control"></td> 	
			 </tr>
             <tr>
			 	<td></td>
			 	<td>
			 		<input type="Submit" name="subbtn" id="subbtn" value="Submit" class="btn btn-success">
			 	</td> 	
			 </tr> 	
	    </table>
	    </form>
    </div>

</body>
</html>