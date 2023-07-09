<?php
function load_templete($name) {
    include $_SERVER["DOCUMENT_ROOT"]."/app/templete/$name.php";

} 

function valid_login($username,$password){
    
    if($username =="sid@abc.com" and $password =="12345"){
        return true;
    }
    else{
        return false;
    }
}
?>