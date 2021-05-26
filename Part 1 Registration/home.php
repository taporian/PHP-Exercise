<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" />
    <title>Registration and Login Page</title>
</head>
<body>
<div class='ripple-background'>
  <div class='circle xxlarge shade1'></div>
  <div class='circle xlarge shade2'></div>
  <div class='circle large shade3'></div>
  <div class='circle mediun shade4'></div>
  <div class='circle small shade5'></div>
</div>
  
    <div class="page">

    
    <div class="register">
    <form method="post" action="safe.php">
    
    <h2>Register</h2>
    <fieldset>
    <legend>Fill in the form below to get instant access</legend>
      <label>FullName</label>
        <input type="text" name="FullName" pattern="[a-zA-Z ]*" placeholder="John Doe"  required>
          <br><br>
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z ]*" placeholder="JohnDoe" required >
        <br><br>
        <label>Password</label>
        <input type="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
        required><br><br>
        <label>Confirm Password</label>
        <input type="password" name="confirm-password" required> <br><br>
         <label>Email</label>
        <input type="email" name="Email" placeholder="live@email.com" required > <br><br>
        <label>Phone</label>
        <input type="tel" name="Phone" pattern="[+][0-9]{11}" placeholder="+961123456" required> <br><br>
        <label>Date of Birth</label>
        <input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="dateofbirth" placeholder="dd/mm/yyyy"required/><br><br>
        <label>Social Security Number</label>
        <input type="number" name="SocialSecurityNumber" pattern="[0-9]{3}" placeholder="182" required> <br><br>
        <input type="submit"><br><br>
    </fieldset>
    </div>
    
    
    <div class="login">
    <h2>Login to our site</h2>
   
    <fieldset>
    <legend>Enter username and password to log on:</legend>
      
        <label>Username</label>
        <input type="text" name="loginUsername" pattern="[a-zA-Z ]*" placeholder="JohnDoe" >
        <br><br>
        <label>Password</label>
        <input type="password" name="loginPassword" ><br><br>
        <input type="submit"><br><br>
    </fieldset>
    </div>

    
      </form>
</div>
    
</body>
</html>