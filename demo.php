<?php
include "function.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            background-color: rgb(255, 255, 255);
        }

        .container {
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(0, 0, 0);
        }

        .container>form>input>.form-control {
            box-shadow: none;
        } */

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #72c6ef, #004e8f);

            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Container for the form */
        .container {
         
            /* text-align: center;
            background-image: url('weather3.jpg');
            background-size: cover;
            background-position: center; */
            /* background-attachment: fixed; */
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            padding: 30px;
            text-align: center;
        }


        /* Heading */
        h2 {
            color: #004e8f;

            font-size: 32px;
            margin-bottom: 20px;
        }

        /* Input field styles */
        input[type="text"],
        [type="email"] {
            width: 80%;
            margin: 10px 0;
            color: #000;
            border: 2px solid rgb(20, 128, 24);
            border-radius: 4px;
            font-size: 18px;
            background: transparent;
            flex: 1;
            padding: 12px 15px;
            outline: none;
        }

        /* Button styles */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Weather result styles */
        .weather-result {
            margin-top: 20px;
        }

        .weather-result h3 {
            color: #fff;
        }

        .weather-result p {
            font-size: 18px;
            color: #555;
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center fw-bold">Get Weather Information</h2>
        <?php if (isset($message)) {
            echo "<div class='alert alert-info'>$message</div>";
        } ?>
        <form action="result.php" method="post">

            <div class="mb-3">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Enter your Name" >
            </div>

            <div class="mb-3">
                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Enter your Email">
            </div>

            <div class="mb-3">
                <label for="city"></label>
                <input type="text" id="city" name="city" placeholder="Enter City Name">
            </div>
            <button type="submit" name="weather" class="w-100">Get Weather</button>
        </form>

    </div>


    <!-- <div class="container mt-3 bg-light p-3">
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
            </strong></p>
    </div> -->
    <!-- <section class="vh-100" style="background-color: #f5f6f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-10 col-lg-8 col-xl-6">

                    <div class="card bg-dark text-white" style="border-radius: 40px;">
                        <div class="bg-image" style="border-radius: 35px;">
                            <img src="foad.jpg"
                                class="card-img" alt="weather" />
                            <div class="mask" style="background-color: rgba(190, 216, 232, .5);"></div>
                        </div>
                        <div class="card-img-overlay text-white p-5">
                            <h4 class="mb-0">Juneau, Alaska, US</h4>
                            <p class="display-2 my-3">1.28°C</p>
                            <p class="mb-2">Feels Like: <strong>-1.08 °C</strong></p>
                            <h5>Snowy</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
</body>

</html>