<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<script type="text/JavaScript">   
function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=confirm_password]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}
</script>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required/>	
	</div>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name"/>	
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required/>	
	</div>
	<div>
		<label for="email">Email Address</label>
		<input type="email" id="email" name="email" placeholder="email@address.com" required/>	
	</div>
	<div>
		<label for="birthdate">Birth Date</label>
		<input type="date" id='birthdate' name="birthdate" required/>	
	</div>
	<div>
	Gender:
      <input type="radio" id='male' name="gender" value="male" required><label for='male'> Male </label>
      <input type="radio" id="female" name="gender" value="female" required><label for='female'> Female </label>
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Place" required/>	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" name="contact_number" placeholder="Optional">
	</div>
		<div>
		<label>Password</label>
		<input type="password" name="password" minlength="8" onChange="onChange()" required/>	
	</div>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" onChange="onChange()" required/>	
	</div>

	<div>
		<button>
			Register User
		</button>	
	</div>
</form>
</body>
</html>