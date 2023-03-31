<?php 

class registation{

    public static function getreg($teamname,$institution,$year,$department,$teamlead_name,$teamlead_mail,$teamlead_contact,$team_members,$memberone_name,$memberone_year,$memberone_dep,$membertwo_name,$membertwo_year,$membertwo_dep,$memberthree_name,$memberthree_year,$memberthree_dep,$memberfour_name,$memberfour_year,$memberfour_dep,$memberfive_name,$memberfive_year,$memberfive_dep,$domain_selected,$problem_statement,$project_title){

        $conn=database::getdatabase();

        $sql="INSERT INTO `registration` (`teamname`,`institution`,`teamlead_year`,`teamlead_dept`,`teamlead_name`,`teamlead_mail`,`teamlead_contact`,`team_members`,`memberone_name`,`memberone_year`,`memberone_dep`,`membertwo_name`,`membertwo_year`,`membertwo_dep`,`memberthree_name`,`memberthree_mail`,`memberthree_dep`,`memberfour_name`,`memberfour_year`,`memberfour_dep`,`memberfive_name`,`memberfive_year`,`memberfive_dep`,`domain_selected`,`problem_statement`,`project_title`)
        VALUES('$teamname','$institution','$teamlead_year','$teamlead_dept','$teamlead_name','$teamlead_mail','$teamlead_contact','$team_members','$memberone_name','$memberone_year','$memberone_dep','$membertwo_name','$membertwo_year','$membertwo_dep','$memberthree_name','$memberthree_year','$memberthree_dep','$memberfour_name','$memberfour_year','$memberfour_dep','$memberfive_name','$memberfive_year','$memberfive_dep','$domain_selected','$problem_statement','$project_title')";
        
        if($conn->query($sql) === true){
            return true;
        }
        else{
            return false;
        }   
    }




}
