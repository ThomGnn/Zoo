<?php
$pdo = new PDO(dsn: 'mysql:host=localhost;port8889;dbname=users_management','root','');
  $statement = $pdo->prepare(statement : 'INSERT INTO users VALUES (:email, :username, :password)';
  $statement->bindValue (parameter : ':email', value : 'rdlnk@example.com', datatypePDO::PARAM_STR);
  $statement->bindValue (parameter : ':username', value : 'test', datatypePDO::PARAM_STR);
  $statement->bindValue (parameter : ':password', password_hash(parameter: 'password',algo: PASSWORD_BSCRIPT) , datatypePDO::PARAM_STR);
  $statement->execute();
?>
