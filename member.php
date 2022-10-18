<?php

$keyword = $_GET["keyword"];
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");


$stmt = $pdo->prepare("SELECT * from member where name like '%$keyword%'"); 
$stmt->execute(); 	
?>


<?php while($row = $stmt->fetch()):?>
    ชื่อ: <?=$row["name"] ?> <br>
    ที่อยู่: <?=$row["address"] ?> <br>
    เบอร์: <?=$row["mobile"] ?> <br>  
    email: <?=$row["email"] ?> <br>
    <hr>

<?php endwhile; ?>