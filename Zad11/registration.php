<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZBANY</title>
    <link rel="shortcut icon" href="tlo1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require("db.php");
    ?>
    <img src="tlo1.png" class="tlo_img">
    <img src="tlo1.png" class="tlo_img2">
    <img src="tlo1.png" class="tlo_img3">
    <img src="tlo1.png" class="tlo_img4">
    <img src="tlo1.png" class="tlo_img5">
    <img src="tlo1.png" class="tlo_img6">
    <div class="glowny">
    <header>
        <h1>Dzbany</h1>
    </header>
    <article>
        <h4 class="dolny_pasek">REJESTRACJA</h4>
        <div class="nadformularz">
        <div class="formularz_rejestracja">
            <?php
                if (isset($_POST["login"])) {
                    $login = $_POST["login"];
                    $haslo = $_POST["haslo"];
                    $email = $_POST["email"];
                   
                    $sql = "INSERT INTO uzytkownicy (login, haslo, email) VALUES ('$login', '" . md5($haslo) .
                   "', '$email')";
                    $result = $conn->query($sql);
                    if ($result) {
                    echo "<div class='form'>
                    <h3>Zostałeś pomyślnie zarejestrowany.</h3><br/>
                    <p class='link'>Kliknij tutaj, aby się <a href='login.php'>zalogować</a></p>
                    </div>";
                    } else {
                    echo "<container class='form'>
                    <h3>Nie wypełniłeś wymaganych pól.</h3><br/>
                    <p class='link'>Kliknij tutaj, aby ponowić próbę <a
                   href='registration.php'>rejestracji</a>.</p>
                    </container>";
                    }
                    } else {
                   ?>
                    <form class="form" action="" method="post">
                        <input type="text" class="login-input" name="login" placeholder="Login" required/><br>
                        <input type="password" class="login-input" name="haslo" placeholder="Hasło"required/><br>
                        <input type="text" class="login-input" name="email" placeholder="Adresemail"required/><br>
                        <div>
                            <input type="submit" name="submit" value="Zarejestruj się" class="przyciski">
                            <p class="link"><a href="login.php" class="przyciski">Zaloguj się</a></p>
                        </div>
                    </form>
                   <?php
                    }
            ?>              
        </div>
        </div>
        <div class="dolny_pasek">
        <a href="index.php" class="przyciski">Wróc do strony głównej.</a>
        </div>
    </article>
    <footer>
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
    </div>
</body>
</html>