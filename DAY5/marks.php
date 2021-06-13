<!-- take 5 subject's marks of student as an input and display it. also display total marks  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
		<form action="marks-backend.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Enter Your Marks</p>
			<div class="input-group">
				<input type="text" placeholder="Maths" name="Sub1" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Chemistry" name="Sub2" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Physics" name="Sub3" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="English" name="Sub4" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Computer" name="Sub5" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>