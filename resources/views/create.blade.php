<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<title>
		Create List
	</title>
	<style type="text/css">
	.backbtn{
        margin: 20px;
	}	


	</style>
</head>
<body>
	<div class="container">
	<div class="">
      <a href="{{url('todo')}}" class="btn btn-primary backbtn">back</a>
    </div>
    <form method="post" action="{{url('/todo')}}">
    	{{csrf_field()}}
	<table class="table">
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" id="title" class="form-control"></td>
		</tr>
		<tr>
			<td>Blog</td>
			<td><textarea name="body" id="body" rows="4" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit" class="btn btn-success"></td>
	    </tr>		
	</table>
    </form> 
    </div> 
</body>
</html>