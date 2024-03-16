<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from user ORDER by id DESC");
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
body {
  font: 1rem sans-serif;
  padding: 0.2em;
  margin: 0.2;
  background: #33fff9;
}

form {
  position: relative;
  width: 640px;
  height: 408px;
  margin: 0 auto;
  padding: 1em;
  box-sizing: border-box;
  background: #fff url(background.jpg);

  /* we create our grid */
  display: grid;
  grid-gap: 25px;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: 2em 2em 2em 2em 1.2em;
}

</style>
        <title> Registration Form</title>
</head>
<body>
    <form action="function.php" method="POST">
    Name<input type="text" name="name"><br>
    Email<input type="text" name="email"><br>
        Age<input type="int" name="age"><br>
        Date_of_Birth<input type="date" name="DOB"><br>
        <button type="submit"> submit</button>
</form>
<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>DOB</th>
</tr>
<?php
while($res=mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>'.$res['name'].'</td>';
    echo '<td>'.$res['email'].'</td>';
    echo '<td>'.$res['age'].'</td>';
    echo '<td>'.$res['DOB'].'</td>';
    echo'</tr>';
}
?>
</table>
</body>
</html>
