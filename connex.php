<?php

    $conn=mysql_connect("127.0.0.1","root","");
    if(!$conn){

        echo "problem to connect";

    }
    else{
        mysql_select_db("billing",$conn);
    }
?>