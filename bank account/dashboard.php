<?php
require_once("control.php");
 if (!isset($_SESSION["accessed"])) { header("location:index.php"); } else {
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style_min.css" />
    <script src="main.js"></script>
    <style>
    /* .warnsvg img{
    width: 25px;
    height: 20px;
}
.warnsvg{
    text-align: left;
    margin: 0 20px;
}
.warnsvg span{
    font-size: 13px;
    vertical-align: middle;
} */
.withdraw{
    text-align: left;
    margin: 0 20px;
}
.withdraw a{
    font-size: 15px;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="dashboard"><h1>Hello, Fatima</h1></div>
    <br><br>
    <div class="main">
        <img src="banklogo.svg" alt="acc" >
        <div class="cacc">AVAILABLE FUND</div>
        <br>
        <div>ESC. TR</div>
        <br>
        <div class="bal">Balance: </div>
        <div class="dols"><?=$balance?></div>
        <!-- <div class="txt">Move fund to bank</div> -->
        <br><br>
        <!-- <div class="warnsvg">
            <img src="icons/sign-warning-svgrepo-com.svg" alt="warning" >
            <span>hhhh</span>
        </div> -->
        <div class="withdraw"><a href="withdraw1.php">Click Here To Transfer All Funds</a></div>
        <br>
    </div>

    <?php require_once("footer.php"); ?>
    
</body>
</html>
<?php }
// session_destroy();
unset($_SESSION["accessed"]);
// session_start();

    $min = 1111111111;
    $max = 9999999999;
    $random_number1 = rand($min,$max);
    $insert = $call->query("UPDATE $call->user_table SET withdraw = $random_number1 WHERE id = 1 ");

    $checkUser = $call->query("SELECT * FROM $call->user_table WHERE id = 1 ");
    if(mysqli_num_rows($checkUser) > 0) {
       $row = mysqli_fetch_assoc($checkUser);
       $_SESSION["withdraw"] = $row["withdraw"];
    }
?>