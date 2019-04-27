<?php
    $result = 0;

    if(isset($_POST['add'])){
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;
    }
    if(isset($_POST['sub'])){
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 - $num2;
    }
    if(isset($_POST['multiply'])){
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 * $num2;
    }
    if(isset($_POST['devide'])){
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 / $num2;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        *{
            margin:10px;
        }
        .wrapper{
            width:500px;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Simple Calculator</h2>

        <form action="" method="POST">
            <label for="">First Number</label><br>
            <input type="text" name="num1" ><br>
            <label for="">Second Number</label><br>
            <input type="text"  name="num2" ><br>
            <input type="submit" name="add" value=" + ">
            <input type="submit" name="sub" value=" - ">
            <input type="submit" name="multiply" value=" X ">
            <input type="submit" name="devide" value=" / "><br>
            <label for="">Result</label><br>
            <input type="text" name="result" id="" value="<?php echo $result;?>"><br>
        </form>
    
    </div>
</body>
</html>