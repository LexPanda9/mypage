<?php
require_once("control.php");

 if (!isset($_SESSION["withdraw"])) { header("location:index.php"); } else { 
    
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $nam = $_POST["nam"];
        $msg = "Invalid Token";

        $call->query("UPDATE $call->user_table SET attempts = attempts + 1 WHERE id = 1 ");

        $check_use = $call->query("SELECT * FROM $call->user_table WHERE id = 1 ");
            if(mysqli_num_rows($check_use) > 0) {
                $row = mysqli_fetch_assoc($check_use);
                $check_user = $row["attempts"];
                if ($check_user > 2) {
                    $call->query("UPDATE $call->user_table SET withdraw = null WHERE id = 1 ");
                    $call->query("UPDATE $call->user_table SET attempts = null WHERE id = 1 ");
                    session_destroy();
                    header("location:access.php");
                }
            }
        
    }
     
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
        /* .main{
            display: grid;
            grid-template-columns: 45% 10% 45%;
        } */
        .main div label, .main div p{
            font-size: 12px;
        }
        .main div input{
            width: 400px;
            height: 30px;
            border-width: 3px;
            border-radius: 5px;
            border-style: solid;
            padding-left: 7px;
            border-color: black;
        }
        
        .main .submit{
            width: 100px;
            cursor: pointer;
            font-weight: bolder;
            padding: 0 0 0 0;
        }
        .main input::placeholder{
            color: rgba(128, 128, 128, 0.61);
        }
        form i{
            font-size:15px;
            color: red;
        }
        .dashboard{
            width: 500px;
            max-width: 450px;
            margin: 30px auto 0;
            text-align: center;
            background-color: rgba(128, 128, 128, 0.782);
            border-radius: 20px;
            padding: 5px;
        }
        .dashboard h1{
            font-size: 18px;
            color: red;
        }
        .link2 a{
            /* margin: 0 0 0 20%; */
            text-decoration: none;
            color: white;
        }
        .link2{
            max-width: 700px;
            margin: 0 auto;
        }
        .body img{
            width: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: -2;
            height: 100%;
        }
        @media screen and (max-width:699px) {
            .main div input{
                width: 80%;
            }
            .dashboard{
                width: 90%;
            }
        }
    </style>
</head>
<body>
  <div class="body"><img src="imgs/bank.jpg" alt="img">
    <div class="dashboard"><h1>This Account Will Be Closed As Soon As The Fund Gets To The Destination Account</h1></div>
    <br><br>
    <div class="main"><br>
        
        <div>
            <p>Available Balance</p>
            <p><?=$balance?></p>
        </div>
        <br>
        <div>
            <p>TO</p>
            <form method="post">
                <i>*</i> <input name="nam" type="text" placeholder="Account Number" required autofocus><br>
                <i>*</i> <input name="nam" type="text" placeholder="Routing Number" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Account Name" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Bank Name" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Bank Address" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Swift Code" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Destination/Country" required><br>
                <i>*</i> <input name="nam" type="text" placeholder="Token" required><br>
                <i style="visibility:hidden">*</i> <input style="border-style:none;color:black;" type="text" value="Amount: <?=$balance?>" disabled><br>
                <input class="submit" type="submit" name="submit" value="AUTHORIZE">
                <div style="color:red;font-size:12px;margin-top:10px"><?php if (isset($nam) && !empty($nam)) {
                    echo $msg . " " . 3 - $check_user . " attempts left";
                    } ?></div>
            </form>
        </div>
        <br><br>
    </div><br><br>
    <div class="link2"><a href="dashboard.php">back</a></div>

    <?php require_once("footer.php"); ?>
  </div>
</body>
</html>
<?php } ?>