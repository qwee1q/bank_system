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
            <div class="profile-name">{{$user->name}}</div>
            <div class="user-status">Активний користувач</div>
          </div>
        </div>
        <nav class="sidebar-nav">
          <a href="{{route('trans_dashboard')}}">Огляд</a>
          <a href="#">Платежі</a>
          <a class="active" href="{{route('cards')}}">Картки</a>
        </nav>
      </aside>
      <section class="dashboard-section">
        <h2>Мої картки <button id="openAddCard" class="plus">+</button></h2>
        @if ($user->cards->IsNotEmpty())
              <div class="cards-list">
            @foreach(auth()->user()->cards as $card)
                      <div class="bank-card"><div class="chip"></div>
                          <div class="card-type">Дебетова картка</div>
                          <div class="card-number">{{$card->number}}</div>
                          <div class="card-balance-label">Баланс</div>
                          <div class="card-balance">{{$card->balance}} {{$card->currency}}</div>
                          <div class="card-actions">
                              <a class="card-btn" href="{{route('card_detail',$card->id)}}">Деталі</a>
                              <button class="card-btn">Заблокувати</button>
                          </div>
                          <img class="card-logo" src="{{ $card->type == "MasterCard" ? "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" : "https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" }}" alt="{{$card->type == "MasterCard" ? "Mastercard logo" : "Visa logo"}}" />
                      </div>

            @endforeach
              </div>
          @else
              <div>Not Found Card</div>
              
          @endif

      </section>
    </div>
  </main>

<div id="addCardModal" class="modal-overlay" style="display:none;" >
  <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="addCardTitle" onclick="event.stopPropagation();">
    <div class="modal-header">
      <div id="addCardTitle" class="modal-title">Додати картку</div>
    </div>
    <form id="registerForm" autocomplete="off" method="POST" action="{{route('cards.store')}}">
        @csrf
      <div class="field">
        <label for="modal_currency">Валюта</label>
        <input id="currency" name="currency" type="text" placeholder="UAH або USD" required>
      </div>
      <div class="field">
        <label for="modal_type">Тип карти</label>
        <input id="type" name="type" type="text" placeholder="Visa або Mastercard" required>
      </div>
      <button class="submit-btn" type="submit">Зареєструвати</button>
    </form>
  </div>
</div>
</body>
<script>
(function () {
  const openBtn = document.getElementById('openAddCard') || document.querySelector('.plus');
  const modal = document.getElementById('addCardModal');
  const closeBtn = document.getElementById('closeAddCard');

  if (!openBtn || !modal) return;

  function openModal() {
    modal.style.display = 'flex';            
    modal.classList.add('open');             
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden'; 
    const first = modal.querySelector('input, select, textarea');
    if (first) first.focus();
  }

  function closeModal() {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    modal.style.display = 'none';
    document.body.style.overflow = '';
    
    if (openBtn) openBtn.focus();
  }

  openBtn.addEventListener('click', (e) => {
    e.preventDefault();
    openModal();
  });

  if (closeBtn) closeBtn.addEventListener('click', (e) => {
    e.preventDefault();
    closeModal();
  });


  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });


  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.style.display !== 'none') closeModal();
  });
})();
</script>
</html>
