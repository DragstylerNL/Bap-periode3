<?php
    $gewicht = $_REQUEST["gewicht"];
    $lengte =  $_REQUEST["lengte"];
    BMIcalc($gewicht, $lengte);

function BMIcalc($gewicht, $lengte){
    $lengte = $lengte / 100;

    $BMI = $gewicht / ($lengte * $lengte);

    $BMI = round($BMI,1);


    echo "Uw lengte in meters: $lengte<br>";
    echo "Uw gewicht is: $gewicht<br>";
    echo "Uw BMI is $BMI<br>";
}