<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <form action="registerlogin" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="text" name="name">
        <button type="submit">Register</button>
    </form>
</body>
</html>