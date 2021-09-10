const AreasWeServe = () => {

    if(document.getElementById('areasMap')) {

        const myAPIKey = main.geoapify_Key;
        const accentColor = main.accent_color;
        const areasLocation = main.areas_location;
        const areasMap = L.map('areasMap').setView([`${areasLocation[1].location_settings_areas_location_repeater_areas_latitude}`, `${areasLocation[1].location_settings_areas_location_repeater_areas_longitude}`], 10);

        drawAreas(areasLocation, myAPIKey, areasMap, accentColor);
        drawAreasPopups(areasLocation, areasMap);

        // // L.polygon([[25.7297212, -80.2493478], [25.7117442, -80.3133911], [25.667742, -80.3244515], [25.6923175, -80.1757183]], {color: '#F44E65', weight: 3}).addTo(areasMap);
    }
}

const drawAreas = (areasLocation, myAPIKey, areasMap, accentColor) => {

        // Retina displays require different mat tiles quality
        const isRetina = L.Browser.retina;

        const baseUrl = "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey={apiKey}";
        const retinaUrl = "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}@2x.png?apiKey={apiKey}";

        // Add map tiles layer. Set 20 as the maximal zoom and provide map data attribution.
        L.tileLayer(isRetina ? retinaUrl : baseUrl, {
            attribution: 'Powered by <a href="https://www.geoapify.com/" target="_blank">Geoapify</a> | © OpenStreetMap <a href="https://www.openstreetmap.org/copyright" target="_blank">contributors</a>',
            apiKey: myAPIKey,
            maxZoom: 20,
            id: 'osm-bright',
        }).addTo(areasMap);

        areasLocation.forEach(aLocation => {
            fetch(`https://api.geoapify.com/v1/isoline?lat=${aLocation.location_settings_areas_location_repeater_areas_latitude}&lon=${aLocation.location_settings_areas_location_repeater_areas_longitude}&type=time&mode=transit&range=1800&apiKey=${myAPIKey}`).then(data => data.json()).then(geoJSONFeatures => {
            
                L.geoJSON(geoJSONFeatures, {
                style: () => {
                    return {
                        stroke: true,
                        color: `${accentColor}`,
                        weight: 3,
                        opacity: 0.7,
                        fill: true,
                        fillColor: `${accentColor}`,
                        fillOpacity: 0.5,
                        smoothFactor: 0.9,
                        interactive: true
                    };
                }
                }).addTo(areasMap);
            });
        })
}

const drawAreasPopups = (areasLocation, areasMap) => {

    areasLocation.forEach(aL => {
        const locationLink = aL.location_settings_areas_location_repeater_areas_link.url;
        let marker = L.marker([`${aL.location_settings_areas_location_repeater_areas_latitude}`, `${aL.location_settings_areas_location_repeater_areas_longitude}`]).addTo(areasMap);
        let popup = new L.Popup({ autoClose: false, closeOnClick: false })
                    .setContent(`${aL.location_settings_areas_location_repeater_areas_name}`)
                    .setLatLng([`${aL.location_settings_areas_location_repeater_areas_latitude}`, `${aL.location_settings_areas_location_repeater_areas_longitude}`]);

                    
        marker.bindPopup(popup).openPopup();

        L.DomEvent.on(popup._contentNode, 'click', (event) => {
            event.stopPropagation();

            window.location.href = locationLink;
        });
    });
}

export default AreasWeServe;