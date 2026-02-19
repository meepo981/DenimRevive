<?php
$pageTitle = "Aanvraag | Denim Revive";
include "includes/header.php";
?>

<div class="container section">
    <div style="max-width: 600px; margin: 0 auto;">
        <h1>Reparatie Aanvragen</h1>
        <p style="margin-top: 50px;">Vul het formulier in en wij nemen zo snel mogelijk contact met u op.</p>

        <?php if (isset($_GET["status"]) && $_GET["status"] == "success"): ?>
            <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                Bedankt! Uw aanvraag is succesvol verzonden.
            </div>
        <?php endif; ?>

        <form action="process-form.php" method="POST" class="card">
            <div class="form-group">
                <label for="naam">Naam *</label>
                <input type="text" id="naam" name="naam" required>
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telefoon">Telefoonnummer</label>
                <input type="tel" id="telefoon" name="telefoon">
            </div>

            <div class="form-group">
                <label for="dienst">Type Dienst</label>
                <select id="dienst" name="dienst">
                    <option value="reparatie">Reparatie</option>
                    <option value="inkorten">Inkorten</option>
                    <option value="tapering">Tapering</option>
                    <option value="custom">Customisatie / Overig</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bericht">Bericht / Beschrijving *</label>
                <textarea id="bericht" name="bericht" rows="5" required placeholder="Beschrijf hier wat er moet gebeuren..."></textarea>
            </div>

            <button type="submit" class="btn btn-accent" style="width: 100%;">Versturen</button>
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>
