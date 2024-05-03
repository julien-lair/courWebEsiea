class AddressController {
    constructor() {
        this.adresseInput = document.getElementById('adresseInput');
        this.suggestionsList = document.getElementById('suggestionListAdresse');
        this.adresseInput.addEventListener('input', this.handleInput.bind(this));
    }

    handleInput() {
        const inputValue = this.adresseInput.value;
        fetch(`https://api-adresse.data.gouv.fr/search/?q=${inputValue}`)
            .then(response => response.json())
            .then(data => {
                const suggestions = data.features;
                this.displaySuggestions(suggestions);
            })
            .catch(error => console.error('Erreur lors de la récupération des suggestions:', error));
    }

    displaySuggestions(suggestions) {
        this.suggestionsList.innerHTML = ''; // Efface les anciennes suggestions
        let html = "";
        suggestions.forEach(suggestion => {
            html += `<div class="align"><button onclick="addressController.chooseAddress('${suggestion.properties.label}')" type="button" name="button">✔</button><p>${suggestion.properties.label}</p></div>`;
        });
        this.suggestionsList.innerHTML = html;
    }

    chooseAddress(address) {
        document.getElementById("adresseInput").value = address;
        document.getElementById("map").style.display = "block";
        this.displayMap(address);
        this.suggestionsList.innerHTML = "";
    }

    displayMap(address) {
        const mapboxgl = require('mapbox-gl'); // Si vous utilisez Node.js ou un module bundler
        const mapboxSdk = require('@mapbox/mapbox-sdk/services/geocoding');
        const mapboxClient = mapboxSdk({ accessToken: 'pk.eyJ1IjoiZnV6ZTcyIiwiYSI6ImNsMmtxeGkycTA3MGQza3BjcnJ2bTh0ZngifQ.UKGfJ9sG12cWOt2np34dQg' });

        mapboxClient.geocoding.forwardGeocode({
                query: address,
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
                    style: 'mapbox://styles/mapbox/streets-v12',
                    center: feature.center,
                    zoom: 15
                });

                new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
            });
    }

    getMeteo(address) {
        // Fonction getMeteo
    }
}

const addressController = new AddressController();
