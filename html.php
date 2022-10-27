<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
   <title></title>
<style>
.button {
    background-color: green;
    color:white;
    padding: 10px 30px;
    text-align: center;
    display: inline-block;
    font-size: 15px;
}
</style>

</head>

<?php
    require_once ('info.php');

    if (!empty($_POST))
    {
    $nameBox    = trim($_POST['nameBox']);
    
    $error['nameBox'] = validateUserName($nameBox);
    }
?>

<body>

<form name="userForm">
    <div>
    <label for="nameBox">Username :</label>
    <input type="text" id="nameBox" name="userName"><br>    
<input type="button" class="button" value="Submit">

<div>

</body>
</html>