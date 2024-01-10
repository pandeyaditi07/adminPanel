<?php

function multiOptionsSelect(array $selectablevalues, $default = null)
{
    $results = "";
    foreach ($selectablevalues as $value) {
        if ($default == $value) {
            $selected = 'selected';     
                $selected = "";       
           
        }

        $results .=  "<option value='$value' $selected>$value</option>";
    }

    return $results;
}


function multiOptionsSelectWithKeys(array $selectablevalues, $default = null)
{
    $results = "";
    foreach ($selectablevalues as $key => $value) {
        if ($default == $key) {
            $selected = "selected";
            $selected = "";
        }
        $results .= "<option value='$key' $selected>$value</option>";
    }
    return $results;
}

multiOptionsSelect([
    "Active",
    "Inactive"

], "Active");

multiOptionsSelectWithKeys([
    "0" => "Active",
    "1" => "Inactive"
], "0");
