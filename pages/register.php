<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
</head>


<body>

<h3>Registeration Form</h3>

<form action="index.php?page=accounts&action=store" method="post" id="form1" class = "form-inline">
    
    <label>First name-</label>
    <input type="text"  name="fname" value="" required><br>
    <br><br>
    
    <label>Last name-</label>
    <input type="text"  name="lname" value="" required><br>
    <br><br>
    
    <label>Email ID-</label>
    <input type="email"  name="email" value=""><br>
    <br><br>
    
    <label>Phone No-</label>
    <input type="text"  name="phone" value=""><br>
    <br><br>
    
    <label>Birthday-</label>
    <input type="text"  name="birthday" value=""><br>
    <br><br>
    
    <label>Gender-</label>
    <input type="text"  name="gender" value=""><br>
    <br><br>
    
    <label>Password-</label>
    <input type="password"  name="password" value="" required><br>
    <br><br>
    <button type="submit" form="form1" value="Submit">Submit</button>
</form>
</body>
</html>