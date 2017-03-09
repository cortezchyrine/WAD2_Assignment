<!DOCTYPE html>
<html>
<head>
	<title>List</title>
<style>
	body{
		background-color: black;
		color: white;
	}
	h1{
		color: yellow;
	}
	table, td{
		color: linen;
		border: 1px solid gray;
	}
	button:hover{
		background-color: black;
		color: red;
	}
	th:hover{
		background-color: white;
		color: green;
	}
	td:hover{
		background-color: white;
		color: navy;
	}
	

</style>


</head>
<body>
	<center>
	<p><h1>List of Students Registered</h1></p><br><br>
	<table border="3px">
		<thead>
			<th>Name</th>
			<th>Age</th>
			<th>Course</th>
			<th>StudentNumber</th>
			<th>Email</th>
		</thead>
		<tbody>
		@foreach($unique as $uniques)
			<tr>
				<td>{{$uniques->Name}}</td>
				<td>{{$uniques->Age}}</td>
				<td>{{$uniques->Course}}</td>
				<td>{{$uniques->StudentNumber}}</td>
				<td>{{$uniques->Email}}</td>
				<td><a href="/edit/{{$uniques->id}}"><button>EDIT</button></a></td>
				<td><a href="/Delete/{{$uniques->id}}"><button>DELETE</button></a></td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<br>
		<a href="/Add/{{$uniques->id}}"><button>Add</button></a>
	</center>
</body>
</html>