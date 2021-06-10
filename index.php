
<!DOCTYPE HTML>
<html>
<body>

<form action="process.php" method="post">
    FirstName: <input type="text" name="firstname"><br>
    lastName: <input type="text" name="lastname"><br>
    Birthday:<input type="date" max="2020-12-31" min = "1960-01-01" name="birthday">
    E-mail:<input type="text" name="e-mail">
    <input type="submit" name="save" value="submit">
</form>

<form action="list.php" method="post"><br>
    <input type="submit" value="user list">
</form><br>

<form action="search.php" method="post">
    ID: <input type="int" name="id">
    <input type="submit" value="search">
</form><br>

<form action="SearchFilter.php" method="post"><br>
<select name="Atr">
    <option value="">Choose an option</option>
    <option value="Firstname">Firstname</option>
    <option value="Lastname">Lastname</option>
<input type="text" name="texte">
    <input type="submit" value="search">

</form><br>


<form action="edit.php" method="post">
    <a>ID :</a>
    <input type="int" name="id">
    <input type="submit" value="Edit profil">
</form>
</body>
</html>


