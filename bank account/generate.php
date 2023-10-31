<?php
require_once("control.php");


if (isset($_POST["gen"])) {
    $min = 1111111111;
    $max = 9999999999;
    $random_number = rand($min,$max);
    $insert = $call->query("UPDATE $call->user_table SET code = $random_number WHERE id = 1 ");
    $sql = $call->query("SELECT * FROM $call->user_table WHERE id = 1");
    $data = mysqli_fetch_assoc($sql);
}
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    form{
        width: 300px;
        margin: 50px auto;
    }
    </style>
</head>
<body>
    <form method="post">
        <div style="text-align:center;"><input name="gen" type="submit" value="generate"></div>
        <p>CODE = <?php if(isset($data["code"]) && !empty($data["code"])) { echo $data["code"]; } ?></p>
    </form>
</body>
</html>