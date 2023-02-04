<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

<form action="first.php" method="post">
<p>Name: <input type="text" name="name" value=<?php echo $_POST["name"]; ?>></p>
<p>Age: <input type="text" name="age" value=<?php echo $_POST["age"]; ?> /></p>
<p><input type="submit" name="submit" value="Update" /></p>
</body>
</html>