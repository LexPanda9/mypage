<?php
if (!session_id()) {
    ob_start();
    session_start();
}
class myfproject{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "code";
    
    public $user_table = "code";


    public function connect() {
        $link = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
        if(mysqli_select_db($link, $this->database)) {
            return ($link);
        } else {
            echo "Not connected" . mysqli_connect_error();
        }
    }

    public function query($sql) {
        $result = $this->connect();
        $query = mysqli_query($result, $sql);
        if ($query) {
            return ($query);
        } else {
            echo "Database Error" . mysqli_error($result);
        }
    }

    public function access($access_code) {
        $checkUser = $this->query("SELECT * FROM $this->user_table WHERE id = 1 ");
         if(mysqli_num_rows($checkUser) > 0) {
            $row = mysqli_fetch_assoc($checkUser);
            $access_db = $row["code"];
            // $passwordHash = $this->hashpassword($password);
            if ($access_code == $access_db) {
                $_SESSION["accessed"] = $row["id"];
                $wipe = $this->query("UPDATE $this->user_table SET `code` = '".null."' WHERE id = 1 ");
                header("location:dashboard.php");
            } else{
                return "Incorrect access code";
            }
         } else {
             return "Incorrect access code";
         }
    }
}
$call = new myfproject();
$balance = "$2,800,000.00";