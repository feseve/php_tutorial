<?php
    require_once ('data.php');
    require_once ('menu.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Café Progate</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="menu-wrapper container">
            <h1 class="logo">Café Progate</h1>
            <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
            <form action="confirm.php" method="post">
                <div class="menu-items">
                <!-- 配列$menusの要素を変数$menuとするforeach文 -->
                    <?php foreach($menus as $menu): ?>
                        <div class="menu-item">
                            <img src="<?php echo $menu->getImage() ?>">
                            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                            <?php if($menu instanceof Drink): ?>
                                <p class="menu-item-type"><?php echo $menu->getType() ?></p>
                            <?php endif ?>
                            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
                            注文数: <input type="text" value="0" name="<?php echo $menu->getName() ?>">
                            <span>個</span>
                        </div>
                    <?php endforeach ?>
                </div>
                <input type="submit" value="送信する">
            </form>
        </div>
    </body>
</html>
