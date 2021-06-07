<?php
if (!empty ($_POST['name'])) {
$name = $_POST['name'];
};

echo <<< __NAME
<html>
<body>
    <form method = "post" action = "value_holder.php">
    Введите своe имя
        <input type = "text" name = "name" value = $name>
        <input type = "submit">
    </form>
</body>
</html>
__NAME;
// ЗАДАНИЕ 2
// if (!empty ($_POST['name'])) {
// 	 $name = $_POST['name'];
// 	};
// 	if (!empty ($_POST['message'])) {
// 		$message = $_POST['message'];
// 	   };
// 	   echo <<< __NAME
// 	   <html>
// 	   <body>
// 		   <form method = "post" action = "value_holder.php">
// 		   Введите свой возраст
// 			   <input type = "number" name = "name" value = $name>
// 			   Введите свое сообщение
// 			   <textarea name = "message">$message</textarea>
// 			   <input type = "submit">
// 		   </form>
// 	   </body>
// 	   </html>
// __NAME;