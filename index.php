<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>

<div class="container">
  <?php include 'header.php';?>
  <div class="wrapper">
    <h3>Данное приложение иллюстрирует основные положения PHP/MySQL</h3>
    <p>сначала нужно создать таблицу в базе данных:</p>
    <p><pre>
      CREATE TABLE posts (
      id MEDIUMINT NOT NULL AUTO_INCREMENT,
      title VARCHAR(30) NOT NULL,
      img VARCHAR(30) NOT NULL,
      body TEXT NOT NULL,
      PRIMARY KEY (id)
      );
    </pre></p>
    <p>Так должна выглядеть полученная таблица:</p>
    <p><img src="img/table.png" alt=""></p>
    <p>Также нужно проставить правильные значения переменных для соединения с БД (в файлах addpost, updpost, removepost):</p>
    <h5>$servername = "localhost";</h5>
    <h5>$username = "qwerty";</h5>
    <h5>$password = "qwerty";</h5>
    <h5>$dbname = "qwerty";</h5>
  </div>
</div>

</body>
</html> 
