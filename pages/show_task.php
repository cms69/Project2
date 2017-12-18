<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Task</title>
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
        <button type="submit">Logout</button>
        </form>
        <br>

    <h3> Edit Details </h3>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post" id="form1">

<label>ID-</label>
<input type="text"  name="id" value="<?php echo $data->id;?>" readonly>
<br><br>


<label>Owner Email-</label>
<input type="text"  name="owneremail" value="<?php echo $data->owneremail;?>">
<br><br>


<label>Owner ID-</label>
<input type="text"  name="ownerid" value="<?php echo $data->ownerid;?>" readonly>
<br><br>


<label>Created Date-</label>
<input type="text"  name="createddate" value="<?php echo $data->createddate;?>" readonly>
<br><br>


<label>Due Date-</label>
<input type="text"  name="duedate" value="<?php echo $data->duedate;?>" readonly>
<br><br>


<label>Message-</label>
<input type="text"  name="message" value="<?php echo $data->message;?>">
</div><br><br>


<label>Is Done-</label>
<input type="text"  name="isdone" value="<?php echo $data->isdone;?>">
<br><br>

<button type="submit"  form="form1" value="save">Save</button>
</form>

</body>
</html>