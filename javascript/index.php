<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <script>
  // ----------------Типы данных --------------------------
  /*  let hello = "Привет" + "мир!";
    hello = 15;
    //document.write(`Привет ${hello*hello}`);
    
    let number = 15; //Число
    let string = "Текст"; //Строка
    let booleanTrue = true; //Булево
    let booleanFalse = false; //Булево
    let array = [5, true, "hello"]; //Массив
    let object = {
      text: "hello",
      number: 15
    }; //Объект 
    //alert(array[1]);
    //alert(object["text"]);
    let unde; //Тип данных undefind
    let a = null; //Тип данных null, пусто, значение неизевстно
    console.log(string);
    console.log(`Просто текст ${number+number}`); */
  // ----------------------------------------------
  //---------- Преобразование типов данных -----------------
  
  //  alert(4+"2");
  //------------------------------
  //-------------------Операторы
  
   /* let a = "15";
    let result = 10 % 3; //Остаток от деления
    ++result;
    alert(result);
    alert(a);*/
    /*let a = 3;
    a %=5;
    alert(a);
    */
    //----------------------------
    //-------------------- Опреаторы сравнения
    /*let a = 5, b= 10;
    let c = true;
    alert(!(a>b));
    */
    /*let cat = "Cat", bat = "Bat"; cow = "Cow", cats = "Cats";
    //alert(cat>cats);
    alert(())
    alert("t">"T");*/
    
   //-------------------alert promt confirm----------
    /*let age = prompt("Ну и сколько?",34);
    if (age != null) {alert(`Тебе ${++age} лет!`)};
  */
    /*let a = +prompt("Введите первое чило");
    let b = +prompt("Введите второе чило");
    let sum = a + b;
    alert("Результат: " + sum);
    */
    /*let ageCheck = confirm("Вам есть 18?");
    alert(ageCheck);*/
    //-------------Условия
   /* let currentYear = +prompt("Какой сейчас год");
    if(currentYear == 2020) {
      alert("Верно");
    } else if (!currentYear) {
      alert("Введите число");  
    } else {
      alert("Неверно");
    }*/
   /* let a = +prompt("Введите число от 5 до 10");
    if(a >= 5 && a <= 10) {
      alert("правильно");
    } else if (!a) {
      alert("введите число");
    }
      else {
      alert("неправильно");
    }*/
    /*let b = +prompt("Введите число 10 или 20");
    if(b == 10 || b == 20) {
      alert("правильно");
    } else if (!b) {
      alert("введите число");
    }
      else {
      alert("неправильно");
    }*/
    /*let c = +prompt("Введите от 5 до 10 или от 20 до 30");
    if ((c >= 5 && c <= 10) || (c >= 20 && c <= 30)){
        alert("правильно");
    } else if (!c) {
      alert("введите число");
    }
      else {
      alert("неправильно");
    }  
    */
    if(confirm("Вам больше 18 лет?")) {
      alert("Welcome");
    } else {
      window.open("https://ya.ru", target="_blank");
    }
</script> 
</body>
</html>