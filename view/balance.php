<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>баланс хуянс</title>
</head>
<body>
<?php
    if ($r === 1)
    {
        require_once 'model/data.php';
        echo $db['balance'];
        echo "<p><a href='/'>Выход</a></p>";
    }
    else
    {
        echo "<script>alert('petooch')</script>";
        echo "<p><a href='/'>login</a></p>";
    }

?>
</body>
</html>