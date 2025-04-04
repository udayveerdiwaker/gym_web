<?php
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #72c6ef, #004e8f);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            padding: 30px;
            text-align: center;
        }

        h1 {
            margin-top: 0;
            color: #004e8f;
        }

        .search-box {
            margin-bottom: 20px;
            display: flex;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 25px 0 0 25px;
            font-size: 16px;
            outline: none;
        }

        button {
            padding: 12px 20px;
            background-color: #004e8f;
            color: white;
            border: none;
            border-radius: 0 25px 25px 0;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #003366;
        }

        .weather-info {
            margin-top: 20px;
        }

        .city-name {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .temperature {
            font-size: 72px;
            font-weight: bold;
            margin: 20px 0;
            position: relative;
        }

        .temperature::after {
            content: "°C";
            position: absolute;
            font-size: 30px;
            top: 10px;
        }

        .weather-description {
            font-size: 20px;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .weather-icon {
            width: 100px;
            height: 100px;
        }

        .details {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .detail-item {
            text-align: center;
        }

        .detail-value {
            font-size: 20px;
            font-weight: bold;
        }

        .detail-label {
            font-size: 14px;
            color: #666;
        }

        .error {
            color: #d32f2f;
            font-weight: bold;
            padding: 15px;
            background-color: #ffebee;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Weather Forecast</h1>

        <form method="GET" action="">
            <div class="search-box">
                <input type="text" name="city" placeholder="Enter city name" value="<?php echo $city; ?>">
                <button type="submit" name="weather ">Search</button>
            </div>
        </form>

        <div class="weather-info">
            <!-- <?php if ($error): ?> -->
            <!-- <div class="error"><?php echo $error; ?></div> -->
            <div class="city-name"><?php echo $city . ', ' . $country ?></div>

            <div class="temperature"><?php echo $temp ?></div>

            <img class="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon ?>@1x.png" alt="<?php echo $des ?>">

            <div class="weather-description"><?php echo $des ?></div>

            <div class="details">
                <div class="detail-item">
                    <div class="detail-value"><?php echo $humidity ?>%</div>
                    <div class="detail-label">Humidity</div>
                </div>
                <div class="detail-item">
                    <div class="detail-value"><?php echo $wind ?> m/s</div>
                    <div class="detail-label">Wind</div>
                </div>
                <div class="detail-item">
                    <div class="detail-value"><?php echo $pressure ?> hPa</div>
                    <div class="detail-label">Pressure</div>
                </div>
            </div>
        <?php endif; ?>
        </div>

        <?php
// Set default background
$backgroundImage = 'default-bg.jpg';

if ($weatherData && !$error) {
    $weatherMain = strtolower($weatherData['weather'][0]['main']);
    
    switch ($weatherMain) {
        case 'clear':
            $backgroundImage = 'sunny-bg.jpg';
            break;
        case 'rain':
        case 'drizzle':
            $backgroundImage = 'rainy-bg.jpg';
            break;
        case 'clouds':
            $backgroundImage = 'cloudy-bg.jpg';
            break;
        case 'snow':
            $backgroundImage = 'snow-bg.jpg';
            break;
        case 'thunderstorm':
            $backgroundImage = 'storm-bg.jpg';
            break;
        case 'mist':
        case 'fog':
        case 'haze':
            $backgroundImage = 'foggy-bg.jpg';
            break;
    }
}
?>
    </div>