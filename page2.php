<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Петров П.П., Группа П-123, Лабораторная работа №2"; echo $title; ?></title>
    <!-- Подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Шапка (фиксированная) -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Мой Сайт</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?php $current_page = 'page2'; if($current_page == 'index') echo 'active'; ?>">Главная</a></li>
                    <li><a href="page2.php" class="<?php $current_page = 'page2'; if($current_page == 'page2') echo 'active'; ?>">О нас</a></li>
                    <li><a href="page3.php" class="<?php $current_page = 'page2'; if($current_page == 'page3') echo 'active'; ?>">Услуги</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="section">
                <h2>О нашей компании</h2>
                <div class="about-content">
                    <div class="about-image">
                        <?php
                        // Меняющаяся фотография (для разнообразия используем 3 и 4 изображения)
                        $second = date('s');
                        if ($second % 2 == 0) {
                            $photo = '3.jpg'; // фото с тестированием
                        } else {
                            $photo = '4.jpg'; // фото с рабочим местом
                        }
                        echo '<img src="picture/' . $photo . '" alt="Команда">';
                        ?>
                    </div>
                    <div class="about-text">
                        <p>Наша компания была основана в 2020 году группой энтузиастов, влюбленных в веб-технологии. За это время мы реализовали более 50 успешных проектов в различных нишах: от небольших сайтов-визиток до крупных корпоративных порталов и интернет-магазинов с высокой нагрузкой.</p>
                        <p>Наш подход к работе строится на трех китах: прозрачность, качество и результат. Мы всегда держим клиента в курсе этапов разработки, используем современные методологии управления проектами (Agile, Scrum) и не боимся сложных задач.</p>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Наши ключевые ценности</h2>
                <?php
                // Второй динамический список
                $values = [
                    "Клиентоориентированность и долгосрочные отношения",
                    "Профессионализм и постоянное обучение сотрудников",
                    "Ответственность за результат и соблюдение дедлайнов",
                    "Креативный подход к решению нестандартных задач",
                    "Честность и прозрачность сотрудничества"
                ];
                
                echo '<ol>';
                foreach ($values as $value) {
                    echo '<li>' . $value . '</li>';
                }
                echo '</ol>';
                ?>
                <p>Мы уверены, что следование этим принципам позволяет нам создавать продукты, которые действительно работают и приносят прибыль нашим клиентам. Мы не просто делаем сайты — мы создаем цифровые активы.</p>
            </section>
        </div>
    </main>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="footer-info">
                <h3>Контакты</h3>
                <p><strong>Адрес:</strong> г. Москва, ул. Примерная, д. 10</p>
                <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
                <p><strong>Email:</strong> info@mysite.ru</p>
            </div>
            <div class="copyright">
                <p>&copy; 2026 Мой Сайт. Все права защищены.</p>
            </div>
            <div class="footer-datetime">
                <?php
                echo "<p>Сформировано " . date('d.m.Y в H-i:s') . "</p>";
                ?>
            </div>
        </div>
    </footer>
</body>
</html>