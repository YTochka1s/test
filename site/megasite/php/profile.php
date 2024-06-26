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
    <link rel="stylesheet" href="../css/profile.css">
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
                    </div>
                <?php } ?>
            </nav>
        </div>
        <section class="profile_us__container">
            <div class="ahah">
                <div class="profile_us__grid">
                    <div class="profile_us__card3">
                        <div class="profile_us__card_ots">
                            <div class="card_title">
                                <h2>ID</h2>
                            </div>
                            <div class="card_description">
                            <?php
                                if (isset($_SESSION['user'])) {
                                    if (isset($_SESSION['user']['id'])) {
                                        echo '<h3>' . htmlspecialchars($_SESSION['user']['id']) . '</h3>';
                                    } else {
                                        echo '<h3>Не удалось получить имя пользователя.</h3>';
                                    }
                                } else {
                                    echo '<h3>Пользователь не авторизован.</h3>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="profile_us__card1">
                        <div class="profile_us__card_ots">
                            <div class="card_title">
                                <h2 class="framer-text">Логин</h2>
                            </div>
                            <div class="card_description">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    if (isset($_SESSION['user']['full_name'])) {
                                        echo '<h3>' . htmlspecialchars($_SESSION['user']['full_name']) . '</h3>';
                                    } else {
                                        echo '<h3>Не удалось получить имя пользователя.</h3>';
                                    }
                                } else {
                                    echo '<h3>Пользователь не авторизован.</h3>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="profile_us__card2">
                        <div class="profile_us__card_ots">
                            <div class="card_title">
                                <h2>Почта</h2>
                            </div>
                            <div class="card_description">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    if (isset($_SESSION['user']['email'])) {
                                        echo '<h3>' . htmlspecialchars($_SESSION['user']['email']) . '</h3>';
                                    } else {
                                        echo '<h3>Не удалось получить имя пользователя.</h3>';
                                    }
                                } else {
                                    echo '<h3>Пользователь не авторизован.</h3>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>