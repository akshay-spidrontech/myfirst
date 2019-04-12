<!DOCTYPE html>
<html>
<head>
	<title>Show Signup Data ::</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
</head>
<body>
	  <div class="container">
	    <div style="margin: 20px">
               <a href="{{url('showsignup')}}" class="btn btn-success">Back</a>
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
     	 	<tr>
     	 		<td>{{$item->name}}</td>
     	 		<td>{{$item->email}}</td>
     	 		<td>{{$item->mobile}}</td>
     	 		<td>{{$item->city}}</td>
     	 		<td><img src="{{asset('uploads/'.$item->imagename)}}" height="80" width="80" /></td>
     	 	</tr>
     	 </table>
     	  <div style="margin: 20px; float: right">
               <a href="{{url('generate-pdf')}}" class="btn btn-success">Convert PDF and Download</a>
     	</div>
     </div>
        
</body>
</html>