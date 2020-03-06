<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xss</title>
</head>
<body>
<form action="" method="post">
    <textarea name="komentar" id="komentar" cols="30" rows="10"></textarea>
    <button name="submit" type="submit">Kirim</button>
    </form>
    <?php if(isset($_POST["submit"])) :?>
    <h1><?= $_POST["komentar"]?></h1>
    <?php endif; ?>
</body>
</html>