<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>
<form>

<?php
require('connect.php');
if(isset($_POST['dog_name']) && isset($_POST['dog_age'])){
    $dog_name = $_POST['dog_name'];
    $dog_age = $_POST['dog_age'];
    $dog_breed = $_POST['dog_breed'];


    $query = "INSERT INTO onlydog (dog_name , dog_age , dog_breed  ) VALUES ('$dog_name' , '$dog_age'  , '$dog_breed' ) ";
    $result = mysqli_query($connection , $query);

    if($result)
    {
        $smsg = "СВОБОДУ СОБАКЕНАМ !!!";
    } else {
        $fsmsg = "ошибка !";
    }
}

?>


<form method="POST" >
    <h2>Регистрация</h2>
    <h2>зарегистрируйте имя собаки</h2>
    <input type="text" name = "dog_name" placeholder = "dog_name" required >
    <br><br>
    <h2>зарегистрируйте возраст собаки</h2>
    <input type="text" name = "dog_age" placeholder = "dog_age" required >
    <br><br>
    <h2>зарегистрируйте породу собаки</h2>
    <input type="text" name = "dog_breed" placeholder = "dog_breed" required >
    <br><br>
    <button name = "form" type="submit">отправить в базу данных </button>
</form>
<br>
    <a href="login.php">
        <button >перейти в login.php</button>
    </a>
<br>




</body>
</html>