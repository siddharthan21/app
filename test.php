<?php
    include 'libs/load.php';?>
    <?php
    // echo isset($_POST['pass']) ;
    // print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);

    if(siginup("sid", "pass ", "sid@abc.com ", "1234567895")){
        echo "sucess";

    }
else{
    echo "no";
}
?>