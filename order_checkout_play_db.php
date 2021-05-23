<?php 
include("bd.php");

if (isset($_POST['cardNumber']) && isset($_POST['CardHolder'])){

    // Переменные с формы
    $cardNumber = $_POST['cardNumber'];
    $CardHolder = $_POST['CardHolder'];
    
 
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (cardNumber,CardHolder) VALUES ('$cardNumber','$CardHolder')");
    
    if ($result == true){
    	header("Location:/order/index.php");
    }else{
    	echo "Информация не занесена в базу данных";
    }
}


?>