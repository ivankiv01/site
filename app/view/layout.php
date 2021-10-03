<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NIX Education</title>
</head>
<body>
<header class="bg-dark text-white flex-wrap">
    <nav>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <div class="col-md-3 py-2 d-md-inline-block">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <h1 class="use">Love</h1>
                        <h1 class="web">PHP</h1>
                    </a>
                </div>
                <div class="col-md-6 py-2 d-md-inline-block">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Выберете урок
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Урок 1</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Урок 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Урок 3</a></li>
                        </ul>
                    </div>
                </div>

                <div class="text-end py-2 d-md-inline-block">
                    <button type="button" class="btn btn-outline-light me-2">Вход</button>
                    <button type="button" class="btn btn-warning">Зарегестрироваться</button>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container task_1">
        <h2>1.	Настроить среду разработки.</h2>
        <p>- Операционная система Linux (рекомендуем)</p>
        <p>- Установить IDEA (рекомендуем PhpStorm)</p>
        <p>- Установить nginx и php-fpm</p>
        <p>- Создать свой первый сайт, который отобразит приветствие “Hello, NIX Education”</p>
        <br>
        <h2>2.	Работа с репозиторием.</h2>
        <p>-Зарегистрироваться на https://github.com/.</p>
        <p>-Установить Git, на локальной машине.</p>
        <p>-Создать свой первый репозиторий и залить на него свой первый проект.</p>
        <br>
        <h2>3.   Создать простую структуру сайта, добавить меню .</h2>
        <p>-Сделать commit изменений, и push в ваш репозиторий.</p>
    </div>
</main>

<div class="container footer">
    <footer class="py-3 my-4" >
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 zazi">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 zazi">Урок 1</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 zazi">Урок 2</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 zazi">Урок 3</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 zazi">Вход/Регистрация</a></li>
        </ul>
        <p class="text-center zaz">© 2021 Company, Inc</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
