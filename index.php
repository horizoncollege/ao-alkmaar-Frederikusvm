<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.png">

</head>
<body>

    <!-- Titel en omschrijving tekstbalk. -->
    <div id="dashboard">
        <h1>Welkom op het projectendashboard</h1>
        <p>Hierop kunt U de projecten gemaakt door Frederikus van Miert gedurende zijn opleiding zien</p>
        <p>Wanneer U op de afbeeldingen klikt komt U op de pagina van dat project terecht</p>
        <p>Hartelijk bedankt voor Uw bezoek!</p>
    </div>

    <div class="grid"> <!-- De grid-div is de flexboxcontainer voor alle knoppen naar de projecten -->

        <div class="applicatievlak"> <!-- De link naar PHP galgje -->
            <div class="applicatieafbeelding" id="galgje">
                <a href="./projecten/galgje/index.php" target="_blank"><img src="./images/galgje.png" title="galgje"></a>
            </div>
            <h2><a href="./projecten/galgje/index.php" target="_blank">Galgje</a></h2>
        </div>

        <div class="applicatievlak"> <!-- De link naar PHP steen, papier schaar -->
            <div class="applicatieafbeelding" id="steenpapierschaar">
                <a href="./projecten/steenpapierschaar/index.html" target="_blank" title="Steen, papier schaar"><img src="./images/sps.png"></a>
            </div>
            <h2><a href="./projecten/steenpapierschaar/index.html" target="_blank">Steen, Papier Schaar</a></h2>
        </div>

        <div class="applicatievlak"> <!-- De link naar het burgerschap politieke partij project  -->
            <div class="applicatieafbeelding" id="burgerschap">
                <a href="./projecten/burgerschap/index.php" target="_blank" title="burgerschap"><img src="./images/burgerschap.png"></a>
            </div>
            <h2><a href="./projecten/burgerschap/index.php" target="_blank">Burgerschap</a></h2>
        </div>

        <div class="applicatievlak"> <!-- Het eerste HTML project dat wij gemaakt hebben. De portfoliosite -->
            <div class="applicatieafbeelding" id="overmij">
                <a href="./projecten/overmij/index.html" target="_blank" title="Over mij"><img src="./images/person.png"></a>
            </div>
            <h2><a href="./projecten/overmij/index.html" target="_blank">Over mij</a></h2>
        </div>

    </div>

</body>
</html>