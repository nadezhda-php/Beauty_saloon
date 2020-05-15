<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title><?php echo Главная_страница;?></title>
</head>
<body>
    <form name="test" action="check.php" method="post">
        <label>Имя:</label><br />
        <input type="text" name="name" placeholder="Имя" /><br />
        <label>Email:</label><br />
        <input type="text" name="email" placeholder="Email" /><br />
        <label>Сообщение:</label><br />
        <textarea name="message" cols="40" rows="10"></textarea>
        <br/>
        <input type="submit" name="done" value="Готово" />
    </form>