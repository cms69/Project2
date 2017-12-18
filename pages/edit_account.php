<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Account Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body text-align:center>

<h1><a href="index.php?page=accounts&action=back1">Home</a></h1>
      <br>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" >Your Profile</button>
        </form>
        <br>
        
        
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" >Logout</button>
        </form>
      <br>
    <h3> Edit Details </h3>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" >

    
    <label>First name-</label>
    <input type="text"  name="fname" value="<?php echo $data->fname; ?>">
    <br><br>
    
    
    <label>Last name-</label>
    <input type="text"  name="lname" value="<?php echo $data->lname; ?>">
    <br><br>
    
    
    <label>Email-</label>
    <input type="text"  name="email" value="<?php echo $data->email; ?>">
    <br><br>
    
    
    <label>Phone-</label>
    <input type="text"  name="phone" value="<?php echo $data->phone; ?>">
    <br><br>
    
    
    <label>Birthday-</label>
    <input type="text"  name="birthday" value="<?php echo $data->birthday; ?>">
    <br><br>
    
    
    <label>Gender-</label>
    <input type="text"  name="gender" value="<?php echo $data->gender; ?>">
    <br><br>
    <input type="submit" value="SAVE">
</form>
</body>
</html>