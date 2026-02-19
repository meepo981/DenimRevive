<?php
// Простая обработка формы без базы данных
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Очистка данных
    $naam = htmlspecialchars(strip_tags(trim($_POST["naam"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $telefoon = htmlspecialchars(strip_tags(trim($_POST["telefoon"])));
    $dienst = htmlspecialchars(strip_tags(trim($_POST["dienst"])));
    $bericht = htmlspecialchars(strip_tags(trim($_POST["bericht"])));

    // Логика сохранения в файл (так как mail() требует настройки SMTP)
    $logEntry = "Datum: " . date("Y-m-d H:i:s") . "\n";
    $logEntry .= "Naam: $naam\n";
    $logEntry .= "Email: $email\n";
    $logEntry .= "Tel: $telefoon\n";
    $logEntry .= "Dienst: $dienst\n";
    $logEntry .= "Bericht: $bericht\n";
    $logEntry .= "-------------------------\n";

    // Сохраняем заявку в текстовый файл
    file_put_contents("aanvragen.txt", $logEntry, FILE_APPEND);

    // Если бы был настроен SMTP:
    // mail("jouwemail@example.com", "Nieuwe aanvraag van $naam", $logEntry);

    // Перенаправление обратно с сообщением об успехе
    header("Location: aanvraag.php?status=success");
    exit();
} else {
    // Если кто-то открыл файл напрямую
    header("Location: index.php");
    exit();
}
