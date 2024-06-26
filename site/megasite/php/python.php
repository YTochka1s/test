<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/python.css">
    <link rel="stylesheet" href="../css/js.js">
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
                <div class="navig__auth">
                    <div class="navig__nav_button">
                        <a href="../php/logout.php" class="navig__nav_p">Выход</a>
                    </div>
                    <div class="navig__nav_button">
                        <a href="../php/profile.php" class="navig__nav_p">Профиль</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="zadanie_container">
            <div class="zadanie_construction">
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory1">
                            <p>1</p>
                        </button>
                    </div>
                </div>
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory2">
                            <p>2</p>
                        </button>
                    </div>
                </div>
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory3">
                            <p>3</p>
                        </button>
                    </div>
                </div>
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory4">
                            <p>4</p>
                        </button>
                    </div>
                </div>
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory5">
                            <p>5</p>
                        </button>
                    </div>
                </div>
                <div class="zadanie_box">
                    <div class="zadanie_number">
                        <button data-target="theory6">
                            <p>6</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory1">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Введение в язык программирования Python</h1>
                        </div>
                        <div class="theory_content">
                            <h3>Язык программирования Python является одним из наиболее популярных и широко используемых
                                языков программирования в мире. Он применяется в различных сферах, включая
                                веб-разработку,
                                анализ данных, искусственный интеллект и многие другие. В данном курсе мы рассмотрим
                                основы
                                Python, включая его синтаксис, типы данных, операторы, управляющие конструкции и
                                функции. Мы
                                также изучим различные библиотеки Python, которые расширяют его возможности. По
                                окончании
                                курса вы будете готовы к созданию собственных программ на Python и применению их в
                                реальных
                                проектах.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Для чего применяется язык программирования Python?</h3>
                            <ul>
                                <li><input type="radio" name="q1" value="0"> Только для веб-разработки</li>
                                <li><input type="radio" name="q1" value="1"> Для веб-разработки, анализа данных,
                                    искусственного интеллекта и других сфер</li>
                                <li><input type="radio" name="q1" value="0"> Только для разработки мобильных приложений
                                </li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Что мы будем изучать в данном курсе по Python?</h3>
                            <ul>
                                <li><input type="radio" name="q2" value="0"> Только библиотеки Python</li>
                                <li><input type="radio" name="q2" value="1"> Основы Python, включая синтаксис, типы
                                    данных,
                                    операторы, управляющие конструкции и функции</li>
                                <li><input type="radio" name="q2" value="0"> Только вычислительную математику</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Что вы сможете делать после окончания курса по Python?</h3>
                            <ul>
                                <li><input type="radio" name="q3" value="0"> Только читать программы на Python</li>
                                <li><input type="radio" name="q3" value="0"> Только изучать библиотеки Python</li>
                                <li><input type="radio" name="q3" value="1"> Быть готовым к созданию собственных
                                    программ на
                                    Python и их применению в реальных проектах</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_1">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory2">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Основы синтаксиса языка Python</h1>
                        </div>
                        <div class="theory_content">
                            <h3>Синтаксис языка Python основан на принципах простоты и читаемости кода. Одной из
                                ключевых особенностей синтаксиса является отсутствие фигурных скобок для выделения
                                блоков кода. Вместо этого используется отступы, которые указывают на принадлежность к
                                определенному блоку. Также стоит отметить, что Python чувствителен к регистру, что
                                означает, что идентификаторы "foo", "Foo" и "FOO" считаются разными переменными.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Какие символы используются для выделения блоков кода в языке Python?</h3>
                            <ul>
                                <li><input type="radio" name="q4" value="0"> Фигурные скобки</li>
                                <li><input type="radio" name="q4" value="1"> Отступы</li>
                                <li><input type="radio" name="q4" value="0"> Круглые скобки</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Чем отличается Python от многих других языков программирования в отношении синтаксиса?
                            </h3>
                            <ul>
                                <li><input type="radio" name="q5" value="0"> Отсутствием циклов</li>
                                <li><input type="radio" name="q5" value="0"> Чувствительностью к регистру</li>
                                <li><input type="radio" name="q5" value="1"> Использованием отступов для выделения
                                    блоков кода</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Каким символом обозначается оператор присваивания переменной в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q6" value="0"> &</li>
                                <li><input type="radio" name="q6" value="0"> =></li>
                                <li><input type="radio" name="q6" value="1"> =</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_2">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory3">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Основные типы данных в Python</h1>
                        </div>
                        <div class="theory_content">
                            <h3>В Python существует несколько основных типов данных, которые используются для хранения и
                                обработки информации. К ним относятся:
                                1. Целые числа (int) - представляют целочисленные значения без дробной части.
                                2. Вещественные числа (float) - представляют числа с плавающей точкой, включая дробные
                                значения.<br>
                                3. Строки (str) - представляют последовательность символов, заключенных в кавычки.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Какой тип данных используется для хранения целых чисел в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q1" value="1"> int</li>
                                <li><input type="radio" name="q1" value="0"> float</li>
                                <li><input type="radio" name="q1" value="0"> str</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой тип данных используется для хранения чисел с плавающей точкой в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q2" value="0"> int</li>
                                <li><input type="radio" name="q2" value="1"> float</li>
                                <li><input type="radio" name="q2" value="0"> str</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой тип данных используется для хранения текстовых значений в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q3" value="0"> int</li>
                                <li><input type="radio" name="q3" value="0"> float</li>
                                <li><input type="radio" name="q3" value="1"> str</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_3">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory4">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Операторы и выражения в Python</h1>
                        </div>
                        <div class="theory_content">
                            <h3>Операторы и выражения в Python используются для выполнения различных операций над
                                данными. В Python существует множество операторов, таких как арифметические, логические,
                                сравнения и другие. Операторы могут быть использованы в выражениях для выполнения
                                конкретных действий или сравнений.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Какой из перечисленных операторов используется для сложения чисел в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q1" value="1"> +</li>
                                <li><input type="radio" name="q1" value="0"> -</li>
                                <li><input type="radio" name="q1" value="0"> *</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой оператор используется для проверки равенства двух значений в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q2" value="0"> =</li>
                                <li><input type="radio" name="q2" value="1"> ==</li>
                                <li><input type="radio" name="q2" value="0"> !=</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой оператор используется для выполнения логического "И" в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q3" value="1"> and</li>
                                <li><input type="radio" name="q3" value="0"> or</li>
                                <li><input type="radio" name="q3" value="0"> not</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_4">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory5">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Управляющие конструкции в Python.</h1>
                        </div>
                        <div class="theory_content">
                            <h3>Управляющие конструкции в Python позволяют программистам контролировать поток выполнения
                                программы. К ним относятся условные операторы (if, elif, else) для выполнения
                                определенных действий в зависимости от условий, циклы (for, while) для многократного
                                выполнения блока кода, а также операторы break и continue для управления выполнением
                                циклов.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Какой из операторов используется для проверки условия в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q1" value="0"> for</li>
                                <li><input type="radio" name="q1" value="1"> if</li>
                                <li><input type="radio" name="q1" value="0"> while</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой оператор позволяет прервать выполнение цикла и выйти из него в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q2" value="0"> continue</li>
                                <li><input type="radio" name="q2" value="1"> break</li>
                                <li><input type="radio" name="q2" value="0"> return</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Какой цикл в Python позволяет выполнять блок кода до тех пор, пока условие истинно?</h3>
                            <ul>
                                <li><input type="radio" name="q3" value="0"> for</li>
                                <li><input type="radio" name="q3" value="1"> while</li>
                                <li><input type="radio" name="q3" value="0"> do-while</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_5">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="obs_container hidden" id="theory6">
            <div class="theory_container">
                <div class="theory_construction">
                    <div class="theory_box">
                        <div class="theory_glav">
                            <h1>Функции и модули в Python.</h1>
                        </div>
                        <div class="theory_content">
                            <h3>Функции в Python представляют собой участки кода, которые могут быть вызваны для
                                выполнения определенной задачи. Они могут принимать аргументы, обрабатывать их и
                                возвращать результат. Модули в Python являются файлами, содержащими функции, переменные
                                и другие элементы кода, которые могут быть импортированы в другие программы для
                                повторного использования. Использование функций и модулей помогает упростить код, делая
                                его более читаемым и поддерживаемым.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_container">
                <div class="test_construction">
                    <div class="test_box">
                        <div class="test_glav">
                            <h1>Тестовая часть</h1>
                        </div>
                        <div class="question">
                            <h3>Что представляют собой функции в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q1" value="0"> Участки кода, которые нельзя вызывать</li>
                                <li><input type="radio" name="q1" value="1"> Участки кода, которые могут быть вызваны
                                    для выполнения определенной задачи</li>
                                <li><input type="radio" name="q1" value="0"> Участки кода, которые автоматически
                                    выполняются при запуске программы</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Что является преимуществом использования модулей в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q2" value="0"> Усложнение кода</li>
                                <li><input type="radio" name="q2" value="0"> Уменьшение читаемости кода</li>
                                <li><input type="radio" name="q2" value="1"> Повторное использование кода, упрощение и
                                    поддерживаемость программы</li>
                            </ul>
                        </div>

                        <div class="question">
                            <h3>Каким образом можно импортировать модуль в Python?</h3>
                            <ul>
                                <li><input type="radio" name="q3" value="0"> import madule</li>
                                <li><input type="radio" name="q3" value="0"> include module</li>
                                <li><input type="radio" name="q3" value="1"> import module</li>
                            </ul>
                        </div>

                        <button class="test_cheak" id="checkAnswers_6">
                            <p>Проверить ответы</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Находим кнопку по data-target
        var button = document.querySelector('button[data-target="theory1"]');
        // Проверяем, существует ли кнопка
        if (button) {
            // Программно нажимаем на кнопку
            button.click();
        }
    });

    document.querySelectorAll('.zadanie_number button').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('.zadanie_number button').forEach(button => {
                button.classList.remove('selected');
            });
            this.classList.add('selected');
        });
    });

    const checkButton1 = document.getElementById('checkAnswers_1');
    const checkButton2 = document.getElementById('checkAnswers_2');
    const checkButton3 = document.getElementById('checkAnswers_3');
    const checkButton4 = document.getElementById('checkAnswers_4');
    const checkButton5 = document.getElementById('checkAnswers_5');
    const checkButton6 = document.getElementById('checkAnswers_6');
    const questions = document.querySelectorAll('.question');

    checkButton1.addEventListener('click', function () {
        checkButton();
    });
    checkButton2.addEventListener('click', function () {
        checkButton();
    });
    checkButton3.addEventListener('click', function () {
        checkButton();
    });
    checkButton4.addEventListener('click', function () {
        checkButton();
    });
    checkButton5.addEventListener('click', function () {
        checkButton();
    });
    checkButton6.addEventListener('click', function () {
        checkButton();
    });

    function checkButton() {
        questions.forEach(question => {
            const answers = question.querySelectorAll('input[type="radio"]');
            answers.forEach(answer => {
                const parent = answer.parentNode;
                if (answer.checked) {
                    if (answer.value === '1') {
                        parent.classList.add('correct');
                    } else {
                        parent.classList.add('incorrect');
                        question.querySelector('input[value="1"]').parentNode.classList.add('correct');
                    }
                }
            });
        });
    }
    var buttons = document.querySelectorAll('.zadanie_number button');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            var obs_container = document.querySelectorAll('.obs_container');
            obs_container.forEach(function (container) {
                container.style.display = 'none';
            });

            var targetId = this.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
        });
    });
</script>