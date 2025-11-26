
<h2>Зробити переказ</h2>

@if(session('error'))
    <div style="color:red">{{ session('error') }}</div>
@endif

@if(session('success'))
    <div style="color:green">{{ session('success') }}</div>
@endif

<form method="post" action="{{ route('transactions.store') }}">
    @csrf

    <div>
        <label>З якої карти:</label>
        <select name="from_card_id" required>
            @foreach($cards as $card)
                <option value="{{ $card->id }}">
                    {{ $card->number }} ({{ $card->balance }} {{ $card->currency }}) - {{ $card->type }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Карта отримувача:</label>
        <input type="text" name="to_card_number" placeholder="Номер карти" required>
    </div>

    <div>
        <label>Сума:</label>
        <input type="number" name="amount" placeholder="Сума" required min="1">
    </div>

    <button type="submit">Переказати</button>
</form>


<h1>Мої транзакції</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Відправник</th>
            <th>Отримувач</th>
            <th>Сума</th>
            <th>Дата</th>
            <th>Деталі</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $tx)
        <tr>
            <td>{{ $tx->id }}</td>
            <td>{{ $tx->fromCard->number }}</td>
            <td>{{ $tx->toCard->number }}</td>
            <td>{{ $tx->amount }}</td>
            <td>{{ $tx->created_at }}</td>
            <td><a href="{{ route('transactions.show', $tx->id) }}">Деталі</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
