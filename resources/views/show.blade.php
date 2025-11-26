

<h1>Деталі транзакції #{{ $transaction->id }}</h1>

<ul>
    <li>Відправник: {{ $fromCard->number }}</li>
    <li>Отримувач: {{ $toCard->number }}</li>
    <li>Сума: {{ $transaction->amount }}</li>
    <li>Дата: {{ $transaction->created_at }}</li>
    <li>Оновлено: {{ $transaction->updated_at }}</li>
</ul>

<a href="{{ route('transactions.index') }}">Назад до списку транзакцій</a>
