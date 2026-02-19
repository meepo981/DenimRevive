<?php
$pageTitle = "Contact | Denim Revive";
include "includes/header.php";
?>

<!-- HERO SECTION -->
<section class="section" style="background: linear-gradient(135deg, #0b0c10 0%, #1f2833 100%); padding: 120px 0; position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 2;">
        <p style="color: #d4af37; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; margin-bottom: 15px;">Contact</p>
        <h1 style="font-size: 4rem; margin-bottom: 30px; line-height: 1.1;">Neem contact op</h1>
        <p style="font-size: 1.2rem; max-width: 700px; color: #c5c6c7; line-height: 1.8;">Heb je vragen? Wil je een offerte? Kom langs in onze studio in Amsterdam.</p>
    </div>
</section>

<!-- CONTACT + MAP SECTION -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: stretch;">
            <!-- MAP -->
            <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.4); height: 450px; position: relative;">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
                <div id="map" style="width: 100%; height: 100%;"></div>
                <script>
                    const map = L.map('map').setView([52.3676, 4.9041], 14);
                    
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors',
                        maxZoom: 19
                    }).addTo(map);
                    
                    const marker = L.marker([52.3676, 4.9041]).addTo(map);
                    marker.bindPopup('<strong>Denim Revive</strong><br>Denimweg 42<br>Amsterdam').openPopup();
                </script>
            </div>

            <!-- INFO -->
            <div style="background: linear-gradient(135deg, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0.08) 100%); border: 1px solid rgba(212,175,55,0.3); border-radius: 12px; padding: 50px 40px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h2 style="font-size: 2rem; margin-bottom: 30px; color: #fff;">We Are Located At:</h2>
                    
                    <div style="margin-bottom: 40px;">
                        <h3 style="color: #d4af37; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; font-weight: 600;">Adres</h3>
                        <p style="font-size: 1.3rem; color: #fff; font-weight: 700; margin: 0; line-height: 1.5;">
                            Denimweg 42<br>
                            1011 AB Amsterdam<br>
                            Nederland
                        </p>
                    </div>

                    <div style="margin-bottom: 40px;">
                        <h3 style="color: #d4af37; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; font-weight: 600;">Bel Ons</h3>
                        <a href="tel:+31612345678" style="font-size: 1.3rem; font-weight: 700; color: #fff; text-decoration: none; display: block; margin-bottom: 8px;">+31 6 1234 5678</a>
                        <a href="tel:+31612345679" style="font-size: 1.3rem; font-weight: 700; color: #fff; text-decoration: none; display: block;">1300 847 292</a>
                    </div>

                    <div>
                        <h3 style="color: #d4af37; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; font-weight: 600;">Email</h3>
                        <a href="mailto:info@denimrevive.nl" style="font-size: 1.1rem; color: #fff; text-decoration: none; display: block;">info@denimrevive.nl</a>
                    </div>
                </div>

                <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(212,175,55,0.3);">
                    <h4 style="color: #d4af37; font-weight: 700; margin-bottom: 12px;">Openingstijden</h4>
                    <p style="color: #fff; margin: 6px 0; font-size: 0.95rem;">Maandag - Vrijdag: 09:00 - 18:00</p>
                    <p style="color: #fff; margin: 6px 0; font-size: 0.95rem;">Zaterdag: 10:00 - 16:00</p>
                    <p style="color: #fff; margin: 6px 0; font-size: 0.95rem;">Zondag: Gesloten</p>
                    <p style="color: #999; margin-top: 12px; font-size: 0.9rem; font-style: italic;">Alleen op afspraak</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REQUEST QUOTE SECTION -->
<section class="section" style="background: rgba(20,25,35,0.5);">
    <div class="container">
        <div style="background: linear-gradient(135deg, rgba(212,175,55,0.1) 0%, rgba(212,175,55,0.05) 100%); border: 1px solid rgba(212,175,55,0.3); border-radius: 12px; padding: 60px 40px; text-align: center;">
            <h2 style="font-size: 2.5rem; margin-bottom: 15px;">Klaar voor een offerte?</h2>
            <p style="font-size: 1.1rem; color: #c5c6c7; margin-bottom: 30px;">Stuur je foto's en beschrijving naar ons. We beoordelen je jeans en sturen je in 48 uur een offerte.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="aanvraag.php" class="btn btn-gold" style="padding: 15px 50px; font-size: 1rem;">Stuur Foto's</a>
                <a href="tel:+31612345678" class="btn" style="padding: 15px 50px; font-size: 1rem;">Bel Direct</a>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
