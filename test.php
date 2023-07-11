<?php
    include 'libs/load.php';?>
    <?php
    // echo isset($_POST['pass']) ;
    // print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);

    if(!siginup("sissiad", "ssapass ", "sid@issaabc.com ", "124567895")){
        echo "sucsssess";
        echo "gggggggg";
    }
else{
    echo "no";
}
?>