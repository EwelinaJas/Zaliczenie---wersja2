<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Newsletter - zapisz się!</title>
    <meta name="description" content="Używanie PDO - zapis do bazy MySQL">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    <ul>
        <li><a class="active" href="list.php">Lista użytkowników</a></li>
        <li><a href="index.php">Dodaj użytkownika</a></li>
        <li style="float:right"><a class="active" href="admin.php">Zaloguj się</a></li>
        <li style="float:right"><a class="active" href="logout.php">Wyloguj się</a></li>
    </ul>
    <div class="container">

        <header>
            <h1>Dodawanie użytkownika</h1>
        </header>

        <main>
            <article>
                <form method="post" action="save.php">
                    <label>Proszę podaj adres e-mail
                        <input type="email" name="email" <?= isset($_SESSION['given_email']) ? 'value="' . $_SESSION['given_email'] . '"' : '' ?>>
                    </label>
                    <input type="submit" value="Zapisz się!">
					
					<?php
					if (isset($_SESSION['given_email'])) {
						echo '<p>To nie jest poprawny adres!</p>';
						unset($_SESSION['given_email']);
					}
					?>
					
                </form>
            </article>
        </main>

    </div>
</body>
</html>