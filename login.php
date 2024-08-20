<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="login-store.php" method="get"> -->
    <form action="login-store.php" method="post" enctype="multipart/form-data">
        <label for="email">email</label>
        <input type="text" id="email" name="email">
        <label for="">pass</label>
        <input type="text" name="pass">
        <!-- <input type="file" name="resume"> -->
        <button type="submit">submit</button>
    </form>
</body>
</html>