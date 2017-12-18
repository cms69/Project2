<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  

  <meta charset="utf-8">
</head>


<body text-align:center>

<a href="index.php?page=accounts&action=back1">Home</a>

<br>
<br>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit">Your Profile</button>
        </form>
        <br>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit">Logout</button>
        </form>
        <br>

    <h3> Enter Task Details </h3>
    
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">


<label>Owner Email-</label>
<input type="text" name="owneremail" value="<?php session_start(); echo $_SESSION["email"]; ?>">

<br><br>


<label>Owner ID-</label>
<input type="text"  name="ownerid" value="<?php echo $_SESSION["userID"]; ?>">

<br><br>

<?php date_default_timezone_set("America/New_York"); ?>

<label>Created Date-</label>
<input type="text"  name="createddate" value="<?php echo date("Y-m-d").' '.date("h:i:sa"); ?>"readonly>

<br><br>


<label>Due Date-</label>
<input type="text"  name="duedate" value="">

<br><br>


<label>Message-</label>
<input type="text"  name="message" value="">

<br><br>


<label>Is Done-</label>
<input type="text" name="isdone" value="">

<br><br>

<button type="submit" form="form1" value="create">Create</button>
</form>


</body>
</html>