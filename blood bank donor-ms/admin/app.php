<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Weather App</title>
</head>
<body>
    <div class="app-main">
        <div class="searchInputBox">
            <input type="text" id="input-box" class="input-box" placeholder="Enter City Name" autocomplete="off">
        </div>
        <div class="weather-body">
            <div class="location-details">
                <div class="city" id="city">Amravati, IN</div>
                <div class="date" id="date">10 June (Wednesday), 2020</div>
            </div>
            <div class="weather-status">
                <div class="temp" id="temp">34&deg;C</div>
                <div class="min-max" id="min-max">32&deg;C / 34&deg;C</div>
                <div class="weather" id="weather">Clear</div>
                <div class="img" id="img"></div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>