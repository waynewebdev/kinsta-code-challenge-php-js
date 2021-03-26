<?php 
    $countriesJsonContents = file_get_contents(get_stylesheet_directory_uri()."/countries.json");
    $countries = json_decode($countriesJsonContents, true);
?>
<h2>Countries in PHP</h2>
<ul>
    <li>Country Name: <?php echo $countries[1]["name"]; ?></li>
    <li>Country Alpha-2: <?php echo $countries[1]["alpha-2"]; ?></li>
    <li>Country Numeric: <?php echo $countries[1]["numeric"]; ?></li>
</ul>
<script>
    var countriesJson = <?php echo $countriesJsonContents; ?>; // Pass in json from PHP
</script>
<h2>Countries in JavaScript</h2>
<ul>
    <li id="countryName"></li>
    <li id="countryAlpha"></li>
    <li id="countryNumeric"></li>
</ul>
<script>
    document.getElementById("countryName").innerHTML = "Country Name: " + countriesJson[1].name;
    document.getElementById("countryAlpha").innerHTML = "Country Alpha-2: " + countriesJson[1]["alpha-2"];
    document.getElementById("countryNumeric").innerHTML = "Country Numeric: " + countriesJson[1].numeric;
</script>
