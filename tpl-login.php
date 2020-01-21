<?php
/*
 */

?>
<div class="currency-reserves" id="content">
  <div class="get-login">
    <p>Будет достпен после входа в аккаунт.</p>
    <div class="get-login-with"><span>Войти с помощью:</span>
      <ul>
        <li><a class="vk" href="#"></a></li>
        <li><a class="facebook" href="#"></a></li>
        <li><a class="od" href="#"></a></li>
      </ul>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Вход</a></li>
      <li class="nav-item"><a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Регистрация</a></li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="item-tabs tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
        <form class="settings" action="">
          <div class="form-group">
            <input class="form-control" type="text" required=""><span class="form-underline"></span>
            <label>Логин или email:</label>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" required=""><span class="form-underline"></span>
            <label>Пароль:</label>
          </div>
          <div class="form-group">
            <button class="send-btn">Войти</button>
            <a class="have-account load-page" data-link="lostpass">Не могу вспомнить пароль</a>
            <a class="have-account" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">У меня нет аккаунта</a>
          </div>
        </form>
      </div>
      <div class="tab-pane item-tabs fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
        <form class="settings" action="">
          <div class="form-group">
            <input class="form-control" type="text" required=""><span class="form-underline"></span>
            <label>Логин:</label>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" required=""><span class="form-underline"></span>
            <label>Email:</label>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" required=""><span class="form-underline"></span>
            <label>Пароль:</label>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" required=""><span class="form-underline"></span>
            <label>Пароль еще раз:</label>
          </div>
          <div class="checkbox-form">
            <input class="styled-checkbox" id="accept" type="checkbox" value="value1">
            <label class="align-items-center" for="accept">Принимаю правила сервиса</label>
          </div>
          <div class="form-group">
            <button class="send-btn">Зарегистрироваться</button><a class="have-account" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">У меня уже есть аккаунт</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>