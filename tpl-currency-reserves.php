<?php
if( !defined( 'ABSPATH')){ exit(); }
global $or_template_directory;

/*

Template Name: Currency reserves

*/
?>
<div class="currency-reserves" id="content">
  <div class="d-flex align-items-center mb-2 position-relative"><a class="back-link" href="#"></a>
    <h2 class="sidebar-title">456456</h2>
  </div>
    <?php
    if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!--<div class="currency-reserves" id="content">
  <div class="d-flex align-items-center mb-2 position-relative"><a class="back-link" href="#"></a>
    <h2 class="sidebar-title">Резервы валют</h2>
  </div>
  <form action="">
    <div class="form-group">
      <input class="form-control" type="search" required=""><span class="form-underline"></span>
      <label>Поиск по названию валюты</label>
      <button class="search-btn"></button>
    </div>
  </form>
  <div class="currency-reserves__list">
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/qiwi.svg">
      <div class="currency-reserves__info">Qiwi<span>10 345 456</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/bitcoin.svg">
      <div class="currency-reserves__info">Bitcoin<span>0,234546</span></div>
      <div class="currency-reserves__tarif">Btc</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/btc-e-code.svg">
      <div class="currency-reserves__info">Btc-e code<span>5 234 234</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/btc-e-code.svg">
      <div class="currency-reserves__info">Btc-e code<span>23 345</span></div>
      <div class="currency-reserves__tarif">Usd</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/ethereum.svg">
      <div class="currency-reserves__info">Ethereum<span>23,34553</span></div>
      <div class="currency-reserves__tarif">Eth</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/litecoin.svg">
      <div class="currency-reserves__info">LiteCoin<span>23,45623</span></div>
      <div class="currency-reserves__tarif">Ltc</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/advanced-cash.svg">
      <div class="currency-reserves__info">Advanced Cash<span>45 345 234</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/advanced-cash.svg">
      <div class="currency-reserves__info">Advanced Cash<span>23 345</span></div>
      <div class="currency-reserves__tarif">Usd</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/qiwi.svg">
      <div class="currency-reserves__info">Qiwi<span>10 345 456</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/bitcoin.svg">
      <div class="currency-reserves__info">Bitcoin<span>0,234546</span></div>
      <div class="currency-reserves__tarif">Btc</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/btc-e-code.svg">
      <div class="currency-reserves__info">Btc-e code<span>5 234 234</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/btc-e-code.svg">
      <div class="currency-reserves__info">Btc-e code<span>23 345</span></div>
      <div class="currency-reserves__tarif">Usd</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/ethereum.svg">
      <div class="currency-reserves__info">Ethereum<span>23,34553</span></div>
      <div class="currency-reserves__tarif">Eth</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/litecoin.svg">
      <div class="currency-reserves__info">LiteCoin<span>23,45623</span></div>
      <div class="currency-reserves__tarif">Ltc</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/advanced-cash.svg">
      <div class="currency-reserves__info">Advanced Cash<span>45 345 234</span></div>
      <div class="currency-reserves__tarif">Rub</div>
    </div>
    <div class="currency-reserves__item"><img class="currency-reserves__ico" src="/img/svg/advanced-cash.svg">
      <div class="currency-reserves__info">Advanced Cash<span>23 345</span></div>
      <div class="currency-reserves__tarif">Usd</div>
    </div>
  </div>
</div>-->