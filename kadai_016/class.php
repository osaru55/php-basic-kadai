<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      // クラスを定義する
      class Food{
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }

        // 「price」プロパティの値を出力するメソッドを定義する
        public function show_price(){
          echo $this->price . '<br>';
        }
      }

      // クラスを定義する
      class Animal{
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // 「price」プロパティの値を出力するメソッドを定義する
        public function show_height(){
          echo $this->height . '<br>';
        }

      }

      // インスタンス化する
      $food = new Food('potato', 250);

      // インスタンス$foodの各プロパティの値を出力する
      print_r($food);
      echo '<br>';

      // インスタンス化する
      $animal= new Animal('dog', 60, 5000);

      // インスタンス$animalの各プロパティの値を出力する
      print_r($animal);
      echo '<br>';

      // メソッドを呼び出す
      $food->show_price();

      // メソッドを呼び出す
      $animal->show_height();

      ?>
    </p>
</body>

</html>
