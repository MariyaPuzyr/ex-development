<?php
if( !defined( 'ABSPATH')){ exit(); }
/*
 * Template Name: Plugin login/registration
 */

?>
<div class="currency-reserves get-login-form" id="content">
  <div class="d-flex align-items-center mb-2 position-relative">
    <h2 class="my-0">Пользовательская информация:</h2>
  </div>
  <div class="get-login">
    <p>Будет доступен после входа в аккаунт.</p>
    <div class="get-login-with"><span>Войти с помощью:</span>
      <ul>
        <li><a class="vk" href="#"></a></li>
        <li><a class="facebook" href="#"></a></li>
        <li><a class="od" href="#"></a></li>
      </ul>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="login-tab" data-toggle="tab" href=".login" role="tab" aria-controls="login" aria-selected="true">Вход</a></li>
      <li class="nav-item"><a class="nav-link" id="registration-tab" data-toggle="tab" href=".registration" role="tab" aria-controls="registration" aria-selected="false">Регистрация</a></li>
    </ul>
    <div class="tab-content">
      <div class="item-tabs tab-pane fade show active login" role="tabpanel" aria-labelledby="login-tab">
        <?php echo do_shortcode('[login_page]'); ?>
        <div class="form-group">
          <a class="have-account load-page" data-link="lostpass">Не могу вспомнить пароль</a>
          <a class="have-account" data-toggle="tab" href=".registration" role="tab" aria-controls="registration" aria-selected="false">У меня нет аккаунта</a>
        </div>
      </div>
      <div class="tab-pane item-tabs fade registration" role="tabpanel" aria-labelledby="registration-tab">
        <?php echo do_shortcode('[register_page]'); ?>
        <div class="form-group">
          <a class="have-account" data-toggle="tab" href=".login" role="tab" aria-controls="login" aria-selected="true">У меня уже есть аккаунт</a>
        </div>
      </div>
    </div>
  </div>
</div>