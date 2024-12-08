<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
//get the db connection file

require_once 'dbconf.php';//(conf/dbconf.php) (folder/file)
require_once 'myfun.php';

PrintTable ("books",$connect);


?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
	<table >
		<tr >
			<td align=right>book Name: </td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Search"></td>
		</tr>

	</table>

</form>
<?php

if (isset($_GET['name']) && $_GET['name'] != '') {
	SearchData($_GET['name'],$connect);
}

//SearchData('Bob Smith ',$connect);
?>
</body>
</html>