<!DOCTYPE html>
<html lang='ru'>

<head>
  <meta charset='utf-8'>
  <title>Homework PHP#1</title>
  <link rel="shortcut icon" href="./icon/markov-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./style/style.css" />
  <meta http-equiv="Refresh" content="" />
</head>

<body>
    <header>
      <h1>HomeWork PHP#1</h1>
        <h1>Моя IT школа</h1>
      <div class="grid">
        <h1>Курс:</h1>
        <h1>Backend PHP</h1>
        <h1>Преподаватель:</h1> 
        <h1>Маркотин Влад</h1>
        <h1>Группа:</h1>
        <h1>BE107</h1>
        <h1>Тема:</h1>
        <h1>Переменные и логические операторы</h1>
        <h1>Выполнил:</h1>
        <h1>Марков А.В.</h1>
      </div>
      <h2>2022 г.</h2>
    </header>
      <?php
        function task($arg){
          if ($arg == 'start'){
            static $taskNum = 0;
            $taskNum++;
            echo ('<div class="task"><h1>Задание '. $taskNum .'</h1>');
          };
          if ($arg == 'end') echo ('</div>');
        };

        task('start');
        $a = 10;
        $b = 2;
        echo ('<p>Число a: '.$a.'</p>');
        echo ('<p>Число b: '.$b.'</p>');
        echo ('<p>------------</p>');
        echo ('<p>Сумма: '.$c = $a + $b.'</p>');
        echo ('<p>Разность: '.$c = $a - $b.'</p>');
        echo ('<p>Произведение: '.$c = $a * $b.'</p>');
        echo ('<p>Частное: '.$c = $a / $b.'</p>');
        task('end');

        task('start');
        $x = 2;
        $y = 6;
        $z = 9;
        echo ('<p>Число x: '.$x.'</p>');
        echo ('<p>Число y: '.$y.'</p>');
        echo ('<p>Число z: '.$z.'</p>');
        echo ('<p>------------</p>');
        $c = (($x + 1)*4 - 2*($z - 2 * pow($x,2) + pow($y,2)));
        echo ('<p>(x + 1)*4 - 2*(z - 2 * x^2) + y^2))</p>');
        echo ('<p>Результат матем.выражения: '.$c.'</p>');
        task('end');

        task('start');
        task('end');

        task('start');
        task('end');

        task('start');
        task('end');
        
      ?>
      
</body>

</html>