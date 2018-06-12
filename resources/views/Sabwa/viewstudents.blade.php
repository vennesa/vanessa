<!DOCTYPE html>
<html>
<head>
	<title>View All Fees Records</title>
</head>
<style type="text/css">
	
	div
	{
		background-color: grey;
		width: 80%;



	}
</style>
<body align="center">
	<div>
		<a href="/search/fees"><button>Back</button></a>
		<a href="/"><button>Home</button></a>
		<table align="center">
			<tr>
				<th>Student Id</th>
				<th>Name</th>
				<th>Year</th>
				<th>course</th>
			</tr>
			@foreach($fee as $value)
			<tr>
			<td>{{$value->student_id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->Year}}</td>
			<td>{{$value->course}}</td>
		</tr>
		@endforeach
		</table>
		<p>The total amount of fees paid is: {{$sum}}</p>
	</div>

</body>
</html>