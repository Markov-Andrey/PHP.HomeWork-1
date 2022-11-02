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
        $taskNumber = 0; //номер задания
        $divStart = '<div class="task">'.
          '<h1>Task '.++$taskNumber.'</h1>'; //новый див
        $divEnd = '</div>';

        echo $divStart;
        $a = 10;
        $b = 2;
        echo ('<p>Сумма: '.$a + $b.'</p>');
        echo ('<p>Разность: '.$a - $b.'</p>');
        echo ('<p>Произведение: '.$a * $b.'</p>');
        echo ('<p>Частное: '.$a / $b.'</p>');
        echo $divEnd;
      ?>
</body>

</html>