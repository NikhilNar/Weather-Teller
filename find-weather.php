<?php

if(isset($_GET['city'])){

    $city=str_replace(' ','',$_GET['city']);
    $forecastpage=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
    $weather;
    $forecastpage;
    $city_exist;
    if($forecastpage===false){
        $city_exist=false;
    }
    else{
        $forecastpage=explode('10 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">',$forecastpage);

        $forecastpage= explode("</span>",$forecastpage[1]);

        $weather=$forecastpage[0];
        $city_exist=true;

    }

}

?>

