<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary converter</title>
</head>
<body>
    <h1>BINARY CONVERTER</h1>
    <label for="numberIn">Type any decimal number</label>
    <input type="text" name="numberIn" value="<?php echo $_POST['numberIn'];?>"> <br>
    <br>
    <?php $bin = decbin($_POST['numberIn'])?>
    <label for="numberOut">Binary number</label>
    <input type="text" name="numberOut" style="margin-left: 70px" value="<?php echo $bin ?>">
</body>
</html>