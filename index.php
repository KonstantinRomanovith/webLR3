<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Иванов И.И., Группа П-123, Лабораторная работа №2"; echo $title; ?></title>
    <!-- Подключение шрифтов с Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Подключение внешнего CSS файла -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Шапка с меню (фиксированная) -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Мой Сайт</h1>
            </div>
            <nav>
                <ul>
                    <!-- Пункты меню формируются с помощью PHP (два включения) -->
                    <li><a href="index.php" class="<?php $current_page = 'index'; if($current_page == 'index') echo 'active'; ?>">Главная</a></li>
                    <li><a href="page2.php" class="<?php $current_page = 'index'; if($current_page == 'page2') echo 'active'; ?>">О нас</a></li>
                    <li><a href="page3.php" class="<?php $current_page = 'index'; if($current_page == 'page3') echo 'active'; ?>">Услуги</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Основной контент -->
    <main>
        <div class="container">
            <!-- Главная секция -->
            <section id="home" class="hero">
                <h2>Добро пожаловать на наш сайт</h2>
                <p>Мы создаем современные и функциональные веб-решения. Наша команда профессионалов готова воплотить ваши идеи в жизнь, используя передовые технологии и индивидуальный подход к каждому проекту. Мы ценим время и бюджет наших клиентов, предлагая оптимальные решения для бизнеса любого масштаба.</p>
                <p>Основные направления нашей деятельности включают разработку корпоративных сайтов, интернет-магазинов, а также поддержку и продвижение готовых проектов. Мы гарантируем высокое качество работ и соблюдение всех оговоренных сроков.</p>
                <a href="#features" class="btn">Наши преимущества</a>
            </section>

            <!-- Секция с особенностями (список) -->
            <section id="features" class="section">
                <h2>Почему выбирают нас</h2>
                <p>Мы предлагаем комплексный подход к разработке, который включает:</p>
                
                <?php
                // Динамически формируем список из массива
                $features = [
                    "Индивидуальный дизайн, разработанный с учетом специфики вашего бизнеса",
                    "Адаптивная верстка, обеспечивающая корректное отображение на всех устройствах",
                    "Глубокая проработка структуры и юзабилити для повышения конверсии",
                    "Использование современных и безопасных технологий (PHP 8, MySQL, Laravel)",
                    "Круглосуточная техническая поддержка и обслуживание сайта",
                    "Помощь в наполнении контентом и SEO-продвижении"
                ];
                
                echo '<ul>';
                foreach ($features as $item) {
                    echo '<li>' . $item . '</li>';
                }
                echo '</ul>';
                ?>
                
                <p>Благодаря такому подходу, наши клиенты получают не просто красивую картинку, а полноценный инструмент для ведения бизнеса, который работает на достижение их целей 24/7.</p>
            </section>

            <!-- Секция с меняющейся фотографией -->
            <section id="gallery" class="section">
                <h2>Наша команда в работе</h2>
                <div class="about-content">
                    <div class="about-text">
                        <p>В зависимости от текущей секунды времени (четная или нечетная) фотография справа меняется. Это демонстрирует возможность динамической генерации контента на сервере с помощью PHP. Обновите страницу, чтобы увидеть, как изображение может измениться. Такой подход часто используется для A/B тестирования, показа баннеров или просто для создания "живого" сайта.</p>
                        <p>На фотографиях запечатлены моменты работы нашей команды над очередным проектом. Мы уделяем большое внимание не только коду, но и атмосфере в коллективе, ведь от нее напрямую зависит конечный результат.</p>
                    </div>
                    <div class="about-image">
                        <?php
                        // Меняющаяся фотография в зависимости от четности секунды
                        $second = date('s');
                        
                        // Алгоритм: если секунда четная - foto1.jpg, иначе - foto2.jpg
                        if ($second % 2 == 0) {
                            $photo = '1.jpg'; // фото с кодом
                        } else {
                            $photo = '2.jpg'; // фото с дизайном
                        }
                        
                        echo '<img src="picture/' . $photo . '" alt="Динамическая фотография">';
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Футер с динамической датой -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Контакты</h3>
                    <p><strong>Адрес:</strong> г. Москва, ул. Примерная, д. 10</p>
                    <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
                    <p><strong>Email:</strong> info@mysite.ru</p>
                    <p><strong>Режим работы:</strong> Пн-Пт: 9:00-18:00</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2026 Мой Сайт. Все права защищены.</p>
            </div>
            <!-- Строка с датой и временем формирования -->
            <div class="footer-datetime">
                <?php
                $current_date = date('d.m.Y в H-i:s');
                echo "<p>Сформировано " . $current_date . "</p>";
                ?>
            </div>
        </div>
    </footer>
</body>
</html>