<?php
    include_once("../../includes/inc.main.php");
    
    if(!empty($_POST))
    {
        foreach($_POST as $Key=>$Value)
        {
            $POST = ":::::".$Value;
            $DB->execQuery("INSERT","notification","text","'".addslashes($POST)."'");
            $POST = '['.$Key.']=>'.$Value;
            $DB->execQuery("INSERT","notification","text","'".addslashes($POST)."'");
        }
    }
    
    if(!empty($_GET))
    {
        foreach($_GET as $Key=>$Value)
        {
            $POST = '['.$Key.']=>'.$Value;   
            $DB->execQuery("INSERT","notification","text","'".addslashes($POST)."'");
        }
    }
    
    echo "HOLA";
?>