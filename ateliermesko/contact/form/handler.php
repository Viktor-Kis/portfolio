<?php

// Ellenőrizzük, hogy a POST kérés érkezett-e
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ellenőrizzük, hogy minden szükséges mezőt megadtak-e
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

        // Adatok tisztítása és elmentése változókba
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $message = htmlspecialchars(trim($_POST["message"]));

        // Ellenőrizzük az e-mail címet
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Beállítjuk az e-mail címzettet és a tárgyat
            $to = "emese.torma.mua@gmail.com";  // Cseréld le a valós e-mail címre
            $subject = "Új üzenet a weboldalról";

            // Üzenet összeállítása
            $email_message = "Név: $name\n";
            $email_message .= "E-mail: $email\n";
            $email_message .= "Üzenet:\n$message";

            // Elküldjük az e-mailt
            $headers = "From: $email\r\n";
			$headers .= "Reply-To: $email\r\n";
			$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            mail($to, $subject, $email_message, $headers, "-f $email");

            // Válasz elkészítése JSON formátumban
            $response = array("status" => "success", "message" => "Az üzenet sikeresen elküldve.");

        } else {
            $response = array("status" => "error", "message" => "Érvénytelen e-mail cím.");
        }

    } else {
        $response = array("status" => "error", "message" => "Hiányzó adatok a űrlapról.");
    }

} else {
    $response = array("status" => "error", "message" => "Érvénytelen kérési típus.");
}

// Válasz kódolása JSON formátumba
header("Content-Type: application/json");
echo json_encode($response);
?>
