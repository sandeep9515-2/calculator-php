<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <style>
        form{
            display:flex;
            justify-content: center;
            align-items: center;
            background:red;
        }
    </style>
    <title>Calculator</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="num01" placeholder="enter number 1"> <br/>
    <select name="operators">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="mutiply">*</option>
        <option value="divide">/</option>
    </select></br>
    <input type="number" name="num02" placeholder="enter number 2">
    <button>calculate</button>
    </form>
</body>
</html>