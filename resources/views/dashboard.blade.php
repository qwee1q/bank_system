<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>onebank — Дашборд</title>
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
      <a class="nav-btn" href="{{route('logout')}}">Вийти</a>
      <div class="lang-switch" aria-hidden="false">
        <span class="flag">🇺🇦</span>
        <span class="active-lang">Укр</span>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="dashboard-content">
      <aside class="sidebar">
        <div class="profile-block">
          <div class="avatar">IK</div>
          <div>
            <div class="profile-name">{{$user->name}}</div>
            <div class="user-status">Активний користувач</div>
          </div>
        </div>
        <nav class="sidebar-nav">
          <a class="active" href="{{route('trans_dashboard')}}">Огляд</a>
          <a href="{{route('transaction')}}">Платежі</a>
          <a href="{{route('cards')}}">Картки</a>
        </nav>
      </aside>
      <section class="dashboard-section">
        <div class="latest-transactions">
          <h3>Останні транзакції</h3>
            @if ($user->transactions->IsNotEmpty())
                <ul class="transactions-list">
                    <li class="transaction">
                        <div>
                            <div class="txn-title">Кав'ярня Aroma</div>
                            <div class="txn-date">Сьогодні, 09:14</div>
                        </div>
                        <div class="txn-amount">-₴ 78.00</div>
                    </li>
                    <li class="transaction">
                        <div>
                            <div class="txn-title">Супермаркет Novus</div>
                            <div class="txn-date">Вчора, 19:02</div>
                        </div>
                        <div class="txn-amount">-₴ 420.50</div>
                    </li>
                </ul>
            @else
                <div>
                    <div class="txn-title">Not Found Transactions</div>
                </div>
            @endif
        </div>
      </section>
    </div>
  </main>
</body>
</html>
