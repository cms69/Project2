<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>


<body text-align:center>


      <h1><a href="index.php?page=accounts&action=back1">Home</a></h1>
      
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" >Your Profile</button>
        </form>
        <br><br>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" >Logout</button>
        </form>
        <br>

    <h3> Confirm Task Details </h3>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1" class = "form-inline">


<label>ID-</label>
<input type="text" name="id"  value="<?php echo $data->id;?>"readonly>

<br><br>


<label>Owner Email-</label>
<input type="text" name="owneremail"  value="<?php echo $data->owneremail;?>"readonly><br>

<br><br>


<label>Owner ID-</label>
<input type="text" name="ownerid"  value="<?php echo $data->ownerid;?>"readonly><br>

<br><br>


<label>Created Date-</label>
<input type="text" name="createddate"  value="<?php echo $data->createddate;?>"readonly><br>

<br><br>


<label>Due Date-</label>
<input type="text" name="duedate"  value="<?php echo $data->duedate;?>"readonly><br>

<br><br>


<label>Message-</label>
<input type="text" name="message"  value="<?php echo $data->message;?>"readonly><br>

<br><br>


<label>Is Done-</label>
<input type="text" name="isdone"  value="<?php echo $data->isdone;?>"readonly><br>

<br><br>

    <button type="submit" form="form1" value="delete">Delete</button>
</form>

</body>
</html>