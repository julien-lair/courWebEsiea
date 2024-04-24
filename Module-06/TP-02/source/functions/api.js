const adresseInput = document.getElementById('adresseInput');
const suggestionsList = document.getElementById('suggestionListAdresse');

adresseInput.addEventListener('input', function() {
    const inputValue = adresseInput.value;

    // Utilisez l'API BAN pour récupérer les suggestions en fonction de inputValue
    // Exemple d'URL de l'API BAN : https://api-adresse.data.gouv.fr/search/?q=${inputValue}
    // Vous pouvez utiliser fetch() ou une bibliothèque comme axios pour faire la requête.

    // Ensuite, traitez la réponse de l'API et affichez les suggestions.
    fetch(`https://api-adresse.data.gouv.fr/search/?q=${inputValue}`)
        .then(response => response.json())
        .then(data => {
            const suggestions = data.features;
            afficherSuggestions(suggestions);
        })
        .catch(error => console.error('Erreur lors de la récupération des suggestions:', error));
});

function afficherSuggestions(suggestions) {
    suggestionsList.innerHTML = ''; // Efface les anciennes suggestions
    var html = "";
    suggestions.forEach(suggestion => {
        html += '<div class="align"><button onclick="chooseAdresse(\''+suggestion.properties.label+'\')" type="button" name="button">✔</button><p>'+suggestion.properties.label+'</p></div>';
    });
    suggestionsList.innerHTML = html;
}

mapboxgl.accessToken = 'token';
  function affciherMap(adresse){
    const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
    mapboxClient.geocoding
        .forwardGeocode({
            query: adresse,
            autocomplete: false,
            limit: 1
        })
        .send()
        .then((response) => {
            if (
                !response ||
                !response.body ||
                !response.body.features ||
                !response.body.features.length
            ) {
                console.error('Invalid response:');
                console.error(response);
                return;
            }
            const feature = response.body.features[0];

            const map = new mapboxgl.Map({
                container: 'map',
                // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                style: 'mapbox://styles/mapbox/streets-v12',
                center: feature.center,
                zoom: 15
            });

            // Create a marker and add it to the map.
            new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
        });
  }


function chooseAdresse(adresse){
  document.getElementById("adresseInput").value = adresse;
  document.getElementById("map").style.display = "block";
  affciherMap(adresse);

  suggestionsList.innerHTML = "";
}







function getMeteo(adresse){
  const apiKey = 'token'; // Remplacez par votre clé API OpenCage
  const url = `https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(adresse)}&key=${apiKey}`;

  result = "";


    fetch(url)
        .then(response => response.json())
        .then(data => {
          result = data.results[0].geometry.lat + ","+data.results[0].geometry.lng;


          var url = "https://api.weatherapi.com/v1/current.json?key=893957ff806445b5a93130440242503&q="+encodeURI(result);
          console.log(url);
          fetch(url)
              .then(response => response.json())
              .then(data => {
                  const img = data.current.condition.icon;
                  const temp = data.current.temp_c;
                  document.getElementById("imgMeteo").src = img;
                  document.getElementById("meteoTemp").innerHTML = temp + " °C";

              })
              .catch(error => console.error('Erreur lors de la récupération des suggestions:', error));




        })
        .catch(error => console.error('Erreur lors de la récupération des lat long:', error));





  // Ensuite, traitez la réponse de l'API et affichez les suggestions.

  //
}
