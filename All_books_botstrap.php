<?php

$sdd_db_host='localhost'; // ваш хост
$sdd_db_name='db_biblioteka'; // ваша бд
$sdd_db_user='root'; // пользователь бд
$sdd_db_pass='Volodymyr2014'; // пароль к бд
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
@mysql_select_db($sdd_db_name); // выбор бд
echo
"
<html lang=\"ua\">
<head>
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <title>Всі книги</title>
</head>
<body>
<!-- modal view-->
<div id=\"myModal1\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Бронювання</h4>
            </div>
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group\">
                        <label>ПІБ:</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\">
                    </div>
                    <div class=\"form-group\">
                        <label>Номер особистого квитка:</label>
                        <input type=\"text\" class=\"form-control\" id=\"ind_number\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email:</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\">
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Відміна</button>
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Підтвердити</button>
            </div>
        </div>
    </div>
</div>
<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark \" >
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
</nav>
<br>
<div class=\"container\">
    <table class=\"table\">
        <tr>
            <th>№</th>
            <th>Найменування</th>
            <th>Тип</th>
            <th>Рік</th>
            <th>Сторінок</th>
            <th>Автор</th>   
            <th></th>
        </tr>
        <tbody>
        ";
    $result=mysql_query("SELECT * FROM book,author WHERE author.a_id = book.Author_A_id"); // запрос на выборку
        while($row=mysql_fetch_array($result))
        {
            echo($row['B_id']%2!=0) ?  '<tr class="table-primary">':'<tr class="table-success">';
            echo '<td>'.$row['B_id'].'</td>'.
                '<td>'.$row['B_name'].'</td>'.
                '<td>'.$row['B_type'].'</td>'.
                '<td>'.$row['B_year'].'</td>'.
                '<td>'.$row['B_countPages'].'</td>'.
                '<td>'.$row['A_name'].'</td>'.
                '<td><p><a href="#myModal1" class="btn btn-outline-danger" data-toggle="modal">Забронювати</a></p></td></tr></tbody>';
        }
echo "
    </table>
</div>
</div>

</body>
</html> 
"
?>
