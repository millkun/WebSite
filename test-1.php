<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="millkun">
    <meta name="description" content="Личный сайт millkun">
    <title>millkun</title>
    <style>
        @font-face {
            font-family: "ch122";
            src: url("/assets/fonts/Ch122.ttf");
        }
        body {
            display: flex;
            flex-direction: column;
            height: auto;
            min-height: 100%; /* Растягивает body на всю высоту экрана */
            /* font-family: YS Text; */
            font-weight: 300;
            /* -webkit-font-smoothing: antialiased; */
            
        }
        html, body {
            min-height: 100vh; /* Максимальная высота браузера */
            margin: 0; 
            padding: 0;
            -webkit-text-size-adjust: 100%; /* Отключаю автоматическое масштабирование текста на IPhone */
        }
        
        .upper_header {
            --upperHeaderColor: rgb(14, 14, 14);
            --upperHeaderHeight: 70px;
            background-color: var(--upperHeaderColor);
            max-width: 100%;
            height: var(--upperHeaderHeight);
            font-family: "ch122";
        }
        .upper_header_content {
            height: var(--upperHeaderHeight);
            box-sizing: border-box;
            padding: 0px 25px 0px 25px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .upper_header_content_left {
            height: var(--upperHeaderHeight);
            padding-top: 10px;
            box-sizing: border-box;
        }
        .upper_header_content_right {
            height: var(--upperHeaderHeight);
            padding-top: 10px;
            box-sizing: border-box;
        }
        .logo_sidebar {
            height: 50px;
            display: flex;
        }
        .menu_sidebar {
            height: 50px;
            display: flex;
        }
        .header {
            --headerColor: rgb(14, 14, 14);
            background-color: var(--headerColor);
            max-width: 100%;
            height: auto;
        }
        
        .main {
            --benefitColor: rgb(247, 247, 247);
            max-width: 100%;
            height: auto;
        }
        .main_grid_container {
            margin: 10px 10px 10px 10px;
        }
        .benefits {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .benefits_item {
            background-color: var(--benefitColor);
            display: flex;
        }
        .benefits_icon {
            width: 32px;
            height: 32px;
            flex-shrink: 0; /* Запрещаем иконке сжиматься */
        }
        .benefits_text {
            margin: 0;
            font-weight: 500;
        }
        
    </style>
</head>
<body>
    <div class="upper_header">
        <div class="upper_header_content">
            <div class="upper_header_content_left">
                <div class="logo_sidebar">
                    <img src="/assets/images/test/blue1.png" alt="carrot icon">
                    <img src="/assets/images/test/millkun.gif" alt="millkun gif">
                </div>
            </div>
            <div class="upper_header_content_right">
                <div class="menu_sidebar">
                    <img src="/assets/images/test/blue2.png" alt="menu icon">
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <p>test</p>
    </div>
    <div class="main">
        <div class="main_grid_container">
            <ul class="benefits">
                <li class="benefits_item">
                    <img class="benefits_icon" src="/assets/images/test/git.png" alt="GitHub icon">
                    <p class="benefits_text">test1</p>
                </li>
                <li class="benefits_item">
                    <img class="benefits_icon" src="/assets/images/test/tg.png" alt="Telegram icon">
                    <p class="benefits_text">test2</p>
                </li>
                <li class="benefits_item">
                    <img class="benefits_icon" src="/assets/images/test/web.png" alt="Website icon">
                    <p class="benefits_text">test3</p>
                </li>
                <li class="benefits_item">
                    <img class="benefits_icon" src="/assets/images/test/vk.png" alt="VKontakte icon">
                    <p class="benefits_text">test4</p>
                </li>
            </ul>
        </div>
    </div>

    <script>
    </script>
</body>
</html>
