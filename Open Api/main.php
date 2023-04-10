<?php
$city = readline('Enter city name: ');
$countryCode = readline('Enter country code: ');
$key = "864754d9412a35de85e9c2f29f18b702";
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city,$countryCode&appid=$key&units=metric";
$response = file_get_contents($url);
$weather = json_decode($response,true);

//var_dump($weather);

$temperature = $weather['main']['temp'];
$maxTemperature = $weather['main']['temp_max'];
$wind = $weather['wind']['speed'];
$feelsLike = $weather['main']['feels_like'];
$description = $weather['weather'][0]['description'];

echo 'Today in '.$city.' current temperature is '.$temperature.' degrees'.PHP_EOL;
echo 'Todays weather description '.$description.PHP_EOL;
echo 'Maximum temperature today will be '.$maxTemperature.' degrees'.PHP_EOL;
echo 'Feels like '.$feelsLike.' degrees.'.PHP_EOL;
echo 'Wind speed today: '.$wind.PHP_EOL;
