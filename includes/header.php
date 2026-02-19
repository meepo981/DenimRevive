<?php if (!isset($pageTitle)) {
    $pageTitle = "Denim Revive";
} ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧵</text></svg>">
</head>

<body>

<header>
    <div class="container nav-wrapper">
        <a href="index.php" class="logo">DenimRevive.</a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="nav-dropdown">
                    <a href="diensten.php">Diensten <span class="dropdown-arrow">▼</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="reparatie.php">Denim Reparatie</a></li>
                        <li><a href="customisatie.php">Customisatie & Rework</a></li>
                        <li><a href="sashiko.php">Sashiko Stitching</a></li>
                        <li><a href="tapering.php">Tapering & Fitting</a></li>
                        <li><a href="hem.php">Hem Repairs & Inkorten</a></li>
                        <li><a href="hardware.php">Hardware Replacement</a></li>
                        <li><a href="diensten-lijst.php">Prijslijst</a></li>
                    </ul>
                </li>
                <li><a href="over-ons.php">Studio</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <a href="aanvraag.php" class="btn btn-gold" style="display: none; @media(min-width:768px){display:block;}">Offerte</a>
    </div>
</header>
<main>
