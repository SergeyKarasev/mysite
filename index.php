<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/style-header.css" rel="stylesheet">
    <link href="styles/style-content.css" rel="stylesheet">
    <link href="styles/style-footer.css" rel="stylesheet">
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerTop">
        <div id="tel">tel. 555-55-55-55</div>
        <div id="email">appliances@appliances.com</div>
        <div id="lk">
            <a href="#">Войти</a>
            <a href="#">Зарегистрироваться</a>
        </div>
    </div>
    <div id="headerInside">
        <div id="headerCenter">
            <div id="logoCompany">
				<a href="index.php"></a>
			</div>
            <div id="basketFav"><a href="#"></a></div>
            <div id="basket"><a href="#"></a></div>
        </div>
        <div id="menu">
            <a href="index.php?category=hob">ВАРОЧНЫЕ ПОВЕРХНОСТИ</a>
            <a href="index.php?category=oven">ДУХОВЫЕ ШКАФЫ</a>
            <a href="index.php?category=fridge">ХОЛОДИЛЬНИКИ</a>
            <a href="index.php?category=washer">СТИРАЛЬНЫЕ МАШИНЫ</a>   
        </div>
    </div>
</header>

<div id="content">
<?php
    require('goods/goods.php');

    $category = $_GET['category'];
    $id = $_GET['id'];

    if ($category == 'hob') {
        $categoryName = 'Варочные поверхности';
    }

    if ($category == 'fridge') {
        $categoryName = 'Холодильники';
    }

    if ($category == 'oven') {
        $categoryName = 'Духовые шкафы';
    }

    if ($category == 'washer') {
        $categoryName = 'Стиральные машины';
    }

    if (isset($categoryName)) {
        $idCorrect = null;
        if (isset($id)) {
            foreach ($goods as $product) {
                if (($product['id'] == $id) && ($product['catid'] == $category)) {
                    $idCorrect = true;
                    break;
                }
            }
        } 
        if ($idCorrect) {
            require('templates/openedProduct.php');
        } else {
            require('templates/openedCategory.php');
        }
    } else {
        require('templates/main.php');
    }
?>

</div>

<footer>
    <div id="footerInner">
        <div id="footerCenter">
            <div id="footCont">
                <div class="contactWrap">
                    <img src="images/envelope.svg" class="contactIcon">
                    appliances@appliances.com
                </div>
                <div class="contactWrap">
                    <img src="images/phone-call.svg" class="contactIcon">
                    555-55-55-55
                </div>
                
            </div>
            <div id="footNav">
                <a href="index.php">ГЛАВНАЯ</a>
                <a href="#">ВОЙТИ</a>
                <a href="#">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                <a href="#">КОРЗИНА</a>
                <a href="#">ИЗБРАННОЕ</a>
            </div>
            <div id="footCat">
                <a href="index.php?category=hob">ВАРОЧНЫЕ ПОВЕРХНОСТИ</a>
                <a href="index.php?category=oven">ДУХОВЫЕ ШКАФЫ</a>
                <a href="index.php?category=fridge">ХОЛОДИЛЬНИКИ</a>
                <a href="index.php?category=washer">СТИРАЛЬНЫЕ МАШИНЫ</a>
            </div>
        </div>
    </div>
    <div id="copyright">&copy; APPLIANCES</div>
</footer>

</body>
</html>