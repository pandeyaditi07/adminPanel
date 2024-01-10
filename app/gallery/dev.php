<?php

function Create(array $data, $tablename)
{
    $colums = ""; //name, email, phone
    $values = ""; //'Gaurav Singh', '826536583', 'email@gmail.com'

    $totalarrays = count($data);
    $NETColumns = $totalarrays - 1;

    foreach ($data as $Columns => $Values) {
        if ($totalarrays == $NETColumns) {
            $colums .= $Columns;
        } else {
            $colums .= "" . $Columns . "" . ",";
        }
    }

    foreach ($data as $Columns => $Values) {
        if ($totalarrays == $NETColumns) {
            $values .= "'" . htmlentities($Values) . "'";
        } else {
            $values .= "'" . htmlentities($Values) . "'" . ",";;
        }
    }

    $Insert = "INSERT INTO $tablename $colums values $values";
    $Query = mysqli_query(DBConnection, $Insert);
    if ($Query == true) {
        return true;
    } else {
        return false;
    }
}



$formdata = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone'],
];

Create($formdata, "contacts");
