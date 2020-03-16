<?php if( !defined( 'ABSPATH')){ exit(); }

$ui = wp_get_current_user();
$user_id = intval($ui->ID);
$stand_refid = stand_refid();
$url = rtrim(get_site_url_ml(),'/') .'/';

global $or_template_directory;
$plugin = get_plugin_class();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="container">

	<?php do_action('pn_header_theme'); ?>

	<?php
	$h_change = get_theme_option('h_change', array('fixheader','phone','icq','skype','email','linkhead','telegram','viber','whatsapp','jabber'));
	?>

  <!-- add my own header -->
  <header class="header"><a class="logo" href="/"><img src="<?php echo $or_template_directory; ?>/img/svg/logo.svg" alt=""><span>exal.money</span></a>
    <div class="header-menu">
      <ul class="nav" role="tablist">
        <li><a class="header-menu__link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="true">
            <div class="icons menu-info"></div>
            <div class="notification">2</div></a></li>
        <li><a class="header-menu__link" id="my-operations-tab" data-toggle="tab" href="#my-operations" role="tab" aria-controls="my-operations" aria-selected="false">
            <div class="icons menu-icons"></div></a></li>
        <li><a class="header-menu__link" id="accounts-list-tab" data-toggle="tab" href="#accounts-list" role="tab" aria-controls="accounts-list" aria-selected="false">
            <div class="icons menu-payments"></div></a></li>
        <li><a class="header-menu__link" id="user-info-tab" data-toggle="tab" href="#user-info" role="tab" aria-controls="user-info" aria-selected="false">
            <div class="icons menu-settings-info"></div></a></li>
        <li><a class="header-menu__link" id="links-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="false">
            <div class="icons menu-icons-burger"></div>
            <div class="notification">2</div></a></li>
      </ul>
      <div class="tab-content">
        <?php if ($user_id) { ?>
          <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <h2>Контакты</h2>
            <div class="accordion" id="contacts-info">
              <div class="card">
                <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>Мессенджеры</span></div>
                <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#contacts-info">
                  <div class="contact-messengers">
                    <p class="description">Операторы на связи 24 часа.</p>
                    <div class="contact-info">
                      <div class="contact-ico">
                        <svg class="icon">
                          <use xlink:href="<?php echo $or_template_directory; ?>/img/sprites/sprite.svg#facebook-ico"></use>
                        </svg>
                      </div>
                      <div class="contact-info__item">Facebook messenger<a href="https://m.me/NewLineonline">@NewLineonline</a></div>
                    </div>
                    <div class="contact-info">
                      <div class="contact-ico"><img class="icon" src="<?php echo $or_template_directory; ?>/img/telegram-ico.png" alt=""></div>
                      <div class="contact-info__item">Telegram<a href="tg://resolve?domain=NewLineonline">@NewLineonline</a><a href="tg://resolve?domain=NewLineOnline_bot">@NewLineOnline_bot</a></div>
                    </div>
                    <div class="contact-info">
                      <div class="contact-ico">
                        <svg class="icon">
                          <use xlink:href="<?php echo $or_template_directory; ?>/img/sprites/sprite.svg#skype-ico"></use>
                        </svg>
                      </div>
                      <div class="contact-info__item">Skype<a href="skype:Exall?chat">Exall</a></div>
                    </div>
                    <div class="contact-info">
                      <div class="contact-ico">
                        <svg class="icon">
                          <use xlink:href="<?php echo $or_template_directory; ?>/img/sprites/sprite.svg#viber-ico"></use>
                        </svg>
                      </div>
                      <div class="contact-info__item">Viber<a href="viber://chat?number=+79817827276">+79817827276</a></div>
                    </div>
                    <div class="contact-info">
                      <div class="contact-ico">
                        <svg class="icon">
                          <use xlink:href="<?php echo $or_template_directory; ?>/img/sprites/sprite.svg#watsapp-ico"></use>
                        </svg>
                      </div>
                      <div class="contact-info__item">Watsapp<a href="https://wa.me/79817827276">@NewLineonline</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>Форма обратной связи</span></div>
                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#contacts-info">
                  <div class="contact-form">
                    <p class="description">Вопросы, предложения и пожелания.</p>
                    <?php echo do_shortcode('[contact_form]'); ?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>Адрес и реквизиты</span></div>
                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#contacts-info">
                  <div class="contact-address">
                    <p>ООО «АКТИВ»<br>162616, Вологодская обл, Череповец, пр. Победы, д. 142, кв. 72<br>ОГРН 1163525093016<br>ИНН 3528261408<br>КПП 352801001<br>рс 40702810235330000536<br>кс 30101810900000000910<br>БИК 044030910<br>САНКТ-ПЕТЕРБУРГСКИЙ РФ АО «РОССЕЛЬХОЗБАНК»</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="my-operations" role="tabpanel" aria-labelledby="my-operations-tab">
            <div class="menu-height">
              <div class="currency-reserves">
                <div class="d-flex align-items-center mb-2 position-relative">
                  <h2 class="my-0">Мои операции</h2>
                </div>
                  <?php echo do_shortcode('[userxch]'); ?>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="accounts-list" role="tabpanel" aria-labelledby="accounts-list-tab">
            <div class="menu-height">
              <div class="currency-reserves">
                <div class="d-flex align-items-center mb-2 position-relative">
                  <h2 class="my-0">Список счетов</h2>
                </div>
                <?php echo do_shortcode('[userwallets]'); ?>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="user-info" role="tabpanel" aria-labelledby="user-info-tab">
            <div class="menu-height">
              <div class="user-info"><span>Привет, <?php echo get_caps_name($ui->user_login); ?></span>
                <div class="discount">Накопительная скидка –
                    <?php echo get_user_discount($user_id, $ui).'%'; ?></div>
              </div>
              <ul class="links-list">
                <li><a class="load-page" href="#" data-link="<?php echo $plugin->get_page('account'); ?>">Личная информация</a></li>
                <li><a class="load-page" href="#" data-link="security">Настройки безопасности</a></li>
                <li><a href="<?php echo get_pn_action('logout', 'get'); ?>"><?php _e('Exit', 'pntheme'); ?></a></li>
              </ul>
              <div class="partners-info mt-auto">
                <div class="partners-info__title">Партнерская ссылка:</div>
                <form action="">
                  <div class="partners-info__copy">
                    <input class="form-control" type="text" disabled="disabled" value="<?= $url.'?'. $stand_refid .'='. $user_id ?>">
                    <button class="copy-btn"></button>
                  </div>
                  <div class="partners-info__description">получайте 10-30% от прибыли с переводов.<a href="#">Подробнее</a></div>
                </form>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
            <div class="menu-height">
                <ul class="links-list">
                    <li><a class="load-page" href="#" data-link="currency-reserves">Резервы валют</a></li>
                    <li><a class="load-page" href="#" data-link="news-list">Новости</a></li>
                    <li><a href="tos">Правила обмена</a></li>
                    <li><a href="paccount">Партнерская программа</a></li>
                </ul>
              <div class="partners-info mt-auto">
                <div class="partners-info__title">Партнерская ссылка:</div>
                <form action="">
                  <div class="partners-info__copy">
                    <input class="form-control" type="text" disabled="disabled" value="<?= $url.'?'. $stand_refid .'='. $user_id ?>">
                    <button class="copy-btn"></button>
                  </div>
                  <div class="partners-info__description">получайте 10-30% от прибыли с переводов.<a href="#">Подробнее</a></div>
                </form>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <?php get_template_part( 'tpl', 'login' ); ?>
        <?php } ?>
        <!--.content-inner-->
      </div>
    </div>
  </header>
  <!-- add my own header end -->

	<div class="wrapper">
    		<div class="content_wrap">
