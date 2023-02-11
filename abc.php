<?php


$host='localhost';
$user='root';
$pass='';
$db='test';

try{

    $DBH=new pdo("mysql:host=$host;dbname=$db",$user,$pass);

}catch(PDOException $e){

    echo"Not Connected..".$e->geooMessage();
}

$ip = $_SERVER['REMOTE_ADDR'];

$sql="SELECT ip FROM visitors WHERE ip='$ip'";

$check=$DBH->prepare($sql);
$check->execute();
$checkIp=$check->rowCount();

if ($checkIp==0){
    $query="INSERT INTO visitors(id,ip) VALUES(NULL,'$ip')";
    $insertIp=$DBH->prepare($query);
    $insertIp->execyte();
}
$number=$DBH->prepare("SELECT ip FROM visitors");
$number->execute();
$visitor=$number->rowCount();
echo $visitor;

?>
