<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #222;
            /* Dark background */
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #f39c12 !important;
            /* Orange hover effect */
        }
    </style>
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GymName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link btn btn-warning text-dark ms-2"><a class="nav-link" href="#"></a></li>

                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>