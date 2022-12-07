<!DOCTYPE html>
<html>
<head>
	<title>	Register - Gwangi	</title>
	<style>
	ul,li{
	list-style:none;
	}
	.blk{
		margin-bottom:20px;
		text-align:left;
	}
	.blk span{
		font-size:20px;
		font-weight:bold;
		font-style:italic;
	}
	.blk input{
		margin-left:10px;
		border:1px solid black;
		border-radius:3px;
		padding:5px;
	}
	.butn{
		padding:10px;
		background:#3b354d;
		color:white;
		border:1px solid #3b354d;
	}
	.wrapper{
		width:500px;
		border:5px dashed lightpink;
		text-align:center;
	}
	</style>
</head>
<body>
	<div class="wrapper">
		<h1 style="text-decoration:underline;">Register</h1>
		<form method="post" action="" id="btn">
		 <ul>
			 <li class="blk"> <span>Name:</span>
				<input type="text" name="name" placeholder="Enter Your Name" required>
			</li>
			<li class="blk"><span>Email:</span>
				<input type="email" name="email" placeholder="Email Id" required>
			</li>
			<li class="blk"><span>DOB:</span>
				<input type="date" name="dob">
			</li>
			<li class="blk"><span>Profile Photo:</span>
				<input type="file" name="pp">
			</li>
			<li class="blk"><span>Password:</span>
				<input type="password" name="password" placeholder="Create Password" required>
			</li>
			<li class="blk"><span>Gender:</span>
				<input type="radio" name="gender" required>Male
				<input type="radio" name="gender" required>Female
			</li>
		</ul>
		<button class="butn" type="submit" form="btn" value="register">Register</button>
		</form>
	</div>
</body>
</html>