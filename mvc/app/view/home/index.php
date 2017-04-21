<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="<?php echo Route::post('home', 'create', ['id' => rand(1, 10)]); ?>" method="post">
        <label for="num">Number</label>
        <input type="number" name="num">
        <button type="submit">Send</button>
    </form>
</body>
</html>
