
    // Initialize the map centered on Agadir, Morocco
    var map = L.map('map').setView([30.427755, -9.598107], 15);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a custom marker for your office location
    var officeIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/447/447031.png',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -32]
    });

    // Marker for your office (using same coordinates as above)
    L.marker([30.427755, -9.598107], {icon: officeIcon}).addTo(map)
        .bindPopup(`
            <b>Notaire Office</b><br>
            98, Imm (AFENSOU) Angle Bd. Hassan I<br>
            Rue EI Ghazali, 2ème étage, N°3<br>
            Dakhla, Agadir 80000
        `)
        .openPopup();