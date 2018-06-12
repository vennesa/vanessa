<!DOCTYPE html>
<html>
<head>
	<title>View Fees</title>
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
		<a href="/fees"><button>Back</button></a>
		<a href="/viewfeesall/fees"><button>ViewAll</button></a>
		<table align="center">
			<h2>Search Fees Payment record</h2>
			<form action="/search/fees" method="get">
				{{csrf_field()}}
				<label>Student Number</label>
				<input type="number" name="student_number">
				<input type="submit" name="search">

			</form>
			<tr>
				<th>Student Id</th>
				<th>Name</th>
				<th>Total Amount</th>
				<th>Total Paid</th>
			</tr>
			@foreach($fee as $value)
			<tr>
			   <td>{{$value->student_id}}</td>
			    <td>{{$value->name}}</td>
			    <td>{{$value->total_amount}}</td>
			    <td>{{$value->total_paid}}</td>
			</tr>
			@endforeach	
		 

		</table>
		
<p>The total amount of fees paid is: {{$sum}}</p>
	</div>

</body>
</html>