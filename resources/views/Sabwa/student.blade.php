<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style type="text/css">
	
	div
	{
		background-color: greys;
		width: 80%;



	}
</style>
<body align="center"> 
	<div>
		<p>Register Student</p>
		<form action="student" method="post">
			{{csrf_field()}}
			Student Number:<input type="number" name="student_number"><br><br>
			Full Name:<input type="text" name="full_name"><br><br>
			Address:<input type="text" name="address"><br><br>
			Date of Birth:<input type="date" name="date_of_birth"><br><br>
			<input type="submit" name="Register"><br><br>
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
		</form>
		 <a href="/"><button>Home</button></a>
</body>
</html>