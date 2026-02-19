<?php
$pageTitle = "Denim Revive | Atelier Amsterdam";
include "includes/header.php";
setcookie("my_test_cookie", "hello", time() + 3600, "/");
?>

<section class="hero">
    <div class="hero-bg" id="parallax-bg"></div>
    <div class="container hero-content fade-in">
        <p style="color: var(--accent); letter-spacing: 3px; text-transform: uppercase;">Est. 2026 • Nederland</p>
        <h1>Denim is<br>Forever.</h1>
        <p>Wij geven uw jeans een tweede leven met Japanse precisie en duurzaam vakmanschap.</p>
        <a href="aanvraag.php" class="btn btn-gold">Start Reparatie</a>
    </div>
</section>

<div class="marquee">
    <div class="marquee-content">
        REPARATIE &bull; CUSTOMISATIE &bull; TAPERING &bull; SASHIKO &bull; DENIM REVIVE &bull; AMSTERDAM &bull;
        REPARATIE &bull; CUSTOMISATIE &bull; TAPERING &bull; SASHIKO &bull; DENIM REVIVE &bull; AMSTERDAM &bull;
    </div>
</div>

<section class="section">
    <div class="container">
        <h2 class="section-title">Onze Diensten</h2>

        <div class="services-grid">
            <a href="reparatie.php" class="service-item">
                <img src="assets/img/third.jpg" class="service-img" alt="Repair">
                <div class="service-info">
                    <span class="service-num">01</span>
                    <h3>Reparatie</h3>
                    <p>Onzichtbaar herstel van scheuren.</p>
                </div>
            </a>

            <a href="customisatie.php" class="service-item">
                <img src="assets/img/second.jpg" class="service-img" alt="Custom">
                <div class="service-info">
                    <span class="service-num">02</span>
                    <h3>Customisatie & Rework</h3>
                    <p>Maak uw kledingstuk uniek met Sashiko of patch-work.</p>
                </div>
            </a>

            <a href="tapering.php" class="service-item">
                <img src="assets/img/first.jpg" class="service-img" alt="Tapering">
                <div class="service-info">
                    <span class="service-num">03</span>
                    <h3>Tapering</h3>
                    <p>De perfecte pasvorm, op maat gemaakt.</p>
                </div>
            </a>

            <a href="hardware.php" class="service-item">
                <img src="assets/img/4.jpg" class="service-img" alt="Hardware">
                <div class="service-info">
                    <span class="service-num">04</span>
                    <h3>Hardware</h3>
                    <p>Ritsen, knopen en klinknagels vervangen.</p>
                </div>
            </a>
        </div>

        <div style="margin-top: 50px;width: 45%;">
            <a href="diensten.php" class="btn btn-gold">Alle Diensten Bekijken</a>
        </div>
    </div>
</section>

<!-- Why choose us + Quick answers -->
<section class="section bg-light">
    <div class="container" style="display:flex; gap:40px; align-items:flex-start; flex-wrap:wrap;">
        <div style="flex:1; min-width:280px;">
            <p style="color: var(--accent); text-transform: uppercase; letter-spacing: 2px;">Waarom kiezen voor ons</p>
            <h2 style="font-size: 2.4rem; margin-top: 12px;">Waarom ons atelier?</h2>
            <ul style="margin-top:20px; list-style:none; padding:0; color: var(--text-main);">
                <li style="margin-bottom:12px;"><strong>Meester-kleermakers:</strong> Jarenlange ervaring met denim en vintage machines.</li>
                <li style="margin-bottom:12px;"><strong>Duurzaam vakmanschap:</strong> Reparaties die langer meegaan dan het originele kledingstuk.</li>
                <li style="margin-bottom:12px;"><strong>Japanse technieken:</strong> Sashiko en onzichtbare herstelmethodes voor stijl en stevigheid.</li>
                <li style="margin-bottom:12px;"><strong>Transparante prijzen:</strong> Heldere offertes en eerlijk advies.</li>
                <li style="margin-bottom:12px;"><strong>Snel & betrouwbaarheid:</strong> Korte doorlooptijden en kwaliteitsgarantie.</li>
            </ul>
        </div>

        <div style="flex:1; min-width:280px;">
            <div class="faq-card">
                <h3 class="faq-title">Quick answers</h3>
                <p class="faq-intro">Veelgestelde vragen over onze denim-reparaties. <a href="faq.php" class="faq-link">Bekijk alle FAQ</a>.</p>

                <div class="accordion" id="faq-accordion">
                    <button class="accordion-item" aria-expanded="false">
                        <span class="question">Hoelang duurt een standaard reparatie?</span>
                        <span class="accordion-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="accordion-panel">Meestal 3–7 werkdagen. Drukke periodes kunnen iets langer duren, we geven altijd een indicatie bij aanvraag.</div>

                    <button class="accordion-item" aria-expanded="false">
                        <span class="question">Kunnen jullie garenkleur en dikte matchen?</span>
                        <span class="accordion-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="accordion-panel">Ja — we houden een uitgebreid voorraad garens en passen kleur en dikte aan zodat reparaties zo onopvallend mogelijk zijn.</div>

                    <button class="accordion-item" aria-expanded="false">
                        <span class="question">Bewaren jullie de originele zoom en wassing?</span>
                        <span class="accordion-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="accordion-panel">Waar mogelijk behouden we originele zoom en wassing. Als het niet mogelijk is, stemmen we alternatieven met u af.</div>

                    <button class="accordion-item" aria-expanded="false">
                        <span class="question">Bieden jullie garantie op reparaties?</span>
                        <span class="accordion-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="accordion-panel">Wij geven 6 maanden garantie op constructieve reparaties en 30 dagen op afwerking en zichtbaarheid.</div>
                </div>

                <a href="faq.php" class="btn" style="margin-top:12px; display:inline-block;">Meer FAQ</a>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: #121212;">
    <div class="container" style="display: flex; gap: 60px; align-items: center; flex-wrap: wrap;">
        <div style="flex: 1;">
            <p style="color: var(--accent); text-transform: uppercase; letter-spacing: 2px;">Filosofie</p>
            <h2 style="font-size: 3rem; margin-bottom: 30px;">Repair. Don't Replace.</h2>
            <p style="font-size: 1.1rem; opacity: 0.8; margin-bottom: 30px;">
                Elke kras, elke scheur vertelt een verhaal. In onze studio in Amsterdam behandelen we denim niet als stof, maar als een canvas. Wij gebruiken vintage machines om de authenticiteit van uw kleding te waarborgen.
            </p>
            <a href="over-ons.php" class="btn">Over de Studio</a>
        </div>
           <div style="flex: 1;">
               <img src="assets/img/atelia.jpg" style="width: 100%; border-radius: 4px;" alt="Atelier">
           </div>
    </div>
