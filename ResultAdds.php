<?php
$name=$_GET['name'];
$type=$_GET['type'];
$year=$_GET['year'];
$countPages=$_GET['countPages'];
$author=$_GET['author'];

// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = "Volodymyr2014"; // Пароль БД
$db_table = "Book"; // Имя Таблицы БД

echo "
<html lang=\"en\">
<head>
    <title>Add new books</title>
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
</head>
";

// Подключение к базе данных
$db = @mysql_connect($db_host,$db_user,$db_password) OR DIE("Неможливо створити з\'єднання ");

// Выборка базы
@mysql_select_db("db_biblioteka",$db);

// Установка кодировки соединения
@mysql_query("SET NAMES 'utf8'",$db);

$result = mysql_query ("INSERT INTO ".$db_table." (B_name,B_type,B_year,B_countPages, Author_A_id) VALUES ('$name','$type','$year','$countPages','$author')");
if ($result = 'true'){
    echo "<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark \" >
    <!-- Brand -->
    <a class=\"navbar-brand\" href=\"index.html\">
        <img src=\"img/logo.png\" alt=\"Logo\" style=\"width:65px;\">
    </a>

    <!-- Links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"All_books_botstrap.php\">Книги</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"information_of_books.html\">Пошук</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"diagrams.html\">Статистика</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"AddNewBooks.php\">Додати</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">Про нас</a>
        </li>

    </ul>
</nav>";
    echo "<h2 align='center'>Книга успішно добавленa !</h2>";
}else{
    echo "<h2 align='center'>Виникла помилка при добавлені книги ! ! ! </h2>";}
?>