<!DOCTYPE>
<html>
<head>
<style>
body{
  background-color:goldenrod;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid green;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: gold;
}
.odd{
  background-color:goldenrod;
}
body{
  background-color:goldenrod;
}
</style>
<link rel="icon" href="http://localhost:3000/Icon.png">
</head>
<body>
<form Method="GET" action="http://localhost:3000/PHP/Programs/Know_Skyler/Response/Response.php">
<table>
<tr>
<th>Name</th>
<th>Number</th>
<th>Age</th>
</tr>
<tr>
<td><input type="text" name="NAME"></td>
<td><input type="number" name="NUMBER"></td>
<td><input type="number" name="AGE"></td>
</tr>
</table>
Skyler:<input type="radio" name="Skyler">Member:<input type="radio" name="Member">Staff:<input type="radio" name="Staff">Guest:<input type="radio" name="Guest">
<br>
Web Developer:<input type="radio" name="Web">Youth Pastor:<input type="radio" name="Pastor">Personal Life:<input type="radio" name="Personal">
<br>
<input type="submit">
</form>
</body>
</html>