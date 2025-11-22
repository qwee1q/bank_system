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
            @if ($user->cards->IsNotEmpty())
                <div class="cards-list">
                    @foreach(auth()->user()->cards as $card)
                        @if($card->id == $id)
                            <div class="bank-card"><div class="chip"></div>
                                <div class="card-type">Дебетова картка</div>
                                <div class="card-number">{{$card->number}}</div>
                                <div class="card-balance-label">Баланс</div>
                                <div class="card-balance">{{$card->balance}} {{$card->currency}}</div>
                                <div class="card-actions">
                                    <button class="card-btn">Заблокувати</button>
                                </div>
                                <div class="card-balance-label">Create Date</div>
                                <div class="card-balance">{{$card->created_at}}</div>
                                <img class="card-logo" src="{{ $card->type == "MasterCard" ? "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" : "https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" }}" alt="{{$card->type == "MasterCard" ? "Mastercard logo" : "Visa logo"}}" />
                            </div>
                        @endif
                    @endforeach

                </div>
            @endif
        </section>
        <section class="dashboard-section">
            <div class="latest-transactions">
                <h3>Останні транзакції</h3>
                <ul class="transactions-list">
                @if ($user->transactions->IsNotEmpty())
                        @foreach(auth()->user()->transactions as $trans)
                            @if($trans->card_id == $id)
                                <li class="transaction">
                                    <div>
                                        <a href="{{route('transaction_detail',$trans->id)}}"><div class="txn-title">{{$trans->description}}</div></a>
                                        <div class="txn-date">{{$trans->transaction_date}}</div>
                                    </div>
                                    <div class="txn-amount">{{$trans->amount}}</div>
                                </li>
                            @endif
                        @endforeach
                @else
                    <div>
                        <div class="txn-title">Not Found Transactions</div>
                    </div>
                @endif
                </ul>
            </div>
        </section>
    </div>
</main>
</body>
</html>
