    <?php require_once 'app/views/templates/header.php'; ?>
    <div class="container">
        <h1>Hey, <?= $_SESSION['username'] ?? '' ?> 👋</h1>
        <p><?= date('F jS, Y') ?></p>
    </div>

<section class="home-section">
    <h2>⛅ Current Weather in Toronto</h2>
    <div id="weather-container">Loading...</div>
</section>

<script>
fetch("https://api.open-meteo.com/v1/forecast?latitude=43.65107&longitude=-79.347015&current_weather=true")
  .then(response => response.json())
  .then(data => {
    const temp = data.current_weather.temperature;
    const wind = data.current_weather.windspeed;
    const weatherHtml = `
      <p style="font-size: 1.1rem;">
        Temperature: <strong>${temp}°C</strong><br>
        Wind Speed: <strong>${wind} km/h</strong>
      </p>
    `;
    document.getElementById("weather-container").innerHTML = weatherHtml;
  })
  .catch(() => {
    document.getElementById("weather-container").innerText = "Unable to fetch weather data.";
  });
</script>
