<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>onebank — Дашборд</title>
  <link rel="stylesheet" href="{{ asset('css/wel_dach.css') }}"/>
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
            <div class="profile-name">Іван К.</div>
            <div class="user-status">Активний користувач</div>
          </div>
        </div>
        <nav class="sidebar-nav">
          <a href="dashboard.html">Огляд</a>
          <a href="#">Платежі</a>
          <a class="active" href="cards.html">Картки</a>
        </nav>
      </aside>
      <section class="dashboard-section">
        <h2>Мої картки</h2>
        @if ($user->cards->IsNotEmpty())
            @foreach(auth()->user()->cards as $card)
                  <div class="cards-list">
                      <div class="bank-card">
                          <div class="chip"></div>
                          <div class="card-type">Дебетова картка</div>
                          <div class="card-number">{{$card->number}}</div>
                          <div class="card-balance-label">Баланс</div>
                          <div class="card-balance">{{$card->balance}} {{$card->currency}}</div>
                          <div class="card-actions">
                              <button class="card-btn">Деталі</button>
                              <button class="card-btn">Заблокувати</button>
                          </div>
                          <img class="card-logo" src="{{ $card->type == "MasterCard" ? "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" : "https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" }}" alt="{{$card->type == "MasterCard" ? "Mastercard logo" : "Visa logo"}}" />
                      </div>
                  </div>
            @endforeach

          @else
            <div>Not Found Card</div>
          @endif

      </section>
    </div>
  </main>
</body>
</html>
