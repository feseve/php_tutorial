<?php
    echo "Hello, World!";
?>

<br>

<?php
    echo 5 + 7;
?>
<br>

<?php
    echo '5 + 7';
?>

<br>

<?php
    $fruit = 'りんご';
    echo $fruit
?>

<br>

<?php
    $sum = 8 + 9;
    echo $sum
?>

<?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
?>

<br>

<!-- この下で$xの計算をしていきましょう -->
<?php
    $x += 10;
    echo $x;
?>

<br>

<!-- この下で$yの計算をしていきましょう -->
<?php
    $y *= 5;
    echo $y;
?>

<br>

<!-- この下で$aの計算をしていきましょう -->
<?php
    $a++;
    echo $a;
?>

<br>

<!-- この下で$bの計算をしていきましょう -->
<?php
    $b--;
    echo $b;
?>

<br>

<?php
    $name = 'にんじゃわんこ';
    // 'こんにちは！'という文字列と$nameを連結してechoしてください
    echo "こんにちは！".$name
?>

<br>

<?php
    $x = 99 * 99;
    $y = 77 * 77;
    
    if($x > 9800){
        echo "変数xは9800より大きいです。";
    }
    
    if($y > 6000){
        echo "変数yは6000より大きいです。";
    }
?>

<br>

<?php
    $x = 1071;
    
    if($x % 3 == 0 && $x % 7 == 0){
        echo "xは3の倍数かつ7の倍数です。";
    }elseif($x % 3 == 0){
        echo "xは3の倍数ですが7の倍数ではありません。";
    }elseif($x % 7 == 0){
        echo "xは7の倍数ですが3の倍数ではありません。";
    }else{
        echo "xは7の倍数でも3の倍数でもありません。";
    }    
?>

<br>

<?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 6;

    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num % 3;

    // switch文を用いてください
    switch($remainder){
        case 0:
            echo "大吉です。";
            break;
        case 1:
            echo "中吉です。";
            break;
        case 2:
            echo "小吉です。";
            break;
        default:
            echo "凶です。";
            break; 
    } 
?>

<br>

<?php

    // この下に配列を作ってください
    $colors = array('赤', '青', '黄');
    echo $colors[0];
    
    $colors[] = '白'; //追加
    echo $colors[3];
    
?>

<br>

<?php

    // この下に連想配列を作ってください
    $scores = array(
        '数学' => 70,
        '英語' => 90,
        '国語' => 80,
    );
    
    $scores['国語'] += 5;
    echo $scores['国語'];
?>

<br>

<?php

    // この下にfor文を書いてください
    for($i = 51; $i <= 56; $i++){
        echo $i.'<br>';
    }
    
?>

<br>

<?php
    $i = 2;
    // while文を書いてください 偶数のみ表示
    while($i <= 10){
        if($i % 2 == 0 ){
        echo $i.'<br>'; 
        }
        $i++;
    }    
?>

<?php
    // この下にfor文を書いてください
    for($i = 1; $i <= 1000; $i++){
        if($i == 10){
            break;
        }
        echo $i.'<br>';
    }
?>

<?php //continue文 スキップ処理

    // この下にfor文を書いてください
    for($i = 1; $i <= 10; $i++){
        if($i % 3 == 0){
            continue;
        }
        echo $i.'<br>';
    }
?>

<?php //foreach文
    $scores = array(
        '数学' => 70,
        '英語' => 90,
        '国語' => 80
        );

    // この下にforeach文を書いてください
    foreach($scores as $key => $value){
        echo $key.'は'.$value.'点です。';
    }
?>

<br>

<?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen($str);
    
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    echo count($array);
    
    echo '<br>';
    
    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10,15).'<br>';
    
?>

<?php //関数 function

    // 関数helloを定義してください
    function hello(){
        echo 'Hello, world!';
    }
    
    // 関数helloを呼び出してください
    hello();
    
    echo '<br>';
    // 関数printRectangleAreaを定義してください
    function printRectangleArea($height, $width){
      echo $height * $width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5,10);
    
?>

<br>

<?php //return

    // 関数getCircleAreaを定義してください
    function getCircleArea($radius){
      return $radius * $radius * 3;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
    $circleArea = getCircleArea(5);
    
    // $circleAreaをechoしてください
    echo $circleArea;
    
?>