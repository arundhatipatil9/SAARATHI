<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >
<li>ID:</li><li><input type="text" name="id" /></li>
<li>Employee Name:</li><li><input type="text" name="employee_name" /></li>
<li>Employee Salary:</li><li><input type="text" name="employee_salary" /></li>
<li>Employee Age:</li><li><input type="text" name="employee_age" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin123");
$query = "INSERT INTO employee VALUES ('$_POST[id]','$_POST[employee_name]',
'$_POST[employee_salary]','$_POST[employee_age]')";
$result = pg_query($query); 
?>