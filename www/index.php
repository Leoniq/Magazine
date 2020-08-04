<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/maskinput.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="main">

<div class="first-class">
<h2>Современные сланцы Crocs - <span>Гавайские берега</span></h2><br>
<img src="img/shoes.jpg"><br><br>
</div>

<div id="click-order" class="order">Заказать</div>

<div class="main-class">
    <form>
        <div class="top-popup"><b>Ваш заказ</b></div>
        <input type="button" value="+" id="Add">
        <input type="button" value="-" id="Clear">
        <span class="result">Кол-во: <span id="numOrders">1</span></span>
        <input type="text" id="tel" placeholder="+38(___) ___-____">
    </form>
    <div id="order" class="order">Заказать</div>
</div>

<div id="popup" style="display: none">
    <h2>Заказ оформлен!<br>Мы перезвоним Вам в ближайшее время!</h2>
</div>

</div>

</body>
</html>