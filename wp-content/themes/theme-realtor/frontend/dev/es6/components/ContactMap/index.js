const ContactMap = () => {

    if(document.getElementById('contactMap')) {    

        const mapLocationData = main.contact_page_map_location;
        const mapLocationLatitude = mapLocationData.location_settings_contact_page_office_location_group_latitude;
        const mapLocationLongitude = mapLocationData.location_settings_contact_page_office_location_group_longitude;
        const mapLocationAddress = mapLocationData.location_settings_contact_page_office_location_group_address;

        // Contact Map
        const contactMap = L.map('contactMap').setView([`${mapLocationLatitude}`, `${mapLocationLongitude}`], 13);
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(contactMap);
    
        L.marker([`${mapLocationLatitude}`, `${mapLocationLongitude}`]).addTo(contactMap).bindPopup(`${mapLocationAddress}`).openPopup();
    }
}

export default ContactMap;