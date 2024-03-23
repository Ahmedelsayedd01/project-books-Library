<!--  This DataBase Connection -->
<?php
$dsn = 'mysql:host=localhost;dbname=layerCase';
$user = 'root';
$pass='';
$option = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);



try {
$con = new PDO( $dsn , $user,$pass , $option);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
' You Are Connected Welcom To DataBase ';
}
catch(PDOException $e){
" Faild To Connect " . $e->getMessage();
}

?>