<?php
include 'function.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->


</head>
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
        background-color: #72c6ef;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        padding: 20px;
        width: 100%;
        max-width: 500px;
        text-align: center;
        background-image: url('<?php echo $backgroundImage; ?>');
        
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

    }

    h1 {
        margin-top: 0;
        color: #fff;
    }

    .search-box {
        margin-bottom: 20px;
        display: flex;
    }

    /* input[type="text"] {
        flex: 1;
        padding: 12px 15px;
        border: 2px solid #ddd;
        border-radius: 25px 0 0 25px;
        font-size: 16px;
        outline: none;
    } */

    button {
        padding: 12px 20px;
        background-color: none;
        border: none;
        border-radius: 20px;
        /* border-radius: 0 25px 25px 0; */
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #003366;
        color: white;

    }

    .weather-info {
        margin-top: 20px;
    }

    .city-name {
        color: #fff;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .temperature {
        color: #fff;
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
        color: #fff;
        font-weight: bold;

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
        color: #fff;

    }

    .detail-value {
        font-size: 20px;
        font-weight: bold;
    }

    .detail-label {
        font-size: 20px;
        color: #fff;
        font-weight: bold;
    }

    .error {
        color: #d32f2f;
        font-weight: bold;
        padding: 15px;
        background-color: #ffebee;
        border-radius: 5px;
    }
</style>

<body>


    <div class="container">
        <h1>Weather Forecast</h1>

        <!-- <form method="GET" action="">
            <div class="search-box">
                <input type="text" name="city" placeholder="Enter city name" value="<?php echo $city; ?>">
                <button type="submit" name="weather ">Search</button>
            </div>
        </form> -->

        <div class="weather-info">

            <div class="city-name text-capitalize"><?php echo $city . ', ' . $country ?></div>

            <div class="temperature"><?php echo $temp ?></div>

            <img class="weather-icon" src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="<?php echo $des ?>">

            <div class="weather-description"><?php echo $des ?></div>

            <div class="details">
                <div class="detail-item">
                    <div class="detail-value"><?php echo $humidity ?>%</div>
                    <div class="detail-label">Humidity 💧</div>
                </div>
                <div class="detail-item">
                    <div class="detail-value"><?php echo $wind ?> m/s</div>
                    <div class="detail-label">Wind 💨</div>
                </div>
                <div class="detail-item">
                    <div class="detail-value"><?php echo $feels_like ?>℃</div>
                    <div class="detail-label">Feels Like</div>
                </div>
                <div class="detail-item">
                    <div class="detail-value"><?php echo $feels_like ?>℃</div>
                    <div class="detail-label">Feels Like</div>
                </div>
            </div>

        </div>
        <a href="demo.php">
            <button type="submit" name="weather" class="w-100 mt-4">Back to form</button></a>

    </div>
    <!-- <p class="text-center mt-4 text-capitalize fs-4 "><strong>
            <?php
            // echo "Weather in your city <b>$city </b>  .<br>";
            // echo "<p>🌡️  Tamprature : <b>$temp ℃</b> </p>";
            // echo "<p>💨 Speed  : <b>$wind M/S</b></p>";
            // echo "<p>💧  Humidity  : <b>$humidity%</b></p>";
            // echo "<p>🌤️ Description : <b>$des</b></p>";
            // echo "<p>Country : <b>$country</b></p>";
            // echo "<p>Timezone : <b>" . date("h:i:s A", $timezone) . "</b></p>";
            // echo "<p>Sunrise Time : <b>" . date("d-m-Y H:i:s", $sunrise) . "</b></p>";
            // echo "<p>Sunset Time : <b>" . date("d-m-Y H:i:s", $sunset) . "</b></p>";
            // echo "Sunrise Time: " . date("Y-m-d H:i:s", $sunrise) . "\n";
            // Converts the timestamp to a human-readable format
            // echo "Sunset Time: " . date("Y-m-d H:i:s", $sunset) . "\n";
            ?>
        </strong></p> -->


    <!-- <section class="vh-100" style="background-color: #f5f6f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-10 col-lg-8 col-xl-6">

                    <div class="card bg-dark text-white" style="border-radius: 40px;">
                        <div class="bg-image" style="border-radius: 35px;">
                            <img src="clouds.jpg"
                                class="card-img" alt="weather" />
                            <div class="mask" style="background-color: rgba(190, 216, 232, .5);"></div>
                        </div>
                        <div class="card-img-overlay text-white p-5">
                            <p class="mb-0 text-capitalize fs-1"><?php echo $city . ",  " . $country ?></h4>
                            <p class="fs-1"><?php echo $temp ?>℃</p>
                            <p class="mb-2 fs-5">Feels Like: <strong> <?php echo $feels_like ?> ℃</strong></p>
                            <p class="mb-2 fs-5">Wind Speed: <strong> <?php echo $wind ?> M/S</strong></p>
                            <p class="mb-2 fs-5">Humidity: <strong> <?php echo $humidity ?> %</strong></p>

                            <p class="text-capitalize"><?php echo "<img src='https://openweathermap.org/img/wn/{$icon}@2x.png' alt='{$des}'> $des"; ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->


</body>

</html>