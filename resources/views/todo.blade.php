<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.createbtn{
			margin: 20px;
		}
		.pagination li{
			padding: 10px 10px ;
		}
		
	</style>
</head>
<body>
	<div class="container">
		 <a href="{{url('todo/create')}}" class="btn btn-primary createbtn">Create New</a>
		 <div class="">
	     <center><h1>Todo List</h1></center>
	     <table class="table table-striped">
	     	<tr>
	     		<td><h4>Title</h4></td>
	     		<td><h4>Body</h4></td>
	     		<td></td>
	     		<td></td>
	        </tr>		
	     	@foreach($todo_lists as $todo)
	     	<tr>
		     	<td>
		     		<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
		     	</td>
		     	<td>
		     		{{$todo->body}}
		     	</td>
		     	<td>
	        	    <a href="{{'/todo/'.$todo->id.'/edit'}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	            </td>
	            <td>
	        	    <form action="{{'/todo/'.$todo->id}}" method="post">
	        	    	{{csrf_field()}}
    	                {{method_field('DELETE')}}
	        	    	<button type="submit" style="border:none;background-color:#fff;color:#3498DB;"><i class="fa fa-trash" aria-hidden="true" style=""></i></button>
	        	    </form>
	        	    {{-- <a href = 'delete/{{ $todo->id }}'>Delete</a> --}}
	            </td>
	        </tr>
	        	
	     	@endforeach
	     </table>
	     <div>
	     	{{$todo_lists->links()}}
	     </div>
	     

	     </div>
    </div> 
</body>
</html>