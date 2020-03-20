<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <script>
    let online = ["Вася", "Миша", "Костя", "Саша", "Андрей"];
    let message = "Пользователи в сети: ";
    
    message += online + "."; 
    alert(message); //Без пробелов после ","
    
    alert(message.replace(/,/g, ", ") ); //С пробелами после ","
    
    //Бежим по массиву forEach
    message = "Пользователи в сети: ";
    online.forEach( (item, index, array) => {
    
    message += item + ((index == array.length - 1) ? "." : ", ");
    
      
    });
    alert(message);
    
    //Бежим по массиву  for ()
    message = "Пользователи в сети: ";
    for(let index = 0; index < online.length; index++) {
    
    message += online[index] + ((index == online.length - 1) ? "." : ", ");
    
      
    }
    
    alert(message);
    

  </script>
</body>
</html>