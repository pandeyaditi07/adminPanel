<?php
function INSERT($sql, $die = false)
{
    $QuerySql = $sql;

    if ($die == true) {
        die($QuerySql);
    }

    $ExecuteSqlQuery = mysqli_query(DBConnection, $QuerySql);
    if ($ExecuteSqlQuery == true) {
        return true;
    } else {
        return false;
    }
}  


function  UPDATE($sql, $die = false){ 
    $QuerySql = $sql; 

    if ($die == true){
        die($QuerySql); 
    } 

    $ExecuteSqlQuery = mysqli_query(DBConnection, $QuerySql);   
    if ($ExecuteSqlQuery == true)  {
        return true; 
    }else{
        return false; 
    }

    
}










