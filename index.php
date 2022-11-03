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
    //функция добавления начала и конца DIVа с авто-заголовком по запросу
    function task($arg){
      if ($arg == 'start'){
        static $taskNum = 0;
        echo ('<div class="task"><h1>Задание '. ++$taskNum .'</h1>');
      };
      if ($arg == 'end') echo ('</div>');
    };

    //функция автодобавления Echo со вложенным тегом <p>
    function add($text){
      echo ('<p>'.$text.'</p>');
    };

    task('start');
      $a = 10;
      $b = 2;
      add('Число a = '.$a);
      add('Число b = '.$b);
      add('------------');
      add('Сумма: '.($a + $b));
      add('Разность: '.($a - $b));
      add('Произведение: '.($a * $b));
      add('Частное: '.($a / $b));
    task('end');

    task('start');
      $x = 2;
      $y = 6;
      $z = 9;
      add('Число x = '.$x);
      add('Число y = '.$y);
      add('Число z = '.$z);
      add('------------');
      $c = (($x + 1)*4 - 2*($z - 2 * pow($x,2) + pow($y,2)));
      add('(x + 1)*4 - 2*(z - 2 * x^2) + y^2))');
      add('Результат матем.выражения: '.$c);
    task('end');

    task('start');
      $a = 17;
      $b = 10;
      $d = 7;
      add('Число a = '.$a);
      add('Число b = '.$b);
      add('Число d = '.$d);
      add('------------');
      add('c = a - b');
      add('result = c + d');
      $c = $a - $b;
      $result = $c + $d;
      add('Результат матем.выражения: '.$result);
    task('end');

    task('start');
      $text1 = 'Привет, ';
      $text2 = 'Мир!';
      add('Значение text1 = '.$text1);
      add('Значение text2 = '.$text2);
      add('------------');
      add('Результат: '.$text1.$text2);
    task('end');

    task('start');
      $name = 'Андрей';
      add('Значение name = '.$name);
      add('------------');
      add('Привет, '.$name.'!');
    task('end');

    task('start');
      $todayYear = date("Y"); //текущий год
      $todayMonth = date("n"); //текущий месяц
      $todayDay = date("j"); //текущий день
      $todayHour = date("H"); //текущий час
      $todayMinute = date("i"); //текущая минута
      $todaySec = date("s"); //текущая секунда
      $year = $todayYear - 2000; //текущий год минус 2000-й год
      $day = $year * 365 + ($todayMonth - 1) * 30 + $todayDay; //дней в месяце 30 - условность
      $hour = $day * 24 + $todayHour - 1;
      $min = $hour * 60 + $todayMinute - 1;
      $sec = $min * 60 + $todaySec;
      add('<b>Есть усложнение!</b> Идет работа с объектом дата, откуда берутся данные текущего времени');
      add('<b>Недостатки</b>. Из-за условности в подсчете дней в месяцах текущего года (30 дн.) появляется неточность.'.
      'Также не учитываются дни в високосные года (только 365 дн.).');
      add('------------');
      add('Прошло секунд с 01.01.2000 года: '.$sec.' сек.');
      add('Прошло минут с 01.01.2000 года: '.$min.' мин.');
      add('Прошло часов с 01.01.2000 года: '.$hour.' часов');
      add('Прошло дней с 01.01.2000 года: '.$day.' дней');
      add('Прошло лет с 01.01.2000 года: '.$year.' года');
    task('end');

  ?>
  
</body>

</html>