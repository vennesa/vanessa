<!DOCTYPE html>
<html>
<head>
	<title>Fees</title>
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
 	<a href="search/fees"><button>Search</button></a>
<form action="fees" method="post">
	       {{csrf_field()}}
	<h2>Fees Payment Form</h2>
	<label>Student Number</label>
	<input type="number" name="student_number"><br><br>
	<label>Full Name:</label> 
	<input type="text" name="full_name"><br><br>
	<label>Date Of Payment</label>
	<input type="date" name="date_of_payment"><br><br>
	<label>Amount</label>
	<input type="number" name="amount"><br><br>
	<input type="submit" name="Submit"><br><br>
		 
</form>
@if ($errors->any())
		<div>
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
    
		</div>
	</div>
    @endif
<a href="/"><button>Home</button></a>

</div>
</body>
</html>