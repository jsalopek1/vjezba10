<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brojač riječi</title>
    <link rel="stylesheet" href="style.css">
</head> 

<body>
    <h3>Brojač riječi</h3>
    <form method="post">
        <label for="tekst">Unesite tekst ovdje:</label><br>
        <textarea id="tekst" name="tekst" rows="4" cols="50" required></textarea><br>
        <button type="submit" name="broj">Provjeri</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tekst = trim($_POST['tekst']);
        
        $brojRijeci = str_word_count($tekst);
        
        echo "<h3>Broj rijeci: $brojRijeci</h3>";
    }
    ?>

    <!-- vježba 10 - Brojac-->
</body>
</html>