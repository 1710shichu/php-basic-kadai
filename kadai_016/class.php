<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題16章</title>
</head>
<body>
    <?php
    // クラスの定義
    class Food{
      // プロパティを定義
      private $name;
      private $price;
      // メソッドの定義
      public function show_price($price){
        echo $this->price;
        }
      // コンストラクタの初期化
      public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
        }
      }
    // インスタンス化
    $food = new Food('potato', 250);
    // メソッドにアクセスしメソッドを実行
    print_r ($food);
    echo'<br>';

  // クラスの定義
    class Animal{
      private $name;
      private $height;
      private $weight;

      public function show_height($height){
      echo $this->height;
     }
    // コンストラクタの初期化
    public function __construct($name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }
    }
    // インスタンス化
    $animal = new Animal('dog', 60, 5000);
    // インスタンス$animalに各プロパティの値を出力する
    print_r($animal);
    echo '<br>';

    $food->show_price(250);
    echo '<br>';

    $animal->show_height(60);
    echo'<br>';

   ?>
  
</body>
</html>