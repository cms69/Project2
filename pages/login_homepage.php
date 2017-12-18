<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Homepage</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
</head>

<body>
<center>
<h1>Welcome to your Todo List Application</h1>
<br><br>

<button><a href="index.php?page=tasks&action=all">Show All Tasks</a></button>

<br><br>

<form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit">Your Profile</button>
</form>
<br><br><br><br>  
<form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit">LOGOUT</button>
</form>
</center>
</body>