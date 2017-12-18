<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<h2><a href="index.php?page=accounts&action=back1">Home</a></h2>
<br><br>
            
      
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" >Your Profile</button>
        </form>
        
        <br>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" >Logout</button>
        </form>
      <br><br>
<body>


<?php
$text='';
$text.='<h4>View Tasks</h4><br>';
$text.='<a href="index.php?page=tasks&action=create"><span class="glyphicon glyphicon-plus">Create New Task</span></a>';
if($data==FALSE){
  $text.='<br>No records found';
  $text.='</center>';
  echo $text;
}
else{
$text.=utility\htmlTable::genarateTableFromMultiArray($data);
echo $text;
}
?>

</body>
</html>