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