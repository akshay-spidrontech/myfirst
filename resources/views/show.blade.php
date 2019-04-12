<!DOCTYPE html>
<html>
<head>
	<title>Show Info</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
</head>
<body>
	<div class="container">
		<p class="text-muted">Id : <b class="text-primary">{{$item->id}}</b></p>
		<p class="text-muted">Title : <b class="text-primary">{{$item->title}}</b></p>
		<p class="text-muted">Body : <b class="text-primary">{{$item->body}}</b></p>
    </div>

</body>
</html>