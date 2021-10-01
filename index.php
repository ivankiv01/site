
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Шапка для сайта</title>
</head>
<body>

<div id="block-body">

    //  в тегах header прописана наша шапка

    <header>

        // разметка для логотипа

        <div class="logo">
            <a href="index.php">
                <span class="use">LOVE</span> <span class="web">PHP</span>
            </a>
            <p>NIX solutions</p>
        </div>

        // разметка для нашего меню

        <div class="top-menu">
            <ul>
                <li><a class="clickMenu" href="#">Уроки</a></li>
                <li><a href="#">Урок 1</a></li>
                <li><a href="#">Урок 2</a></li>
            </ul>
        </div>

        // блок с авторизацией

        <div class="block-top-auth">
            <p><a href="#">Вход</a></p>
            <p><a href="#">Регистрация</a></p>
        </div>

    </header>

    <div id="block-content"></div>

</div>



</body>
</html>