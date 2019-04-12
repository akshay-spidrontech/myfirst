<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script>
		$(document).ready(function(){
			$('#sendmailform').validate({
				rules: {
			            to: {
			                required: true,
			                email:true,
			            },
			            message: {
			                required: true,
			                
			           }
			        },
			    messages:{
			        	 to: {
			        	 	required:"Please enter sender email id .",
			        	 },
			        	 message:{
			        	 	required:"Please enter message .",			        	 	
			        	 },
			        }
			});

		});
	 </script>
	 <style type="text/css">
	 	 .error {
			      color: red;
			      font-weight: 500;
			   }
	 </style>
</head>
<body>
	<br>
    <div class="container">
    	@if (session('alert'))
		    <div class="alert alert-success alert-dismissible">
		    	<button type="button" class="close" data-dismiss="alert">&times;</button>
		        {{ session('alert') }}
		    </div>
        @endif

    	<form action="send" method="POST" name="sendmailform" id="sendmailform">
    		{{csrf_field()}}
	    	<table class="table">
	    		<h1 style="margin-left: 300px">Send Email</h1>
	    		<tr>
    			   <td>To : </td>
    			   <td><input type="text" name="to" id="to" class="form-control"></td>
	    		</tr>	
	    		<tr>
	    		  <td>Message : </td>
    			  <td>
    			  	<textarea name="message" cols="30" rows="5" id="message" class="form-control"></textarea>
    			</td>
	    		</tr>
	    		<tr>
	    		  <td></td>
    			  <td><input type="submit" value="Send" class="btn btn-success"></td>	
	    		</tr>	
	    	</table>
        </form>
    </div>
   
</body>
</html>