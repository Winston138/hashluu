<!DOCTYPE html>
<html lang="en">
<?require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
    <title>Купить билет</title>
</head>
<body class="innerBody">
<?require($_SERVER["DOCUMENT_ROOT"]."/menu.php");?>
<div class="ticket__wraper">
    <div class="ticket__text">
        <h1>Общий билет</h1>
        <p>Фестиваль True Nomads<br> 25 августа | Улан-Удэ
	        <br>Доступ на программу одного дня
        </p>
    </div>
    <div class="ticket__container">
        <h2>3000 руб.</h2>
        <p><i class="fas fa-circle-exclamation" style="color: #e7e700"></i>  ВАЖНО: при покупке билета укажите корректный E-mail.<br>Туда будет выслан электронный билет.<br>Билеты обмену и возврату не подлежат</p>
    </div>
    <a href="#qtickets:event_id=80249&window_width=960&window_height=645&base_color=d6c100" class="ticket__container-button">Купить билет</a>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/soc.php");?>

<script type="text/javascript" src="https://qtickets.ru/js/openapi"></script>
</body>
</html>