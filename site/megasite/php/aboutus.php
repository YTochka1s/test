<?php
session_start();

$isUserAuthenticated = isset($_SESSION['user']) ? true : false;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="visible_construction">
        <div class="navig__container">
            <nav class="navig_construction">
                <div class="navig__logo">
                    <div class="navig_logo_p">
                        <a class="navig_logo_pp" href="../html/index.php">SkillGenius</a>
                    </div>
                </div>
                <div class="navig__nav">
                    <div class="navig__nav_button">
                        <a href="../php/kurs.php" class="navig__nav_p">Курсы</a>
                    </div>
                </div>
                <?php if (!$isUserAuthenticated) { ?>
                    <div class="navig__auth">
                        <div class="navig__nav_button">
                            <a href="../php/login.php" class="navig__nav_p">Вход</a>
                        </div>
                        <div class="navig__nav_button">
                            <a href="../php/registration.php" class="navig__nav_p">Регистрация</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="navig__auth">
                        <div class="navig__nav_button">
                            <a href="../php/logout.php" class="navig__nav_p">Выход</a>
                        </div>
                        <div class="navig__nav_button">
                            <a href="../php/profile.php" class="navig__nav_p">Профиль</a>
                        </div>
                    </div>
                <?php } ?>
            </nav>
        </div>
        <div class="aboutus_container">
            <div class="aboutus_construction">
                <div class="aboutus__title">
                    <h1>Онлайн школа SkillGenius</h1>
                </div>
                <div class="aboutus__description">
                    <h2>🌐 Омск, улица Куйбышева, 137<br>
                        📞 +7(9999)73-42-57<br>
                        📧 skillgenius@mail.ru</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>