<?php
include 'config.php';

$apiKey = "95a72c423b3e3a08ea34b3a74018e275";
$city = isset($_POST["city"]) ? $_POST["city"] : "rishikesh";
// print_r($city);

if (!empty($city)) {
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=$apiKey&units=metric";

    $resp = @file_get_contents($url);
    $data = json_decode($resp, true);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    if ($data) {
        $temp = $data["main"]["temp"];
        $des = $data["weather"][0]["description"];
        $wind = $data["wind"]["speed"];
        $humidity = $data["main"]["humidity"];
        $feels_like = $data["main"]["feels_like"];
        $timezone_offset = $data["timezone"]; // in seconds
        $country = $data["sys"]["country"];
        $sunrise = $data["sys"]["sunrise"];
        $sunset = $data["sys"]["sunset"];
        $weather = $data['weather'][0]['main'];
        $icon = $data['weather'][0]['icon'];
        $pressure = $data['main']['pressure'];

        $sunrise_time = gmdate("H:i:s", $sunrise + $timezone_offset);

        $sunset_time = gmdate("H:i:s", $sunset + $timezone_offset);

        $current_time = gmdate("Y-m-d H:i:sa", time() + $timezone_offset);
    } else {
        $temp = "Weather data is not availble for <b>$city</b>";
    }


    if (isset($_POST["weather"])) {
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        $city = $_POST['city'];

        // $sql = "INSERT INTO `demo`(`name`, `email`, `city`, `temp`, `desc`, `wind`, `humidity`) VALUES ('$name', '$email','$city','$temp', '$des', '$wind', '$humidity')";
        $sql = "INSERT INTO `demo`(`city`) VALUES ('$city')";

        $check =  mysqli_query($conn, $sql);

        if ($check) {
            $message = "<p class='text-capitalize'>Thank you and this is your city <b>$city</b></p>";
        } else {
            $message = "Error saving data. Please try again.";
        }
        // $check->close();
    }
} else {
    $temp = 'City is not available';
}
if (isset($data)) {
    // $weatherMain = $weather;

    switch ($weather) {
        case 'Clear':
            $backgroundImage = 'clear.jpg';
            break;
        case 'Rain':
        case 'Drizzle':
            $backgroundImage = 'rainy.jpg';
            break;
        case 'Clouds':
            $backgroundImage = 'cloud.jpg';
            break;
        case 'Snow':
            $backgroundImage = 'snow.jpg';
            break;
        case 'Thunderstorm':
            $backgroundImage = 'thunderstorm.jpg';
            break;
        case 'Mist':
        case 'Fog':
        case 'Haze':
            $backgroundImage = 'foggy.jpg';
            break;
        default:
            $backgroundImage = 'clear.jpg';
            break;
    }
}
