<?php 

class database{

    public static $getdatabase=NULL;

    public static function getconnection(){

        if(database::$getdatabase==NULL){

            $server="mysql.selfmade.ninja";
            $username="hackathon";
            $userpass="#hackme007";
            $db_name="hackathon_new";

            $conn=new mysqli($server,$username,$userpass,$db_name);

            if($conn->connection_error==true){
                return false;
            }
            else{
                echo "success";
                database::$getdatabase = $conn;

                

            }
        }
        else{
            return database::$getdatabase;
        }




    }
}