<?php
  setcookie('p', '', time()-3600, "/");
  $theme = $_POST['theme'];

  $mysql =  new mysqli('localhost', 'root', '', 'zadania');
  $result = $mysql->query("SELECT * FROM `zadanie` WHERE `temat`='$theme'");
  $user = $result->fetch_all(MYSQLI_ASSOC);
  $count =  count($user);

  if($count == 0){
     setcookie('p', '', time()-3600, "/");
     header('Location: /strona2');
     exit();
   }
   setcookie('p', json_encode($user), time()+3600, "/");
   $data = json_decode($_COOKIE['p'],true);


  header('Location: /strona2');
   $mysql->close();
   exit();


?>
