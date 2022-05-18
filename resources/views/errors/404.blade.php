<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Код страницы 404</title>
    <style>
        html { height: 100%; }
        body {
            background: url(https://myrusakov.ru/images/articles/html_404_02.jpg) no-repeat;
            background-size: cover; /* Масштабирует картинку сохраняя пропорции */
        }
        .over {
            background: rgba(0, 0, 0, 0.7); /* Цвет фона и значение прозрачности */
            position: absolute; /* Абсолютное позиционирование */
            left: 0; right: 0; top: 0; bottom: 0; /* Отступы от краев браузера */
        }
        .404 {
            margin-top: 100px;
            text-align: center; /* Выравнивание текста по центру */
            font-size: 10em;
            color: #fcf9f9;
            position: relative; /* Относительное позиционирование */
            z-index: 2; /* Порядок наложения элемента по высоте */
        }
        .notfound {
            text-align: center;
            color: #fff;
            font-size: 2em;
            position: relative; /* Относительное позиционирование */
            z-index: 2; /* Порядок наложения элемента по слоям в глубину */
        }
        .notfound a {
            color: #fff;
            font-size: 0.8em;
        }
        .notfound a:hover {
            color: yellow;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="over"></div>
<div class="notfound">
    <div class="404">404</div>
    страница не найдена<br>
    <a href="{{route('index')}}"> перейти на главную страницу..</a>
</div>
</body>
</html>
