<?php
/**
 * Created by PhpStorm.
 * User: Alex Halk
 * Date: 04.05.2018
 * Time: 18:28
 */
//Print the navbar for all pages
echo "<html lang=\"ua\">
<head>
    <title>Information</title>
    <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    <style>
    p
    {
    text-indent: 4em;
    }
</style>
</head>
<body>
<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark \" >
    <!-- Brand -->
    <a class=\"navbar-brand\" href=\"index.html\">
        <img src=\"img/logo.png\" alt=\"Logo\" style=\"width:65px;\">
    </a>

    <!-- Links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"All_books_botstrap.html\">Книги</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"information_of_books.html\">Пошук</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"diagrams.html\">Статистика</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">Про нас</a>
        </li>
    </ul>
</nav>
</body>";
//
//If book if not found
$names=$_GET["name_book"];
if($names!="Рефакторинг" and $names!="Колгосп тварин" and $names!="Гаррі Поттер та Дари смерті")
    echo "
    <div class=\"container\">
    <h2 align='center' style='color: red'>Книгу не знайдено</h2>
    </div>";
else{
$years=$_GET["year"];
$janrs=$_GET["janr"];
    if($names=="Рефакторинг"&&$years=="2015"&&$janrs=="IT")
    {
        echo
        "
        <body>
        <div class=\"container\">
        <h1 align='center' style='color: #00008B'>Рефакторинг</h1>
        <h2 align='center' style='color: #aa1111'>Мартін Фаулер</h2>
        <p>
        Підхід до поліпшення структурної цілісності і продуктивності існуючих програм, званий рефакторингом, отримав розвиток завдяки зусиллям 
        експертів в області ООП, які написали цю книгу. Кожен крок рефакторінга простий. Це може бути переміщення поля з одного класу в інший, 
        винесення фрагмента коду з методу і перетворення його в самостійний метод або навіть переміщення коду по ієрархії класів. Кожен окремий крок 
        може здатися елементарним, але сукупний ефект таких малих змін в стані радикально поліпшити проект або навіть запобігти розпаду погано 
        спроектованої програми.
Мартін Фаулер з співавторами пролили світло на процес рефакторинга, описавши принципи і кращі прийоми його здійснення, а також вказавши, де і 
коли слід починати поглиблене вивчення коду з метою його поліпшення. Основу книги становить докладний перелік більше 70 методів рефакторинга, 
для кожного з яких описуються мотивація і техніка випробуваного на практиці перетворення коду з прикладами на Java. Розглянуті в книзі методи 
дозволяють поетапно модифікувати код, вносячи кожен раз невеликі зміни, завдяки чому знижується ризик, пов'язаний з розвитком проекту.
        </p>
        </div>
        </body>
        ";
    }
    elseif ($names=="Колгосп тварин"&&$years=="1968"&&$janrs=="Roman")
    {
        echo
        "
        <body>
        <div class=\"container\">
        <h1 align='center' style='color: #00008B'>Колгосп тварин</h1>
        <h2 align='center' style='color: #aa1111'>Орвелл Джордж</h2>
        <p>
        В романі алегорично відображено події під час становлення та існування епохи Сталінізму перед Другою світовою війною. Орвелл, будучи 
        за переконаннями соціал-демократом, та членом Незалежної лейбористської партії, критично ставився до Йосипа Сталіна та до керованої з 
        Москви політики комуністичних партій після спостереження за роботою НКВС під час громадянської війни в Іспанії.
        </p>
        </div>
        </body>
        ";
    }
    elseif ($names=="Гаррі Поттер та Дари смерті"&&$years=="2007"&&$janrs=="Fantasy")
    {
        echo
        "
        <body>
        <div class=\"container\">
        <h1 align='center' style='color: #00008B'>Гаррі Поттер та Дари смерті</h1>
        <h2 align='center' style='color: #aa1111'>Джоан Роулінг</h2>
        <p>
        Албуса Дамблдора Гаррі та його друзі покидають Хогвартс і відправляються в далеку подорож, щоб знайти спосіб перемогти Волдеморта. 
        Їм потрібно знайти горокракси - джерела сили і безсмертя лиходія, які надійно заховані і роблять його практично непереможним. Тепер 
        хлопцям не на кого покластися: викладачі Хогвартса більше не можуть їм допомогти,а поплічники Волдеморта, відомих як смертежери, 
        підкорили чарівників і творять терор і розправу над неугодними.
        </p>
        </div>
        </body>
        ";
    }

}
?>



