<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'dbconf.php';
        require_once 'myfun.php';
        $id=$_GET['bookid'];
        GetBook($id,$connect);
    ?>
</body>
</html>