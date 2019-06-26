<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Form example</title>
</head>

<body>
    <?php
    //$_GET
    //var_dump($_GET);

    if(!empty($_GET)){
        $firstName = $_GET['firstName'];
        $password = $_GET['password'];
        //echo 'Name:'. $firstName . '/' . $lastName;

        if($firstName == 'ihsen' && strlen($password) > 6){
            echo 'Welcome, ihsen';
        }else{
            echo 'you\'re not allowed to view this page';
        }
    }
    ?>
    <form action="" method="GET">
        <input type="text" name="firstName" placeholder="Your first name">
        <input type="password" name="password" placeholder="Your password">
        <input type="submit" value="Send">
    </form>
</body>

</html>