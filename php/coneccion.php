<?php 


function connection(){
    $conexion = null;
    $host     = 'ec2-18-188-129-60.us-east-2.compute.amazonaws.com'; #ip o nombre del servidor remoto o local
    $database = 'testConneciondb'; //SE ENCUENTRA TODAS LAS ENTIDADES REGISTRADAS
    $username = 'phpConnection';
    $password = '1997barco07pablo97'; #PASSWIRD #PASSWORD SERVIDOR REMOTO ==> Pablo_1997
    $utf8mb4  = 'utf8mb4';

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$database;charset=$utf8mb4",$username, $password );
    }catch (PDOException $e){
        echo '<pre>'.$e; 
    }

    if($conexion){
        echo 'coneccion establesida'; 
    }else{
        echo '<br>error de coneccion'; 
    }
}

connection(); 


?>