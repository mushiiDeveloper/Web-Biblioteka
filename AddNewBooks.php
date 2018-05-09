<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add new books</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark " >
    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
        <img src="img/logo.png" alt="Logo" style="width:65px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="All_books_botstrap.php">Книги</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="information_of_books.html">Пошук</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="diagrams.html">Статистика</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="AddNewBooks.php">Додати</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">Про нас</a>
        </li>

    </ul>
</nav>

<body>


<div class="container">
    <h2>Додавання нової книги</h2>
    <form action="ResultAdds.php" method="get">
        <div class="form-group">
            <label>Найменування:</label>
            <input type="text" class="form-control" name="name"  placeholder="Введіть найменування">
        </div>
        <div class="form-group">
            <label for="sel1">Тип:</label>
            <select class="form-control" name="type">
                <option value="Драма">Драма</option>
                <option value="IT">IT</option>
                <option value="Фентезі">Фентезі</option>
                <option value="Пригоди">Пригоди</option>
                <option value="Роман">Роман</option>
                <option selected>Інші</option>
            </select>
        </div>

        <div class="form-group">
            <label>Рік:</label>
            <input type="text" class="form-control" name="year"  placeholder="Введіть рік">
        </div>

        <div class="form-group">
            <label>Кількість сторінок:</label>
            <input type="text" class="form-control" name="countPages"  placeholder="Введіть рік">
        </div>


        <div class="form-group">
            <label for="sel1">Автор:</label>
            <select class="form-control" name="author"">
        <?php

        $sdd_db_host='localhost'; // ваш хост
        $sdd_db_name='db_biblioteka'; // ваша бд
        $sdd_db_user='root'; // пользователь бд
        $sdd_db_pass='Volodymyr2014'; // пароль к бд
        @mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
        @mysql_select_db($sdd_db_name); // выбор бд
         $result=mysql_query("SELECT * FROM book,author WHERE author.a_id = book.Author_A_id"); // запрос на выборку
        while($row=mysql_fetch_array($result))
                {
                    echo '<option value="'.$row['A_id'].'"'.'>'.$row['A_name'].'</option>';
        }
        echo '</selected>';
        ?>

        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Додати</button>
    </form>
</div>

</body>
</html>

</body>
</html>