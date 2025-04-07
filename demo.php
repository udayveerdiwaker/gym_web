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
            /* color: #fff; */
        }

        /* Container for the form */
        .container {

            /* text-align: center;
            background-image: url('weather3.jpg');
            background-size: cover;
            background-position: center; */
            /* background-attachment: fixed; */
            /* background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            padding: 30px;
            text-align: center; */
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


        /* Heading */
        h2 {
            color: #004e8f;

            font-size: 32px;
            margin-bottom: 20px;
        }

        /* Input field styles */
        /* input[type="text"],
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
        } */

        /* Button styles */
        /* button {
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
        } */

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
        <h1>Weather Forecast</h1>
        
            <form action="result.php" method="post">
                <div class="search-box">
                    <input type="text" name="city" placeholder="Enter city name" value="">
                    <button type="submit" name="weather ">Search</button>
                </div>
            </form>
    </div>

<!-- <div class="container">
        <h2 class="text-center fw-bold">Get Weather Information</h2>
        <?php if (isset($message)) {
            echo "<div class='alert alert-info'>$message</div>";
        } ?>
        <form action="result.php" method="post">

            <div class="mb-3">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Enter your Name">
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

    </div> -->


</body>

</html>