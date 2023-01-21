<?php
class Menu {
    //インスタンス$name
    public $name;

    public function __construct($name){
        //newを使ってインスタンスを生成したときに実行
        $this->name = $name;
    }

  // $this 呼び出しているインスタンスに書き換えられる 例:$curry,$pasta
    public function hello(){
        echo '私は'.$this->name.'です';
    }
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
// $curryに対してhelloメソッドを呼び出してください
$curry->hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();

?>

<p><?php echo $curry->name ?></p>
<p><?php echo $pasta->name ?></p>