<?php
include 'config.php';

$apiKey = "95a72c423b3e3a08ea34b3a74018e275";
$city = isset($_POST["city"]) ? $_POST["city"] : "rishikesh";
// print_r($city);

if (!empty($city)) {
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid=$apiKey&units=metric";

    $resp = @file_get_contents($url);
    $data = json_decode($resp, true);
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    if ($resp) {
        $temp = $data["main"]["temp"];
        $des = $data["weather"][0]["description"];
        $wind = $data["wind"]["speed"];
        $humidity = $data["main"]["humidity"];
        $feels_like = $data["main"]["feels_like"];
        $timezone =  $data["timezone"];
        $country = $data["sys"]["country"];
        $sunrise = $data["sys"]["sunrise"];
        $sunset = $data["sys"]["sunset"];
        $icon = $data['weather'][0]['icon'];
        $pressure = $data['main']['pressure'];
    } else {
        $temp = "<div class='alert alert-danger' role='alert'>Weather data is not availble for <b>$city</b></div>";
    }


    if (isset($_POST["weather"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];

        $sql = "INSERT INTO `demo`(`name`, `email`, `city`, `temp`, `desc`, `wind`, `humidity`) VALUES ('$name', '$email','$city','$temp', '$des', '$wind', '$humidity')";
        $check =  mysqli_query($conn, $sql);

        if ($check) {
            $message = "<p class='text-capitalize'>thank you <b>Mr. $name </b> and this is your city <b>$city</b></p>";
        } else {
            $message = "<div class='alert alert-danger'>Name and City not available</p>";
        }
    }
} else {
    $temp = '<div class="alert alert-danger" role="alert">
            City is not available
            </div>';
}

// Set default background
