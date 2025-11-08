<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>onebank — Дашборд</title>
  <link rel="stylesheet" href="wel_dach.css"/>
  <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
</head>
<body>
  <header class="header">
    <div class="header-left">
      <div class="mono-logo">
        onebank<br>
        <small>Universal Bank</small>
      </div>
    </div>
    <div class="header-right">
        <a class="nav-btn" href="{{route(name:'loguot')}}" style="text-decoration:none;">Вийти</a>
      <div class="lang-switch" aria-hidden="false">
        <span class="flag">🇺🇦</span>
        <span class="active-lang">Укр</span>
      </div>
    </div>
  </header>

  <main style="padding:36px 6%;">
    <div style="max-width:1200px; margin:0 auto; display:flex; gap:24px; align-items:flex-start;">
      <aside style="width:260px; background:#0b0b0f; border-radius:12px; padding:18px; color:#fff;">
        <div style="display:flex; gap:12px; align-items:center; margin-bottom:12px;">
          <div style="width:44px;height:44px;border-radius:8px;background:#000;display:flex;align-items:center;justify-content:center;font-weight:800;">IK</div>
          <div>
            <div style="font-weight:800">Іван К.</div>
            <div style="color:#bdbdc6;font-size:13px">Активний користувач</div>
          </div>
        </div>

        <nav style="display:flex;flex-direction:column;gap:10px;margin-top:12px;">
          <a style="color:#fff;text-decoration:none;padding:8px;border-radius:8px;background:rgba(255,255,255,0.02);font-weight:700;">Огляд</a>
          <a style="color:#bdbdc6;text-decoration:none;padding:8px;border-radius:8px;">Платежі</a>
          <a style="color:#bdbdc6;text-decoration:none;padding:8px;border-radius:8px;">Картки</a>
          <a style="color:#bdbdc6;text-decoration:none;padding:8px;border-radius:8px;">Накопичення</a>
          <a style="color:#bdbdc6;text-decoration:none;padding:8px;border-radius:8px;">Налаштування</a>
        </nav>

        <div style="margin-top:18px;color:#bdbdc6;font-size:13px;">Баланс: <strong>₴ 12 345.67</strong></div>
      </aside>

      <section style="flex:1;">
        <h2 style="margin:0 0 16px 0;">Огляд рахунків</h2>

        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:18px;">
          <div style="background:#000;padding:18px;border-radius:12px;color:#fff;min-width:200px;">
            <div style="font-size:13px;color:#bdbdc6">Баланс</div>
            <div id="dash-balance" style="font-weight:800;font-size:20px">₴ 12 345.67</div>
          </div>
          <div style="background:#000;padding:18px;border-radius:12px;color:#fff;min-width:200px;">
            <div style="font-size:13px;color:#bdbdc6">Картки</div>
            <div id="dash-cards" style="font-weight:800;font-size:20px">2 активні</div>
          </div>
          <div style="background:#000;padding:18px;border-radius:12px;color:#fff;min-width:200px;">
            <div style="font-size:13px;color:#bdbdc6">Накопичення</div>
            <div id="dash-savings" style="font-weight:800;font-size:20px">₴ 4 200.00</div>
          </div>
        </div>

        <div style="background:#0b0b0f;padding:14px;border-radius:12px;color:#fff;">
          <h3 style="margin:0 0 10px 0;color:#bdbdc6">Останні транзакції</h3>
          <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:10px;">
            <li style="display:flex;justify-content:space-between;align-items:center;">
              <div>
                <div style="font-weight:700">Кав'ярня Aroma</div>
                <div style="font-size:12px;color:#bdbdc6">Сьогодні, 09:14</div>
              </div>
              <div style="font-weight:800">-₴ 78.00</div>
            </li>
            <li style="display:flex;justify-content:space-between;align-items:center;">
              <div>
                <div style="font-weight:700">Супермаркет Novus</div>
                <div style="font-size:12px;color:#bdbdc6">Вчора, 19:02</div>
              </div>
              <div style="font-weight:800">-₴ 420.50</div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </main>



</body>
</html>