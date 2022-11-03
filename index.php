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
    //функция добавления начала и конца DIVа с авто-заголовком
    function task($arg){
      if ($arg == 'start'){
        static $taskNum = 0;
        echo ('<div class="task"><h1>Задание '. ++$taskNum .'</h1>');
      };
      if ($arg == 'end') echo ('</div>');
    };

    //функция автодобавления Echo со вложенным тегом <p>
    function addText($text){
      echo ('<p>'.$text.'</p>');
    };

    task('start');
      $a = 10;
      $b = 2;
      addText('Число a = '.$a);
      addText('Число b = '.$b);
      addText('------------');
      addText('Сумма: '.($a + $b));
      addText('Разность: '.($a - $b));
      addText('Произведение: '.($a * $b));
      addText('Частное: '.($a / $b));
    task('end');

    task('start');
      $x = 2;
      $y = 6;
      $z = 9;
      addText('Число x = '.$x);
      addText('Число y = '.$y);
      addText('Число z = '.$z);
      addText('------------');
      $c = (($x + 1)*4 - 2*($z - 2 * pow($x,2) + pow($y,2)));
      addText('(x + 1)*4 - 2*(z - 2 * x^2) + y^2))');
      addText('Результат матем.выражения: '.$c);
    task('end');

    task('start');
      $a = 17;
      $b = 10;
      $d = 7;
      addText('Число a = '.$a);
      addText('Число b = '.$b);
      addText('Число d = '.$d);
      addText('------------');
      addText('c = a - b');
      addText('result = c + d');
      $c = $a - $b;
      $result = $c + $d;
      addText('Результат матем.выражения: '.$result);
    task('end');

    task('start');
      $text1 = 'Привет, ';
      $text2 = 'Мир!';
      addText('Значение text1 = '.$text1);
      addText('Значение text2 = '.$text2);
      addText('------------');
      addText('Результат: '.$text1.$text2);
    task('end');

    task('start');
    task('end');
    
  ?>
  
</body>

</html>