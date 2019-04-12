<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<title>Signup Data::</title>
</head>
<body>
     <div class="container">
     	<div style="margin: 20px">
               <a href="signup" class="btn btn-success">Back</a>
     		<a href="/" class="btn btn-primary">Home</a>
     	</div>
     	 <table class="table table-striped">
               <tr>
                    <td>Signup Data</td>
               </tr>
     	 	<tr>
     	 		<td><b>Name</b></td>
     	 		<td><b>Email</b></td>
     	 		<td><b>Mobile</b></td>
     	 		<td><b>City</b></td>
     	 		<td><b>Image</b></td>
     	 	</tr>
     	 	@foreach($signup_data as $signup)
     	 	<tr>
     	 		<td><a href="{{'/signup/'.$signup->id}}">{{$signup->name}}</a></td>
     	 		<td>{{$signup->email}}</td>
     	 		<td>{{$signup->mobile}}</td>
     	 		<td>{{$signup->city}}</td>
     	 		<td><img src="{{asset('uploads/'.$signup->imagename)}}" height="80" width="80" /></td>
     	 	</tr>
     	 	@endforeach
     	 </table>
     </div> 	

</body>
</html>