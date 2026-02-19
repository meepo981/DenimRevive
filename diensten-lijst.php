<?php
$pageTitle = "Prijslijst | Denim Revive";
include "includes/header.php";
?>
<!-- 
<section class="hero" style="padding: 60px 0; min-height: auto; display: flex; align-items: center; justify-content: center;">
    <div class="hero-bg" style="background: #0b0c10; filter: brightness(1);"></div>
</section> -->

<section class="section" style="padding: 200px 0; min-height: auto; display: flex; align-items: flex-end; justify-content: flex-end;">
    <div class="container">
        <div style="text-align: right; margin-bottom: 40px;">
            <p style="color: var(--accent); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">Onze Diensten</p>
            <h2 style="font-size: 2.2rem; margin-bottom: 10px;">Denim Reparatie & Services</h2>
            <h2 style="font-size: 2.2rem; margin-bottom: 10px;">Van subtiele herstelwerkzaamheden-</h2>
            <h2 style="font-size: 2.2rem; margin-bottom: 10px;">tot volledige transformaties.</h2>
            <p style="color: #d5d5d5;padding: 110px; max-width: 600px; margin: 0 auto; font-size: 1rem;"></p>
        </div>

        <div class="services-showcase" style="grid-template-columns: repeat(2, 1fr);">
            <div class="service-detailed">
                <a href="reparatie.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Crotch Repair.png" alt="Crotch Repair">
                    </div>
                </a>
                <h3><a href="reparatie.php" style="text-decoration: none; color: inherit;">Crotch Repair</a></h3>
                <p class="service-desc">Onzichtbare versterking van het kruis met matching garen en Japanse technieken.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 5-7 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Middel</div>
                </div>
                <div class="service-price">€35 - €65</div>
            </div>

            <div class="service-detailed">
                <a href="customisatie.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Rits Vervangen.png" alt="Rits Vervangen">
                    </div>
                </a>
                <h3><a href="customisatie.php" style="text-decoration: none; color: inherit;">Rits Vervangen</a></h3>
                <p class="service-desc">YKK premium ritsen installatie. Perfecte match met origineel design.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 3-5 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Laag</div>
                </div>
                <div class="service-price">€20 - €45</div>
            </div>

            <div class="service-detailed">
                <a href="hem.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Original Hem.png" alt="Original Hem">
                    </div>
                </a>
                <h3><a href="hem.php" style="text-decoration: none; color: inherit;">Original Hem / Inkorten</a></h3>
                <p class="service-desc">Zoom aanpassing met behoud van originele wassing en karakterisering.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 3-5 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Middel</div>
                </div>
                <div class="service-price">€20 - €50</div>
            </div>

            <div class="service-detailed">
                <a href="sashiko.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Sashiko Stitching.png" alt="Sashiko Stitching">
                    </div>
                </a>
                <h3><a href="sashiko.php" style="text-decoration: none; color: inherit;">Sashiko Stitching</a></h3>
                <p class="service-desc">Japanse brodeertechniek met geometrische patronen en premium garen.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 7-14 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Hoog</div>
                </div>
                <div class="service-price">€75 - €200</div>
            </div>

            <div class="service-detailed">
                <a href="tapering.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Taille Innemen.png" alt="Taille Innemen">
                    </div>
                </a>
                <h3><a href="tapering.php" style="text-decoration: none; color: inherit;">Taille Aanpassing</a></h3>
                <p class="service-desc">Taillewijdte aanpassing met ondersteuning van inseam. Perfecte pasvorm.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 5-7 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Hoog</div>
                </div>
                <div class="service-price">€40 - €75</div>
            </div>

            <div class="service-detailed">
                <a href="hardware.php" style="text-decoration: none; color: inherit; display: block;">
                    <div class="service-img-container">
                        <img src="assets/img/Hardware & Accessoires.png" alt="Hardware & Accessoires">
                    </div>
                </a>
                <h3><a href="hardware.php" style="text-decoration: none; color: inherit;">Hardware & Accessoires</a></h3>
                <p class="service-desc">Knopen, klinknagels, ritsknoppen en overige hardware vervangen.</p>
                <div class="service-specs">
                    <div class="spec-item"><strong>⏱ Doorlooptijd:</strong> 2-4 werkdagen</div>
                    <div class="spec-item"><strong>🔧 Complexiteit:</strong> Laag</div>
                </div>
                <div class="service-price">€15 - €60</div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: rgba(255,255,255,0.02); padding: 50px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <p style="color: var(--accent); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Hoe We Prijzen</p>
                <h2 style="font-size: 1.8rem; margin-bottom: 25px;">Transparante Prijsvorming</h2>
                <ul style="list-style: none; padding: 0; color: #e0e0e0;">
                    <li style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1);">
                        <strong style="color: #d4af37; display: block; margin-bottom: 5px;">📸 Foto Inspectie</strong>
                        Stuur foto's in, wij controleren en geven gratis offerte.
                    </li>
                    <li style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1);">
                        <strong style="color: #d4af37; display: block; margin-bottom: 5px;">💰 Duidelijke Prijs</strong>
                        Geen verborgen kosten. Alles wordt vooraf gecommuniceerd.
                    </li>
                    <li style="margin-bottom: 0;">
                        <strong style="color: #d4af37; display: block; margin-bottom: 5px;">✅ Garantie</strong>
                        6 maanden garantie op constructieve reparaties.
                    </li>
                </ul>
            </div>

            <div>
                <p style="color: var(--accent); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">FAQ Prijzen</p>
                <h2 style="font-size: 1.8rem; margin-bottom: 25px;">Veelgestelde Vragen</h2>
                
                <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px; margin-bottom: 15px;">
                    <strong style="color: #d4af37; display: block; margin-bottom: 5px;">Zijn dit eindprijzen?</strong>
                    <p style="color: #d5d5d5; margin: 0; font-size: 0.9rem;">Dit zijn indicatieve prijzen. Complexere schades kunnen meer kosten. Wij sturen altijd offerte vooraf.</p>
                </div>

                <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
                    <strong style="color: #d4af37; display: block; margin-bottom: 5px;">Hoe betaal ik?</strong>
                    <p style="color: #d5d5d5; margin: 0; font-size: 0.9rem;">50% vooraf, 50% na voltooiing. Betaalmogelijkheden: Ideal, overdracht, PayPal.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding: 60px 0;">
    <div class="container">
        <div class="cta-box" style="text-align: center; background: rgba(212, 175, 55, 0.05); padding: 40px; border-radius: 12px;">
            <h2>Klaar voor een offerte?</h2>
            <p style="margin-bottom: 25px;">Upload foto's van je denim en beschrijf wat je wilt. Wij reageren binnen 24-48 uur.</p>
            <a href="aanvraag.php" class="btn btn-gold">Vraag Offerte Aan</a>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>