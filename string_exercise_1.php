<?php 
    $firstname = "mayank";
    $middlename = "rajendraprasad";
    $lastname = "saini";

    $namearr = array($firstname, $middlename, $lastname);
    $namestr = implode(" ", $namearr);
    $fullname = ucwords($namestr);
    echo $fullname;
?>