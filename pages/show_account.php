<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body text-align:center>

<h1><a href="index.php?page=accounts&action=back1">Home</a></h1>

<br>
      
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit">Your Profile</button>
        </form>
        
        <br>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit">Logout</button>
        </form>
      
      <br>
      
    <h3>Personal Details </h3>

<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post" >
    
    
    <label>First name-</label>
    <input type="text"  name="fname" value="<?php echo $data->fname; ?>"readonly>
    <br><br>

    
    <label>Last  name-</label>
    <input type="text"  name="lname" value="<?php echo $data->lname; ?>"readonly>
    <br><br>
    
    
    <label>E-mail  ID-</label>
    <input type="text"  name="email" value="<?php echo $data->email; ?>"readonly>
    <br><br>
    
    
    <label>Phone No-</label>
    <input type="text"  name="phone" value="<?php echo $data->phone; ?>"readonly>
    <br><br>
    
    
    <label>Birthday-</label>
    <input type="text"  name="birthday" value="<?php echo $data->birthday; ?>"readonly>
    <br><br>
    
    
    <label>Gender-</label>
    <input type="text"  name="gender" value="<?php echo $data->gender; ?>"readonly>
    
    <br>
    <br>
    
    <input type="submit" class="btn btn-primary" value="Edit">
    <br>
    <br>
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
</body>
</html>