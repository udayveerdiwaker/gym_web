<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Integration Example</title>
</head>

<body>

    <!-- <button onclick="getWeather()">Get Weather</button>
    <p id="weatherResult"></p> -->

    <script>
        // async function getWeather() {
        //     const apiKey = "95a72c423b3e3a08ea34b3a74018e275"; // Replace with your API key
        //     const city = "haridwar";
        //     const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;

        //     try {
        //         const response = await fetch(url);
        //         const data = await response.json();
        //         document.getElementById("weatherResult").innerText = `Temperature: ${data.main.temp}°C`;
        //     } catch (error) {
        //         console.error("Error fetching data", error);
        //     }
        // }
    </script>



</body>

</html>


<?php
include "config.php";

$apiKey = "95a72c423b3e3a08ea34b3a74018e275"; // Replace with your OpenWeather API Key
$city = isset($_POST["city"]) ? $_POST["city"] : "rishikesh"; // Default city
// echo $city;

if (!empty($city)) {
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=$apiKey&units=metric";



    $response =  @file_get_contents($url);
    // print_r($response);
    // exit; 
    $data = json_decode($response, true);

    if ($response && isset($data["main"]["temp"])) {

        $temp = $data["main"]["temp"];  //  (°C)
        // $weatherInfo = "Temperature in $city: " . $data["main"]["temp"] . "°C";
        $humidity = $data["main"]["humidity"]; //  (%)
        $windSpeed = $data["wind"]["speed"]; // (m/s)
        $weatherDesc = $data["weather"][0]["description"];
        // $city = @$_POST["city"];

    } else {
        $temp = "<div class='alert alert-danger'>Weather data not available for '$city'.</div>";
    }


    if ($response && isset($_POST['weather'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $city = $_POST["city"];

        $sql = "INSERT INTO api (`name`, `email`, `city`, `temperature`, `humidity`, `wind_speed`, `description`) VALUES ('$name', '$email', '$city', '$temp', '$humidity', '$windSpeed', '$weatherDesc')";

        $check = mysqli_query($conn, $sql);

        if ($check) {
            $message = "<p class='text-capitalize'>thank you <b>Mr. $name </b> and this is your city <b>$city</b></p>";
        } else {
            $message = "Error: " . $conn->error;
        }
    }
} else {
    $temp = "Please enter a info.";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(218, 219, 219);
        }

        .container {
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .container>form>input>.form-control {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container mt-3 bg-light p-3">
        <h2 class="text-center">Weather Info</h2>
        <?php if (isset($message)) {
            echo "<div class='alert alert-info'>$message</div>";
        } ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Enter City Name</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <button type="submit" name="weather" class="btn btn-primary w-100">Get Weather</button>
        </form>
        <p class="text-center mt-4 text-capitalize fs-4"><strong>
                <?php
                // echo $weatherInfo;
                echo "<h2>Weather in $city</h2>";
                echo "<p>🌡️ Temperature: <b>$temp °C</b></p>";
                echo "<p>💨 Wind Speed: <b>$windSpeed m/s</b></p>";
                echo "<p>💧 Humidity: <b>$humidity%</b></p>";
                echo "<p>🌤️ Condition: <b>" . ucfirst($weatherDesc) . "</b></p>";
                ?></strong></p>
    </div>
</body>

</html>