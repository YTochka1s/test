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
    <link rel="stylesheet" href="../css/kurs.css">
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
        <section class="course__container">
            <div class="course__allcard">
                <div class="course__card">
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
                        <?php if (!$isUserAuthenticated) { ?>
                            <button class="course_card_button" onclick="location.href='../php/login.php';">
                                <div class="course_card_button_dtext">
                                    <p>Выбрать курс</p>
                                </div>
                            </button>
                        <?php } else { ?>
                                <button class="course_card_button"  onclick="location.href='../php/python.php';">
                                <div class="course_card_button_dtext">
                                    <p>Выбрать курс</p>
                                </div>
                            </button>
                        <?php } ?>
                    </div>
                </div>
                <div class="course__card">
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
                        <button class="course_card_button">
                            <div class="course_card_button_dtext">
                                <p>Скоро</p>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="course__card">
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
                            <p><strong class="framer-text">Освойте JavaScript с нуля</strong><br> и начните новую карьеру<br>
                                за 6 месяцев | <s>5500</s> <strong>0</strong> ₽/мес</p>
                        </div>
                        <button class="course_card_button">
                            <div class="course_card_button_dtext">
                                <p>Скоро</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>