<!DOCTYPE html>
<html lang="en">
<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
    <title>Связаться</title>
</head>
<body class="innerBody">
<?require($_SERVER["DOCUMENT_ROOT"]."/menu.php");?>
<h1>Оставить заявку</h1>
<div class="feed_back">

    <form class="decor">
        <div class="form-inner">
<!--            <h2>ОСТАВИТЬ ЗАЯВКУ</h2>-->
            <br>
            <input type="text" placeholder="Ф.И.О.">
            <input type="tel" placeholder="Телефон">
            <textarea placeholder="Деятельность" rows="3"></textarea>
            <input type="submit" value="Отправить">
        </div>
    </form>
<!--    <div class="feed_back__form">-->
<!--        <form class="footer__form">-->
<!--            <div>-->
<!--                <label for="exampleFormControlInput1" class="form-label">Ф.И.О.</label>-->
<!--                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ф.И.О.">-->
<!--            </div>-->
<!--            <div>-->
<!--                <label for="exampleFormControlInput2" class="form-label">Телефон</label>-->
<!--                <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="Телефон">-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleFormControlInput" class="form-label">Вид деятельности</label>-->
<!--                <textarea class="form-control" id="exampleFormControlInput" placeholder="Вид деятельности"></textarea>-->
<!--            </div>-->
<!--            <div>-->
<!--                <input class="submit_form" type="submit" value="Отправить">-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
</div>





<?require($_SERVER["DOCUMENT_ROOT"]."/soc.php");?>

<script type="text/javascript" src="https://qtickets.ru/js/openapi"></script>
</body>
</html>