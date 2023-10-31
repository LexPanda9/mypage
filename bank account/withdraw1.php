

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="5; url = withdraw.php">
    <title>Loading</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style_min.css" />
    <style>
    @keyframes anim1 {
        from{transform: rotate(0deg)}
        to{transform: rotate(360deg)}
    }

    .img-wrap img{
        animation-name: anim1;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
    }
    </style>
</head>
<body><br><br><br><br><br>
    <div class="main">
        <div>Please Wait</div>
        <div class="img-wrap">
            <!-- <img src="iconl.gif" alt="loading" > -->
            <img src="iconl2.svg" alt="loading" >
        </div>
    </div>
</body>
</html>

<?php
// sleep(5);
// header("location:withdraw.php");

?>