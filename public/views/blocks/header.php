<header class="header">
  <div class="header__wrapper">
    <div class="header__logo"></div>
    <nav class="header__nav">
        <?php if (!isset($_COOKIE['login'])): ?>
          <a href="user/reg" class="header__btn">Зарегистрироваться</a>
          <a href="user/auth" class="header__btn">Войти</a>
        <?php else: ?>
          <a href="user/dashboard" class="header__btn">Кабинет кользователя</a>
        <?php endif; ?>
    </nav>
  </div>
</header>