</section>

<!-- Footer CTA (Book / Request) -->
<section class="section">
    <div class="container">
        <div class="cta-box">
            <h2>Vraag een Reparatie-offerte aan</h2>
            <p>Kunnen we helpen uw favoriete jeans een tweede leven te geven? Stuur foto's en een korte omschrijving — wij reageren binnen 48 uur met een indicatie.</p>
            <a href="aanvraag.php" class="btn btn-gold">Stuur foto & vraag offerte</a>
        </div>
    </div>
</section>

<!-- Testimonials section (styled like screenshot) -->
<section class="section testimonials-section">
    <div class="container">
        <div class="testimonials-header" style="display:flex; justify-content:space-between; align-items:center; gap:20px;">
            <h2>What people say about us</h2>
            <a href="contact.php" class="btn">All reviews</a>
        </div>

        <div class="testimonials-viewport">
            <div class="testimonials-track" id="testimonials">
            <div class="testimonial-card">
                <div class="avatar avatar--1"></div>
                <blockquote>
                    <p class="quote">My 15-year-old Naked & Famous pair had a massive crotch blowout. Instead of tossing them, I brought them to Denim Revive. The reinforcement is invisible, the thread matches perfectly, and they feel even more durable now. I've had them for 2 more years without any issues. That's real craftsmanship.</p>
                    <p class="meta"><strong>Marco F.</strong> — Amsterdam • Denim Collector</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--2"></div>
                <blockquote>
                    <p class="quote">Brought in four pairs for different repairs — one needed seam reconstruction, another had zipper issues, and two needed tapering for the perfect fit. Every single repair exceeded expectations. The attention to detail and respect for the original construction is something you rarely see anymore.</p>
                    <p class="meta"><strong>Sarah K.</strong> — Rotterdam • Fashion Designer</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--3"></div>
                <blockquote>
                    <p class="quote">Found a vintage APC pair at a market with a small tear and loose stitching. Denim Revive not only repaired the damage with sashiko reinforcement but actually enhanced the vintage aesthetic. Now it's my most cherished piece. They understood the soul of the garment.</p>
                    <p class="meta"><strong>Erik v.D.</strong> — Haarlem • Vintage Enthusiast</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--4"></div>
                <blockquote>
                    <p class="quote">I work in sustainable fashion, so I'm picky about who I trust with repairs. Their workshop is clean, organized, and they use ethical practices throughout. The transparency on pricing, timeline, and process is exactly what the industry needs. They're not just fixing jeans — they're building a better culture of consumption.</p>
                    <p class="meta"><strong>Femke B.</strong> — Utrecht • Sustainability Consultant</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--5"></div>
                <blockquote>
                    <p class="quote">As someone who buys expensive denim, I was skeptical about letting anyone near my Momotaro and United Stock Dry Goods pairs. But these guys genuinely know their fabric — they explained exactly what they'd do, how it would hold, and why. The 6-month guarantee gave me peace of mind. Best decision I made.</p>
                    <p class="meta"><strong>Joost M.</strong> — Leiden • Premium Denim Enthusiast</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--6"></div>
                <blockquote>
                    <p class="quote">Requested a custom tapering + reinforced hem work on two pairs. Communication was flawless, turnaround was faster than quoted, and the fitting is perfect — feels like they were designed for me. They even documented the process with photos. Professionalism on another level.</p>
                    <p class="meta"><strong>Thomas P.</strong> — Eindhoven • Tailor & Educator</p>
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="avatar avatar--7"></div>
                <blockquote>
                    <p class="quote">Had a frayed selvedge edge and multiple small holes across the thigh area. Instead of a quick patch job, they performed a careful selective repair using invisible stitching techniques. The result looked so natural that my girlfriend thought I bought new jeans. This is what real denim repair looks like.</p>
                    <p class="meta"><strong>David S.</strong> — Amsterdam • Photographer</p>
                </blockquote>
            </div>
            </div>
        </div>

        <div class="testimonials-dots" id="test-dots" aria-hidden="true"></div>
    </div>
</section>

<!-- Order strip with 10% discount -->
<section class="order-strip">
    <div class="container order-inner">
        <div class="order-left">
            <h2>Order now</h2>
            <p>and get <strong>10% off</strong> your first repair</p>
        </div>
        <form class="order-form" action="contact.php" method="get">
            <input type="text" name="phone" placeholder="Phone *" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <button class="btn btn-gold" type="submit">Send</button>
        </form>
    </div>
</section>

<?php include "includes/footer.php"; ?>

