<?php

$db_host		= "localhost";
$db_user		= "root";
$db_pass		= "";
$db_database	= "bicteinfoo";


$db = new PDO("mysql:host=".$db_host.";dbname=".$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$con = new mysqli($db_host,$db_user,$db_pass,$db_database);

class App {   
    public static function message($type,$message,$code=''){
        if($type=='error'){
            return '<div class="text text-danger" text ="red">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }else{
             return '<div class="text text-success" text ="green">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }
    }
}
    function get($val){
       return @$_GET[$val];
    }