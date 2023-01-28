<?php
    require_once ('drink.php');
    require_once ('food.php');

    $juice = new Drink(
        'JUICE',
        600,
        'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png'
    );
    $coffee = new Drink(
        'COFFEE',
        400,
        'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
    $curry = new Food(
        'CURRY',
        800,
        'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
    $pasta = new Food(
        'PASTA',
        1200,
        'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

    $juice->setOrderCount(2);

    // 配列の中に4つのインスタンスを順に入れて、変数$menusに代入
    $menus = array($juice,$coffee,$curry,$pasta);
?>