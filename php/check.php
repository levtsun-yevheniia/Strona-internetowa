<?php
  $theme = $_POST['theme'];
  $task = $_POST['task'];

  $mysql =  new mysqli('localhost', 'root', '', 'zadania');
  $mysql -> query("INSERT INTO `zadanie`(`temat`,`zadanie`) VALUES('$theme','$task')");
  $mysql->close();

  header('Location: /strona2');


?>
