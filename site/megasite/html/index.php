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
                        <a href="../php/aboutus.php" class="navig__nav_p">О нас</a>
                    </div>
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
        <header>
            <div class="header__title">
                <h1>Онлайн школа SkillGenius</h1>
            </div>
            <div class="header__description">
                <h2>Доступное обучение для <br>
                    получения работы мечты</h2>
            </div>
            <div class="header__batton__container">
                <div class="header__batton__kurs">
                    <div class="kurs_p" onclick="location.href='../php/kurs.php';">
                        <p>Курсы</p>
                    </div>
                </div>
                <div class="header__batton__about_us">
                    <div class="about_us_p" onclick="location.href='../php/aboutus.php';">
                        <p>О нас</p>
                    </div>
                </div>
            </div>
        </header>
        <section class="about_us__container">
            <div class="ahah">
                <div class="about_us_cont_img">
                    <img class="about_us_img" src="../img/prop.png">
                </div>
                <div class="about_us__grid">
                    <div class="about_us__card1">
                        <div class="about_us__card_ots">
                            <div class="card_title">
                                <h2 class="framer-text">📈 30 000+</h2>
                            </div>
                            <div class="card_description">
                                <h3>Пользователей уже нашли работу после обучения</h3>
                            </div>
                        </div>
                    </div>
                    <div class="about_us__card2">
                        <div class="about_us__card_ots">
                            <div class="card_title">
                                <h2>📊 Аналитика</h2>
                            </div>
                            <div class="card_description">
                                <h3>Детальная аналитика
                                    прохождения обучения</h3>
                            </div>
                        </div>
                    </div>
                    <div class="about_us__card3">
                        <div class="about_us__card_ots">
                            <div class="card_title">
                                <h2>🌐 24/7</h2>
                            </div>
                            <div class="card_description">
                                <h3>Учёба в собственном графике
                                    из любой точки мира</h3>
                            </div>
                        </div>
                    </div>
                    <div class="about_us__card4">
                        <div class="about_us__card_ots">
                            <div class="card_title">
                                <h2>👩‍🏫 Кураторы</h2>
                            </div>
                            <div class="card_description">
                                <h3>На всем пути обучения вас сопровождают кураторы</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="course__container">
            <div class="course__allcard">
                <div class="course__card1" onclick="location.href='../php/kurs.php';">
                    <div class="course__card_img">
                        <div class="course__card_img_top">
                            <img src="../img/python.png" alt="альтернативный текст">
                        </div>
                    </div>
                    <div class="course__card_text">
                        <div class="course_card_title">
                            <h3>Python -<br>
                                разработчик</h3>
                        </div>
                        <div class="course_card_description">
                            <p><strong>Освойте Python с нуля</strong><br>и начните новую карьеру<br>
                                за 6 месяцев | <s>4500</s> <strong>0</strong> ₽/мес</p>
                        </div>
                    </div>
                </div>
                <div class="course__card2" onclick="location.href='../php/kurs.php';">
                    <div class="course__card_img">
                        <div class="course__card_img_top">
                            <img src="../img/java.png" alt="альтернативный текст">
                        </div>
                    </div>
                    <div class="course__card_text">
                        <div class="course_card_title">
                            <h3>Java -<br>
                                разработчик</h3>
                        </div>
                        <div class="course_card_description">
                            <p><strong>Освойте Java с нуля</strong><br>
                                и начните новую карьеру<br>
                                за 9 месяцев | <s>6500</s> <strong>0</strong> ₽/мес</p>
                        </div>
                    </div>
                </div>
                <div class="course__card3" onclick="location.href='../php/kurs.php';">
                    <div class="course__card_img">
                        <div class="course__card_img_top">
                            <img src="../img/JS.png" alt="альтернативный текст">
                        </div>
                    </div>
                    <div class="course__card_text">
                        <div class="course_card_title">
                            <h3>JavaScript -<br>
                                разработчик</h3>
                        </div>
                        <div class="course_card_description">
                            <p><strong class="framer-text">Освойте JavaScript с нуля</strong><br> и начните новую
                                карьеру<br>
                                за 6 месяцев | <s>5500</s> <strong>0</strong> ₽/мес</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="boundary_end"></div>
            <p>SkillGenius © 2023</p>
        </footer>
    </div>
</body>

</html>