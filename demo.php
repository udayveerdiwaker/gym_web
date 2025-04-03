<?php
include "config.php";

$apiKey = "95a72c423b3e3a08ea34b3a74018e275";
$city = isset($_POST["city"]) ? $_POST["city"] : "rishikesh";
// print_r($city);

if (!empty($city)) {
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=$apiKey&units=metric";

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
        $timezone =  $data["timezone"];
        $country = $data["sys"]["country"];
        $sunrise = $data["sys"]["sunrise"];
        $sunset = $data["sys"]["sunset"];
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
            background-color: rgb(255, 255, 255);
        }

        .container {
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(0, 0, 0);
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
                echo "Weather in your city <b>$city </b>  .<br>";
                echo "<p>🌡️  Tamprature : <b>$temp ℃</b> </p>";
                echo "<p>💨 Speed  : <b>$wind M/S</b></p>";
                echo "<p>💧  Humidity  : <b>$humidity%</b></p>";
                echo "<p>🌤️ Description : <b>$des</b></p>";
                echo "<p>Country : <b>$country</b></p>";
                echo "<p>Timezone : <b>" . date("h:i:s A", $timezone) . "</b></p>";
                echo "<p>Sunrise Time : <b>" . date("d-m-Y H:i:s", $sunrise) . "</b></p>";

                echo ("<br>Sunrise time: ");
                echo (date_sunrise(time(), SUNFUNCS_RET_STRING, $sunset));
                echo "<p>Sunset Time : <b>" . date("d-m-Y H:i:s", $sunset) . "</b></p>";
                // echo "Sunrise Time: " . date("Y-m-d H:i:s", $sunrise) . "\n";
                // Converts the timestamp to a human-readable format
                // echo "Sunset Time: " . date("Y-m-d H:i:s", $sunset) . "\n";
                ?>
            </strong></p>
    </div>
</body>

</html>