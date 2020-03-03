<header class="header">
  <div class="header__wrapper navbar">
    <div class="header__logo navbar-brand">
      <h1 class="h3">Micro</h1>
    </div>
    <nav class="header__nav navbar-nav d-flex flex-row">
      <a href="/">Главная</a><a href="/about">Про нас</a><a href="contacts">Контакты</a>
        <?php if (!isset($_COOKIE['login'])): ?>
          <a href="user/auth" class="header__btn">Войти</a>
        <?php else: ?>
          <a href="user/dashboard" class="header__btn">Кабинет кользователя</a>
        <?php endif; ?>
    </nav>
  </div>
</header>