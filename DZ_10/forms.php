<?php
// echo 'Привет ' .  $_POST['name'] . '!';
// echo <<< __NAME
// <html>
// <body>
//     <form method = "post" action = "forms.php">
//     Введите свое имя
//         <input type = "text" name = "name" required = "required">
//         <input type = "submit">
//     </form>
// </body>
// </html>
// __NAME;
//ЗАДАНИЕ 2!!!!              echo "<i>Hello </i>" . strip_tags($_POST['name']) . "<br>";
// echo "<i>Your age is </i>" . strip_tags($_POST['age']) . "<br>";
// echo "<i>Your message is </i>" . strip_tags($_POST['message']) . "<br>";
// echo <<< __NAME
// <html>
// <body>
//     <form method = "post" action = "forms.php">
//             Введите свое имя
//         <input type = "text" name = "name" required = "required">
//          <br><br>
//             Введите свой возраст
//         <input type = "text" name = "age" required = "required">
//          <br><br>
//              Введите свое сообщение
//         <textarea name = "message" rows = "10" cols = "50" 
//         required = "required" placeholder = "Ваше сообщение"></textarea> <br><br>
//         <input type = "submit">
//     </form>
// </body>
// </html>
// __NAME;
    // ЗАДАНИЕ 3
//     if (!empty($_POST['name'])) {
//         echo "Ваш возраст " . $_POST['name'];
//     };
    
    
// if (empty($_POST['name'])) {
// echo <<< __NAME
// <html>
// <body>
//     <form method = "post" action = "forms.php">
//     Введите свой возраст
//         <input type = "number" name = "name">
//         <input type = "submit">
//     </form>
// </body>
// </html>
// __NAME;
// };
// ЗАДАНИЕ 4
$login = "Max Corvus";
$password = "qwerty";

if (empty($_POST['login'])  &&  empty($_POST['password'])) {
echo <<< __NAME
<html>
<body>
    <form method = "post" action = "forms.php">
    Введите свой логин
        <input type = "text" name = "login">
        Введите свой пароль
        <input type = "password" name = "password">
        <input type = "submit">
    </form>
</body>
</html>
__NAME;
};
if (!empty($_POST['login'])  &&  !empty($_POST['password'])) {
    $received_login = trim($_POST['login']);
    $received_password = trim($_POST['password']);
if ($received_login === $login && $received_password === $password)
    {echo "Доступ разрешен!";}

else 
    {echo "Доступ запрещен";}
};