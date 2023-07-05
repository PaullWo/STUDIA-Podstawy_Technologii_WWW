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
        <h4 class="dolny_pasek">LOGOWANIE</h4>
        <div class="nadformularz">
        <div class="formularz_logowanie">
            <?php
                session_start();
                if (isset($_POST["login"])) {
                $login = $_POST["login"];
                $haslo = $_POST["haslo"];
               
                $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='" . md5($haslo) .
               "'";
                $result = $conn->query($sql);
                if ($result->num_rows == 1) {
                $_SESSION["login"] = $login;
                $_SESSION["id"] = $result->fetch_object()->id;
                header("Location: index.php");
                } else {
                echo "<container class=\"form2\">
                <h4>Nieprawidłowy login lub hasło. </h4><br>
                <p class='link'> Ponów próbę <a href='login.php'>logowania</a>.</p>
                </container>";
                }
                } else {
               ?>
                <form class="form" method="post" name="login">
                    <input type="text" class="login-input" name="login" placeholder="Login"
                    autofocus="true"/><br>
                    <input type="password" class="login-input" name="haslo" placeholder="Hasło"/>
                <div>
                    <input type="submit" value="Zaloguj" name="submit" class="przyciski"/>
                    <p class="link"><a href="registration.php" class="przyciski">Zarejestruj się</a></p>
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