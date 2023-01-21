<?php
class Menu {
    //インスタンス$name
    public $name;

    public function __construct(){
        //newを使ってインスタンスを生成したときに実行
        echo '１つのメニューが作られました';
    }

  // $this 呼び出しているインスタンスに書き換えられる 例:$curry,$pasta
    public function hello(){
        echo '私は'.$this->name.'です';
    }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
// $curryに対してhelloメソッドを呼び出してください
$curry->hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();

?>