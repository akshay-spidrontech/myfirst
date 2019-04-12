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
	<title>Show Employee</title>
</head>
<body>
	<div class="container">
		<h2>Employee Information</h2>
         <table class="table table-striped">
         	<tr>
         		<th>Name</th>
         		<th>Designation</th>
         		<th>Passport Number</th>
         		<th>Mobile Number</th>
         	</tr>
         	@foreach($items as $item)
         	<tr>
         		<td>{{$item->name}}</td>
         		<td>{{$item->designation}}</td>
         		<td>{{$item->passport->p_number}}</td>
         		<td>
	         		@foreach ($item->mobileNum as $mobile)
                    {{$mobile->mobile}}<br/>
	         		@endforeach
         	   </td>
         	</tr>
            @endforeach	
         </table>
      
	</div>
</body>
</html>