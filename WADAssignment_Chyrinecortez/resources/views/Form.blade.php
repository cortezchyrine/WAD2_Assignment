<!DOCTYPE html>
<html>
<head>
	<title>Form Registration</title>
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
	<h1>Form Registration</h1><br><br>
	<form method="post" action = "/listahan">
		{{csrf_field()}}
		Name: <input type="text" name="Name"><br>
		Age: <input type="number" name="Age"><br>
		Course: <input type="text" name="Course"><br>
		Student No:<input type="number" name="StudentNumber"><br>
		Email: <input type="text" name="Email"><br><br>
		<input type="submit" value="Submit" class="button">
	</form>

</center>
</body>
</html>