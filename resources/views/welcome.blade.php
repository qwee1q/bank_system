<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>onebank</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/wel_dach.css') }}">
</head>
<body>
  <header class="header" data-menu="menu-bag">
    <div class="header-left">
      <div class="mono-logo">
        onebank<br>
        <small>Universal Bank</small>
      </div>
      <nav class="nav" aria-label="Головна навігація">
        <button class="nav-btn" data-menu="menu-personal">Приватним особам</button>
        <button class="nav-link" data-menu="menu-business">Бізнесу</button>
        <button class="nav-link" data-menu="menu-about">Про нас</button>
      </nav>
    </div>
    <div class="header-right">
        @guest
            <a class="nav-btn" href="{{route('login')}}" style="text-decoration:none;">Увійти</a>
            <a class="nav-btn" href="{{route('registration')}}" style="text-decoration:none;">Зареєструватись</a>
        @endguest
        @auth
                <a class="nav-btn" href="{{route('trans_dashboard')}}" style="text-decoration:none;">Dashboard</a>
        @endauth

      <div class="lang-switch" aria-hidden="false">
        <span class="flag">🇺🇦</span>
        <span class="active-lang">Укр</span>
        <span style="color:#fff7;">|</span>
        <a href="#" style="opacity:0.74;">Eng</a>
      </div>
    </div>
  </header>

  <div class="megamenu" id="menu-personal" aria-hidden="true">
    <div class="megamenu-content">
      <div class="megamenu-col">
        <h3>Картки</h3>
        <ul>
          <li>Чорна картка</li>
          <li>Біла картка</li>
          <li>platinum картки</li>
          <li>IRON картка</li>
          <li>Дитяча картка</li>
          <li>Валютні картки</li>
          <li>Дія.Картка</li>
          <li>Національний кешбек</li>
        </ul>
      </div>
      <div class="megamenu-col">
        <h3>Кредитування</h3>
        <ul>
          <li>Розстрочка</li>
          <li>Покупка Частинами</li>
          <li>Кредит «До завтра»</li>
        </ul>
        <h3 class="section-title">Додаткові продукти</h3>
        <ul>
          <li>eSIM</li>
          <li>Автострахування</li>
          <li>Туристичне страхування</li>
        </ul>
      </div>
      <div class="megamenu-col">
        <h3>Накопичення</h3>
        <ul>
          <li>Депозит</li>
          <li>Облігації</li>
        </ul>
        <h3 class="section-title">Платежі і перекази</h3>
        <ul>
          <li>Міжнародні перекази</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="megamenu" id="menu-business" aria-hidden="true">
    <div class="megamenu-content">
      <div class="megamenu-col">
        <h3>Бізнес-продукти</h3>
        <ul>
          <li>Картка для ФОП</li>
          <li>Тарифи для бізнесу</li>
          <li>POS-термінали</li>
          <li>Кредити для бізнесу</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="megamenu" id="menu-about" aria-hidden="true">
    <div class="megamenu-content">
      <div class="megamenu-col">
        <h3>Про банк</h3>
        <ul>
          <li>Історія компанії</li>
          <li>Новини</li>
          <li>Контакти</li>
          <li>Вакансії</li>
        </ul>
      </div>
      <div class="megamenu-col">
        <h3>Партнери</h3>
        <ul>
          <li>Стати партнером</li>
        </ul>
      </div>
    </div>
  </div>

   <div class="welc">
    <h1>onebank</h1>
    <p>Банк без зайвого. Просто One.</p>
  </div>

  <section class="live-stats" aria-label="Жива статистика">
    <h2 class="section-title-center">Жива статистика</h2>
    <div class="stats-row">
      <div class="stat-card">
        <div class="stat-icon">👥</div>
        <div class="stat-main">
          <div class="stat-value" data-target="10092129">10 млн</div>
          <div class="stat-label">клієнтів</div>
        </div>
        <div class="stat-small" data-counter-start="10000000" data-counter-target="10092129" data-duration="120000"></div>
      </div>

      <div class="stat-card">
        <div class="stat-icon">🛒</div>
        <div class="stat-main">
          <div class="stat-value" data-target="11446671032">11 млрд</div>
          <div class="stat-label">покупок</div>
        </div>
        <div class="stat-small" data-counter-start="11400000000" data-counter-target="11446671032" data-duration="120000"></div>
      </div>

      <div class="stat-card">
        <div class="stat-icon">💳</div>
        <div class="stat-main">
          <div class="stat-value" data-target="905997088939">9 трлн</div>
          <div class="stat-label">витрачено</div>
        </div>
        <div class="stat-small" data-counter-start="905900000000" data-counter-target="905997088939" data-duration="120000"></div>
      </div>

      <div class="stat-card">
        <div class="stat-icon">🎁</div>
        <div class="stat-main">
          <div class="stat-value" data-target="9185943870">9,1 млрд</div>
          <div class="stat-label">кешбеку</div>
        </div>
        <div class="stat-small" data-counter-start="9180000000" data-counter-target="9185943870" data-duration="120000"></div>
      </div>
    </div>

    <div style="text-align:center; margin-top:22px;">
      <button class="nav-btn" id="detailsBtn">Детальніше</button>
    </div>

  </section>

  <div class="container"></div>

  <script>
    (function(){
      const navBtns = document.querySelectorAll('[data-menu]');
      const menus = Array.from(document.querySelectorAll('.megamenu'));
      const header = document.querySelector('.header');
      const nav = document.querySelector('.nav');
      let menuTimeout;

      function anyMenuActive() {
        return menus.some(m => m.classList.contains('active'));
      }

      function openMenu(id) {
        menus.forEach(menu => {
          if (menu.id === id) {
            menu.classList.add('active');
            menu.setAttribute('aria-hidden', 'false');
          } else {
            menu.classList.remove('active');
            menu.setAttribute('aria-hidden', 'true');
          }
        });
        if (anyMenuActive()) header.classList.add('white-bg');
      }

      function closeAllMenus() {
        menus.forEach(menu => {
          menu.classList.remove('active');
          menu.setAttribute('aria-hidden', 'true');
        });
      }

      navBtns.forEach(btn => {
        const menuId = btn.getAttribute('data-menu');

        btn.addEventListener('mouseenter', () => {
          clearTimeout(menuTimeout);
          openMenu(menuId);
        });

        btn.addEventListener('focus', () => {
          clearTimeout(menuTimeout);
          openMenu(menuId);
        });

        btn.addEventListener('mouseleave', () => {
          menuTimeout = setTimeout(() => {
            const stillOverButton = [...navBtns].some(b => b.matches(':hover') || b === document.activeElement);
            if (!stillOverButton) {
              closeAllMenus();
              if (!nav.matches(':hover') && !nav.contains(document.activeElement)) {
                header.classList.remove('white-bg');
              }
            }
          }, 80);
        });

        btn.addEventListener('blur', () => {
          setTimeout(() => {
            if (!nav.contains(document.activeElement)) {
              closeAllMenus();
              header.classList.remove('white-bg');
            }
          }, 0);
        });
      });

      nav.addEventListener('mouseenter', () => header.classList.add('white-bg'));
      nav.addEventListener('mouseleave', () => {
        if (!anyMenuActive()) header.classList.remove('white-bg');
      });

      nav.addEventListener('focusin', () => header.classList.add('white-bg'));
      nav.addEventListener('focusout', () => {
        setTimeout(() => {
          if (!nav.contains(document.activeElement) && !anyMenuActive()) {
            header.classList.remove('white-bg');
          }
        }, 0);
      });

      menus.forEach(menu => {
        menu.addEventListener('mouseenter', () => {
          if (menu.classList.contains('active')) header.classList.add('white-bg');
        });

        menu.addEventListener('mouseleave', () => {
          menuTimeout = setTimeout(() => {
            menu.classList.remove('active');
            menu.setAttribute('aria-hidden', 'true');
            if (!nav.matches(':hover') && !nav.contains(document.activeElement) && !anyMenuActive()) {
              header.classList.remove('white-bg');
            }
          }, 80);
        });
      });

      document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav') && !e.target.closest('.megamenu')) {
          closeAllMenus();
          if (!nav.matches(':hover') && !nav.contains(document.activeElement)) {
            header.classList.remove('white-bg');
          }
        }
      });

      document.addEventListener('DOMContentLoaded', () => {
        header.classList.remove('white-bg');
        closeAllMenus();


        const formatNumber = (n) => n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");

        function animateCounter(el, start, end, duration) {
          const startTime = performance.now();
          const ticking = (now) => {
            const elapsed = Math.min(now - startTime, duration);
            const progress = duration === 0 ? 1 : (elapsed / duration);
            const eased = 1 - (1 - progress) * (1 - progress);
            const current = Math.floor(start + (end - start) * eased);
            el.textContent = formatNumber(current);
            if (elapsed < duration) {
              requestAnimationFrame(ticking);
            } else {
              el.textContent = formatNumber(end);
            }
          };
          requestAnimationFrame(ticking);
        }

        document.querySelectorAll('.stat-small').forEach(wrapper => {
          const start = parseInt(wrapper.getAttribute('data-counter-start') || '0', 10);
          const target = parseInt(wrapper.getAttribute('data-counter-target') || '0', 10);
          const duration = parseInt(wrapper.getAttribute('data-duration') || '120000', 10); // ms

          const smallEl = wrapper;
          smallEl.style.color = '#d9d9e6';
          smallEl.style.fontFamily = 'Segoe UI, Arial, sans-serif';
          smallEl.style.fontWeight = '700';
          smallEl.style.fontSize = '14px';
          smallEl.textContent = formatNumber(start);

          animateCounter(smallEl, start, target, duration);
        });
      });
    })();
  </script>
</body>
</html>
