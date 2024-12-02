<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktujte Nás</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Kontaktujte Nás</h1>
    </header>
    <main>
        <form action="send-email.php" method="POST">
            <label for="name">Jméno:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Zpráva:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Odeslat</button>
        </form>
    </main>
</body>
</html>
