<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>День 3</title>
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/style.css">
  <!-- <style>
    h1 {
      color: rgba(255,0,0,.7); 
      font-family: arial;
      text-align: center;
     /*  background-color: rgb(0,0,123); */
    }
  </style> -->
</head>
<body>
  <h1>Мое портфолио</h1>
  <div>
    <h3 id="about">Обо мне</h3>
    <p class="about_text bold"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nisi, nesciunt, illo sequi perferendis ullam ratione iste iusto laborum minus labore unde dolor rem molestiae possimus eum accusantium quo officia.</span>
    <span>Nemo, suscipit, harum, nobis, sapiente soluta esse sit recusandae numquam dolore reprehenderit facilis architecto repellendus error quam magnam ab perferendis placeat eaque corporis dolor natus et a. Sed, neque, dignissimos?</span>
    <span>Incidunt, illo id alias fugiat eos. Totam, consectetur, autem, eaque, recusandae hic officiis ad voluptatem odit delectus accusamus rem perferendis quis placeat at non culpa blanditiis distinctio incidunt eum deleniti.</span>
    <span>Voluptate, magni, culpa velit repellendus facilis eos eaque sed nulla laudantium recusandae animi modi voluptas ipsam est assumenda fugiat ducimus? Hic, ad, quae laboriosam earum recusandae ipsa similique magnam minus.</span></p>
    <!-- <img src="/img/avatarko_anonim.jpg" width="300" height="250"> -->
    <img class="about_image" src="/img/avatarko_anonim.jpg" style="height: 300px">
    <!-- <img src="https://avatarko.ru/img/kartinka/1/avatarko_anonim.jpg" width="300" height="250" alt="Ну как-бы это я?"> -->
  </div>
  <div>
    <h3>Я в соцсетях</h3>
    <ol type="I">
      <li><a href="https://vk.com" target="_blank">Вконтакте</a></li>
      <li><a href="https://ok.ru/profile/439046711" target="_blank">Одноклассники</a></li>
      <li><a href="https://www.facebook.com/chikunovm" target="_blank">FaceBook</a></li>
      <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
      <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
    </ol>
  </div>
  <div>
    <h3>Мои работы</h3>
    <table border="1">
      <!-- <caption>Таб.1</caption> -->
      <tr>
        <th>Тип сайта</th>
        <th colspan="2">Кол-во</th>
      </tr>
      <tr>
        <td>Статический</td>
        <td>3</td>
        <td>##</td>
      </tr>
      <tr>
        <td rowspan="2">Адаптивный</td>
        <td colspan="2">18</td>
      </tr>
      <tr>
        <td>Итого</td>
        <td>20</td>
      </tr>
    </table>
  </div>
  <div>
    <h3>Оставить заявку</h3>
    <form action="#">
      <input type="text" placeholder="ФИО" name="fio" required>
      <br>
      <input type="email" placeholder="E-mail" name="email" required>
      <br>
      <label>
        <input type="radio" name="sitetype" value="stat">
        <span>Статический</span>
      </label> 
        <input type="radio" id="adapt" name="sitetype" value="adapt" checked>
        <label for="adapt">Адаптивный</label>
      <br>
      <label>
        <input type="checkbox" name="support">
        <span>Поддержка</span>
      </label>
      <br>
      <label>
        <input type="checkbox" name="design">
        <span>Дизайн</span>
      </label>
      <br>
      <label>
        <input type="checkbox" name="seo">
        <span>SEO</span>
      </label>
      <br>
      <label>
        <p>Загрузить Ваш макет</p>
        <input type="file">
      </label>
      <br>
      <textarea name="comment" id="comment" cols="40" rows="7" placeholder="Ваш комментарий" required></textarea>
      <br>
      <input type="submit" value="Отправить">
      <input type="reset" value="Очистить">
    </form>
  </div>
</body>
</html>