<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Сидоров С.С., Группа П-123, Лабораторная работа №2"; echo $title; ?></title>
    <!-- Подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Мой Сайт</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?php $current_page = 'page3'; if($current_page == 'index') echo 'active'; ?>">Главная</a></li>
                    <li><a href="page2.php" class="<?php $current_page = 'page3'; if($current_page == 'page2') echo 'active'; ?>">О нас</a></li>
                    <li><a href="page3.php" class="<?php $current_page = 'page3'; if($current_page == 'page3') echo 'active'; ?>">Услуги</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Таблица услуг (взята из исходного HTML) -->
            <section class="section">
                <h2>Наши услуги и цены</h2>
                <p>Мы предлагаем широкий спектр услуг по созданию и поддержке веб-сайтов. Все цены являются ориентировочными и могут быть скорректированы после обсуждения технического задания.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Описание</th>
                            <th>Сроки</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Сайт-визитка</td>
                            <td>Простой одностраничный сайт с основной информацией о компании или специалисте. Включает форму обратной связи.</td>
                            <td>3-5 дней</td>
                            <td>от 10 000 ₽</td>
                        </tr>
                        <tr>
                            <td>Корпоративный сайт</td>
                            <td>Многостраничный сайт для компании с разделами "О компании", "Услуги", "Новости", "Контакты".</td>
                            <td>10-15 дней</td>
                            <td>от 30 000 ₽</td>
                        </tr>
                        <tr>
                            <td>Интернет-магазин</td>
                            <td>Полнофункциональный онлайн-магазин с корзиной, личным кабинетом, интеграцией с платежными системами и 1С.</td>
                            <td>20-30 дней</td>
                            <td>от 50 000 ₽</td>
                        </tr>
                        <tr>
                            <td>Поддержка сайта</td>
                            <td>Обновление контента, техническая поддержка, мониторинг безопасности и скорости работы.</td>
                            <td>По договоренности</td>
                            <td>от 5 000 ₽/мес</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Дополнительный блок с преимуществами -->
            <section class="section">
                <h2>Почему стоит заказать услуги у нас</h2>
                <?php
                // Список преимуществ
                $benefits = [
                    "Бесплатная консультация и аудит текущего сайта (при наличии)",
                    "Разработка уникального дизайна, а не использование готовых шаблонов",
                    "Адаптивная верстка, корректная на всех типах устройств",
                    "Чистый и документированный код",
                    "Обучение работе с сайтом (админ-панелью)",
                    "Гарантийная поддержка в течение 3 месяцев после сдачи проекта"
                ];
                
                echo '<ul>';
                for ($i = 0; $i < count($benefits); $i++) {
                    echo '<li>' . $benefits[$i] . '</li>';
                }
                echo '</ul>';
                ?>
                
                <!-- Еще одна меняющаяся фотография (демонстрация для галереи) -->
                <div style="margin-top: 20px; text-align: center;">
                    <?php
                    $second = date('s');
                    if ($second % 2 == 0) {
                        echo '<img src="picture/1.png" alt="Пример работы 1" style="max-width: 100%; border-radius: 5px;">';
                    } else {
                        echo '<img src="picture/2.jpg" alt="Пример работы 2" style="max-width: 100%; border-radius: 5px;">';
                    }
                    ?>
                    <p><em>* Пример наших работ (меняется в зависимости от четности секунды)</em></p>
                </div>
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