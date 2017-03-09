<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
<style>
	body{
		background-color: black;
		color: linen;
	}
	h1{
		color: yellow;
	}
	.button:hover{
		color: red;
	}
</style>


</head>
<body>
<center>
	<h1>Edit Form</h1><br>
	<form method="post" action = "/editing/{{$unique->id}}">
		{{csrf_field()}}
		Name: <input type="text" name="Name" value="{{$unique->Name}}"><br>
		Age: <input type="number" name="Age" value="{{$unique->Age}}"><br>
		Course: <input type="text" name="Course" value="{{$unique->Course}}"><br>
		Student No:<input type="number" name="StudentNumber" value="{{$unique->StudentNumber}}"><br>
		Email: <input type="text" name="Email" value="{{$unique->Email}}"><br><br>
		<input type="submit" value="Update" class="button">
	</form>
</center>
</body>
</html>